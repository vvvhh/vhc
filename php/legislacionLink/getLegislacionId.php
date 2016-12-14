<?php

  $id = ($_POST['id']);

  if (isset($id)) {

    include('ConsultasLegislacion.php');
    $ConsultasLegislacion = new ConsultasLegislacion;
    $consulta = 'SELECT legId, legNombre, legLink, legTipo FROM legislacionlink WHERE legId LIKE "%'.$id.'%" ;';
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
