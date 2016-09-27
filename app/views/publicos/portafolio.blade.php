@extends('layout')

@section('head')
  <meta name="description" content="Testimonios y algunos clientes en Vázquez Hernández Contadores, S.C.">
  <meta name="keywords" content="testimonios, clientes" />
@stop

@section('title')
  Portafolio | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../img/inicio/471979333.jpg ');"class="fondo paddingTexto">

  <div class="row">
    <br>
    <div class="col-md-3 col-md-offset-9">
      <input type="text" name="name" value="" placeholder="Buscar en el sitio web">
    </div>
  </div>


  <div class="container">
    <!-- carusel Testimonios -->
      <div class="row" id="renglonTestimonios">
        <div class="col-lg-12">
          <br>
          <h1 class="tituloEntrada tamTitulo grisObscuro"><i class="fa fa-comment"></i> Testimonios </h1>
        </div>
      </div>

      <div class="row">

      <div class="col-md-8 col-md-offset-2 transladarDerecha">
        <div id="carouselTestimonios" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">
            <li data-target="#carouselTestimonios" data-slide-to="0" class="active"></li>
            <li data-target="#carouselTestimonios" data-slide-to="1"></li>
            <li data-target="#carouselTestimonios" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img class="img-responsive imgPortafolio" src="{{URL::asset('img/portafolio/tes1.png')}}" >
            </div>
            <div class="item">
              <img class="img-responsive imgPortafolio" src="{{URL::asset('img/portafolio/tes2.png')}}" >
            </div>
            <div class="item">
              <img class="img-responsive imgPortafolio" src="{{URL::asset('img/portafolio/tes3.png')}}">
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carouselTestimonios" data-slide="prev">
            <span class="icon-prev"></span>
          </a>
          <a class="right carousel-control" href="#carouselTestimonios" data-slide="next">
            <span class="icon-next"></span>
          </a>
        </div>
      </div> <!-- /carusel Testimonios -->
    </div>

      <div class="row" id="renglonClientes tituloEntrada">
        <div class="col-lg-12">
          <br>
          <h1 class="tituloEntrada tamTitulo grisObscuro ">  Algunos de nuestros clientes </h1>
          <br>
        </div>
      </div>

    <div class="row center-block transladarDerecha">
      <div class="col-md-4 col-sm-6 animEscalarSimple" id="portafolio">
        <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/portafolio/CEstrategias.jpg')}}">
      </div>

      <div class="col-md-4 col-sm-6 animEscalarSimple" id="portafolio">
        <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/portafolio/CfernandezE.jpg')}}">
      </div>

      <div class="col-md-4 col-sm-6 animEscalarSimple" id="portafolio">
        <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/portafolio/CFinanet.png')}}">
      </div>

      <div class="col-md-4 col-sm-6 animEscalarSimple" id="portafolio">
        <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/portafolio/Cpikoff.jpg')}}">
      </div>

      <div class="col-md-4 col-sm-6 animEscalarSimple" id="portafolio">
        <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/portafolio/CPM.jpg')}}">
      </div>

      <div class="col-md-4 col-sm-6 animEscalarSimple" id="portafolio">
        <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/portafolio/CUBI.jpg')}}">
      </div>

      <div class="col-md-4 col-sm-6 animEscalarSimple" id="portafolio">
        <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/portafolio/CXventure.png')}}">
      </div>

    </div>

    </div> <!-- /Container -->

</div>
@stop

@section('javascript')
<script>
  $('#carouselTestimonios').carousel({
    interval: 4000
  });
	$('#navPortafolio').addClass('activoLi');
</script>
@stop
