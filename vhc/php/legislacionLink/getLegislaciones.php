<?php

  $tp = ($_POST['tp']);

  if (isset($tp)) {

    include('ConsultasLegislacion.php');
    $ConsultasLegislacion = new ConsultasLegislacion;
    $consulta = 'SELECT legId, legNombre, legLink, legTipo FROM legislacionLink WHERE legTipo = '.$tp.';';
    $response = $ConsultasLegislacion -> consultaGetLegislacion($consulta);
  }
  else {
      $response = array(
        'status' => 'ERROR',
        'message'=>'Faltan parámetros al solicitar petición'
      );
  }
  $jsonFinal = json_encode($response);
  echo $jsonFinal;

?>
