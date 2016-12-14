<?php
  session_start();
  unset($_SESSION["tipoSes"]);
  unset($_SESSION["idSes"]);
  //unset($_SESSION["especial"]);
  unset($_SESSION["nombreSes"]);

  session_destroy();
  header("Location: ../../index.php");
  exit;
?>
