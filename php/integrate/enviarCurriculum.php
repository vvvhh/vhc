<?php

  $token = ($_POST['_token']);

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

  move_uploaded_file($_temp, "$uploads_dir/$_name");

  $archivo = $uploads_dir.$_name;

  $handle = fopen($archivo, "r");
  $content = fread($handle, $_size);
  fclose($handle);

  $content = chunk_split(base64_encode($content));
   $uid = md5(uniqid(time()));

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

  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
  $cabeceras .= "This is a multi-part message in MIME format.\r\n";
  $cabeceras .= "--".$uid."\r\n";

  $cabeceras .= "Content-type: text/html; charset=UTF-8\r\n";
  $cabeceras .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
  $cabeceras .= $mensaje."\r\n\r\n";
  $cabeceras .= "--".$uid."\r\n";

  $cabeceras .= 'Content-type: multipart/mixed; charset=UTF-8' . "\r\n";
  $cabeceras .= "Content-Type: application/octet-stream; name=\"".$_name."\""."\r\n";
  $cabeceras .= "Content-Transfer-Encoding: base64"."\r\n";
  $cabeceras .= "Content-Disposition: attachment"."\r\n"."\r\n";
  $cabeceras .= $content."\r\n"."\r\n";

  $exito = mail($para, $titulo, "", $cabeceras);

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
      'message' => 'Su información se envío correctamente.'
    );
  }
  $jsonFinal = json_encode($response);
  echo $jsonFinal;
}
