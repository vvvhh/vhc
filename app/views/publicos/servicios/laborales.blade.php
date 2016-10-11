@extends('layoutRibon')

@section('head')
@stop

@section('head')
@stop

@section('title')
  Servicios Laborales | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
    {{ HTML::style('css/lib/sweet-alert.css') }}
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

    <div class="well transparenteClaroTxt animacionContenido">
        <div class="row text-justify">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 ">
                <img id="imgI" src="{{URL::asset('img/servicios/467926585.jpg')}}" class="img-rounded img-responsive"/>
              </div>
              <div class="col-md-8 ">
                <p class="formatoTexto sangria">
                  Nuestros servicios consisten en realizar auditorías en materia de cumplimiento de obligaciones laborales por parte de los patrones que empleen a trabajadores.
                  <br><br>
                  El incumplimiento de obligaciones laborales genera a los patrones intervenciones por parte de la autoridad laboral (STPS), las cuales pueden derivar en sanciones económicas y en ocasiones hasta clausuras parciales o totales de los centros de trabajo.
                  <br><br>
                  Las obligaciones laborales de los patrones derivadas de la Ley Federal del Trabajo, que generalmente se revisan mediante inspecciones, están enfocadas a:
                </p>
              </div>

            </div>

              <br>
              <p>
                <h5 class="grisObscuro"><strong>
                  1. Condiciones generales de trabajo:
                </strong></h5>
                Es el cumplimento y la obligación tanto del patrón como de los trabajadores en los términos en los que se haya pactado la contratación laboral.
              </p>
              <p>
                <h5 class="grisObscuro"><strong>
                  2. Capacitación y adiestramiento:
                </strong></h5>
                Consiste en el compromiso que existe por parte del patrón para proporcionar capacitación, adiestramiento y productividad a todo su personal, independientemente del puesto y área al que pertenezca; a su vez, el trabajador debe aplicar esta formación en su área de trabajo.
              </p>
              <p>
                <h5 class="grisObscuro"><strong>3. Seguridad e higiene:
                </strong></h5>
                Radica en que el patrón incorpore y dé cumplimiento, en los centros de trabajo, a las condiciones laborales, previstas en la ley acerca de la higiene, la seguridad y la salud, con el fin de prevenir y evitar accidentes y enfermedades de trabajo.
              </p>
              <br>
              <p>
                En este sentido, nuestros servicios incluyen acciones encaminadas a comprobar el correcto cumplimiento de las obligaciones laborales enumeradas anteriormente mediante la
                 <strong><a class="enlaceSimple" href="{{ URL::to('publicos/servicios/laboral2')}}"> elaboración de un autodiagnóstico</a></strong>
                 que determinen el grado de desempeño del patrón en dichas obligaciones. Lo anterior conlleva a realizar de manera conjunta –despacho VHC y Patrón- las acciones oportunas, preventivas y correctivas que contribuyan al correcto cumplimiento de los deberes laborales, evitando de esta manera sanciones durante la inspección que lleva a cabo la autoridad laboral.
              </p>
              <br>
              <p><strong> Usted puede realizar su diagnóstico en línea dando clic en el siguiente botón:</strong>

              </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 animacionContenido ">
            <!--    <a href="{{ URL::to('publicos/servicios/autodiagnostico')}}" id="btnEncuesta"type="button" class="btn btn-md btn-success btn-block" ><i class="fa fa-pencil-square-o"></i> Elaborar diagnóstico</a>-->
            <a href="{{ URL::to('publicos/servicios/laboral2')}}" id="btnEncuesta"type="button" class="btn btn-md btn-primary btn-block" ><i class="fa fa-pencil-square-o"></i> Elaborar diagnóstico</a>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            Adicionalmente podemos desarrollar el proceso de <a href="{{ URL::to('publicos/servicios/auditoria?tipoDue=6#tituloServicios')}}">Due Diligence </a> enfocado a los recursos humanos u organizacional
          </div>
        </div>

    </div>  <!-- Well -->

    <div class="row">
      <div class="col-md-2 col-md-offset-10 col-lg-2 col-lg-offset-10 transladarIzquierda">
        <a class="btn btn-md btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i> Regresar</span></a>
      </div>
    </div>

  </div>
</div>
@stop

@section('javascript')
  {{ HTML::script('js/lib/sweet-alert.min.js')}}
  <script>
  	$('#navServicios').addClass('activoLi');

    function mensaje(){

      swal({
        title: "Elaborar diagnóstico laboral en línea",
        text: "Nuestros servicios incluyen acciones encaminadas a comprobar el correcto cumplimiento de las obligaciones laborales. Realizar diagnóstico",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí, realizar ahora",
        cancelButtonText: "Cancelar",
        closeOnConfirm: true
      },
      function(){
        window.location ="laboral2";
      });

    }

    function getRandomInt(min, max) {
      return Math.floor(Math.random() * (max - min)) + min;
    }

    $( document ).ready(function() {
      aleatorio=getRandomInt(5000,15000);
      setTimeout(mensaje,aleatorio);
    });

  </script>

@stop
