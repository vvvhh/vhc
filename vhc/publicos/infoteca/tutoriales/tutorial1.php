<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="edSantiago" />
  <link rel="icon" type="../../../image/png" href="./favicon.png"/>

  <title>    Tutoriales | Vázquez Hernández Contadores, S. C.
  </title>

  <link href="../../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="../../../css/publicos/pagina.css" rel="stylesheet">
</head>
  <body>

      <?php include ("../../../seccionesVista/barraNavegacionPagina.php"); ?>

        <div class="fondoInfoteca fondo paddingMenu">
            <div class="row">
              <div class="col-lg-12">
                <br>
                <h1 class="tamTitulo grisClaro texto3D tituloEntrada"><i class="fa fa-book"></i> Tutoriales</h1>
                <br>
              </div>
            </div>

            <div class="row">

              <div class="col-md-9 animacionContenido">
                  <!--CONTENIDO DEL ARTICULO-->

                      <div class="well trasparenteClaroPlus">  <!-- Well -->

                        <video height="400" width="100%" controls>
                          <source src="../../../video/infoteca/tutoriales/descarga_xml.mov">
                        </video>
                        <h3 class="text-center">
                          Recupera tus facturas electrónicas
                        </h3>

                      </div> <!-- /well -->

                        <!-- ///*****************************  -->

              </div>

              <div class="col-md-3 transladarIzquierda">
                   <!--MENU DE LOS ARTICULOS menuArticulo.blde.php -->
                  <?php include ("../../../seccionesVista/menuTutorial.php"); ?>
                <br>
                <a class="btn btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar</span></a>
              </div>

          </div>
        </div>


        <script src="../../../js/jquery.js"></script>
        <script src="../../../js/bootstrap.min.js"></script>
        <?php include ("../../../seccionesVista/piePagina.php"); ?>

      <script>
        $('#navInfoteca').addClass('activoLi');
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });
      </script>
      <script>
        $('#ulTutorialTem1').addClass('in');
        $('#liTutorial1').addClass('activoBorde');
      </script>


  </body>
</html>
