<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="edSantiago" />
  <link rel="icon" type="../../../image/png" href="./favicon.png"/>

  <title>   Videos Infoteca| Vázquez Hernández Contadores, S. C.</title>

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
                <h1 class="tamTitulo grisClaro texto3D tituloEntrada"><i class="fa fa-film"></i> Videos</h1>
                <br>
              </div>
            </div>

            <div class="row">

              <div class="col-md-9 col-lg-9 transladarAbajo">



                <div class="well trasparenteClaroPlus">  <!-- Well -->
                  <div class="row">
                    <div class="col-md-12">
                      <iframe height="500" width="99%" src="https://www.youtube.com/embed/XTJEi5d4zfg?rel=0" frameborder="0" allowfullscreen></iframe>

                    <!--    <video height="500" width="99%" controls>
                        <source src="{{URL::asset('video/pagoDeUnFiniquito.mp4')}}"  type="video/mp4">

                      </video> -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 text-center">
                      <h3 class="texto3d grisObscuro"> Enajenación de bienes
          </h3>
                    </div>
                  </div>

                </div> <!-- /well -->




               </div>

              <div class="col-md-3 col-lg-3 transladarIzquierda">
                  <!-- MENU DE LAS RESEÑAS menuResena.blde.php -->
                <?php include ("../../../seccionesVista/menuVideo.php"); ?>
                <br>
                <a class="btn btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar Infoteca</span></a>
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
          $('#ulVideosTem1').addClass('in');
          $('#liVideo3').addClass('activoBorde');
        </script>

  </body>
</html>
