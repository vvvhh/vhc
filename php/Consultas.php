<?php
class Consultas {
  private $validarAdmin = false;
  private $sesion;


  public function establecerConexion(){
    include('Conexion.php');
    $ConexionBD = new Conexion;
    return $ConexionBD;
  }

  public function validarSesion(){
    $sesion = session_start();
    if ((isset($_SESSION["tipoSes"])) && (isset($_SESSION["idSes"])) && (isset($_SESSION["nombreSes"])) ) {
          $tipoSesion   = $_SESSION["tipoSes"];
          $idSesion     = $_SESSION["idSes"];
          $nombreSesion = $_SESSION["nombreSes"];

          include('../sesion/ValidarSesion.php');
          $ValidaSesion = new ValidaSesion;
          $validar =  $ValidaSesion->isAdmin($tipoSesion, $nombreSesion, $idSesion);
          $this->validarAdmin = $validar;
        }
      else{
          $this->validarAdmin = false;
      }
  }

  public function consultaInsertEditEliminar($consulta) {
      //  $this->validarSesion();
        if ($this->validarAdmin) {

                      /****************************Consulta despues de validar *************/

            $ConexionBD = $this->establecerConexion();
            $database = $ConexionBD->conectarBD();

            if($database->connect_errno) {
              //  $response ='No se puede conectar a la base de datos';
                $response = array(
                  'status' => 'ERROR',
                  'message' => 'No se puede conectar a la base de datos'
                );
             }
             else{
               if ( $result = $database->query($consulta) ) {
                // $response = 1;
                $response = array(
                         'status' => 'OK',
                         'message' => 'Consulta realizada con exito'
                       );
              } else {
                //$response = $database->error;
                $response = array(
                    'status' => 'ERROR',
                    'message' => $database->error
                  );

              }
              $ConexionBD->desconectarDB($database);
            }

                            /**************************** /Consulta despues de validar *************/

      }else {     // $validarAdmin
        $response = array(
          'status' => 'ERROR',
          'message'=>'Verifique que su sesión sea administrador'
        );
      }

    return $response;
  }

}
?>
