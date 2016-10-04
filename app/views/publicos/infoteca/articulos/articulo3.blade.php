@extends('layoutArticulo')

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

        <!-- CONTENIDO DEL ARTICULO -->
        <h3>“Contraseña”</h3>
        <div class="row">

          <div class="col-md-8">
            <p class="text-justify">
              La palabra “contraseña”, de acuerdo con el diccionario de la lengua española, significa: signo, medio o palabra secreta que permite el acceso a algo, a alguien o a un grupo de personas antes inaccesible.  Así, hoy en día utilizamos contraseñas casi en todo: para el acceso al e-mail, los cajeros automáticos; a la banca electrónica, en las redes sociales, Facebook, Twitter, en los celulares, en las tabletas electrónicas, y más. Pero, ¿por qué su uso se ha convertido en una moda? Pues precisamente para proteger nuestra información y que sólo nosotros podamos consultarla.
            </p>
            <p class="text-justify">
              De esta forma, debido a que las autoridades fiscales se encuentran al día respecto al uso de la tecnología, para agilizar los trámites fiscales y darle seguridad a la información fiscal de los contribuyentes, decidieron establecer el uso de una contraseña para el acceso a sus aplicaciones en internet, y la llamaron “Contraseña”. Ésta, antes denominada CIEC o CIECF, al igual que todas las claves para ingresar a un sistema, es un mecanismo de acceso, que al unirse con el RFC, permite entrar a diversas aplicaciones y servicios que brinda el SAT a través de su página en internet de forma segura. Algunos de estos beneficios son:
            </p>

              <ul style="list-style:none">
                <li>a) Trámite de altas y bajas de obligaciones fiscales.</li>
                <li>b) Suspensión y reanudación de actividades.</li>
                <li>c) Trámite de cambio de domicilio.</li>
                <li>d) Presentación de declaraciones de impuestos.</li>
                <li>e) Consulta de expediente fiscal.</li>
                <li>f) Elaboración de la declaración anual en línea.</li>
              </ul>


            </div>
            <div class="col-md-4">
              <br>
              <img class="img-rounded img-responsive imgN" src="{{URL::asset('img/infoteca/articulos/478728973.jpg')}}"/>
            </div>
        </div>

        <p class="text-justify">
          No está por demás decir, que la “Contraseña” es de uso personal, intransferible, y  secreta, por lo que, si queremos cuidar nuestros datos e información, no podemos compartirla, ni siquiera con quien más confianza tengamos. La “Contraseña” es una firma electrónica y tiene los mismos efectos que una firma en papel.
        </p>

        <br>
        <h4>
          ¿Cómo puedo obtener mi “Contraseña?
        </h4>
        <p class="text-justify">
          La obtención de la “Contraseña” puede realizarse de manera personal en las oficinas del SAT o a través de internet.
        </p>
        <ul>
          <li>
            Para la obtención de la “Contraseña” en las oficinas del SAT, es necesario acudir mediante cita y llevar tu RFC, identificación oficial y una cuenta de e-mail vigente.
          </li>
          <li>Para obtenerla a través de internet, únicamente deberás contar con tu FIEL (Firma Electrónica Avanzada) y tramitarla mediante la aplicación destinada para ello en la página de internet del SAT. Ver tutorial “Obtención de la CONTRASEÑA a través de internet”.
          </li>
        </ul>
        <p class="text-justify">
          Asimismo, para aquellas personas que ya han obtenido su “Contraseña”, pero se les olvidó,  desean cambiarla o actualizar los datos de la misma, podrán llevar a cabo este proceso a través de la misma aplicación con la que la obtuvieron en el portal de internet del SAT, teniendo para ello las siguientes opciones:
        </p>

        <ul>
          <li>
            <strong>Olvido de Contraseña</strong>,  a través de dar respuesta a su pregunta secreta, permitirá capturar una nueva Contraseña.
          </li>
          <li>
            <strong>Cambio de Contraseña</strong>, autenticación a través de la Contraseña actual, permite cambiar la Contraseña.
          </li>
          <li><strong>Actualización de datos </strong>,  autenticación a través de la Contraseña actual, permite cambiar la pregunta y respuesta secreta,  y correo electrónico.
            </li>
        </ul>

        <br><br>
        <p class="text-justify">
          Seguramente tu contador ya te habrá solicitado esta clave para cumplir con tus obligaciones fiscales a través de internet, tales como: trámites, presentación de declaraciones de impuestos, etc., en caso contrario, pregunta si éstas están siendo presentadas mediante el uso de la FIEL, si no es así, entonces será necesario obtener tu “Contraseña” lo antes posible.
        </p>

      <!-- /CONTENIDO DEL ARTICULO -->

    </div>
  </div>
  <small>Autora: L.C. Bibiana I. Nuñez Aguilar</small>
</div>  <!-- /Well Articulo1 -->

@stop

@section('js')
@stop

@section('javascript')
<script>
  $('#ulArtTem1').addClass('in');
  $('#liArt3').addClass('activoBorde');
</script>
@stop
