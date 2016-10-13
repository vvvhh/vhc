@extends('layoutRibon')

@section('head')
@stop

@section('title')
  Servicios Laborales | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../../img/inicio/478771527.jpg');"class="fondo paddingTexto">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisObscuro texto3d"><i class="fa fa-suitcase"></i> Servicios Laborales</h1>
      </div>
    </div>


    <div class="well trasparenteClaroPlus animacionContenido" id="pnlPregunta">
          <div class="row">
            <div class="col-md-7">
              <p class=" formatoTexto4 text-center">
                <strong> El diagnóstico esta constituido por 3 cuestionarios con 20 preguntas cada una.</strong>
              </p>
              <p class=" formatoTexto4">
                <br>
                <i class="fa fa-suitcase text-primary"></i> El primer cuestionario se enfoca en las Condiciones Generales de Trabajo.
                <br><br>
                <i class="fa fa-male text-primary"></i> El segundo cuestionario esta orientado a la Capacitación y Adiestramiento.
                <br><br>
                <i class="fa fa-medkit text-primary"></i> Y un tercer cuestionario esta encauzado a la Seguridad e Higiene.
                <br><br><br>
              </p>
            </div>
            <div class="col-md-5">
              <img src="{{URL::asset('img/servicios/158546528.jpg')}}" class="img-rounded img-responsive" />
            </div>
          </div>

          <br> <br>
            <div class="row">
              <div class="col-md-12">
                <br>
                <p class="formatoTexto4 text-center">
                  Usted puede realizar un cuestionario con el tema de su interés seleccionando alguna de las siguientes opciones:
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4"  style="padding-bottom: 5%">
                <a href="{{ URL::to('publicos/servicios/autodiagnostico?c=0')}}" id="btnEncuesta"type="button" class="btn btn-lg btn-primary btn-block"><i class="fa fa-suitcase"></i> Condiciones generales de trabajo</a>
              </div>
              <div class="col-md-4" style="padding-bottom: 5%">
                <a href="{{ URL::to('publicos/servicios/autodiagnostico?c=1')}}" id="btnEncuesta"type="button" class="btn btn-lg btn-primary btn-block"><i class="fa fa-male"></i> Capacitación y adiestramiento.</a>
              </div>
              <div class="col-md-4" style="padding-bottom: 5%">
                <a href="{{ URL::to('publicos/servicios/autodiagnostico?c=2')}}" id="btnEncuesta"type="button" class="btn btn-lg btn-primary btn-block"><i class="fa fa-medkit"></i> Seguridad e higiene</a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <p class="text-center formatoTexto4">
                  También puede realizar un diagnostico laboral completo que incluye los 3 temas antes mencionados seleccionando la siguiente opción:
                </p>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <a href="{{ URL::to('publicos/servicios/autodiagnostico?c=0')}}" id="btnEncuesta"type="button" class="btn btn-lg btn-primary btn-block" ><i class="fa fa-pencil-square-o"></i> Diagnóstico Completo</a>
              </div>
            </div>

          </div>




    <div class="row">
      <div class="col-md-2 col-md-offset-10 col-lg-2 col-lg-offset-10 transladarIzquierda">
        <a class="btn btn-md btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i> Regresar</span></a>
      </div>
    </div>

  </div>
</div>
@stop

@section('js')
@stop

@section('javascript')
  <script>
  	$('#navServicios').addClass('activoLi');
  </script>
@stop
