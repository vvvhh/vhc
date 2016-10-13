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
                <h1 class="tamTitulo grisClaro texto3D tituloEntrada"><i class="fa fa-book"></i> Tutoriales</h1>
                <br>
              </div>
            </div>

            <div class="row">

              <div class="col-md-9 animacionContenido">
                 @yield('content') <!--CONTENIDO DEL ARTICULO-->
              </div>

              <div class="col-md-3 transladarIzquierda">
                @include('seccionesVista.menuTutorial')    <!--MENU DE LOS ARTICULOS menuArticulo.blde.php -->
                <br>
                <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/infoteca')}}"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar Infoteca</span></a>
              </div>

          </div>
        </div>

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
