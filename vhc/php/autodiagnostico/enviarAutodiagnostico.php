<?php

  $token = ($_POST['token']);

  if(isset($token)) {
    /*fecha 'YYYY-MM-DD HH:MM:SS'*/
    $format = "d-m-Y H:i:s";
    $timestamp = time();
    $fecha =  date($format, $timestamp);

    $data = array(
      'nombre' => ($_POST['nombre']),
      //'postula'=> Input::get('_postula'),
      'telefono'=> ($_POST['telefono']),
      'correo'=> ($_POST['correo']),
      'condicionesCuestionario'=> ($_POST['condiciones']),
      'completo'=> ($_POST['completo']),
      'fechaContacto'=> $fecha,

    );
/*
    $porcentaje0 = Input::get('porcentaje0');
    $porcentaje1 = Input::get('porcentaje1');
    $porcentaje2 = Input::get('porcentaje2');
*/

  
      $formatoT = "d-m-Y-H:i:s-";
      $fechaT =  date($formatoT, $timestamp);
      $sufijo = "-cuestionarioLaboral";
      $aceptacion = $fechaT.$data['nombre'].$sufijo;


      $insert = PersonasLaboral::insert(array(
        'clabNombre'       => trim($data['nombre']),
        'clabRFC'          => trim($data['nombre']),
        'clabTelefono'     => trim($data['telefono']),
        'clabCorreo'       => trim($data['correo']),
        'clabFecha'        => $fecha,
        'clabCondicion'    => $aceptacion,
        'clabCompleto'     => trim($data['completo'])
      ));

      if ( $insert ){                                                           /*despues insert persona que contesto--------------------*/
        $getCPersona = PersonasLaboral::where('clabNombre', $data['nombre'])
        ->where('clabFecha', $fecha)
        ->get(array(
          'clabId'
            ))
          ->toArray();
        $datos = $getCPersona[0];
        $idCPersona = $datos['clabId'];

        $insertC=false;
        $insertC=false;
        $insertS=false;

        $res0 = Input::get('respuesta0');
        if (isset($res0)) {

            $arrayGeneral=array(
              '0'=> $res0[0],
              '1'=> $res0[1],
              '2'=> $res0[2],
              '3'=> $res0[3],
              '4'=> $res0[4],
              '5'=> $res0[5],
              '6'=> $res0[6],
              '7'=> $res0[7],
              '8'=> $res0[8],
              '9'=> $res0[9],
              '10'=> $res0[10],
              '11'=> $res0[11],
              '12'=> $res0[12],
              '13'=> $res0[13],
              '14'=> $res0[14],
              '15'=> $res0[15],
              '16'=> $res0[16],
              '17'=> $res0[17],
              '18'=> $res0[18],
              '19'=> $res0[19]
           );

            $jGeneral = json_encode($arrayGeneral);

            $insertG = CGeneral::insert(array(
              'cgeRespuesta' => $jGeneral,
              'cgePersonaLaboral' => $idCPersona
            ));
        }

        $res1 = Input::get('respuesta1');
        if (isset($res1)) {
            $arrayCapacitacion=array(
              '0'=> $res1[0],
              '1'=> $res1[1],
              '2'=> $res1[2],
              '3'=> $res1[3],
              '4'=> $res1[4],
              '5'=> $res1[5],
              '6'=> $res1[6],
              '7'=> $res1[7],
              '8'=> $res1[8],
              '9'=> $res1[9],
              '10'=> $res1[10],
              '11'=> $res1[11],
              '12'=> $res1[12],
              '13'=> $res1[13],
              '14'=> $res1[14],
              '15'=> $res1[15],
              '16'=> $res1[16],
              '17'=> $res1[17],
              '18'=> $res1[18],
              '19'=> $res1[19]
            );

            $jCapacitacion = json_encode($arrayCapacitacion);

            $insertC = CCapacitacion::insert(array(
              'ccaRespuesta' => $jCapacitacion,
              'ccaPersonaLaboral' => $idCPersona
            ));

        }

        $res2 = Input::get('respuesta2');
        if (isset($res2)) {
            $arraySeguridad=array(
              '0'=> $res1[0],
              '1'=> $res2[1],
              '2'=> $res2[2],
              '3'=> $res2[3],
              '4'=> $res2[4],
              '5'=> $res2[5],
              '6'=> $res2[6],
              '7'=> $res2[7],
              '8'=> $res2[8],
              '9'=> $res2[9],
              '10'=> $res2[10],
              '11'=> $res2[11],
              '12'=> $res2[12],
              '13'=> $res2[13],
              '14'=> $res2[14],
              '15'=> $res2[15],
              '16'=> $res2[16],
              '17'=> $res2[17],
              '18'=> $res2[18],
              '19'=> $res2[19]
            );
            $jSeguridad = json_encode($arraySeguridad);
            $insertS = CSeguridad::insert(array(
              'cseRespuesta' => $jSeguridad,
              'csePersonaLaboral' => $idCPersona
            ));

        }

          if($insertC || $insertG || $insertS){
            $porcentajeSuma =   $porcentaje0 +   $porcentaje1 +  $porcentaje2;
            $porcentajeTotal = ($porcentajeSuma*100)/300;

            $resTotal = "En teminos generales de servicios laborales usted cuenta con el: ".$porcentajeTotal." de cumplimiento.";
            $resIndividualG = "";
            $resIndividualC = "";
            $resIndividualS = "";

          /*  $cal0=0;
            $cal1=0;
            $cal2=0;

            foreach ($arrayCapacitacion as $valor){
              if ($valor ==1) {
                $cal0 ++;
              }
            }
            foreach ($arrayCapacitacion as $valor){
              if ($valor ==1) {
                $cal0 ++;
              }
            }*/

            if ($porcentaje0 >=80) {
                $resIndividualG = "En terminos generales usted esta al ".$porcentaje0."% en el área correspondiente: Condiciones Generales de Trabajo. Excelente, usted cumple con un desempeño sobresaliente, conoce sus obligaciones y las aplica en su entorno laboral. ";
            }
            if (($porcentaje0 >= 60)&&($porcentaje0 < 80)) {
                $resIndividualG = "En terminos generales usted cumple con el ".$porcentaje0."% en el área correspondiente a: Condiciones Generales de Trabajo. Es importante cumplir con la normatividad aplicable, ya que es muy probable que su empresa sea sancionada, suspendida o, incluso, clausurada, dependiendo de la gravedad de la omisión, o debido a la repetición de la(s) misma(s).";
            }
            if ($porcentaje0 <60) {
               $resIndividualG = "Exhorto, Usted cumple con el ".$porcentaje0."% en el cumplimiento en cuestiones relacionadas a: Condiciones Generales de Trabajo. Es urgente realizar acciones, correctivas que apoyen en el correcto cumplimiento de la normatividad vigente, ya que el riesgo de ser sancionado por la autoridad laboral es inminente y pondría en conflicto la estabilidad de la empresa.";
            }

            if ($porcentaje1 >=80) {
                $resIndividualC = "En terminos generales usted esta al ".$porcentaje1."% en el área correspondiente: Capacitación y Adiestramiento. Excelente, usted cumple con un desempeño sobresaliente, conoce sus obligaciones y las aplica en su entorno laboral. ";
            }
            if (($porcentaje1 >= 60)&&($porcentaje0 < 80)) {
                $resIndividualC = "En terminos generales usted cumple con el ".$porcentaje1."% en el área correspondiente a: Capacitación y Adiestramiento. Es importante cumplir con la normatividad aplicable, ya que es muy probable que su empresa sea sancionada, suspendida o, incluso, clausurada, dependiendo de la gravedad de la omisión, o debido a la repetición de la(s) misma(s).";
            }
            if ($porcentaje1 <60) {
               $resIndividualC = "Exhorto, Usted cumple con el ".$porcentaje1."% en el cumplimiento en cuestiones relacionadas a: Capacitación y Adiestramiento. Es urgente realizar acciones, correctivas que apoyen en el correcto cumplimiento de la normatividad vigente, ya que el riesgo de ser sancionado por la autoridad laboral es inminente y pondría en conflicto la estabilidad de la empresa.";
            }

            if ($porcentaje2 >=80) {
                $resIndividualS = "En terminos generales usted esta al ".$porcentaje2."% en el área correspondiente: Seguridad e higiene. Excelente, usted cumple con un desempeño sobresaliente, conoce sus obligaciones y las aplica en su entorno laboral. ";
            }
            if (($porcentaje2 >= 60)&&($porcentaje0 < 80)) {
                $resIndividualS = "En terminos generales usted cumple con el ".$porcentaje2."% en el área correspondiente a: Seguridad e higiene. Es importante cumplir con la normatividad aplicable, ya que es muy probable que su empresa sea sancionada, suspendida o, incluso, clausurada, dependiendo de la gravedad de la omisión, o debido a la repetición de la(s) misma(s).";
            }
            if ($porcentaje2 <60) {
               $resIndividualS = "Exhorto, Usted cumple con el ".$porcentaje2."% en el cumplimiento en cuestiones relacionadas a: Seguridad e higiene. Es urgente realizar acciones, correctivas que apoyen en el correcto cumplimiento de la normatividad vigente, ya que el riesgo de ser sancionado por la autoridad laboral es inminente y pondría en conflicto la estabilidad de la empresa.";
            }

            $dataCorreo = array(
              'resIndividualG' => $resIndividualG,
              'resIndividualC' => $resIndividualC,
              'resIndividualS' => $resIndividualS,
              'resTotal' => $resTotal
            );

          /*  $toEmail = $data['correo'];//envia al correo del cliente
            Mail::send('emails.resultadoCompleto', $dataCorreo, function($message) use($toEmail){
                $message->to($toEmail);
                $message->subject('Resultados del Test Laboral.');
              });
*/

            $response = array(
              'status' => 'OK',
              'message' => 'Gracias por realizar el cuestionario, contactenos para más detalles sobre los resultados.');
          }
          else
            $response = array(
              'status' => 'ERROR c',
              'message' => 'No se pudo agregar el comentario, intente de nuevo');

      }

      else
        $response = array(
          'status' => 'ERROR 1',
          'message' => 'No se pudo agregar el comentario, intente de nuevo');

  }
  else{
    $response = array(
      'status' => 'ERROR',
      'message' => 'Vuelva a intentar en un momento'
    );
  }
  return Response::json( $response );
//  return Response::$jCapacitacion;


//****************************************************************************************************

  $data = array(

  );


  $timestamp = time();
  $formatoT = "d-m-Y-H:i:s-";
  $fechaT =  date($formatoT, $timestamp);
  $sufijo = "-contactenos";
  $aceptacion = $fechaT.$data['nombre'].$sufijo;


  $mail = new PHPMailer;
    $nombre = "VHC_Contacto";
    $email = "VHC";
    $mensaje = "Mensaje de Contacto";

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

  $mail->Subject = 'Mensaje de contacto desde sitio web';

  $mail->Body    ="<p><h3><strong>Mensaje desde sitio Web</strong></h3></p>".
                  "<p><strong>Nombre: </strong>".$data['nombre']."</p>".
                //  "<p><strong>Área a postularse: </strong>".$data['area']."</p>".
                  "<p><strong>Teléfono: </strong>".$data['telefono']."</p>".
                  "<p><strong>Correo: </strong>".$data['correo']."</p>".
                  "<p><strong>Mensaje: </strong>".$data['mensaje']."</p>".
                  "<p><small><strong>Política de uso y privacidad del sitio web y el Aviso de privacidad para clientes: </strong>".$aceptacion."</small></p>";



  $mail->AltBody = '';
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
      'message' => 'Gracias por ponerse en contacto con nosotros.'
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
