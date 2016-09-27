<!DOCTYPE html>
<html lang="es">
@include('seccionesVista.cabeceraPagina')
  <body>
    @section('body')
    @show

    @include('seccionesVista.barraNavegacionPagina')
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
  <!--  -->     @yield('content') <!-- MUESTRA CONTENIDO-->
              </div> <!-- /Columna Contenido -->

              <div class="col-md-3 transladarIzquierda">  <!-- Columna Menu -->
                @include('seccionesVista.menuIntegrate')    <!-- MENU DERECHO INTEGRATE DESDE menuIntegrate.blde.php -->


              </div>  <!-- /Columna Menu -->


          </div>
        </div>

      @include('seccionesVista.piePagina')

      @section('js')
      @show

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
      @section('javascript')
      @show
  </body>
</html>
