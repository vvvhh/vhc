@extends('layout')

@section('head')
@stop

@section('title')
  Servicio Físcal | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../../img/inicio/178709202.jpg ');"class="fondo paddingTexto">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisClaro"><i class="fa fa-gavel"></i> Servicio Fiscal</h1>
      </div>
    </div>

    <div class="well transparenteClaroTxt animacionContenido">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <img id="imgI" src="{{URL::asset('img/servicios/483424523.jpg')}}" class="img-rounded img-responsive"/>
            </div>
            <div class="col-md-8">
              <p class="text-justify formatoTexto2 sangria">
                Los servicios que ofrecemos en este rubro, se encuentran orientados hacia la detección de áreas de oportunidades en eficiencia fiscal.
                <br><br>
Derivado del profundo estudio de las leyes en la materia, así como de reglamentaciones locales, podemos llevar a cabo el control y vigilancia de los impuestos a cargo de nuestros clientes, desde el establecimiento, hasta la prevención y el diseño o ajuste de estrategias, que le permitan al cliente cumplir de forma ágil y oportuna con sus obligaciones tributarias, siempre de acuerdo y en apego estricto al marco legal vigente.

              </p>
              <p class="formatoTexto">

                <h4 class="grisObscuro"><strong>
                  Nuestro campo de actuación en esta área es como sigue:
                </strong> </h4>
                <ul class="formatoTexto">
                  <li> Diagnósticos de carácter fiscal para identificar áreas de oportunidad y/o contingencias. </li>
                  <li> Servicios de control y vigilancia que garanticen el correcto cumplimiento de sus obligaciones fiscales. </li>
                  <li> Servicios de operación. </li>
                  <li> Servicios de asesoría y consultoría fiscal. </li>
                  <li> Servicios de planeación financiera e impositiva.</li>
                  <li>Proceso de <a href="{{ URL::to('publicos/servicios/auditoria#tituloServicios')}}">Due Diligence Fiscal. </a></li>
                </ul>
              </p>

            </div>
          </div>
      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-2 col-md-offset-10 col-lg-2 col-lg-offset-10 transladarIzquierda">
        <a class="btn btn-md btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar</span></a>
      </div>
    </div>

  </div>
</div>
@stop

@section('javascript')
  <script>
  	$('#navServicios').addClass('activoLi');
  </script>
@stop
