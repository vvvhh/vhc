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
        <h3>
          ¿Conoces la PRODECON?
        </h3>
        <div class="row">

          <div class="col-md-12">
            <p class="text-justify">
              Existe una cita bíblica que cuando se lee pareciera, hasta cierto punto, enigmática, sin embargo, en esencia es absolutamente verdadera, pues como bien lo afirma: todo tiene su tiempo, y el ciclo del contribuyente, también.
            </p>
            <p class="text-justify">
              En México, nuestro sistema jurídico prevé la existencia de diversos organismos o instituciones que apoyen en la protección de los derechos de los ciudadanos y que cuentan con autonomía técnica funcional y de gestión en diversas materias. Una de esas materias, y sin duda de las más importantes, es la relacionada con el pago de impuestos, y al respecto en nuestro país ya contamos con un organismo que realiza esas funciones, ésta es la Procuraduría de la Defensa del Contribuyente, mejor conocida como la Prodecon.
            </p>
            <br>
            <h4>
              Seguramente ya habrás escuchado en radio lo siguiente:
            </h4>
            <p class="text-justify">
              <i>“Recibí una multa fiscal y no sé qué hacer”
              </i>
              <br>
              <i>“Me embargaron mi cuenta bancaria y no sé qué hacer”
              </i>
              <br>
              <i>“Tengo una devolución de impuestos y no sé cómo recuperarlos”
              </i>
              <br>
              <i>“En estas situaciones no estás solo. ¿Requieres de un defensor gratuito en materia fiscal  que intervenga ante la autoridad para ayudarte?
              </i>
              <br>
              <i>“Tú que pagas impuestos tienes derechos como contribuyente y cuentas con un organismo autónomo que te protege”
              </i>
            </p>


            </div>
        <!--      <div class="col-md-4">
              <br>
              <img class="img-rounded img-responsive imgN" src="{{URL::asset('img/infoteca/resenas/87158796.jpg')}}"/>
            </div>
            -->
        </div>


        <br>

        <p class="text-justify">
          Éstos, son los spots mediante los cuales el gobierno federal anuncia y promueve los servicios de la Procuraduría de la Defensa del Contribuyente, institución que puede apoyarte, por ejemplo, cuando recibes algún documento de la autoridad fiscal y no sabes cómo atenderlo, cuando tienes una auditoría y consideras que la autoridad no está procediendo de manera correcta, cuando requieras de un defensor gratuito en materia fiscal que te apoye en Tribunales, o simplemente porque tienes una duda o cierto problema con el pago de tus impuestos.
        </p>

        <br>
        <h4>
          ¿Qué es la PRODECON?
        </h4>
        <p class="text-justify">
          La Procuraduría de la Defensa del Contribuyente es un organismo público descentralizado no sectorizado, con autonomía técnica funcional y de gestión, especializado, por supuesto, en materia tributaria, el cual inició sus actividades el 1° de septiembre del 2011.
        </p>

        <p class="text-justify">
          La Prodecon tiene como finalidad defender los derechos e intereses de los contribuyentes en materia fiscal y administrativa, para ello es que proporciona de manera gratuita servicios de asesoría y consulta, así como de representación y defensa a los ciudadanos que soliciten su intervención.
        </p>


        <h4>¿En qué aspectos puede intervenir la Prodecon?
        </h4>
        <p>
          Las facultades más importantes que tiene la PRODECON son las siguientes:
          <ul>
            <li>
              Procurar la conciliación, cuando sea procedente, entre el ciudadano y la autoridad.
            </li>
            <li>
              Dar atención y resolución a las solicitudes de asesoría  y consulta que presenten los contribuyentes derivadas de actos emitidos por autoridades fiscales federales.
            </li>
            <li>
              Promover en representación de los gobernados, recursos administrativos ante la autoridad fiscal o ante el Tribunal Federal de Justicia Fiscal y Administrativa.
            </li>
            <li>
              Promover e impulsar con las autoridades fiscales y administrativas una actuación de equidad y respeto hacia los ciudadanos.
            </li>
            <li>
              Recibir las quejas, reclamaciones y sugerencias relacionadas con los trámites y procedimientos fiscales.
            </li>
          </ul>
        </p>

        <br>
        <p class="text-justify">
          Así que ya sabes, la próxima vez que tengas algún problema, queja o duda relacionada con la prestación de los servicios que te brindan las autoridades fiscales, recuerda que cuentas con una institución que te apoya.
        </p>

        <p class="text-justify">
          Vale la penar replicar el pronunciamiento con que la mencionada Procuraduría concluye sus anuncios publicitarios:
        </p>

        <blockquote>
          <b><i>“La PRODECON te protege, defiende y observa”</i></b>
        </blockquote>

        <p class="text-justify">
          Hasta hace algunos años no existían este tipo de organismos que apoyaran a los ciudadanos en cuestiones fiscales, y mucho menos para defenderlos, así que es momento de conocerlas y aprovechar los servicios que ofrecen.
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
  $('#liArt10').addClass('activoBorde');
</script>
@stop
