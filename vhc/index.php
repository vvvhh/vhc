<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="edSantiago" />
  <meta name="description" content="Vázquez Hernández Contadores, S.C. Firma Méxicana especializada en servicios de contaduría. Somos la solución confiable a sus necesidades de negocio.">
  <meta name="keywords" content="contaduría, contabilidad, despacho contable, servicio contable, servicio online,  servicio asesoría, servicio auditoría, servicios jurídico, servicio fiscal" />
  <link rel="icon" type="./image/png" href="./favicon.png"/>

  <title>Vázquez Hernández Contadores, S. C.</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="css/inicio.css" rel="stylesheet">
</head>


<body onload="alertInicio();">


  <?php include ("./seccionesVista/barraNavegacionPagina.php"); ?>

<!-- carousel -->
<!-- {{ HTML::style('css/inicio.css', array('media'=>"none",'onload'=>"if(media!='all')media='all'")) }} -->

<div id="carouselPrincipal" class="carousel slide" >

  <ol class="carousel-indicators transladarAbajo">




    <li data-target="#carouselPrincipal" data-slide-to="0" class="active liInicio" ></li>
    <li data-target="#carouselPrincipal" data-slide-to="1" class="liInicio"></li>
    <li data-target="#carouselPrincipal" data-slide-to="2" class="liInicio"></li>
    <li data-target="#carouselPrincipal" data-slide-to="3" class="liInicio"></li>
    <li data-target="#carouselPrincipal" data-slide-to="4" class="liInicio"></li>
    <li data-target="#carouselPrincipal" data-slide-to="5" class="liInicio"></li>
    <li data-target="#carouselPrincipal" data-slide-to="6" class="liInicio"></li>
    <li data-target="#carouselPrincipal" data-slide-to="7" class="liInicio"></li>
    <li data-target="#carouselPrincipal" data-slide-to="8" class="liInicio"></li>
    <li data-target="#carouselPrincipal" data-slide-to="9" class="liInicio"></li>
    <li data-target="#carouselPrincipal" data-slide-to="10" class="liInicio"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <div class="fill" style="background-image:url('img/inicio/491663823.jpg');"></div>
      <div class="carousel-caption">
        <h2><a href="#"></a></h2>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('img/inicio/461998221.jpg');"></div>

      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/auditoria.php"><h2 class="texto3D textAzul3"><strong>Servicios de Auditoría</strong> </h2></a>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('img/inicio/101371076.jpg');"></div>
      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/contables.php"><h2 class="texto3D textAzul3">Servicios Contables</h2></a>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('img/inicio/487967033.jpg');"></div>
      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/asesoria.php"><h2 class="texto3D textAzul2">Servicios de Asesoría</h2></a>
      </div>
    </div>

    <!--  <div class="item">
      <div class="fill" style="background-image:url('img/inicio/491207279.jpg');"></div>
      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/obtenerAsesoria.php"><h2 class="texto3D textAzul2">Servicios de Asesoría Online</h2></a>
      </div>
    </div> -->
    <div class="item">
      <div class="fill" style="background-image:url('img/inicio/91430302.jpg');"></div>
      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/pLavado.php"><h2 class="texto3D textAzul2">Prevención de Lavado de Dinero (PLD)</h2></a>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('img/inicio/180256715.jpg');"></div>
      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/juridico.php"><h2 class="texto3D textAzul2">Servicio Jurídico</h2></a>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('img/inicio/178709202.jpg');"></div>
      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/fiscal.php"><h2 class="texto3D textAzul2">Servicio Fiscal</h2></a>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('img/servicios/83017290.jpg');"></div>
      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/auditoriaG.php"><h2 class="texto3D textAzul2">Auditoría Gubernamental</h2></a>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('img/inicio/478771527.jpg');"></div>
      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/fiscal.php"><h2 class="texto3D textAzul2">Servicios Laborales</h2><a href="publicos/servicios/autodiagnostico?c=0.php" id="btnEncuesta"type="button" class="btn btn-lg btn-primary animacionEscalaLoop" ><i class="fa fa-pencil-square-o"></i> Elaborar diagnóstico laboral</a></a>
      </div>
    </div>
    <div class="item">
      <div class="fill" style="background-image:url('img/inicio/166150527.jpg');"></div>
      <div class="carousel-caption">
        <a class="enlaceSimple" href="publicos/servicios/otros.php"><h2 class="texto3D textAzul2">Otros Servicios</h2></a>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carouselPrincipal" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left texto3D transladarDerecha"></span>
  </a>
  <a class="right carousel-control " href="#carouselPrincipal" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right texto3D transladarIzquierda"></span>
  </a>


</div>


<!-- finCarousel -->
<div id="banner" class="transladarOpaco2">
      <?php
          require("simplePie/simplepie.inc");

          $urlfeed = "http://www.dof.gob.mx/indicadores.xml";

          $feed = new SimplePie();
          $feed->set_feed_url($urlfeed);
          $feed->set_cache_location("cache");
          $feed->init();
          $feed->handle_content_type();

          $textoMarquee="";
          $textoMarquee1="";

          foreach ($feed->get_items() as $item) {
            $textoMarquee = $textoMarquee.$item->get_title();
            $textoMarquee = $textoMarquee." ";
            $textoMarquee = $textoMarquee.$item->get_content();
            $textoMarquee = $textoMarquee.'<sup>1</sup>';
            $textoMarquee = $textoMarquee."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

            }

       ?>
       <?php $textoMarquee1 = $textoMarquee1."Salario mínimo: $ 73.04<sup>2</sup>  &nbsp; " ?>
       <?php $textoMarquee1 = $textoMarquee1."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ?>
       <?php $textoMarquee1 = $textoMarquee1."INPC: 119.211<sup>2</sup> " ?>
       <?php $textoMarquee1 = $textoMarquee1."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ?>
       <?php $textoMarquee1 = $textoMarquee1."CETES 28: 4.23<sup>3</sup>" ?>

        <marquee  behavior="scroll" scrollamount=3 direction="left">
          <a class="enlaceSimple"  target="_blanck" href="<?php echo $feed->get_image_link(); ?>" target="_blanck" ><?php echo $textoMarquee ?>
            <?php echo $textoMarquee1 ?> 
        </marquee>
   </div>



<!--Contenido pagina-->
<div class="fondo paddingInicio" style="background-image:url('img/inicio/101152541.jpg');">

  <div class="row botonVacantes">
    <div class="col-md-2">
      <br><br>
      <a href="publicos/integrate/integrateVacantes.php" id="btnEncuesta"type="button" class="btn btn-md btn-primary animacionEscalaLoop" >

        ¡Únete a nuestro<br>
         equipo! <br>
        Consulta nuestras <br>
        vacantes
      </a>
    </div>
  </div>



  <div class="row">
    <section  class="col-md-8">
      <br>
      <!--Video-->
    <div class="col-md-12 ">
      <!--   <iframe height="350" width="100%"
        src="http://www.youtube.com/embed/lMkihL5YOhk">
      </iframe>

      -->
      <!--  <video height="400" width="100%" controls>
        <source src="video/SpotVHC.mp4"  type="video/mp4">
      </video>
-->
      <br><br>
    </div>


     <!--/Video -->
    <!-- Indicadores financieros -->

      <!-- Panel En VHC -->
      <div>
        <h2 class="grisObscuro text-center"><strong onload="alertInicio();">En Vázquez Hernández Contadores, S.C.</strong></h2>
      </div>
      <div class="well text-center trasparenteClaroPlus">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-8 col-md-offset-2" >
              <img id="imgI1" class="img-rounded img-responsive" src="img/inicio/164123455.jpg"/>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <p class="sangria text-justify formatoTexto3 fondoAzul">
                Ofrecemos a nuestros clientes soluciones confiables para las necesidades de su negocio, bajo un marco de integridad, rectitud, confidencialidad y competencia profesional.  De esta forma, se genera un ambiente de confianza, responsabilidad y compromiso, factores que implican una mejora continua y resultados positivos; así, logramos alcanzar los objetivos de la entidad que nos contrata.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Panel En VHC -->
      <br>

      <!-- Panel Clientes -->
      <div>
        <h2 class="grisObscuro text-center"> <strong>Nuestros clientes nos prefieren porque:</strong></h2>
      </div>
      <div  class="well text-center trasparenteClaroPlus">
          <div class="row">
            <div class="col-md-6">
              <p class="text-justify formatoTexto sangria">
                La confianza es nuestra singularidad cualitativa, ya que estamos convencidos de que confiar es una acción basada en la honestidad, objetividad y confidencialidad entre las personas.
                <br>
              </p>
              <p class="text-justify formatoTexto">
                La confianza es la base para que las relaciones empresa-asesor prosperen y sean legítimas; este es el primer secreto del éxito para nuestra firma.
              </p>
            </div>
            <div class="col-md-5" >
              <img id="imgI1" class="img-rounded img-responsive" src="img/inicio/84008609.jpg"/>
            </div>
          </div>
        </div>
        <!-- ./Panel Clientes -->
        <br>


        <!-- /well reseña -->


      <div class="row"><!-- Boton Asesoria -->
          <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="text-center grisObscuro"><strong> Somos una firma confiable y competente</strong></h2>
                  <h3 class="text-center grisObscuro"> <a href="#"></a>Contáctenos para recibir un diagnóstico, una opinión o una asesoría, con gusto uno de nuestros asesores le atenderá.</h3>
                </div>
              </div>

        <!--        <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('publicos/servicios/obtenerAsesoria')}}"><i class="fa fa-tty"></i> Obtener asesoría</a>
                  <div class="visible-phone">
                    <br >
                  </div>
                </div>
              </div>
              -->
            </div>
          </div>  <!-- /.botonAsesoria-->

      </section>

<!-- AREA lateral -->
      <aside>
        <!-- Login -->
        <div class="col-md-4 ">
          <div class="row">
            <div class="col-ms-12">
<!--
              <script>
                (function() {
                  var cx = '011848449641115542903:efi5c-nsjde';
                  var gcse = document.createElement('script');
                  gcse.type = 'text/javascript';
                  gcse.async = true;
                  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(gcse, s);
                })();
              </script>
<gcse:search></gcse:search>
-->
            </div>
          </div>
          <div class="row">
            <br>
            <h3 class="text-center grisObscuro"> <strong><i class="fa fa-users"></i> Clientes</strong></h3>
            <form class="form-signin" action="login.php" method="post">

                  <div class="control-group form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" name="usuario" value="" placeholder="Usuario" class="form-control" maxlength="50" required>

                    </div>
                  </div>

                  <div class="control-group form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key"></i></span>
                      <input type="password" name="pass" value="" placeholder="Contraseña" class="form-control" required>

                    </div>
                  </div>
                  <input type="submit" name="name" value="Login" class="btn btn-primary btn-block">


            </form>
                <br>
          </div>
        </div>  <!-- /Login -->

        <div class="well col-md-4 noticiasWell"> <!-- Convertidor -->
          <div class="row">
            <div class="col-md-9 col-md-offset-1 ">
              <h4 class="text-center grisObscuro"><strong><i class="fa fa-calculator"></i> Convertidor </strong></h4>
              <h5 class="text-center grisObscuro"><strong> Dólar Americano - Peso MX  </h5>
              <h5 class="text-center grisObscuro"><strong> Peso MX - Dólar Americano  </strong></h5>
                <!--    <div style="width:99%;height:250px;border:1px solid #263238;background-color:#CFD8DC;"><div style="background-color:#263238;height:18px;text-align:center;width:99%; margin:2px 0px 0px 2px;"><a target="new" style="color:#FFFFFF;font-size:14px;font-weight:Bold;font-family:arial; text-decoration:none;" href="http://es.fxexchangerate.com/">Convertidor de monedas</a></div><script type="text/javascript">var fm="USD";var ft="MXN";var hb="263238";var hc="FFFFFF";var bb="CFD8DC";var bo="263238";var tz="timezone";var wh="200x250";var lg="es";</script><script type="text/javascript" src="http://www.fxexchangerate.com/converter.php"></script></div>
                -->

                  <div class="control-group form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i> USD:</span>
                        <input id="inpUsd" name="nombreContacto" pattern="[1-9]+"  class="form-control grisObscuro"  placeholder="*Cantidad en número" maxlength="20" />
                    </div>
                    <p class="text-danger" id="spnNombre"> </p>

                  </div>


                  <div class="control-group form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i> MXN:</span>
                        <input id="inpMxn" name="nombreContacto" pattern="[1-9]+" type="text" class="form-control grisObscuro"  placeholder="*Equivalencia en pesos Mexicanos" maxlength="20" />
                    </div>
                    <p class="text-danger" id="spnNombre"> </p>

                  </div>
                  <div class="row text-center">
                    <button  class="btn btn-default " name="button" id="btnConvertir"> <i class="fa fa-exchange" aria-hidden="true"></i>
                      convertir</button>
                  </div>

            </div>
          </div>
        </div>  <!-- /Convertidor -->
        <hr>

      <br>

     <!--  *************************** / N O T I C I A S *************************************** -->

     <!--  *************************** I N F O T E C A  *************************************** -->
      <div class="well col-md-4 col-sm-12 col-xs-12 noticiasWell lateral">
        <h3 class="text-center"><a href="publicos/infoteca.php" class="grisObscuro enlaceSimple"><strong><i class="fa fa-folder-open"></i> Infoteca</strong></a></h3>
            <div id="carouselInfoteca" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselInfoteca" data-slide-to="0" class="liInicio2 active"></li>
                <li data-target="#carouselInfoteca" data-slide-to="1" class="liInicio2"></li>
                <li data-target="#carouselInfoteca" data-slide-to="2" class="liInicio2"></li>
                <li data-target="#carouselInfoteca" data-slide-to="3" class="liInicio2"></li>
                <li data-target="#carouselInfoteca" data-slide-to="4" class="liInicio2"></li>
                <li data-target="#carouselInfoteca" data-slide-to="5" class="liInicio2"></li>
                <li data-target="#carouselInfoteca" data-slide-to="5" class="liInicio2"></li>
              </ol>

              <div class="carousel-inner ">
                <div class="item active paddingCarousel">
                  <a href="publicos/infoteca/videos/video1.php" class="enlaceSimple"><h3 class="text-center grisObscuro"><img class="img-responsive imgResena" src="img/infoteca/490377069.jpg" alt="videos" />Videos</h3></a>
                </div>

                <div class="item paddingCarousel">
                  <a href="publicos/infoteca/podcast.php" class="enlaceSimple"><h3 class="text-center grisObscuro"><img class="img-responsive imgResena" src="img/infoteca/103583035.jpg"/>Podcast</h3></a>
                </div>

                <div class="item paddingCarousel">
                  <a href="publicos/infoteca/articulos/articulo1.php" class="enlaceSimple"><h3 class="text-center grisObscuro"><img class="img-responsive imgResena" src="img/infoteca/465911039.jpg"/>Artículos </h3></a>
                </div>

                <div class="item paddingCarousel">
                  <a href="publicos/infoteca/resenas/resena1.php" class="enlaceSimple"><h3 class="text-center grisObscuro"><img class="img-responsive imgResena" src="img/infoteca/488046651.jpg"/>Reseñas </h3></a>
                </div>

                <div class="item paddingCarousel">
                  <a href="publicos/infoteca/tutoriales/tutorial1.php" class="enlaceSimple"><h3 class="text-center grisObscuro"><img class="img-responsive imgResena" src="img/infoteca/493918821.jpg"/>Tutoriales </h3></a>
                </div>

                <div class="item paddingCarousel">
                  <a href="publicos/infoteca/indicadoresF/seguridadS/ssCuotas.php" class="enlaceSimple"><h3 class="text-center grisObscuro"><img class="img-responsive imgResena" src="img/infoteca/464236751.jpg"/>Indicadores fiscales </h3></a>
                </div>

                <div class="item paddingCarousel">
                  <a href="publicos/infoteca/legislacion.php" class="enlaceSimple"><h3 class="text-center grisObscuro"><img class="img-responsive imgResena" src="img/infoteca/156628164.jpg"/>Legislación </h3></a>
                </div>
              </div>

              <a class="left carousel-control" href="#carouselInfoteca" data-slide="prev">
                <span class="icon-prev"></span>
              </a>
              <a class="right carousel-control" href="#carouselInfoteca" data-slide="next">
                <span class="icon-next"></span>
              </a>

            </div>
          </div> <!-- /carusel Infoteca -->
          <br><br>
          <!--  *********** / I N F O T E C A ********** -->
    <br>
    <!-- *********************************F A C E B O O K ******************************************************************************** -->
       <div class=" col-md-4 col-sm-12 col-xs-12  lateral">
           <h3 class="text-center"><i class="fa fa-facebook-square facebookEstatico"></i> Actividad en facebook</h3>
            <div class="fb-page" data-href="https://www.facebook.com/VazquezHernandezContadoresSC/" data-tabs="timeline" data-height="400"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/VazquezHernandezContadoresSC/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VazquezHernandezContadoresSC/">Vázquez Hernández Contadores S. C.</a></blockquote></div>
       </div>
      </div>
    </aside>

    <!-- ./AREA lateral -->

      <div class="row">
        <div class="col-md-6">
          <small><sup>1</sup><a href="http://dof.gob.mx/filtroRss.php" target=black  class="enlaceSimple">
            Fuente: Diario Oficial de la Federación
          </a></small>

         <br>
        <small><sup>2</sup><a href="http://www.sat.gob.mx/informacion_fiscal/tablas_indicadores/Paginas/inpc_2016.aspx" class="enlaceSimple" target=blanck>
           Fuente: Servicio de Administración Tributaria
         </a></small>
         <br>
          <small><sup>3</sup><a href="http://www.banxico.org.mx/SieInternet/consultarDirectorioInternetAction.do?accion=consultarCuadro&idCuadro=CF107&sector=22&locale=es" class="enlaceSimple" target=blanck>
           Fuente: Banco de México
         </a></small>
         <br>
          <small><sup>4</sup>

        </div>
      </div>


  </div>


</div>



<!--  {{ HTML::script('js/jquery.js', array('async' => 'async'))}}
{{ HTML::script('js/bootstrap.min.js', array('async' => 'async'))}}
{{ HTML::script('js/lib/bootbox.min.js', array('async' => 'async'))}}
{{ HTML::script('js/inicio.js', array('async' => 'async'))}}
-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lib/bootbox.min.js"></script>
<script src="js/lib/accounting.min.js"></script>
<script src="js/inicio.js"></script>

  <script>
    $('#carouselResena').carousel({
      interval: 4000
    });
    $('#carouselPrincipal').carousel({
      interval: 5000,
      pause: "false"
    });
    $('#carouselNoticias').carousel({
      interval: 5000
    });
    $('#carouselInfoteca').carousel({
      interval: 2000
    });

    $('#navInicio').addClass('activoLi');
    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });
  </script>

  <!--  <script charset="utf-8" sync=true>
  // Facebook
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.async=true;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3&appId=1434459980199666";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
-->

  <div id="fb-root"></div>
  <script sync>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=1434459980199666";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>



    <?php include ("./seccionesVista/piePagina.php"); ?>

</body>





</body>

</html>
