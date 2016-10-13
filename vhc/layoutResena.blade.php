<!DOCTYPE html>
<html lang="es">
@include('seccionesVista.cabeceraPagina')

  <body>
    @section('body')
    @show

    @include('seccionesVista.barraNavegacionPagina')
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
  <!--  -->     @yield('content') <!-- MUESTRA EL CONTENIDO DE LA RESEÑA DESDE SU BLADE -->

    <!--      <div class="well trasparenteClaroPlus">
        <h3 class="text-center grisObscuro"><strong>Danos tu comentario:</strong></h3>
        <ul class="list-unstyled list-inline list-social-icons text-center texto3D">
            <li>
              <a
                @section('enlaceFacebook')
                @show
                target="_blanck" class="facebookR"><i class="fa fa-facebook-square fa-3x"></i></a>
            </li>
            <li>
              <a
                @section('enlaceTwitter')
                @show
                target="blanck" class="twitterR"><i class="fa fa-twitter-square fa-3x"></i></a>
            </li>
            <li>
              <a
                @section('enlaceGoogle')
                @show
                target="blanck" class="googleR"><i class="fa fa-google-plus-square fa-3x"></i></a>
            </li>
         </ul>
       </div>
       -->


    </div> <!-- /Columna Contenido -->

    <div class="col-md-3 transladarIzquierda">
        @include('seccionesVista.menuResena')    <!-- MUESTRA MENU DE LAS RESEÑAS DESDE menuResena.blde.php -->
    </div>

    <div class="col-md-3 col-lg-3 transladarIzquierda">
      <br>
      <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/infoteca')}}"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar Infoteca</span></a>
    </div>

        </div> <!-- /Renglon Principal -->
    </div>
  </body>


  @include('seccionesVista.piePagina')

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
  @section('javascript')
  @show
  </body>
</html>
