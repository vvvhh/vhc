<?php

  $id = ($_POST['id']);

        if (isset($id)) {

          include('../Consultas.php');
          $Consultas = new Consultas;
          $consulta = 'DELETE FROM legislacionLink WHERE legId = '.$id.' ;';
          $Consultas -> validarSesion();
          $response = $Consultas -> consultaInsertEditEliminar($consulta);
        }
        else {
            $response = array(
              'status' => 'ERROR',
              'message'=>'Faltan parametros al solicitar petición'
            );
        }

  $jsonFinal = json_encode($response);
  echo $jsonFinal;

?>
