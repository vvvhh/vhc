@extends('layoutNosotros')

@section('head')
  <meta name="description" content="Los contadores y otros profesionistas miembros de Vázquez Hernández Contadores, son profesionales colegiados, y pertenecen entre otros, al Colegio de Contadores Públicos de México, A.C., afiliado al Instituto Mexicano de Contadores Públicos">
  <meta name="keywords" content="contadores, despacho contable, servicios contables" />
@stop

@section('title')
  Sobre Nosotros | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<!--  <div style="background-image:url('../img/inicio/101152541.jpg');"class="fondo paddingTexto">
  <div class="container">
-->

    <div class="well trasparenteClaroPlus animacionContenido" id="titQuienes">

      <div class="row">
        <div class="col-md-4">
          <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/somos/491208519.jpg')}}">
        </div>
        <div class="col-md-8">
        <h3 class="grisObscuro"><strong>¿Quienes somos?</strong></h3>
          <p class="text-justify formatoTexto2">
            <strong>Vázquez Hernández Contadores, S. C.</strong>, se funda en la Ciudad de México, en 1993 por contadores activamente involucrados en la práctica y en todas las áreas de la Contaduría y de la Administración.
          </p>
          <br>
          <p class="text-justify formatoTexto2 ">
            Los miembros de la firma cuentan con una vasta práctica en su especialidad, resultado de su participación y experiencia laboral en despachos de Contaduría, empresas de consultoría, áreas financieras, bufetes jurídicos y colaboración en los sectores tanto público como privado.
          </p>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <p class="text-justify formatoTexto2">
            <strong>Vázquez Hernández Contadores</strong>,
             surge como una respuesta a la necesidad de empresas pequeñas, medianas y grandes, así como de empresarios que desean obtener servicios integrales de calidad a un precio competitivo. Aunado a lo anterior, la firma ha adoptado una política de desarrollo moderado y controlado, a fin de proporcionar siempre a sus clientes un trato directo y personal en la solución de sus problemas contables, financieros, administrativos y fiscales.
          </p>
          <p class="text-justify formatoTexto2">
            Nuestra firma cuenta con la más moderna infraestructura, personal altamente capacitado y colaboradores administrativos de apoyo, lo que nos permite funcionar en una manera muy eficiente.
          </p>
          <p class="text-justify formatoTexto2">
            Los contadores y otros profesionistas miembros de Vázquez Hernández Contadores, son profesionales egresados de diversas instituciones y pertenecen entre otros, al Colegio de Contadores Públicos de México, A.C., afiliado al Instituto Mexicano de Contadores Públicos.  Además, mantenemos contacto continuo y directo con despachos de contadores y otros profesionistas de prestigio en nuestro país, para ofrecer un servicio integral enfocado siempre a la satisfacción de nuestros clientes.
          </p>
          <p class="text-justify formatoTexto2">
            De igual forma, somos parte de la Comisión Fiscal de la Confederación Patronal de la República Mexicana, COPARMEX Ciudad de México, lo que nos ha permitido involucrarnos en el estudio y análisis de diversos temas fiscales que afectan al sector empresarial en sus diferentes ámbitos de negocio, así como fomentar el acercamiento a las autoridades en dicha materia.
          </p>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-7">
          <p class="">
            Fungimos como síndicos del contribuyente ante COPARMEX y las autoridades hacendarías federales (SHCP-SAT). Representamos al gremio empresarial de COPARMEX y generamos, de acuerdo con las autoridades fiscales, opiniones y recomendaciones con respecto a los asuntos relacionados con la aplicación de las normas fiscales.
          </p>
        <!--    <p class="text-justify formatoTexto2">
            Representamos al gremio empresarial de COPARMEX y generamos, de acuerdo con las autoridades fiscales, opiniones y recomendaciones con respecto a los asuntos relacionados con la aplicación de las normas fiscales.
          </p> -->
          <br>
          <p class="text-justify formatoTexto2">
            Adicionalmente, participamos de manera activa en instituciones de educación superior y en organismos privados difundiendo una cultura financiera y fiscal.
          </p>
          <p class="text-justify formatoTexto2">
            Por lo tanto, nuestra filosofía atiende al siguiente pronunciamiento.
          </p>
        </div>
        <div class="col-md-5">
          <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/somos/466160265.jpg')}}" id="titMision">
        </div>
      </div>
    </div>


    <!-- MisionVision -->
    <div class="well trasparenteClaroPlus animacionContenido">
      <div class="row">
        <div class="col-md-4">  <!-- 464982773.jpg -->
          <img class="imgSm img-responsive img-rounded" src="{{URL::asset('img/somos/469955903.jpg')}}" alt="">
        </div>
        <div class="col-md-8">
          <h3 id="mision" class="grisObscuro"><strong><i class="fa fa-check-square"></i> Misión </strong></h3>
          <p class="text-justify formatoTexto2 sangria">
            Contribuir con nuestros servicios en Contaduría para satisfacer las necesidades de la comunidad empresarial aportando valor en nuestro actuar, basándonos en el capital intelectual de nuestra firma, bajo un marco de confianza, ética profesional, mejora continua y calidad.
          </p>
        </div>
      </div>
    </div>
    <div class="well trasparenteClaroPlus animacionContenido">
      <div class="row">
        <div class="col-md-4"> <!-- 155786129.jpg -->
          <img class="imgSm img-responsive img-rounded " src="{{URL::asset('img/somos/78294381.jpg')}}" >
        </div>
        <div class="col-md-8">
          <h3 class="grisObscuro"><strong><i class="fa fa-check-square"></i> Visión</strong></h3>
          <p class="text-justify formatoTexto2 sangria" id="titVision">
            Ser a nivel nacional e internacional, una excelente firma de profesionales en la contaduría, generando valor a sus clientes, a sus colaboradores y a las entidades que participen en ella, para alcanzar así, objetivos aun inasequibles.
          </p>
        </div>
      </div>
    </div>
    <!-- Valores -->
    <div class="well trasparenteClaroPlus animacionContenido" id="titValores">
      <div class="row">
        <div class="col-md-4"> <!-- 491523013.jpg -->
          <img class="imgSm img-responsive img-rounded center-block" src="{{URL::asset('img/somos/128019888.jpg')}}" alt="">
        </div>
        <div class="col-md-8">
          <h3 id="valores" class="grisObscuro"><strong><i class="fa fa-check-square"></i> Valores</strong></h3>
          <p class="text-justify formatoTexto2 sangria">
            Nuestra firma cuenta con valores que constituyen su filosofía, los cuales coadyuvan a cumplir con los compromisos y responsabilidades internos y externos, estos simbolizan la esencia del personal que conforma la firma y son, a su vez, la piedra angular que fundamenta nuestra Institución.
          </p>
          <p class="text-justify formatoTexto2">
            Los siguientes valores, representan la esencia de las personas que conformamos esta firma y son el cimiento de la filosofía, sistemas, procedimientos, políticas y proceder de nuestra Institución: Vázquez Hernández Contadores.
          </p>
          <div class="row">
            <div class="col-md-6">
              <ul class="text-justify formatoTexto2">
                <li id="liConfianza" class="liSomos">Confianza</li>
                <li id="liCompromiso" class="liSomos">Compromiso</li>
                <li id="liPerseverancia" class="liSomos">Perseverancia</li>
                <li id="liRespeto" class="liSomos">Respeto</li>
                <li id="liEtica" class="liSomos"> Ética Profesional</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="text-justify formatoTexto2">
                <li id="liTrabajo" class="liSomos">Trabajo en Equipo</li>
                <li id="liExelencia" class="liSomos">Excelencia</li>
                <li id="liLiderazgo" class="liSomos">Liderazgo</li>
                <li id="liEntusiasmo" class="liSomos">Entusiasmo</li>
              </ul>
            </div>

          </div>
        </div>
      </div>

    </div> <!-- ./Well -->

    <div class="well trasparenteClaroPlus animacionContenido" id="titValores">
      <div class="row">
        <div class="col-md-4"> <!-- 491523013.jpg -->
          <img class="imgS2 img-responsive img-rounded" src="{{URL::asset('img/integrate/494977777.jpg')}}">
        </div>
        <div class="col-md-8">
          <h3 id="valores" class="grisObscuro"><strong><i class="fa fa-check-square"></i> Código de conducta</strong></h3>
          <p class="text-justify formatoTexto2 text-center">
            Es nuestra guía de comportamiento adecuado, es decir el <strong>“deber ser”</strong> y el <strong>“bien actuar”.</strong>
          </p>
          <a  href="{{ URL::to('publicos/sobreNosotrosCCconduta')}}"><button class="btn btn-primary btn-sm">Ver nuestro código de conducta</button></a>

        </div>
      </div>  <!-- ./Well -->

    </div>
<!--    </div>
</div> -->
@stop

@section('javascript')
  <script>
	   $('#navNosotros').addClass('activoLi');
 </script>
 {{ HTML::script('js/lib/bootbox.min.js', array('async' => 'async'))}}
 {{ HTML::script('js/publicos/sobreNosotros.js')}}


@stop
