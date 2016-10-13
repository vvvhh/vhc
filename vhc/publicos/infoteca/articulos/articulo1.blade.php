@extends('layoutTutorial')

@section('head')
@stop


@section('title')
Artículos | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div class="well transparenteClaroMTxt">  <!-- Well Articulo1 -->
  <div class="row">
    <div class="col-md-12">

      <h3 class=" grisObscuro">
        Inscripción en el RFC sólo con tu CURP
      </h3>
      <div class="row">
        <div class="col-md-12">

        <p class="text-justify">
          Recordemos que, conforme a nuestra Constitución, una de las principales obligaciones de mexicanos y extranjeros residentes en México, es el pago de impuestos y, como consecuencia de ello, <strong> la inscripción en el Registro Federal de Contribuyentes (RFC)</strong>.
        </p>
        <p class="text-justify">
          Hace algunos años, inscribirte en el RFC era un tormento, desde la cantidad de documentos que debías presentar hasta las largas filas que debías hacer para realizar tu trámite. Así las cosas, las autoridades fiscales, interesadas en el tema de “simplificación fiscal” se han reorganizado para poder ofrecer a los contribuyentes trámites rápidos y sencillos. De esta forma, actualmente la mayor parte de los trámites que debes realizar ante el Servicio de Administración Tributaria (SAT), pueden llevarse a cabo a través de su página en internet, agilizando de esta forma los procesos y evitando con ello, que el contribuyente deba trasladarse a las oficinas de atención fiscal.
        </p>

        <p class="text-justify">
          Hasta el año pasado, la inscripción al RFC para personas físicas, sólo podía realizarse presentándose en la Administración Local de Recaudación; si lo deseabas, era posible realizar tu preinscripción a través de internet, pero el trámite debía ser concluido personalmente. No obstante, hoy en día es posible inscribirte al RFC sin necesidad de desplazarte a las oficinas del SAT, lo único que debes tener a la mano es tu Clave Única de Registro de Población, mejor conocida como CURP.
        </p>

        <p class="text-justify">
          La inscripción al RFC a través de la CURP es factible para aquellas personas que están próximas a incorporarse al sector productivo como: contratarse como asalariado o si estás próximo a emprender un negocio pero aún no tienes fecha precisa. El generar tu RFC no te causará ninguna obligación, hasta el momento que desempeñes alguna actividad económica. Momento en el cual te recomendamos apoyarte de algún asesor fiscal para determinar correctamente el régimen fiscal que te aplicará.
        </p>

        <p class="text-justify">
          Recordemos que el régimen fiscal depende de la actividad económica, laboral o profesional que realizas, es el cajón en el cual la autoridad te colocará y por ende las obligaciones fiscales que deberás cumplir.
        </p>

        <p class="text-justify">
          El procedimiento para la obtención de tu RFC mediante la CURP es el siguiente:
        </p>

        <ol class="text-justify">
          <li>
            Ingresa a la página <a href="http://www.sat.gob.mx" target=blanck>www.sat.gob.mx</a> y posteriormente a la sección de Trámites.
            <br><br>
            <div class="" align=center>
                <img  class="img-rounded img-responsive " src="{{URL::asset('img/infoteca/articulos/art1-1.png')}}"/>
            </div>

          </li>
          <br>
          <li>
            	Dar clic en el Menú superior de la pantalla en la opción RFC y posteriormente Inscripción con CURP.
              <br><br>
              <div class="" align=center>
                <img  align=center class="img-rounded img-responsive " src="{{URL::asset('img/infoteca/articulos/art1-2.png')}}"/>
              </div>
          </li>
          <br>
          <li>
            	Ahora captura tu CURP así como el texto de la imagen y da clic en Continuar.
              <br><br>
              <div class="" align=center>
                  <img class="img-rounded img-responsive " src="{{URL::asset('img/infoteca/articulos/art1-3.png')}}"/>
              </div>

          </li>

          <li>
            	Finalmente el sistema de solicitará tu domicilio y una dirección de correo electrónico. Una vez introducidos los datos, podrás descargar tu Cédula de Identificación Fiscal, la cual tiene tu RFC y un código de barras.
              <br><br>
          </li>
        </ol>

        <small>Imágenes:<a href="http://www.sat.gob.mx" target=blanck>www.sat.gob.mx</a></small>

        </div>
      </div> <!-- /row -->


    </div>
  </div>
</div>  <!-- /Well Articulo1 -->

@stop

@section('js')
@stop

@section('javascript')
  <script>
    $('#ulArtTem1').addClass('in');
    $('#liArt1').addClass('activoBorde');
  </script>
@stop
