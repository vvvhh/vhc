<?php

class ConsultaClienteController extends BaseController {

  public function ingresarConsulta(){
    if( !Sesion::isUser() )
      return Redirect::to('usuario/logout');

    $format = "d-m-Y H:i:s";
    $timestamp = time();
    $fecha =  date($format, $timestamp);

    $data = array(
      'idContrato' => Input::get('idCto'),
      'titulo'     => Input::get('titulo'),
      'contenidoConsulta' => Input::get('consulta'),
      'servicio'    => Input::get('servicio'),
      'fechaCosulta'=> $fecha,

      'nombre'  => Input::get('nombre'),
      'numeroR' => Input::get('numeroR')
    );

    $validaciones = array('idContrato' => array('required'),
                          'titulo'   => array('required', 'max:50','regex:/^([0-9a-zA-Z\s\.\n\-\¿\?,:áéíóúÁÉÍÓÚñÑ])+$/' ),
                          'contenidoConsulta' => array('required','regex:/^([0-9a-zA-Z\s\.\n\-\¿\?\(\),:áéíóúÁÉÍÓÚñÑ])+$/')
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
      $getClientes = Personas::where('perNumeroPreregistro', $data['numeroR'])
      ->where('perCliente', true)
      ->where('perActivo', true)
      ->get(array(
        'perNombre',
          'perTelefono',
          'perCorreo',
          'perNumeroPreregistro'
          ))
        ->toArray();
      $datosCliente = $getClientes[0];
      $perNombre = $datosCliente['perNombre'];
      $perTelefono = $datosCliente['perTelefono'];
      $perCorreo = $datosCliente['perCorreo'];
      $perNumero = $datosCliente['perNumeroPreregistro'];

      $dataCorreo = array(
          'nombre'  => $perNombre,
          'numeroR' => $perNumero,
          'telefono'=> $perTelefono,
          'correo'  => $perCorreo,
          'idContrato' =>$data['idContrato'],
          'titulo'  => $data['titulo'],
          'consulta'=> $data['contenidoConsulta'],
          'servicio'=> $data['servicio'],
          'fechaCosulta' => $data['fechaCosulta']
        );
        $asunto = 'CONSULTA CLIENTE '.trim($data['nombre']);
        $toEmail = 'consultas@contadoresvh.com';
        $correo=Mail::send('emails.consultaClienteMail', $dataCorreo  , function($message) use($toEmail,$asunto){
          $message->to($toEmail);
          $message->subject($asunto);
        });

      $insertconsulta = ConsultaCliente::insert(array(
        'ccAtendido'    => false,
        'cctipoConsulta'=> true,   /*internet 1  telefono 0*/
        'ccTitulo'      => trim($data['titulo']),
        'ccContenido'   => trim($data['contenidoConsulta']),
        'ccFechaEnvio'  => trim($data['fechaCosulta']),
        'ccContrato'    => trim($data['idContrato']),
      ));

      if ( $insertconsulta ){
        $response = array(
          'status' => 'OK',
          'message' => 'Consulta Registrada, en breve un integrante de la firma se pondrá en contacto con usted.');
      }
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se pudo agregar la consulta, intente de nuevo');
    }
    return Response::json( $response );
  }

  public function ingresarConsultaTel(){  //INGRESAR CONSULTA TELEFONICA
    if( !Sesion::isAsesor() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

    $format = "d-m-Y H:i:s";
    $timestamp = time();
    $fecha =  date($format, $timestamp);

    $data = array(
      'idContrato' => Input::get('idCto'),
      'titulo'      => Input::get('titulo'),
      'consulta'    => Input::get('consulta'),
      'hora'    => Input::get('hora'),
      'minutos'    => Input::get('min'),
      'asesor'    => Input::get('ase'),
      'fechaCosulta'=> $fecha
    );

    $validaciones = array('idContrato'=> array('required'),
                          'asesor'   => array('required'),
                          'titulo' => array('required', 'regex:/^([0-9a-zA-Z\s\.\n\-\¿\?,:áéíóúÁÉÍÓÚñÑ])+$/'),
                          'consulta' => array('required','regex:/^([0-9a-zA-Z\s\.\n\-\¿\?\)\(,:áéíóúÁÉÍÓÚñÑ])+$/'),
                          'minutos'  => array('required','alpha_num'),
                          'hora'     => array('required','alpha_num')
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
      $insertconsulta = ConsultaCliente::insert(array(
        'ccAtendido'    => true,
        'cctipoConsulta'=> false,   /*internet 1  telefono 0*/
        'ccTitulo'      => trim($data['titulo']),
        'ccContenido'   => trim($data['titulo']),
        'ccFechaEnvio'  => trim($data['fechaCosulta']),
        'ccFechaAtendido' => trim($data['fechaCosulta']),
        'ccRespuesta'   => trim($data['consulta']),
        'ccMinuto'  => $data['minutos'],
        'ccHora'    => $data['hora'],
        'ccContrato'    => trim($data['idContrato']),
        'ccAsesor'    => $data['asesor'],
      ));


      if ( $insertconsulta ){
        $response = array(
          'status' => 'OK',
          'message' => 'Se agrego la consulta teléfonica.');
      }
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se pudo agregar la consulta, intente de nuevo');
    }
    return Response::json( $response );
  }

  public function responderConsulta(){ /*RESPONDER CONSULTA LINEA*/
    if( !Sesion::isAsesor() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

    $format = "d-m-Y H:i:s";
    $timestamp = time();
    $fecha =  date($format, $timestamp);


    $data = array(
      'correo'  => Input::get('correo'),
      'respuesta'  => Input::get('respuesta'),
      'idConsulta'=> Input::get('idConsulta'),
      'asesor'    => Input::get('ase'),
      'fechaRegistro'   => $fecha
    );

    $validaciones = array('idConsulta'   => array('required'),
                          'asesor'   => array('required'),
                          'respuesta' => array('required','regex:/^([0-9a-zA-Z\s\?\¿\(\)\.\n\-,:áéíóúÁÉÍÓÚñÑ])+$/')
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
      $editar = ConsultaCliente::where('ccId', $data['idConsulta'])
        ->update(array(
          'ccAtendido'  => true,
          'ccRespuesta' => $data['respuesta'],
          'ccFechaAtendido' => $fecha,
          'ccAsesor'    => $data['asesor'],
        ));

      if ( $editar ){
        $getConsulta = ConsultaCliente::where('ccId', $data['idConsulta'])
        ->get(array(
        'ccTitulo'
            ))
        ->toArray();

        $resultado = $getConsulta[0];
        $titu = $resultado['ccTitulo'];

        $dataCorreo = array(
          'titu'  => $titu
        );

        $toEmail = trim($data['correo']);
        Mail::send('emails.respuestaConsultaMail', $dataCorreo, function($message) use($toEmail){
            $message->to($toEmail);
            $message->subject('Respuesta a su consulta');
          });

        $response = array(
          'status' => 'OK',
          'message' => 'Respuesta registrada'
          );
      }

      else
        $response = array (
          'status' => 'ERROR',
          'message' => 'No se puede responder, intente otra vez'
          );
    }
    return Response::json( $response );
  }

  public function verConsultasClientes(){ /*ACTIVAR cONSULTA*/
    if( !Sesion::isAsesor() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }
      $getSolicitudes = ConsultaCliente::orderBy('ccFechaEnvio','desc')
      ->leftJoin('contratos', 'consultaCliente.ccContrato','=','contratos.ctoId')
      ->leftJoin('solicitudes', 'contratos.ctoSolicitud', '=', 'solicitudes.solId')
      ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
      ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
      ->where('ccAtendido',false)
      ->get(array(
        'ccId',
        'ccAtendido',
        'cctipoConsulta',
        'ccTitulo',
        'ccContenido',
        'ccFechaEnvio',
        'ccFechaAtendido',
        'ccContrato',

        'ctoId',
        'solId',

        'perNombre',
        'perNumeroPreregistro',
        'perTipoPersona',
        'perRepresentanteLegal',

        'serNombre'
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
          'message' => 'No se han recibido consultas.'
        );
      return Response::json( $response );

  }

  public function verConsultaEspecifica(){ /****/
    if( !Sesion::isAsesor() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

      $id = Input::get('idConsulta');

      $getSolicitudes = ConsultaCliente::orderBy('ccFechaEnvio','desc')
      ->where('ccId',$id)
      ->leftJoin('contratos', 'consultaCliente.ccContrato','=','contratos.ctoId')
      ->leftJoin('solicitudes', 'contratos.ctoSolicitud', '=', 'solicitudes.solId')
      ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
      ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
      ->get(array(
        'ccId',
        'ccAtendido',
        'cctipoConsulta',
        'ccTitulo',
        'ccContenido',
        'ccFechaEnvio',
        'ccFechaAtendido',
        'ccRespuesta',
        'ccContrato',

        'ctoId',
        'ctoFecha',
        'solId',

        'perNombre',
        'perNumeroPreregistro',
        'perRFC',
        'perNumeroPreregistro',
        'perTipoPersona',
        'perRepresentanteLegal',
        'perTelefono',
        'perCorreo',

        'serNombre'
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
          'message' => 'No se encontraron resultados'
        );
      return Response::json( $response );

  }

  public function getBusquedaConsulta(){ /*****/
    if( !Sesion::isAsesor() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

      $data = array(
        'buscar'  => Input::get('buscar')
      );
      $validaciones = array(
                            'buscar' => array('required','alpha_num')
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

        $getBConsulta = ConsultaCliente::orderBy('ccFechaEnvio','desc')
        ->where('ccTitulo', 'like', '%'. $data['buscar'] .'%')
        ->orWhere('ccContenido', 'like', '%'. $data['buscar'] .'%')
        ->orWhere('ccRespuesta', 'like', '%'. $data['buscar'] .'%')
        ->leftJoin('contratos', 'consultaCliente.ccContrato','=','contratos.ctoId')
        ->leftJoin('solicitudes', 'contratos.ctoSolicitud', '=', 'solicitudes.solId')
        ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
        ->get(array(
          'ccTitulo',
          'ccContenido',
          'ccRespuesta',

          'perNombre'
            ))
          ->toArray();

        if ( count( $getBConsulta ) > 0 )
          $response = array(
            'status' => 'OK',
            'data' => $getBConsulta
          );
        else
          $response = array(
            'status' => 'ERROR',
            'message' => 'No se encontraron resultados que coincidan con la palabra clave'
          );
      }

      return Response::json( $response );
  }

  public function getContenidoConsultas(){  /*GetContenidoConsulta*/
    if( !Sesion::isUser() ){
      if (!Sesion::isAsesor()) {
        if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');
      }
    }

      $idC = Input::get('idC');

      $getConsultas = ConsultaClienteController::getContenidoConsultaR($idC);

      if ( count( $getConsultas ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getConsultas,
          'message' => 'Resultados obtenidos'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'El cliente no ha realizado consultas.'
        );
      return Response::json( $response );
  }

  public static function getContenidoConsultaR($idC){
    $getConsultas = ConsultaCliente::orderBy('ccFechaEnvio','desc')
    ->where('ccContrato',$idC)
    ->leftJoin('asesores', 'consultaCliente.ccAsesor', '=', 'asesores.asesId')
    ->get(array(
      'ccId',
      'ccAtendido',
      'cctipoConsulta',
      'ccTitulo',
      'ccContenido',
      'ccFechaEnvio',
      'ccFechaAtendido',
      'ccRespuesta',
      'ccHora',
      'ccMinuto',
      'ccContrato',

      'asesNombre',
      'asesPrimerApe',
      'asesSegundoApe'
        ))
      ->toArray();
      return($getConsultas);
  }

}
