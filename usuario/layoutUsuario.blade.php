<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="cache-control" content="must-revalidate" />
  <meta name="author" content="edSantiago" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  @section('head')
  @show
  <link rel="icon" type="image/png" href="{{ URL::asset('img/favicon.png'); }}"/>

  <title>
    @section('title')
    @show
  </title>

  {{ HTML::style('css/bootstrap.min.css') }}  
  {{ HTML::style('fonts/font-awesome/css/font-awesome.min.css') }}

  {{ HTML::style('css/publicos/sesion2.css') }}
  @section('css')
  @show

  {{ HTML::script('js/jquery.js') }}
  {{ HTML::script('js/bootstrap.min.js')}}


</head>

  <body >
    @section('body')
    @show

    @include('seccionesVista.usuarioBarraNav')

        <div  id="contenidoUsuario" class="paddingMenu">
          <div> <!-- Container -->
            <div class="row">
              <div class="col-lg-12">
                <h1 id="nUsuario" class="tituloEntrada page-header tamTitulo textoAzul texto3D "><span class="glyphicon glyphicon-user"></span> {{Session::get('nombre')}} </h1>
              </div>
            </div>

            <div class="row"> <!-- Renglon Principal -->
              <aside class="col-md-2 col-lg-2 transladarDerecha">
                @include('seccionesVista.usuarioMenu')
              </aside>

              <div class="col-md-10 col-lg-10 transladarIzquierda"> <!-- Columna Contenido -->
  <!--  -->     @yield('content') <!-- AQUI SE MUESTRA EL CONTENIDO DESDE SU BLADE -->
              </div> <!-- /Columna Contenido -->


          </div> <!-- /Renglon Principal -->
          </div>  <!-- /Container -->
        </div>

        @include('seccionesVista.usuarioPiePag')

        <script>
          //jQuery to collapse the navbar on scroll
          $(window).scroll(function() {
              if ($(".navbar").offset().top > 50) {
                  $(".navbar-fixed-top").addClass("top-nav-collapse");
              } else {
                  $(".navbar-fixed-top").removeClass("top-nav-collapse");
              }
          });
        </script>
        @section('js')
        @show

    @section('javascript')
    @show
  </body>
</html>
