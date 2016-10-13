@extends('layoutIntegrate')

@section('head')
  <meta name="description" content="Conocer las vacates y podras envíes tu Currículum Vitae así como tus datos curriculares para futuras oportunidades. ">
  <meta name="keywords" content="postulate, vacantes, desarrollo profesional, desarrollo personal" />
@stop

@section('title')
  Intégrate | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
    <div class="row">
      <div class="transladarDerecha well trasparenteClaroPlus col-md-7 col-md-offset-3">
      <br><br>

        <h3 class="text-center grisObscuro"><strong>Muchas gracias por interesarte en Vázquez Hernández Contadores, S.C.</strong></h3> <br>
        <h4 class="text-center textoNegro">
           A continuación encontrarás la lista de posiciones que estamos buscando. También te invitamos a que envíes tu Currículum Vitae así como tus datos generales y te tendremos en cuenta.
        </h4>
        <br>
        <h4 class="text-center">
            <strong>  <a href="{{ URL::to('publicos/integrate/integrateVacantes')}}" class="enlaceSimple ">Ver vacantes</a></strong>
        </h4>
      </div>

    </div>
@stop

@section('javascript')
  <script>
  	$('#navIntegrate').addClass('activoLi');
  </script>
@stop
