<?php
class ConsultasLegislacion {
public function consultaGetLegislacion($consulta) {
    include('../Consultas.php');
    $Consultas = new Consultas;
    $ConexionBD = $Consultas->establecerConexion();
    $database = $ConexionBD->conectarBD();

    if($database->connect_errno) {
      $response = array(
          'status' => 'ERROR',
          'message' => 'No se puede conectar a la base de datos'
        );
     }
     else{
       if ( $result = $database->query($consulta) ) {

         if( $result->num_rows > 0 ) {
           $i=0;
           while($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
             $legId = $row['legId'];
             $legNombre = $row['legNombre'];
             $legLink = $row['legLink'];
             $legTipo = $row['legTipo'];

             $data[]= array('legId'=>$legId,
                            'legNombre' => $legNombre,
                            'legLink' => $legLink,
                            'legTipo' => $legTipo,
                          );
             $i++;

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
      $ConexionBD->desconectarDB($database);
    }
    return $response;
  }

}
?>
