<?php
class Conexion{
  public function conectarBD(){
    $dbserver = "localhost";
    $dbuser = "root";
    $password = "root";
    $dbname = "VHCBD";



    $database = new mysqli($dbserver, $dbuser, $password, $dbname);
    $database->set_charset('utf8');
    return($database);
  }

  public function desconectarDB($conexion){
      $close = mysqli_close($conexion);
          if(!$close){
              echo 'Ha sucedido un error en la desconexion de la base de datos  ';
          }
      return $close;
  }

}
?>
