<?php

  $id = ($_POST['id']);
  $nombre = ($_POST['nom']);
  $enlace = ($_POST['enl']);
  $tipo = ($_POST['tipo']);

        if ((isset($id)) && (isset($nombre)) && (isset($enlace)) && (isset($tipo)) ) {

          include('../Consultas.php');
          $Consultas = new Consultas;
          $consulta = 'UPDATE legislacionlink SET legNombre = "'.$nombre.'", legLink = "'.$enlace.'", legTipo = "'.$tipo.'"  WHERE legId = '.$id.' ;';
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
