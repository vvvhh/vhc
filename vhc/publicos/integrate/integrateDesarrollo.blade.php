@extends('layoutIntegrate')

@section('head')
@stop

@section('title')
  Tu desarrollo profesional y personal | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
    <div class="row">
      <div class="col-md-12">

        <div class="well transparenteClaroTxt animacionContenido">
          <div class="row">
            <div class="col-md-12">
              <div class="row text-center">
                <h3 class="grisObscuro"><strong>Tu desarrollo profesional y personal</strong></h3>
                <br>
              </div>

              <div class="row">
                <div class="col-md-6 ">
                  <img class="img-rounded img-responsive"  src="{{URL::asset('img/integrate/137830602.jpg')}}"/>
                </div>
                <div class="col-md-6">
                  <p class="text-justify sangria textoNegro">
                    En Vázquez Hernández Contadores, S.C., creemos que lo más importante es nuestro capital intelectual, ya que ello logra que la calidad de nuestra firma aumente, asumimos una visión clara de no integrarnos como empleados, sino como colaboradores de una gran familia que trabaja de manera ardua día con día para conseguir sus objetivos. Nuestra forma de trabajar conlleva ciertos valores como son: la confianza, compromiso, perseverancia, respeto, ética profesional, trabajo en equipo, excelencia, liderazgo y el entusiasmo; practicando estos valores tú serás una pieza clave que participará con nuestra firma en alcanzar objetivos mutuos.
                  </p>
                  <p class="text-justify textoNegro">
                    Consolida el éxito de tu carrera profesional construyendo relaciones en una organización multidisciplinaria y reconocida en el mercado por enfocarse en agregar valor a sus clientes.
                  </p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <p>
                    Podrás relacionarte con profesionales con más de 20 años de experiencia en el área contable, fiscal y financiera; lo que generará en ti mejores experiencias al aplicar tu conocimiento, utilizando las mejores prácticas y soluciones ante circunstancias aparentemente complejas, logrando así mejores resultados.
                  </p>
                </div>
                <div class="col-md-12">
                  <p class="text-justify textoNegro">
                    De esta manera tu trabajo resultará innovador, al combinar herramientas y experiencias que te permitan desempeñar tu profesión de manera por demás eficiente.
                  </p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <p class="text-justify textoNegro">
                    Estamos convencidos de que el desarrollo tanto profesional como personal de todos y cada uno de los colaboradores que integran nuestra firma, contribuye al bienestar familiar, que es la base de una mejor sociedad.
                  </p>
                </div>
              </div>

            </div>  <!-- /col12 -->
          </div> <!-- /renglon Profesionista-->
        </div>


    </div>  <!-- /renglon Main -->
</div>  <!-- Well -->
@stop

@section('javascript')
  <script charset="utf-8">
    $('#liDesarrollo').addClass('activoBorde');
  </script>
@stop
