<?php
class ConsultasGratisController extends BaseController {
  /*
  |  principalU.blade.php - principalU.js
  */

  public function ingresarConsultaGratis(){
    $token = Input::get('token');

    if(isset($token)) {
      $format = "d-m-Y H:i:s";
      $timestamp = time();
      $fecha =  date($format, $timestamp);

      $data = array(
        'idU' => Input::get('id'),
        'titulo'      => Input::get('titulo'),
        'consulta'    => Input::get('consulta'),
        'fechaCosulta'=> $fecha,
        'nombre'  => Input::get('nombre'),
        'numeroR' => Input::get('numeroR')
      );

      $validaciones = array('idU'   => array('required'),
                            'titulo' => array('required', 'max:50','regex:/^([0-9a-zA-Z\s\.\n\-\¿\?\,\:áéíóúÁÉÍÓÚñÑ])+$/'),
                            'consulta' => array('required','max:500','regex:/^([0-9a-zA-Z\s\.\n\-\¿\?\(\)\,\:áéíóúÁÉÍÓÚñÑ])+$/') );
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
              'titulo'  => $data['titulo'],
              'consulta'=> $data['consulta'],
              'fechaCosulta' => $data['fechaCosulta']
            );

        $insert = ConsultasGratis::insert(array(
          'cgrAtentido'  =>false,
          'cgrLeido'     =>false,
          'cgrContenido' => trim($data['consulta']),
          'cgrTitulo'    => trim($data['titulo']),
          'cgrFechaEnvio'=> trim($data['fechaCosulta']),
          'cgrPersona'   => $data['idU']
        ));

        if ( $insert ){
          $editar = Personas::where('perId', $data['idU'])
            ->update(array(
              'perGratis'   => true
            ));

            $toEmail = 'consultas@contadoresvh.com';
            $asunto = 'Consulta Gratis '.trim($data['nombre']);
            $correo=Mail::send('emails.consultaGratisMail', $dataCorreo, function($message) use($toEmail, $asunto){
              $message->to($toEmail);
              $message->subject($asunto);
            });

            if($correo){
              $response = array(
                'status' => 'OK',
                'message' => 'En breve un integrante de la firma se pondrá en contacto con usted.');
            }
            else{
              $response = array(
                'status' => 'OK',
                'message' => 'En breve un integrante de la firma le atendera.');
            }
        }
        else
          $response = array(
            'status' => 'ERROR',
            'message' => 'No se pudo agregar la consulta, intente de nuevo');
      }
    }
    else{
      $response = array(
        'status' => 'ERROR',
        'message' => 'Vuelva a intentar en un momento'
      );
    }
    return Response::json( $response );
  }

  public function verificarGratis(){                    /*verifica*/
    $regU = Input::get('regU');
      $getGratis = Personas::where('personas.perNumeroPreregistro', $regU)
      ->leftJoin('consultasGratis', 'personas.perId', '=', 'consultasGratis.cgrPersona')
      ->get(array(
        'personas.perGratis',
        'consultasGratis.cgrLeido',
        'consultasGratis.cgrAtentido'
          ))
        ->toArray();

      if ( count( $getGratis ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getGratis,
          'message' => 'Resultados obtenidos'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontraron resultados'
        );

      return Response::json( $response );
  }

  public function verConsultasGratis(){ /////////////////
    if (!Sesion::isAsesor()) {
      if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');
    }

    $getSolicitudes = ConsultasGratis::
    leftJoin('personas', 'consultasGratis.cgrPersona', '=', 'personas.perId')
    ->where('cgrAtentido',false) //Linea
    ->orderBy('cgrFechaEnvio','desc')
    ->get(array(
      'cgrId',
      'cgrTitulo',
      'cgrFechaEnvio',

      'perNombre',
      'perNumeroPreregistro',
      'perCliente'
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
        'message' => 'No han recibido consultas gratis.'
      );
    return Response::json( $response );
  }

  public function verGratisEspecifica(){  /*******/
    if (!Sesion::isAsesor()) {
      if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');
    }
    $id = Input::get('id');
    $getSolicitudes = ConsultasGratis::
    leftJoin('personas', 'consultasGratis.cgrPersona', '=', 'personas.perId')
    ->where('cgrId',$id) //Linea
    ->orderBy('cgrFechaEnvio','desc')
    ->get(array(
      'cgrId',
      'cgrTitulo',
      'cgrContenido',
      'cgrFechaEnvio',

      'perNombre',
      'perNumeroPreregistro',
      'perCliente',
      'perRFC',
      'perCorreo',
      'perTelefono'

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
        'message' => 'No han recibido consultas gratis.'
      );
    return Response::json( $response );

  }

  public function getRespuestaGratis(){/*Usuario ver respuesta*/
    $regU = Input::get('regU');
      $getGratis = Personas::where('perNumeroPreregistro', $regU)
      ->leftJoin('consultasGratis', 'personas.perId', '=', 'consultasGratis.cgrPersona')
      ->groupBy('perNumeroPreregistro')
      ->get(array(
        'cgrId',
        'cgrTitulo',
        'cgrContenido',
        'cgrRespuesta'
          ))
        ->toArray();

      if ( count( $getGratis ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getGratis,
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontraron resultados'
        );
      return Response::json( $response );
  }

  public function leidoResGratis(){//Usuario marca leido consulta gratis
    $idConsultaGratis = Input::get('idCG');

    $editar = ConsultasGratis::where('cgrId', $idConsultaGratis)
      ->update(array(
        'cgrLeido' => true
      ));

      if ( $editar )
        $response = array(
          'status' => 'OK'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'Problema al actualizar información'
        );
      return Response::json( $response );
  }

  public function responderGratis(){ /*RESPONDER CONSULTA*/
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
                          'respuesta' => array('required','regex:/^([0-9a-zA-Z\s\.\n\-\¿\?\(\),:áéíóúÁÉÍÓÚñÑ])+$/')
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
      $editar = ConsultasGratis::where('cgrId', $data['idConsulta'])
        ->update(array(
          'cgrAtentido'  => true,
          'cgrRespuesta' => $data['respuesta'],
          'cgrFechaRespuesta' => $fecha,
          'cgrAsesor'    => $data['asesor'],
        ));

      if ( $editar ){
        $getConsulta = ConsultasGratis::where('cgrId', $data['idConsulta'])
        ->get(array(
        'cgrTitulo'
            ))
        ->toArray();

        $resultado = $getConsulta[0];
        $titu = $resultado['cgrTitulo'];

        $dataCorreo = array(
          'titu'  => $titu
        );

        $toEmail = trim($data['correo']);
        Mail::send('emails.respuestaGratis', $dataCorreo, function($message) use($toEmail){
            $message->to($toEmail);
            $message->subject('Respuesta a su consulta gratuita');
          });

        $response = array(
          'status' => 'OK',
          'message' => 'Respuesta realizada'
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

}
