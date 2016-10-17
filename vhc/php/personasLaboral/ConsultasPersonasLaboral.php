<?php
class ConsultasPersonasLaboral {
  public function consultaGetPerosnaLaboral($consulta, $database) {


       if ( $result = $database->query($consulta) ) {

         if( $result->num_rows > 0 ) {
           
           while($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
             $clabId=$row['clabId'];
            $clabNombre=$row['clabNombre'];
            $clabTelefono=$row['clabTelefono'];
            $clabCorreo=$row['clabCorreo'];
            $clabFecha=$row['clabFecha'];
            $clabCondicion=$row['clabCondicion'];
            $clabCompleto=$row['clabCompleto'];


            $data[]= array(
                           'clabId'   => $clabId,
                           'clabNombre'   => $clabNombre,
                           'clabTelefono' => $clabTelefono,
                           'clabCorreo'   => $clabCorreo,
                           'clabFecha'    => $clabFecha,
                           'clabCondicion'=> $clabCondicion,
                           'clabCompleto' => $clabCompleto,
                         );
           }
           $response = array(
               'status' => 'OK',
               'data' => $data,
               'message' => 'Resultados obtenidos'
            );

         } else {
           $response = array(
             'status' => 'ERROR',
             'message' => 'No se encontraron resultados'
           );
         }
      } else {
        $response = array(
            'status' => 'ERROR',
            'message' => $database->error
          );
      }
    //  $ConexionBD->desconectarDB($database);

    return $response;
  }

  public function insertarPersonaLaboral($nombre, $telefono, $correo, $fecha, $aceptacion, $completo, $database){
  //  include('../Consultas.php');
  //  $Consultas = new Consultas;
    $consulta = 'INSERT INTO personasLaboral (clabNombre, clabTelefono, clabCorreo, clabFecha, clabCondicion, clabCompleto) VALUES("'.$nombre.'", "'.$telefono.'", "'.$correo.'", "'.$fecha.'", "'.$aceptacion.'", '.$completo.' );';
    //$Consultas -> validarSesion();
    if ( $result = $database->query($consulta) ) {
      $response = 1;
    } else {
     $response = $database->error;

    }
    return $response;
  }


}
?>
