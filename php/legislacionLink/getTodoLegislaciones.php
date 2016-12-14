<?php

  $tp = "sd";

  if (isset($tp)) {

    include('ConsultasLegislacion.php');
    $ConsultasLegislacion = new ConsultasLegislacion;
    $consulta = 'SELECT legId, legNombre, legLink, legTipo FROM legislacionlink;';
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
