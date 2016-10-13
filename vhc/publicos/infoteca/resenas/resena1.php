<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="edSantiago" />
  <link rel="icon" type="../../../image/png" href="./favicon.png"/>

  <title>

    Reseñas | Vázquez Hernández Contadores, S. C.
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
            <h1 class="tamTitulo grisClaro texto3D tituloEntrada"><i class="fa fa-pencil"></i>  Reseñas</h1>
            <br>
          </div>
        </div>

    <div class="row">
        <div class="col-md-9 animacionContenido">



<!-- ////////////////////////////////////////////////////////// -->
          <div class="well transparenteClaroTxt">
            <div class="row">
              <div class="col-md-12">
                <!--    <h3 class="grisObscuro"><strong><i class="fa fa-pencil"></i> Reseña:</strong></h3>-->
              <!--    <div class="row"> -->
                    <!--CONTENIDO RESEÑA -->
                <!--      <h3 class="grisObscuro text-center">SISTEMA ELECTRÓNICO DE PUBLICACIONES DE SOCIEDADES MERCANTILES</h3>
                  <div class="col-md-3">
                    <br><br>
                    <img class="img-rounded img-responsive imgN" src="{{URL::asset('img/infoteca/resenas/122584470.jpg')}}"/>
                  </div>
                  <div class="col-md-9">
                    <br>
                    <p class="text-justify">
                      El 12 de junio del presente año se publicó en el Diario Oficial de la Federación, el acuerdo en el que se establece el Sistema de Publicaciones de las Sociedades Mercantiles (PSM).
                    </p>
                    <p class="text-justify">
                      La creación de este sistema está basado en las reformas publicadas el 13 de junio del 2014 a las disposiciones mercantiles como la Ley General de Sociedades Mercantiles, el Código de Comercio, la Ley de Fondos de Inversión, la Ley de Títulos y Operaciones de Crédito, entre otras; en estas reformas se establece el sistema electrónico como un medio para impulsar la competitividad y productividad a nivel nacional en cuanto a los procedimientos administrativos que establecen las leyes mercantiles además de facilitar y agilizar los mismos.
                    </p>
                  </div>

                </div><br>
                <p class="text-justify">
                  Este nuevo sistema será regulado por la Secretearía de Economía y entrará en vigor el próximo 15 de junio de 2015.
                </p>
                <p class="text-justify">
                  El tipo de publicaciones a realizarse en el sistema serán: convocatorias de asambleas, balances, estados financieros, resoluciones de escisión, acuerdos de transformación, resultados de sorteos de acciones amortizadas, entre otras publicaciones mercantiles previstas por el catálogo del mismo sistema.
                </p>
               <p class="text-justify">
                 Los usuarios responsables de estas publicaciones serán los representantes legales de las personas morales o los designados para dicho fin por la misma; autorizando o cancelando publicaciones a través de su firma electrónica avanzada.
               </p>
               <p class="class-justify">
                  Toda la información generada, enviada, recibida, almacenada o archivada en el PSM, será considerada mensaje de datos en los términos del artículo 89 del Código de Comercio, considerándose así todos los efectos jurídicos que ha lugar.
                </p>
                <br>
                <blockquote>
                  <p class="text-justify formatoTexto14"><em>
                    Fundamento legal: artículos 34 fracciones XXXI y XXXIII de la Ley Orgánica de la Administración Pública Federal; 50 Bis y 600 fracción I del Código de Comercio; 9, 99, 119, 132, 136 fracción III, 177, 186, 223, 228 Bis fracción V, 243, 247 fracción II y 251 de la Ley General de Sociedades Mercantiles, 212 de la Ley General de Títulos y Operaciones de Crédito y 5 fracción XVI del Reglamento Interior de la Secretaría de Economía.
                    </em>
                  </p>
                </blockquote>
                <p class="text-center">
                  Para conocer los lineamientos completos consulte: <a target="blanck" href="http://www.dof.gob.mx/nota_detalle.php?codigo=5396538&fecha=12/06/2015.">http://www.dof.gob.mx/nota_detalle.php?codigo=5396538&fecha=12/06/2015.</a>
                </p>
                 -->
              </div>

            </div>
          </div>  <!-- /CONTENIDO RESEÑA -->




    </div> <!-- /Columna Contenido -->

    <div class="col-md-3 transladarIzquierda">
        <!-- MUESTRA MENU DE LAS RESEÑAS DESDE menuResena.blde.php -->
          <?php include ("../../../seccionesVista/menuResena.php"); ?>
    </div>

    <div class="col-md-3 col-lg-3 transladarIzquierda">
      <br>
      <a class="btn btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar </span></a>
    </div>

        </div> <!-- /Renglon Principal -->
    </div>
  </body>


  <?php include ("../../../seccionesVista/piePagina.php"); ?>
  <script src="../../../js/jquery.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>


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
    $('#ulResenaTem1').addClass('in');
    $('#liResena1').addClass('activoBorde');
  </script>
  </body>
</html>
