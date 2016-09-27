<?php

class SolicitudesController extends BaseController
{

  function editarPago(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    /*fecha 'YYYY-MM-DD HH:MM:SS'*/
    $format = "d-m-Y H:i:s";
    $timestamp = time();
    $fecha =  date($format, $timestamp);

    $data = Input::all();

    $editar = Solicitudes::where('solId', $data['id'])
      ->update(array(
        'solPagado' => true
      ));
    $contrato = Contratos::insert(array(
      'ctoFecha' => $fecha,
      'ctoSolicitud' => $data['id']
    ));

    if ( ($contrato) && ($editar) ){
      $response = array(
        'status' => 'OK',
        'message' => 'Registro de pago correcto'
        );

        $usuarioSolVH = Solicitudes::where('solId', $data['id'])
            ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
            ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
            ->groupby('solId')
              ->get(array(
                'serNombre',
                'perNombre',
                'perCorreo'
                  ))
              ->toArray();

            $resUs = $usuarioSolVH[0];
            $dataCorreo = array(
               'nombre'        => $resUs['perNombre'],
               'correo'        => $resUs['perCorreo'],
               'servicio'      => $resUs['serNombre'],
               'fecha'         => $fecha
             );

             $toEmail = $dataCorreo['correo'];//envia al correo del cliente
               Mail::send('emails.activarServicio', $dataCorreo, function($message) use($toEmail){
                   $message->to($toEmail);
                   $message->subject('Activación de servicio');
                 });
    }

    else
      $response = array (
        'status' => 'ERROR',
        'message' => 'No se puede actualizar el registro, intente otra vez'
        );
    return Response::json( $response );
  }

  function agregarSolicitud(){
    if( !Sesion::isUser() )
      return Redirect::to('usuario/logout');

      /*fecha 'YYYY-MM-DD HH:MM:SS'*/
      $format = "d-m-Y H:i:s";
      $timestamp = time();
      $fecha =  date($format, $timestamp);

      $data = array(
        'numeroConsultas' => Input::get('nConsultas'),
        'tipoConsulta' => Input::get('tipoConsulta'),
        'regPersona'   => Input::get('regU'),
        'idServicio'   => Input::get('idServicio'),
        'idPrecio'     => Input::get('idPrecio'),
        'fecha'        => $fecha
      );

      $validaciones = array('numeroConsultas' => array('required','numeric'),
                            'tipoConsulta' => array('required','boolean'),
                            'regPersona'  => array('required'),
                            'idServicio' => array('required','numeric'),
                            'idPrecio' => array('required','numeric')
                             );

      $validator = Validator::make($data , $validaciones);

      if ($validator->fails()){
        $respuesta;
        $mensajes = $validator->messages();
        foreach ($mensajes->all() as $mensaje){
            $respuesta = $mensaje;
        }
          $response = array(
            'status' => 'ERROR',
            'message' => $respuesta
          );
      }

      else{
        $getPersona = Personas::where('perNumeroPreregistro', $data['regPersona'])
        ->where('perActivo', true)
        ->where('perBaja', true)
        ->get(array(
          'perId'
            ))
        ->toArray();

        $persona = $getPersona[0];
        $idPersona = $persona['perId'];

        $formatoT = "d-m-Y-H:i:s-";
        $fechaT =  date($formatoT, $timestamp);
        $sufijo = "-contrato";
        $aceptacion = $fechaT.$data['regPersona'].$sufijo;

         $insert = Solicitudes::insert(array(
            'solNConsultas' => trim($data['numeroConsultas']),
            'solPagado'  => false,
            'solFecha'   => $data['fecha'],
            'solTipoConsulta'=> $data['tipoConsulta'],
            'solPersona' => $idPersona,
            'solCondiciones'=> $aceptacion,
            'solServicio'=> trim($data['idServicio']),
            'solPreciosT'  => trim($data['idPrecio'])
          ));

          if ( $insert )
            $response = array(
              'status' => 'OK',
              'message' => 'Solicitud registrada, debe realizar el pago y notificarnos del mismo, para acceder a los servicios.'
            );
          else
            $response = array(
              'status' => 'ERROR',
              'message' => 'No se pudo agregar la solicitud, intente de nuevo'
            );
      }
      return Response::json( $response );
  }

  public function getSolicitudes(){  /******/
    if (!Sesion::isAsesor()) {
      if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');
    }

      $getSolicitudes = SolicitudesController::getSolicitudesR();

    if ( count( $getSolicitudes ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getSolicitudes,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se encontraron resultados'
      );
    return Response::json( $response );
  }

  public static function getSolicitudesR(){
    $getSolicitudes = Solicitudes::orderBy('solFecha','desc')
    ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
    ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->get(array(
      'solId',
      'solNConsultas',
      'solPagado',
      'solFecha',
      'solPersona',
      'solTipoConsulta',
      'serNombre',
      'perNombre',
      'perCliente',
      'perNumeroPreregistro'
        ))
      ->toArray();
      return $getSolicitudes;
  }

  public function getSolPerPagoLin(){  /*VEr solicitudes EN LINEA*/
    $regU = Input::get('regU');

    $getSolicitudes = Solicitudes::
    leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
    ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->leftJoin('contratos', 'solicitudes.solId', '=', 'contratos.ctoSolicitud')
    ->where('perNumeroPreregistro', $regU)
    ->where('perCliente',true)
    ->where('solPagado',true)
    ->where('solTipoConsulta',true) //Linea
    ->orderBy('ctoId','desc')
    ->get(array(
      'solId',
      'solNConsultas',
      'solPagado',
      'solFecha',
      'solPersona',

      'serNombre',

      'perNombre',
      'perCliente',
      'perNumeroPreregistro',

      'ctoId'
        ))
      ->toArray();

    if ( count( $getSolicitudes ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getSolicitudes,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'Después de realizar el contrato debe realizar el pago correspondiente y notificarnos del mismo, para así poder acceder a las consultas.'
      );
    return Response::json( $response );
  }

  public function getSolPerPagoTel(){  /*VEr solicitudes Telefonicas us*/
    $regU = Input::get('regU');

    $getSolicitudes = Solicitudes::
    leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
    ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->leftJoin('contratos', 'solicitudes.solId', '=', 'contratos.ctoSolicitud')
    ->leftJoin('preciosTipo', 'solicitudes.solPreciosT', '=', 'preciosTipo.pretId')
    ->where('perNumeroPreregistro', $regU)
    ->where('perCliente',true)
    ->where('solPagado',true)
    ->where('solTipoConsulta',false) //telefono
    ->orderBy('ctoId','desc')
    ->get(array(
      'solId',
      'solNConsultas',
      'solPagado',
      'solFecha',
      'solPersona',
      'solTipoConsulta',

      'pretNombre',

      'serNombre',

      'perNombre',
      'perCliente',
      'perNumeroPreregistro',

      'ctoId',
      'ctoFecha'
        ))
      ->toArray();

    if ( count( $getSolicitudes ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getSolicitudes,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'Después de realizar el contrato debe realizar el pago correspondiente y notificarnos del mismo, para así poder acceder a las consultas.'
      );
    return Response::json( $response );
  }

  public function getClientesTel(){ //Clientes consultas telefonicas ADM
    $getSolicitudes = Solicitudes::
    leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->leftJoin('contratos', 'solicitudes.solId', '=', 'contratos.ctoSolicitud')
    ->leftJoin('preciosTipo', 'solicitudes.solPreciosT', '=', 'preciosTipo.pretId')
    ->where('perCliente',true)
    ->where('solPagado',true)
    ->where('solTipoConsulta',false) //telefono
    ->groupBy('perNombre')
    ->orderBy('solFecha','desc')
    ->get(array(

      'pretNombre',
      'perTipoPersona',

      'perNombre',
      'perNumeroPreregistro',

      'ctoId',
        ))
      ->toArray();

    if ( count( $getSolicitudes ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getSolicitudes,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'Ningún cliente a contratado paquetes teléfonicos, o no se han activado.'
      );
    return Response::json( $response );
  }

  public function getClienteTel(){  //consulta telefonica buscar un ciente ADM
    $data = array(
      'buscarCliente' => Input::get('buscar')
    );

    $validaciones = array('buscarCliente' => array('required','alpha_num')
                           );
    $validator = Validator::make($data , $validaciones);

    if ($validator->fails()){
      $respuesta;
      $mensajes = $validator->messages();
      foreach ($mensajes->all() as $mensaje){
          $respuesta = $mensaje;
      }
        $response = array(
          'status' => 'ERROR',
          'message' => $respuesta
        );
    }

    else{
      $getSolicitudes = Solicitudes::
        leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
        ->leftJoin('contratos', 'solicitudes.solId', '=', 'contratos.ctoSolicitud')
        ->leftJoin('preciosTipo', 'solicitudes.solPreciosT', '=', 'preciosTipo.pretId')
        ->where('perCliente',true)
        ->where('solPagado',true)
        ->where('solTipoConsulta',false) //telefono
        ->where('perNombre', 'like', '%'. $data['buscarCliente'] .'%')
        ->groupBy('perNombre')
        ->orderBy('solFecha','desc')
        ->get(array(

          'pretNombre',
          'perTipoPersona',

          'perNombre',
          'perNumeroPreregistro',

          'ctoId',
            ))
          ->toArray();

        if ( count( $getSolicitudes ) > 0 )
          $response = array(
            'status' => 'OK',
            'data' => $getSolicitudes,
            'message' => 'Resultados obtenidos'
          );
        else
          $response = array(
            'status' => 'ERROR',
            'message' => 'No se encontro algún cliente con esa cadena de caracteres.'
          );
    }
    return Response::json( $response );
  }

  public function getSolicitudesPagados(){  /**************************/
    if ( !Sesion::isAsesor() ) {
      if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');
    }


    $getSolicitudes = SolicitudesController::getSolicitudesPagadosR();

    if ( count( $getSolicitudes ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getSolicitudes,
        /*'precio' => $precio,        //retorne precio*/
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se encontraron resultados'
      );
    return Response::json( $response );
  }

  public static function getSolicitudesPagadosR(){
    $getSolicitudes = Solicitudes::orderBy('solFecha','desc')
    ->where('solPagado',true)
    ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
    ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->get(array(
      'solId',
      'solNConsultas',
      'solPagado',
      'solFecha',
      'solPersona',
      'solTipoConsulta',
      'serNombre',
      'perNombre',
      'perCliente',
      'perNumeroPreregistro'
        ))
      ->toArray();
    return $getSolicitudes;
  }

  public function getSolicitudesSinPagar(){  /*************/
    if ( !Sesion::isAsesor() ) {
      if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');
    }

      $getSolicitudes = SolicitudesController::getSolicitudesSinPagarR();

    if ( count( $getSolicitudes ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getSolicitudes,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'No existen servicios sin pagar.'
      );
    return Response::json( $response );
  }

  public static function getSolicitudesSinPagarR(){
    $getSolicitudes = Solicitudes::orderBy('solFecha','desc')
    ->where('solPagado',false)
    ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
    ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->get(array(
      'solId',
      'solNConsultas',
      'solPagado',
      'solFecha',
      'solPersona',
      'solTipoConsulta',
      'serNombre',
      'perNombre',
      'perCliente',
      'perNumeroPreregistro'
        ))
      ->toArray();
      return $getSolicitudes;
  }

  public function getSolicitudesPersona(){  /****REALIZAR CONSULTA*****/
    $data = Input::all();
    $getSolicitudes = SolicitudesController::getSolicitudesPersonaR($data['regU']);

    if ( count( $getSolicitudes ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getSolicitudes,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'El Cliente no ha solicitado ningún servicio'
      );

    return Response::json( $response );
  }

  public static function getSolicitudesPersonaR($regU){
    $getSolicitudes = Solicitudes::orderBy('ctoId','desc')
    ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
    ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->leftJoin('contratos', 'solicitudes.solId', '=', 'contratos.ctoSolicitud')
    ->where('perNumeroPreregistro', $regU)
    ->get(array(
      'solId',
      'solNConsultas',
      'solPagado',
      'solFecha',
      'solPersona',
      'solTipoConsulta',
      'solCondiciones',
      'solPreciosT',
      'serNombre',
      'perNombre',
      'perNumeroPreregistro',
      'ctoSolFactura',
      'ctoFecha'
        ))
      ->toArray();
      return $getSolicitudes;
  }

  public function getSolicitudesPersonaDes(){/***********/
    if ( !Sesion::isAdmin() ) {
        return Redirect::to('admin/logout');
    }

    $getSolicitudes = Solicitudes::orderBy('solFecha','desc')
    ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
    ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->leftJoin('contratos', 'solicitudes.solId', '=', 'contratos.ctoSolicitud')
    ->where('solPagado', false)
    ->get(array(
      'solId',
      'solNConsultas',
      'solPagado',
      'solFecha',
      'solPersona',
      'solTipoConsulta',
      'solPreciosT',
      'serNombre',
      'perNombre',
      'perNumeroPreregistro',
      'ctoSolFactura'
        ))
      ->toArray();

    if ( count( $getSolicitudes ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getSolicitudes,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'Ningún cliente ha solicitado servicios'
      );

    return Response::json( $response );
  }
}
