<!DOCTYPE html>
<html lang="es">
@include('seccionesVista.cabeceraPagina')
  <body>
    @section('body')
    @show

    @include('seccionesVista.barraNavegacionPagina')

<!--  style="background-image:url('../img/inicio/101152541.jpg');"class="fondo paddingTexto"
-->
        <div style="background-image:url('../img/inicio/101152541.jpg');" class=" fondo paddingMenu">

          <div class="row">
            <br>
            <div class="col-md-3 col-md-offset-9">
              <input type="text" name="name" value="" placeholder="Buscar en el sitio web">
            </div>
          </div>



            <div class="row">


              <div class="col-md-2 transladarIzquierda">

                    @include('seccionesVista.menuNosotros') <!-- MUESTRA MENU DE ARTICULOS DESDE menuArticulo.blde.php -->

              </div>

              <div class="col-md-10 animacionContenido">

                            <div class="row" id="tituloPrincipal">
                              <div class="col-lg-12">
                                <br>
                                <h1 class="tituloEntrada tamTitulo grisObscuro header"><i class="fa fa-user"></i> Sobre Nosotros </h1>
                              </div>
                            </div>
                <!--  -->     @yield('content') <!-- MUESTRA CONTENIDO DEL ARTICULO DESDE SU BLADE -->
              </div>


          </div>
        </div>

      @include('seccionesVista.piePagina')

      <script>
         $('#navNosotros').addClass('activoLi');
       </script>
    @section('javascript')
    @show
  </body>
</html>
