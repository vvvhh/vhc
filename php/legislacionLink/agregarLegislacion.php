<?php
  $nombre = ($_POST['nom']);
  $enlace = ($_POST['enl']);
  $tipo = ($_POST['tipo']);

        if ((isset($nombre)) && (isset($enlace)) && (isset($tipo))) {

          include('../Consultas.php');
          $Consultas = new Consultas;
          $consulta = 'INSERT INTO legislacionLink (legNombre, legLink, legTipo) VALUES("'.$nombre.'", "'.$enlace.'", "'.$tipo.'");';
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
