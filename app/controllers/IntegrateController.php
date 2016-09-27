<?php

class IntegrateController extends BaseController {

public function enviarCurriculum(){
  require 'PHPMailerAutoload.php';
  $token = Input::get('_token');
//  $archivo = Input::get('_archivo');
 $archivo = $_FILES['_archivo']['name'];


  if(isset($token)) {
    $data = array(
      'nombre' => Input::get('_nombre'),
      //'postula'=> Input::get('_postula'),
      'postula'=> Input::get('_inpPuesto'),
      'area'=> Input::get('_inpArea'),
      'correo'=> Input::get('_correo'),
      'empresa'=> Input::get('_empresa'),
    );

    $_name=$_FILES["_archivo"]["name"];
    $_type=$_FILES["_archivo"]["type"];
    $_size=$_FILES["_archivo"]["size"];
    $_temp=$_FILES["_archivo"]["tmp_name"];
    $uploads_dir = './cargas';

    $timestamp = time();
    $formatoT = "d-m-Y-H:i:s-";
    $fechaT =  date($formatoT, $timestamp);
    $sufijo = "-postulate";
    $aceptacion = $fechaT.$data['nombre'].$sufijo;

    move_uploaded_file($_temp, "$uploads_dir/$archivo");

    $mail = new PHPMailer;
      $nombre = "VHC_Reclutamiento";
      $email = "VHC";
      $mensaje = "VHC_Reclutamiento";

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'difusionvhc@gmail.com';
      $mail->Password = 'dif#=216V';
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;

      $mail->From = $data['correo'];
      $mail->FromName = $nombre;

    //  $mail->addAddress('reclutamiento@contadoresvh.com'); /*********************/
      $mail->addAddress('edgar.santiago@contadoresvh.com');

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';

    $mail->Subject = 'Postulación desde sitio web';

    $mail->Body    = "<p><strong>Nombre postulante: </strong>".$data['nombre']."</p>".
                  //  "<p><strong>Área a postularse: </strong>".$data['area']."</p>".
                    "<p><strong>Vacante a postularse: </strong>".$data['postula']."</p>".
                    "<p><strong>Correo: </strong>".$data['correo']."</p>".
                    "<p><strong>Empresa: </strong>".$data['empresa']."</p>".
                    "<p><small><strong>Cadena aceptación aviso de privacidad: </strong>".$aceptacion."</small></p>";


    $mail->AltBody = '';

    $mail->AddAttachment("$uploads_dir/$archivo", $archivo);
    $exito = $mail->send();
    $intentos=1;

    while ((!$exito) && ($intentos < 5)) {
      sleep(5);
      $exito = $mail->send();
      $intentos=$intentos+1;
    }
    if(!$exito){
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se pudo enviar su inforamción.'
      );
    }
    else{
      $response = array(
        'status' => 'OK',
        'message' => 'Su información se envío correctamente.'
      );
    }
    return Response::json( $response );
}
}

}
