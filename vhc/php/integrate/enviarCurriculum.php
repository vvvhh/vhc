<?php
//require '../PHPMailerAutoload.php';

  $token = ($_POST['_token']);
//$archivo = $_FILES['_archivo']['name'];


if(isset($token)) {
  $nombre = "";
  $puesto = "";
  $area = "";
  $correo = "";
  $empresa = "";

  if (isset ($_POST['_nombre'])) {
    $nombre = $_POST['_nombre'];
  }
  if (isset ($_POST['_inpPuesto'])) {
    $puesto = $_POST['_nombre'];
  }
  if (isset ($_POST['_inpArea'])) {
    $area = $_POST['_inpArea'];
  }
  if (isset ($_POST['_correo'])) {
    $correo = $_POST['_correo'];
  }
  if (isset ($_POST['_empresa'])) {
    $empresa = $_POST['_empresa'];
  }


/*  $data = array(
    'nombre' => (),
    //'postula'=> Input::get('_postula'),
    'postula'=> ($_POST['']),
    'area'=> ($_POST['']),
    'correo'=> ($_POST['_correo']),
    'empresa'=> ($_POST['_empresa']),
  );
  */
  $archivo = $_FILES['_archivo']['name'];
  $_name=$_FILES["_archivo"]["name"];
  $_type=$_FILES["_archivo"]["type"];
  $_size=$_FILES["_archivo"]["size"];
  $_temp=$_FILES["_archivo"]["tmp_name"];
  $uploads_dir = './cargas/';


  $timestamp = time();
  $formatoT = "d-m-Y-H:i:s-";
  $fechaT =  date($formatoT, $timestamp);
  $sufijo = "-postulate";
  $aceptacion = $fechaT.$nombre.$sufijo;

  move_uploaded_file($_temp, "$uploads_dir/$archivo");

  /*$filename = "Procedimiento Contable.docx";
  $archivo = $uploads_dir.$filename;
  $attachment = chunk_split(base64_encode($archivo));
  $eol = PHP_EOL;
  $separator = md5(time());
  */

//  move_uploaded_file($_temp, "$uploads_dir/$archivo");

  /*$mail = new PHPMailer;
    $nombreCorreo = "VHC_Reclutamiento";
    $email = "VHC";
    $mensaje = "VHC_Reclutamiento";

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'difusionvhc@gmail.com';
    $mail->Password = 'dif#=216V';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->From = $correo;
    $mail->FromName = $nombreCorreo;

  //  $mail->addAddress('reclutamiento@contadoresvh.com');
    $mail->addAddress('edgar.santiago@contadoresvh.com');

  $mail->isHTML(true);
  $mail->CharSet = 'UTF-8';

  $mail->Subject = 'Postulación desde sitio web';

  $mail->Body    = "<p><strong>Nombre postulante: </strong>".$nombre."</p>".
                //  "<p><strong>Área a postularse: </strong>".$data['area']."</p>".
                  "<p><strong>Vacante a postularse: </strong>".$puesto."</p>".
                  "<p><strong>Correo: </strong>".$correo."</p>".
                  "<p><strong>Empresa: </strong>".$empresa."</p>".
                  "<p><small><strong>Cadena aceptación aviso de privacidad: </strong>".$aceptacion."</small></p>";


  $mail->AltBody = '';

//  $mail->AddAttachment("$uploads_dir/$archivo", $archivo);
  $exito = $mail->send();
  */

  $para  = 'edgar.santiago@contadoresvh.com';
  $titulo = 'Postulación desde sitio web';
  $from = 'sitio web';
  $mensaje = "<html>".
  "<p><h3><strong>Postulación desde sitio web</strong></h3></p>".
  "<p><strong>Nombre postulante: </strong>".$nombre."</p>".
                  "<p><strong>Vacante a postularse: </strong>".$puesto."</p>".
                  "<p><strong>Correo: </strong>".$correo."</p>".
                  "<p><strong>Empresa: </strong>".$empresa."</p>".
                  "<p><small><strong>Política de uso y privacidad del sitio web y el Aviso de privacidad para aspirantes: </strong>".$aceptacion."</small></p>".
                  "</html>";


  /*$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: multipart/mixed; charset=UTF-8' . "\r\n";
  */
  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $cabeceras .= $mensaje;

/*  $cabeceras .= "Content-Type: application/octet-stream; name=\"".$filename."\""."\r\n";
  $cabeceras .= "Content-Transfer-Encoding: base64"."\r\n";
  $cabeceras .= "Content-Disposition: attachment"."\r\n"."\r\n";
  $cabeceras .= $attachment."\r\n"."\r\n";
*/



  $exito = mail($para, $título, "", $cabeceras);

  $intentos=1;

  while ((!$exito) && ($intentos < 5)) {
    sleep(5);
    $exito = mail($para, $título, $mensaje, $cabeceras);
    $intentos = $intentos+1;
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
      'message' => 'Su información se envío correctamente.'.$archivo
    );
  }
  $jsonFinal = json_encode($response);
  echo $jsonFinal;

}
