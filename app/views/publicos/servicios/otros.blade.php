@extends('layout')

@section('head')
@stop

@section('title')
  Otros Servicios | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../../img/inicio/166150527.jpg ');"class="fondo paddingTexto">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisObscuro"><i class="fa fa-th"></i> Otros servicios</h1>
      </div>
    </div>

    <div class="well transparenteClaroTxt animacionContenido">
      <div class="text-justify">
        <div class="row">
          <div class="col-md-12 formatoTexto">
            Como complemento de nuestros servicios fundamentales también ofrecemos otros trabajos que según el caso particular de nuestro cliente pueden ser necesarios o de gran utilidad en el desarrollo de su negocio.
          </div>
        </div>

          <div class="row">
            <!--  <div class="col-md-4">
              <img id="imgI" src="{{URL::asset('img/servicios/454171577.jpg')}}" class="img-rounded img-responsive"/>
            </div> -->
            <div class="col-md-12">
<br>
              <h4 class="grisObscuro">Trámites ante las diferentes dependencias públicas, como pueden ser:</h4>
              <ul>
                <li class="formatoTexto">	Trámite de alta en el Registro Federal de Contribuyentes para personas morales y físicas.</li>
                <li class="formatoTexto">	Inscripciones al IMSS.</li>
                <li class="formatoTexto">	Inscripciones al Infonavit.</li>
                <li class="formatoTexto">	Entre otros.</li>
              </ul>

              <h4 class="grisObscuro">Reportes administrativos, como pueden ser:</h4>
              <ul>
                <li class="formatoTexto">	Administración y control de Comprobantes Fiscales Digitales por Internet.</li>
                <li class="formatoTexto">	Conciliaciones entre la administración del cliente y la contabilidad.</li>
                <li class="formatoTexto">	Entre otros.</li>
              </ul>

            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h4 class="grisObscuro">
                Revisión, supervisión e implementación contable, entre los cuáles ofrecemos:
              </h4>
              <ul>
                <li class="formatoTexto">	Supervisión de contabilidad general.</li>
                <li class="formatoTexto">	Supervisión de contabilidad general de costos.</li>
                <li class="formatoTexto">	Diseño e implementación de sistemas de contabilidad y de costos.</li>
                <li class="formatoTexto">	Entre otros.</li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">

              <div class="row">
                <div class="col-md-12">
                  <h4 class="grisObscuro">
                    Revisión y supervisión fiscal, como pueden ser:
                  </h4>
                  <ul>
                    <li class="formatoTexto">	Revisión de listados de contribuyentes incumplidos.</li>
                    <li class="formatoTexto">	Validación de Comprobantes Fiscales Digitales por Internet.</li>
                    <li class="formatoTexto">	Solicitud de opinión de cumplimiento de obligaciones fiscales.</li>
                    <li class="formatoTexto">	Entre otros.</li>
                  </ul>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h4 class="grisObscuro">
                    Atención a requerimientos de diferentes autoridades, como pueden ser:
                  </h4>
                  <ul>
                    <li class="formatoTexto">	Atención a auditorías por parte de dependencias gubernamentales</li>
                    <li class="formatoTexto">	Entre otras atenciones a requerimientos.</li>
                  </ul>
                </div>
              </div>


            </div>
            <div class="col-md-4">
              <img id="imgI" src="{{URL::asset('img/servicios/454171577.jpg')}}" class="img-rounded img-responsive"/>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12">
              <h4 class="grisObscuro">
                Capacitación y adiestramiento, ofrecemos:
              </h4>
              <ul>
                <li class="formatoTexto">	Capacitación al personal de la empresa para consulta de información en el portal del SAT.</li>
                <li class="formatoTexto">	Capacitación al personal administrativo de la empresa para la emisión de facturas.</li>
                <li class="formatoTexto">Entre otras capacitaciones.</li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h4 class="grisObscuro">
                Operaciones especiales:
              </h4>
              <ul>
                <li class="formatoTexto">	Determinación de la nómina.</li>
                <li class="formatoTexto"> Determinación de pasivos laborales.</li>
                <li class="formatoTexto">	Presentación del informe económico anual dispuesto en la Ley de Inversión Extranjera.</li>
                <li class="formatoTexto">	Registro ante el Registro Nacional de Inversiones Extranjeras.</li>
                <li class="formatoTexto"> Determinación de impuestos a la utilidad.</li>
                <li class="formatoTexto">  Entre otras.</li>
              </ul>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <h4 class="grisObscuro">
                Servicios especiales:
              </h4>
              <ul>
                <li class="formatoTexto">	Estudio de precios de transferencia.</li>
                <li class="formatoTexto">	Plan de negocios.</li>
                <li class="formatoTexto">	Enajenación de acciones.</li>
                <li class="formatoTexto">	Peritaje contable-financiero.</li>
                <li class="formatoTexto">  Entre otros.</li>
              </ul>
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
