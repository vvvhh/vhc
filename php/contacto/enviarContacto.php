<?php
require '../PHPMailerAutoload.php';

  $token = ($_POST['contactoh']);


if(isset($token)) {
  $data = array(
    'nombre' => ($_POST['nombreContacto']),
    'empresa'=> ($_POST['empresa']),
    'telefono'=> ($_POST['telefonoContacto']),
    'correo'=> ($_POST['correoContacto']),
    'condiciones'=> ($_POST['condicionesContacto']),
    'mensaje'=> ($_POST['mensajeContacto']),
  );

  $timestamp = time();
  $formatoT = "d-m-Y-H:i:s-";
  $fechaT =  date($formatoT, $timestamp);
  $sufijo = "-contactenos";
  $aceptacion = $fechaT.$data['nombre'].$sufijo;

  //$para  = 'edgar.santiago@contadoresvh.com';
  $para  = 'contacto@contadoresvh.com';
  $título = 'Mensaje de contacto desde sitio web';
  $mensaje = "<html>".
  "<p><h3><strong>Mensaje desde sitio Web</strong></h3></p>".
                  "<p><strong>Nombre: </strong>".$data['nombre']."</p>".
                  "<p><strong>Organización o empresa: </strong>".$data['empresa']."</p>".
                  "<p><strong>Teléfono: </strong>".$data['telefono']."</p>".
                  "<p><strong>Correo: </strong>".$data['correo']."</p>".
                  "<p><strong>Mensaje: </strong>".$data['mensaje']."</p>".
                  "<p><small><strong>Política de uso y privacidad del sitio web y el Aviso de privacidad para clientes: </strong>".$aceptacion."</small></p>".
                  "</html>";
  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $cabeceras .= 'From: contacto@contadoresvh.com' . "\r\n";



  $paraConfirmacion  = $data['correo'];
  $títuloConfirmacion = 'Confirmación de mensaje Vázquez Hernández Contadores';
  $mensajeConfirmacion = "<html>".
  "<p><h3><strong>Hemos recibido su mensaje.</strong></h3></p>".
                  "<p>Agradecemos su interés en nuestros servicios, en breve un integrante de nuestra firma se pondrá en contacto con usted.</p>".
                  "<p><small><strong>Política de uso y privacidad del sitio web y el Aviso de privacidad para clientes: </strong>".$aceptacion."</small></p>".
                  "</html>";
  $cabecerasConfirmacion  = 'MIME-Version: 1.0' . "\r\n";
  $cabecerasConfirmacion .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $cabecerasConfirmacion .= 'From: contacto@contadoresvh.com' . "\r\n";

  $exito = mail($para, $título, $mensaje, $cabeceras);
  $exitoConfirmacion = mail($paraConfirmacion, $títuloConfirmacion, $mensajeConfirmacion, $cabecerasConfirmacion);
  $intentos=1;


  while ((!$exito) && ($intentos < 5)) {
    sleep(5);
    //$exito = $mail->send();
    $exito =mail($para, $título, $mensaje, $cabeceras);
    $intentos=$intentos+1;
  }
  if(!$exito){
    $response = array(
      'status' => 'ERROR',
      'message' => 'Ocurrio un problema al procesar el envio, intente de nuevo.'
    );
  }
  else{
    $response = array(
      'status' => 'OK',
      'message' => 'Su información se envío correctamente.'
    );
  }
  $jsonFinal = json_encode($response);
  echo $jsonFinal;

}
