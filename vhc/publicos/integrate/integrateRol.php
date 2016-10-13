@extends('layoutIntegrate')

@section('head')
@stop

@section('title')
  Tu rol | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
    <div class="well transparenteClaroTxt animacionContenido">

      <div class="row">
        <h3 class="grisObscuro text-center"><strong>Tu rol en Vázquez Hernández Contadores, S. C.</strong></h3>
      </div>
      <br>
      <div class="row">
        <div class="col-md-5">
          <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/integrate/460916001.jpg')}}"/>
        </div>
        <div class="col-md-7">
          <p class="text-justify textoNegro">
            Te ofrecemos diversas oportunidades de crecimiento dentro de la firma, ya que contamos con diferentes áreas de servicios tales como: financiera, auditoría, contable, fiscal, jurídica y administrativa; de esta manera podrás conocer realmente tu talento en un campo práctico y especializarte en el ramo que más te guste.
          </p>
        </div>


      </div>

    </div>  <!-- Well -->
@stop

@section('javascript')
  <script charset="utf-8">
    $('#liRol').addClass('activoBorde');
  </script>
@stop
