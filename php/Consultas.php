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
    if ((isset($_SESSION["tipoNem"])) && (isset($_SESSION["idNem"])) && (isset($_SESSION["nombreNem"])) ) {
          $tipoSesion   = $_SESSION["tipoNem"];
          $idSesion     = $_SESSION["idNem"];
          $nombreSesion = $_SESSION["nombreNem"];

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
      //  if ($this->validarAdmin) {

                      /****************************Consulta despues de validar *************/

            $ConexionBD = $this->establecerConexion();
            $database = $ConexionBD->conectarBD();

            if($database->connect_errno) {
              $response ='No se puede conectar a la base de datos';
             }
             else{
               if ( $result = $database->query($consulta) ) {
                 $response = 1;
              } else {
                $response = $database->error;
                  
              }
              $ConexionBD->desconectarDB($database);
            }

                            /**************************** /Consulta despues de validar *************/

    /*  }else {     // $validarAdmin
        $response = array(
          'status' => 'ERROR',
          'message'=>'Verifique que su sesión sea administrador'
        );
      }*/

    return $response;
  }

}
?>
