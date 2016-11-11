<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="edSantiago" />
  <meta name="description" content="Testimonios y algunos clientes en Vázquez Hernández Contadores, S.C.">
  <meta name="keywords" content="testimonios, clientes" />
  <meta name="description" content="Conocer las vacates y podras envíes tu Currículum Vitae así como tus datos curriculares para futuras oportunidades. ">
  <meta name="keywords" content="postulate, vacantes, desarrollo profesional, desarrollo personal" />


  <link rel="icon" type="../image/png" href="./favicon.png"/>

  <title> Intégrate | Vázquez Hernández Contadores, S. C.
  </title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">


  <link href="../css/publicos/pagina.css" rel="stylesheet">

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-86348185-1', 'auto');
    ga('send', 'pageview');

</script>
</head>
  <body>

    <?php include ("../seccionesVista/barraNavegacionPagina.php"); ?>
        <div class="fondoIntegrate fondo paddingMenu2">

          <div class="row">
            <br>
            <div class="col-md-3 col-md-offset-9">
              <input type="text" name="name" value="" placeholder="Buscar en el sitio web">
            </div>
          </div>

            <div class="row">
              <div class="col-lg-12">
                <br>
                <h1 class="tituloEntrada tamTitulo grisObscuro"><i class="fa fa-puzzle-piece"></i> Intégrate</h1>
              </div>
            </div>

            <div class="row">


              <div class="col-md-9"> <!-- Columna Contenido -->
  <!--  -->      <!-- MUESTRA CONTENIDO ***************************************-->

                    <div class="row">
                      <div class="transladarDerecha well trasparenteClaroPlus col-md-7 col-md-offset-3">
                      <br><br>

                        <h3 class="text-center grisObscuro"><strong>Muchas gracias por interesarte en Vázquez Hernández Contadores, S.C.</strong></h3> <br>
                        <h4 class="text-center textoNegro">
                           A continuación encontrarás la lista de posiciones que estamos buscando. También te invitamos a que envíes tu Currículum Vitae así como tus datos generales y te tendremos en cuenta.
                        </h4>
                        <br>
                        <h4 class="text-center">
                            <strong>  <a href="integrate/integrateVacantes.php" class="enlaceSimple ">Ver vacantes</a></strong>
                        </h4>
                      </div>

                    </div>

                <!-- ************************************************************************** -->
              </div> <!-- /Columna Contenido -->

              <div class="col-md-3 transladarIzquierda">  <!-- Columna Menu -->
                        <!-- MENU DERECHO INTEGRATE DESDE menuIntegrate.blde.php -->
                <?php include ("../seccionesVista/menuIntegrate.php"); ?>

              </div>  <!-- /Columna Menu -->


          </div>
        </div>


      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <?php include ("../seccionesVista/piePagina.php"); ?>

      <script>
        $('#navIntegrate').addClass('activoLi');
      </script>

      <script>
        $('#navIntegrate').addClass('activoLi');
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
</html>
