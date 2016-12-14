<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="" />
  <link rel="icon" type="image/png" href="../favicon.png"/>


  <link href="../css/lib/sweet-alert.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/publicos/sesionA.css" rel="stylesheet">

</head>


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header ">
            <img id="imgI"class="img-responsive" src="../img/logoNombre.png">
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li><?php echo $_SESSION['nombreSes']; ?></li>
          <li class="dropdown">
            <a style="cursor:pointer" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog "></span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>Cuenta asesores</li>
              <li class="divider"></li>
              <li>Cambiar contraseña</li>
              <li class="divider"></li>
              <li><a href="../php/sesion/logout.php">Cerrar sesión</a></li>
            </ul>
           </li>
        </ul>

      </div>
    </nav>




    <body>
      <?php session_start(); ?>
      <div  id="contenidoUsuario" class="paddingMenu"> <!-- fondo -->
        <div>
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header tamTitulo grisObscuro texto3D"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nombreSes']; ?></h1>
            </div>
          </div>

          <div class="row"> <!-- Renglon Principal -->

            <aside class="col-md-2 col-lg-2">
              <?php include ("../seccionesAdmAsesor/adminMenu.php"); ?>
            </aside>

            <div class="col-md-10 col-lg-10">

            </div>


        </div> <!-- /Renglon Principal -->
        </div>  <!-- /Container -->
      </div>


      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/lib/sweet-alert.min.js"></script>
      <script>
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });
      </script>
    </body>

  </body>

</html>
