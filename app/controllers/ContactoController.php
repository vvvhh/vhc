<?php

class ContactoController extends BaseController {

  /*
  | contacto.blade.php - contacto.js
  */

  public function enviarCorreo(){
    $contactoh = Input::get('contactoh');

    if(isset($contactoh)) {
      /*fecha 'YYYY-MM-DD HH:MM:SS'*/
      $format = "d-m-Y H:i:s";
      $timestamp = time();
      $fecha =  date($format, $timestamp);

      $data = array(
        'nombreContacto'  => Input::get('nombreContacto'),
        'telefonoContacto'=> Input::get('telefonoContacto'),
        'correoContacto'  => Input::get('correoContacto'),
        'condicionesContacto'=> Input::get('condicionesContacto'),
        'mensajeContacto' => Input::get('mensajeContacto'),
        'fechaContacto'   => $fecha
      );

      $validaciones = array('nombreContacto'   => array('required', 'max:50','regex:/^([a-zA-Z\sáéíóúÁÉÍÓÚñÑ])+$/'),
                            'telefonoContacto' => array('required', 'max:20','alpha_num'),
                            'correoContacto'   => array('required', 'email','max:50'),
                            'condicionesContacto' => array('accepted'),
                            'mensajeContacto'  => array('required', 'max:500', 'regex:/^([0-9a-zA-Z\s\.\n\-\¿\?,:áéíóúÁÉÍÓÚñÑ])+$/'));
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
        $formatoT = "d-m-Y-H:i:s-";
        $fechaT =  date($formatoT, $timestamp);
        $sufijo = "-contactenos";
        $aceptacion = $fechaT.$data['nombreContacto'].$sufijo;


        $dataCorreo = array(
          'nombreContacto'   => $data['nombreContacto'],
          'telefonoContacto' => $data['telefonoContacto'],
          'correoContacto'   => $data['correoContacto'],
          'condicionesContacto' => $aceptacion,
          'mensajeContacto'  => $data['mensajeContacto'],
          'fechaContacto'    => $data['fechaContacto']
        );

        $toEmail = 'edgar.santiago@contadoresvh.com';
        Mail::send('emails.contactoMail', $dataCorreo, function($message) use($toEmail){
          $message->to($toEmail);
          $message->subject('Mensaje de Contacto');
        });

        $insert = Contactos::insert(array(
          'ctomNombre' => trim($data['nombreContacto']),
          'ctomTelefono' => trim($data['telefonoContacto']),
          'ctomCorreo' => trim($data['correoContacto']),
          'ctomMensaje' => trim($data['mensajeContacto']),
          'ctomFecha'   => trim($data['fechaContacto']),
          'ctomCondicionServicio' => $aceptacion
        ));

        if ( $insert )
          $response = array(
            'status' => 'OK',
            'message' => 'Gracias por ponerse en contacto con nosotros.');

        else
          $response = array(
            'status' => 'ERROR',
            'message' => 'No se pudo agregar el comentario, intente de nuevo');
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

  public function getMContacto(){/*******get mensajes**************/
    //$regU = Input::get('regU');
      $getContacto = Contactos::
      get()
      ->toArray();

      if ( count( $getContacto ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getContacto,
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No existen mensajes de contacto'
        );
      return Response::json( $response );
  }
}
