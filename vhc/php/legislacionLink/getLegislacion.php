<?php

  $bsc = ($_POST['bsc']);

  if (isset($bsc)) {

    include('ConsultasLegislacion.php');
    $ConsultasLegislacion = new ConsultasLegislacion;
    $consulta = 'SELECT legId, legNombre, legLink, legTipo FROM legislacionlink WHERE legNombre LIKE "%'.$bsc.'%" ;';
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
