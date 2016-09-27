@extends('layout')

@section('head')
@stop

@section('head')
@stop

@section('title')
  Servicios Contables | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('content')
<div style="background-image:url('../../img/inicio/101371076.jpg ');"class="fondo paddingTexto">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisClaro"><i class="fa fa-table"></i> Servicios Contables</h1>
      </div>
    </div>

    <div class="well  transparenteClaroTxt animacionContenido">
        <div class="row text-justify">
          <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <img id="imgI" src="{{URL::asset('img/servicios/101417968.jpg')}}" class="img-rounded img-responsive"/>
                </div>
                <div class="col-md-8">
                  <br>
                  <p class="formatoTexto sangria">
                    En materia de negocios, sabemos la importancia que tiene el hecho de que los empresarios concentren su atención en su actividad principal (objeto de su industria), sin desviarse con tareas contables que obstaculicen su crecimiento. Considerando a la contabilidad como una técnica que se utiliza para el registro de las operaciones que afectan económicamente a la entidad y que produce sistemática y estructuradamente información financiera. Tal información es cuantitativa y se expresa en unidades monetarias, mostrando la posición y desempeño financiero de una organización y busca ser útil para tomar decisiones económicas mediante la evaluación del desempeño y comportamiento futuro de dicha organización, situaciones que se manifiestan fundamentalmente en los estados financieros.
                  </p>
                  <p class="formatoTexto sangria">
                    Es por ello que la generación de información financiera está basada en un Sistema de Información Contable, en el cuál se fundamentan los servicios brindados a nuestros clientes y que están enfocados principalmente en dos vertientes:
                  </p>

                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h4 class="grisObscuro"><strong>Ejecución de contabilidad.</strong></h4>
                  <ul>
                    <li>	Identificación y estudio de nuestro cliente.</li>
                    <li>	Análisis del entorno económico y jurídico en que se desarrolla.</li>
                    <li>	Interpretación del entorno para validar su contexto económico y jurídico y determinar sus necesidades concretas.</li>
                    <li>	Recepción de la información y soporte documental de las operaciones realizadas, asignando su tratamiento contable específico.</li>
                    <li>	Clasificación de información y documentación contable.</li>
                    <li>	Valuar y presentar las operaciones conforme a las Normas de Información Financiera mediante estados financieros; así como la divulgación en notas de aquella información relevante.</li>
                  </ul>
                  <br>
                  <h4 class="grisObscuro"><strong>Supervisión de contabilidad.</strong></h4>
                  <ul>
                    <li>	Revisión, verificación y vigilancia del tratamiento contable asignado a las operaciones de la organización.</li>
                    <li>	Comprobación de procedimientos en materia fiscal, financiera, administrativa y jurídica relacionados con la operación de la compañía de acuerdo a sus circunstancias y necesidades.</li>
                    <li>	Recomendaciones en cuanto al suministro de información requerida por parte de las diferentes autoridades fiscales y administrativas</li>
                  </ul>
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
