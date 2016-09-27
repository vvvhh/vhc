@extends('layout')

@section('head')
  <meta name="description" content="Contenido multimedia relativo al área contable.">
  <meta name="keywords" content="videos, podcast, artículos, reseñas, tutoriales, indicadores fiscales, legislación mexicana" />
@stop

@section('title')
  Infoteca | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../img/infoteca/467228677.jpg');"class="fondo paddingTexto">
  <div class="row">
    <br>
    <div class="col-md-3 col-md-offset-9">
      <input type="text" name="name" value="" placeholder="Buscar en el sitio web">
    </div>
  </div>


  <div class="container">

  <div class="row">
    <div class="col-lg-12">
      <br>
      <h1 class="tituloEntrada tamTitulo grisObscuro "><i class="fa fa-folder-open"></i> Infoteca</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-6 transladarDerecha" id="portfolio">
      <div class="portfolio-item ">
          <a href="{{URL::to('publicos/infoteca/videos/video1')}}" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                      <h2 class="grisClaro"> <i class="fa fa-plus fa-3x"></i> videos</h2>
                  </div>
              </div>
              <div class="well noticiasWell grisObscuro text-center">
                  <img id="imgI" class="img-responsive imgResena" src="{{URL::asset('img/infoteca/490377069.jpg')}}" alt="videos" />
                    <h4><i class="fa fa-film"></i> Videos</h4>
              </div>
          </a>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 transladarAbajo" id="portfolio">
      <div class="portfolio-item ">
          <a href="{{ URL::to('publicos/infoteca/podcast')}}" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                      <h2 class="grisClaro"> <i class="fa fa-plus fa-3x"></i> podcast</h2>
                  </div>
              </div>
              <div class="well noticiasWell grisObscuro text-center">
                  <img id="imgI" class="img-responsive imgResena" src="{{URL::asset('img/infoteca/103583035.jpg')}}"/>
                  <h4><i class="fa fa-microphone"></i> Podcast</h4>
              </div>
          </a>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 transladarIzquierda" id="portfolio">
      <div class="portfolio-item ">
          <a href="{{ URL::to('publicos/infoteca/articulos/articulo1')}}" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                      <h2 class="grisClaro"><i class="fa fa-plus fa-3x"></i> artículos</h2>
                  </div>
              </div>
              <div class="well noticiasWell grisObscuro text-center">
                  <img id="imgI" class="img-responsive imgResena" src="{{URL::asset('img/infoteca/465911039.jpg')}}"/>
                  <h4><i class="fa fa-file-text-o"></i> Artículos </h4>
              </div>
          </a>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 transladarDerecha" id="portfolio">
      <div class="portfolio-item ">
          <a href="{{ URL::to('publicos/infoteca/resenas/resena1')}}" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                      <h2 class="grisClaro"> <i class="fa fa-plus fa-3x"></i> reseñas</h2>
                  </div>
              </div>
              <div class="well noticiasWell grisObscuro text-center">
                  <img id="imgI" class="img-responsive imgResena" src="{{URL::asset('img/infoteca/488046651.jpg')}}"/>
                  <h4><i class="fa fa-pencil"></i> Reseñas</h4>
              </div>
          </a>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 transladarAbajo" id="portfolio">
      <div class="portfolio-item ">
          <a href="{{ URL::to('publicos/infoteca/tutoriales/tutorial1')}}" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                      <h2 class="grisClaro"> <i class="fa fa-plus fa-3x"></i> tutoriales</h2>
                  </div>
              </div>
              <div class="well noticiasWell grisObscuro text-center">
                  <img id="imgI" class="img-responsive imgResena" src="{{URL::asset('img/infoteca/493918821.jpg')}}"/>
                  <h4><i class="fa fa-book"></i> Tutoriales</h4>
              </div>
          </a>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 transladarIzquierda" id="portfolio">
      <div class="portfolio-item ">
          <a href="{{ URL::to('publicos/infoteca/indicadoresF/seguridadS/ssCuotasImss')}}" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                      <h2 class="grisClaro"><i class="fa fa-plus fa-3x"></i> indicadores</h2>
                  </div>
              </div>
              <div class="well noticiasWell grisObscuro text-center">
                  <img id="imgI" class="img-responsive imgResena" src="{{URL::asset('img/infoteca/464236751.jpg')}}"/>
                  <h5><i class="fa fa-line-chart"></i> Indicadores Fiscales</h5>
              </div>
          </a>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 transladarDerecha" id="portfolio">
      <div class="portfolio-item ">
          <a href="{{ URL::to('publicos/infoteca/legislacion')}}" class="portfolio-link" data-toggle="modal">
              <div class="caption">
                  <div class="caption-content">
                      <h2 class="grisClaro"><i class="fa fa-plus fa-3x"></i> legislación</h2>
                  </div>
              </div>
              <div class="well noticiasWell grisObscuro text-center">
                  <img id="imgI" class="img-responsive imgResena" src="{{URL::asset('img/infoteca/156628164.jpg')}}"/>
                  <h4><i class="fa fa-gavel"></i> Legislación</h4>
              </div>
          </a>
      </div>
    </div>
  </div>

</div>
</div>
@stop

@section('javascript')
  <script>
  	$('#navInfoteca').addClass('activoLi');
  </script>
@stop
