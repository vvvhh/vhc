@extends('layout')

@section('head')
@stop

@section('title')
  Auditoría Gubernamental | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../../img/servicios/83017290.jpg');"class="fondo paddingTexto">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisClaro"><i class="fa fa-gavel"></i> Auditoría Gubernamental</h1>
      </div>
    </div>

    <div class="well transparenteClaroTxt animacionContenido">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <p class="text-justify formatoTexto2 sangria">
                <br>
                <!--    Elaboración profesional de auditorías, para entidades públicas, en puntos estratégicos, relevantes y prioritarios, apegadas a la normatividad vigente para generar las recomendaciones a implementar y mejorar así la eficiencia de forma preventiva y correctiva.  -->
              </p>
            </div>
            <div class="col-md-4">
              <br><br>
              <img id="imgI" src="{{URL::asset('img/servicios/140301755.jpg')}}" class="img-rounded img-responsive"/>
            </div>
            <div class="col-md-8">

              <p class="formatoTexto">
                <h4 class="grisObscuro"><strong>Opciones de servicio</strong> </h4>
                <ol class="formatoTexto">
                  <li>Elaboración del plan de desarrollo (estatal o municipal)</li>
                  <li>Elaboración de la cuenta pública anual.</li>
                  <li>La Glosa de los informes mensuales.</li>
                  <li>Elaboración, adecuación y actualización, de manuales de organización. </li>
                  <li>Revisión y recomendaciones acerca de la deuda adquirida con instituciones de banca múltiple.</li>
                  <li>Gestiones para obtener recursos para diferentes programas y para gasto corriente en la SHCP. </li>
                  <li>Diagnóstico, implementación y optimización de los procesos de medición, notificación y cobranza con el fin de incrementar los ingresos de la entidad.</li>
                  <li>Asesoría para la elaboración de contratos relacionados con la prestación de bienes o servicios, de obra pública, así como todo lo concerniente al área de adquisiciones con base en: asignaciones y licitaciones de bienes y servicios (restringidas o abiertas). </li>
                  <li>Todo tipo de asesoría relacionadas con el aspecto cuestión legal-administrativo, tanto de la Federación, como de los estados y municipios de la República Mexicana.</li>
                </ul>
              </p>

            </div>
            <div class="col-md-12">
              <p class="formatoTexto">
                Como despacho consultor estableceremos, en principio, controles y procedimientos internos de acuerdo a la normatividad, para que las actuaciones se ajusten a los lineamientos vigentes, previendo así que se tenga la menor cantidad de errores contables y administrativos durante el proceso, haciendo más eficaz y eficiente la gestión.
              </p>
              <p class="formatoTexto">
                En caso de que hubiera revisiones por parte de la Contraloría Interna o bien del órgano fiscalizador, al momento de que estas áreas emitan sus observaciones, nuestra firma está en posibilidades de coadyuvar para solventarlas.
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
