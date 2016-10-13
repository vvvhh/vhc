@extends('layoutResena')

@section('head')
@stop

@section('title')
  Reseñas | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div class="well transparenteClaroTxt">  <!-- Well Articulo1 -->

  <div class="row">
    <div class="col-md-12">
      <h3 class="grisObscuro"><strong><i class="fa fa-newspaper-o"></i> Noticia:</strong></h3>

        <!-- CONTENIDO DE LA NOTICIA ****************************************-->
      <blockquote>
        <h3 class="grisObscuro text-center">En dos semanas el peso gana casi 5%  </h3>
        <p class=" text-justify">
          El peso mexicano continuó con su racha ganadora este martes tras finalizar cerca de los 14.90 pesos por dólar, debido al optimismo que existe entre los intermediarios financieros de que la Reserva Federal (Fed) comenzará a subir tasas hasta septiembre del presente año.
        </p>
        <p class=" text-justify">
          El peso mexicano continuó con su racha ganadora este martes tras finalizar cerca de los 14.90 pesos por dólar, debido al optimismo que existe entre los intermediarios financieros de que la Reserva Federal (Fed) comenzará a subir tasas hasta septiembre del presente año.
        </p>
        <p class=" text-justify">
          Bajo ese escenario, el tipo de cambio peso-dólar concluyó en un valor de 14.9280 pesos en operaciones al mayoreo. Comparado con las negociaciones de la sesión previa (14.9325 pesos), resultó una ligera apreciación de 0.03%, mientras que las negociaciones al menudeo (ventanilla bancos) cerraron en 15.23 pesos por unidad.
        </p>
        <p class=" text-justify">
          En su comparación anual, la inversión fija bruta creció 4.6 por ciento en términos reales. Los gastos de maquinaria y equipo total aumentaron 6.5 por ciento y los de la construcción subieron 3.2 por ciento.
        </p>
        <p class=" text-justify">
          Desde su nivel más alto de 16.6250 pesos se apreció hasta 14.9280 pesos, que implica una recuperación de 4.46 por ciento.
        </p>
        <p class=" text-justify">
          El tipo de cambio logró repuntar ligeramente hasta alcanzar un precio máximo de 15.0133 pesos por dólar, luego del anuncio del dato de la inflación subyacente en Estados Unidos, la cual aumentó 0.2% con respecto a la observada en enero.
        </p>
        <p class=" text-justify">
          Por otro lado, en el Reino Unido se dieron a conocer los precios al consumidor de febrero, donde se colocó en su nivel mas bajo en series comparables desde 1989, al ubicarse en 0.0%, acontecimiento que modifico las expectativas de incrementos en tasas por parte del Banco de Inglaterra.
        </p>
      </blockquote>

        <p class="grisObscuro">
          <h4>Hemerografia online: </h4> <a target="_blanck" href="http://eleconomista.com.mx/mercados-estadisticas/2015/03/24/dos-semanas-peso-gana-casi-5">http://eleconomista.com.mx/mercados-estadisticas/2015/03/24/dos-semanas-peso-gana-casi-5</a>
        </p>


      <!-- /CONTENIDO DE LA NOTICIA********************************************-->

    </div>
  </div>
</div>

<div class="well transparenteClaroTxt">  <!-- RESEÑA -->
  <div class="row">
    <div class="col-md-12">
      <h3 class="texto3d grisObscuro"><strong><i class="fa fa-pencil"></i> Reseña:</strong></h3>
      <div class="row">
          <!-- ******************************************************************** -->
        <div class="col-md-3">
          <img class="img-rounded img-responsive imgN" src="{{URL::asset('img/infoteca/resenas/91430302.jpg')}}"/>
        </div>
        <div class="col-md-9">
          <h3>Seguirá apreciándose</h3>
          <p>
            Para el subdirector de mercados financieros de Banco Santander, Salvador Orozco Peña, existen amplias posibilidades de que el peso mexicano alcance un precio de 14.80 pesos en los siguientes días, debido a la inercia de baja que aún trae la moneda local.
          </p>
          <p>
            El especialista mencionó que es probable que la posición técnica del mercado (largo en dólares), de acuerdo con información de la tenencia del peso en Chicago, apoyará esta tendencia de mayor apreciación del peso mexicano en el corto plazo.
          </p>
        </div>
      </div>

      <p>
        Agregó que el tipo de cambio peso-dólar aun se encuentra sensible a cualquier noticia, sobre todo de Estados Unidos, ya que de existir noticias económicas positivas en ese país que ayuden a confirmar el alza de la tasa de interés, el peso mexicano nuevamente podría regresar a niveles por arriba de los 15 pesos.
      </p>
      <p>
        La Inversión Fija Bruta había crecido 1.21% en abril, mientras que en mayo del año pasado se contrajo 1.19%, de acuerdo con cifras revisadas del Instituto Nacional de Estadística y Geografía (INEGI).
      </p>
    </div>

  </div>
</div>  <!-- /RESEÑA -->

@stop

@section('js')
@stop

@section('javascript')
  <script>
    $('#ulResenaTem1').addClass('in');
    $('#liResena2').addClass('activoBorde');
  </script>
@stop


@section('enlaceFacebook')
  href="https://www.facebook.com/VazquezHernandezContadoresSC/posts/807364886010307"
@stop

@section('enlaceTwitter')
  href="https://twitter.com/ContadoresVHC/status/581603007952900096"
@stop

@section('enlaceGoogle')
  href="https://plus.google.com/107251096834858671720/posts/VR7QiM1tkB6"
@stop
