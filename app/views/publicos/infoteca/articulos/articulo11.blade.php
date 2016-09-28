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
          El fin del ciclo del contribuyente
        </h3>
        <div class="row">

          <div class="col-md-8">
            <p class="text-justify">
              Existe una cita bíblica que cuando se lee pareciera, hasta cierto punto, enigmática, sin embargo, en esencia es absolutamente verdadera, pues como bien lo afirma: todo tiene su tiempo, y el ciclo del contribuyente, también.
            </p>

            <br>
            <h4>
              ¿En qué momento concluye el ciclo del contribuyente?
            </h4>
            <p class="text-justify">
              En un artículo anterior al que titulamos <i>“Existe vida fiscal después de la muerte.”</i>, comentamos que, efectivamente, cuando una persona fallece, las obligaciones fiscales subsisten hasta en tanto no se adjudiquen a alguien los bienes los bienes y negocios del <i>“de cujus” <sup>1</sup></i>. Una de esas obligaciones es la Cancelación del RFC por defunción, tema que a continuación abordaremos brevemente.
            </p>

            <p class="text-justify">
              Este trámite es, únicamente, aplicable para personas físicas, en el caso de las personas morales (empresas), lo primero que procede para éstas es someterlas a un periodo de liquidación y posteriormente viene la cancelación del RFC.
            </p>

            <p class="text-justify">
              Es importante que consideres que, previo a éste trámite, deberás presentar un aviso denominado Apertura de Sucesión.
            </p>


            </div>
            <div class="col-md-4">
              <br>
              <img class="img-rounded img-responsive imgN" src="{{URL::asset('img/infoteca/resenas/87158796.jpg')}}"/>
            </div>
        </div>


        <br>
        <h4>
          ¿Y cómo se cancela?
        </h4>
        <p class="text-justify">
          Para poder cancelar el RFC de una persona fallecida se debe de presentar, para tal efecto, un aviso ante la oficina del Servicio de Administración Tributaria (SAT) de su preferencia. El trámite puede llevarse a cabo por un familiar del fallecido o algún tercero interesado, debiendo presentar dentro del mes siguiente al fallecimiento del contribuyente, <i>el formato de avisos de liquidación, fusión, escisión y cancelación al RFC (Forma oficial RX)</i> en dos tantos y la copia certificada del acta de defunción expedida por la oficina del Registro Civil. Una vez revisados los documentos por el representante de la autoridad fiscal, harán entrega al interesado del aviso de actualización o modificación de situación fiscal y acuse de actualización al RFC, mismos que deberán ser guardados para cualquier aclaración posterior.
        </p>

        <p class="text-justify">
          Recuerda, que es preferible acudir siempre con cita para disminuir el tiempo de espera de atención.
        </p>

        <p class="text-justify">
          Una vez que resulta procedente la cancelación del RFC, podemos afirmar que formalmente concluye el ciclo del contribuyente.
        </p>

        <p class="text-center">
          “Todo tiene su tiempo y todo lo que se quiere debajo del cielo tiene su hora”
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
  $('#liArt11').addClass('activoBorde');
</script>
@stop
