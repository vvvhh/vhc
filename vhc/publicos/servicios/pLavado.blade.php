@extends('layout')

@section('head')
@stop

@section('title')
  Servicios de Asesoría en materia de Prevención de Lavado de Dinero | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../../img/inicio/91430302.jpg ');"class="fondo paddingTexto">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisObscuro"><i class="fa fa-money"></i> Servicios de Asesoría en materia de Prevención de Lavado de Dinero (PLD)</h1>
      </div>
    </div>

      <div class="well text-justify transparenteClaroTxt animacionContenido">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                Los servicios que ofrecemos se enfocan en apoyar a nuestros clientes en el cumplimiento de las obligaciones en materia de PLD, como consecuencia de las operaciones que desarrollan.
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <img id="imgI" src="{{URL::asset('img/servicios/139543897.jpg')}}" class="img-rounded img-responsive"/>
              </div>
              <div class="col-md-8">
                <br>
                <strong>
                  1. Diagnóstico y recomendaciones sobre controles de prevención de lavado de dinero
                </strong>
                <ul>
                  <li>	Conozca a su Cliente (KYC) </li>
                  <li>	Revisión de las Políticas de Identificación de Cliente (KYC) </li>
                  <li>	Cómo se determina el perfil transaccional </li>
                  <li>	Monitoreo y reportes internos </li>
                  <li>	Revisión de la correcta integración de expedientes de clientes </li>
                  <li>	Evaluación de la clasificación basada en el nivel de riesgo </li>
                  <li>	Identificación de operaciones de alto riesgo </li>
                  <li>	Actualización del perfil de alto riesgo </li>
                  <li><a href="{{ URL::to('publicos/servicios/auditoria?tipoDue=7#tituloServicios')}}">	Proceso de Due Dilligence basado en el nivel de riesgo </a></li>
                  <li>	Elaboración o modificación del manual que condensa las políticas, criterios, medidas y procedimientos internos para el debido cumplimiento de la Ley Federal de Prevención e Identificación de Operaciones con Recursos de Procedencia Ilícita, el reglamento de la misma, las reglas de carácter general y demás disposiciones de que de éstas emanen.</li>
                </ul>

              </div>
              <div class="col-md-12">

              </div>
            </div>

            <div class="row">
              <div class="col-md-8">
                <strong>2.Asesoría al Responsable de Cumplimiento de disposiciones contenidas en la LFPIORPI </strong>
                <ul>
                  <li>	Revisión de las funciones del Responsable de Cumplimiento de disposiciones de la LFPIORPI </li>
                  <li>	Implementación de programas anti lavado de dinero </li>
                  <li>	Control y vigilancia en la implementación del programa anti lavado de dinero </li>
                </ul>
                <br>
                <br>
              <!--  <p>
                  <strong>Usted puede realizar su diagnóstico en materia de PLD dando clic en el siguiente botón:</strong>
                </p>
                 <a href="{{ URL::to('publicos/servicios/autodiagnosticoPLD')}}" id="btnEncuesta"type="button" class="btn btn-md btn-success btn-lg" ><i class="fa fa-pencil-square-o"></i> Elaborar diagnóstico</a>
                 -->
              </div>
              <div class="col-md-4">
                <img id="imgI" src="{{URL::asset('img/servicios/90688864.jpg')}}" class="img-rounded img-responsive"/>
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
