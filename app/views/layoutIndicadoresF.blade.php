<!DOCTYPE html>
<html lang="es">
@include('seccionesVista.cabeceraPagina')
  <body>
    @include('seccionesVista.barraNavegacionPagina')

    @section('body')
    @show
        <div class="fondoInfoteca fondo paddingMenu">
            <div class="row">
              <div class="col-lg-12">
                <br>
                <h1 class="tamTitulo grisClaro texto3D tituloEntrada">
                  <i class="fa fa-line-chart"></i> Indicadores</h1>
                <br>
              </div>
            </div>

            <div class="row">

             <div class="col-md-2 transladarIzquierda">
                    @include('seccionesVista.menuIndicadoresF')    <!-- MUESTRA MENU DE ARTICULOS menuArticulo.blde.php -->
              </div>

              <div class="col-md-10 animacionContenido">
  <!--  -->     @yield('content') <!-- MUESTRA EL CONTENIDO DEL ARTICULO -->
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
