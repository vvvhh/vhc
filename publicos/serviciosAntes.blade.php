@extends('layout')

@section('head')
  <meta name="description" content="Ofrecemos una amplia gama de servicios contables, así como servicios de asesoría en Línea.">
  <meta name="keywords" content="servicios auditoría, servicios asesoría,  asesoría en Línea, servicios contables, servicio jurídico, servicio fiscal, prevención lavado dinero " />
@stop

@section('title')
  Servicios | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../img/inicio/461998221.jpg ');"class="fondo paddingTexto">
  <div class="container">

  <div class="row">
    <div class="col-lg-12">
      <br>
      <h1 class="tituloEntrada tamTitulo grisObscuro"><i class="fa fa-briefcase"></i> Servicios</h1>
    </div>
  </div>

  <div class="row">
  <!-- servicios contables -->
  <div class="col-md-4 col-sm-6">
    <div class="well text-center trasparenteClaroPlus transladarDerecha animEscalarFondo">
      <h3 class="texto3d grisObscuro"><i class="fa fa-table"></i> Servicios Contables</h3>
      <hr>
      <div class="row">
        <div class="col-md-8 col-md-offset-2" >
          <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/101371076s.jpg')}}"/>
        </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-12">
            <p class="text-justify formatoTexto2 sangria">
              En materia de negocios, sabemos la importancia que tiene el hecho de que los empresarios concentren su atención en el negocio principal, sin desviarse con tareas que obstaculicen su crecimiento.
            </p>
            <br>
          </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/contables')}}">Más información <i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>

    <!-- Servicioasesoria -->
    <div class="col-md-4 col-sm-6">
      <div class="well text-center trasparenteClaroPlus transladarAbajo animEscalarFondo">
        <h3 class="texto3d grisObscuro"><i class="fa fa-coffee"></i> Servicios de Asesoría</h3>
        <hr>
        <div class="row">
          <div class="col-md-8 col-md-offset-2" >
            <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/487967033.jpg')}}"/>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12"><br>
            <p class="text-justify formatoTexto2 sangria">
              Los servicios fiscales que ofrecemos se encuentran orientados hacia la detección de oportunidades para el logro de la eficiencia fiscal.
            </p>
              <br><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/asesoria')}}">Más información <i class="fa fa-chevron-right"></i></a>
          </div>
        </div>
        </div>
      </div>

      <!-- Servicioasesoria -->
  <!--      <div class="col-md-4 col-sm-6">
        <div class="well text-center trasparenteClaroPlus transladarIzquierda animEscalarFondo">
          <h3 class="texto3d grisObscuro"><i class="fa fa-tty"></i> Servicios de Asesoría en Línea</h3>
          <hr>
          <div class="row">
            <div class="col-md-8 col-md-offset-2" >
              <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/491207279s.jpg')}}"/>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <p class="text-justify formatoTexto2 sangria"> Al adquirir nuestras consultas telefónicas o vía correo electrónico usted estará asesorado y respaldado por nuestro equipo de profesionales.</p>
              <br><br>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/obtenerAsesoria')}}">Más información <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
          </div>
        </div>
-->

      <div class="col-md-4 col-sm-6 ">
        <div class="well text-center trasparenteClaroPlus transladarDerecha animEscalarFondo">
          <h3 class="texto3d grisObscuro"><i class="fa fa-search"></i> Servicios de Auditoría </h3>

          <hr>
          <div class="row">
            <div class="col-md-8 col-md-offset-2" >
              <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/461998221s.jpg')}}"/>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <p class="text-justify formatoTexto2 sangria"> <!--  Una opinión independiente respecto a la razonabilidad de la información financiera de su empresa,
                o sobre la efectividad de la estructura de su sistema de control interno... -->
                <br><br><br>
                Siempre es importante un punto de vista independiente respecto a la coherencia de la información financiera de una empresa.
                </p>

            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/auditoria')}}">Más información <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="row">
    <!-- Auditoria -->

      <!-- Servicio Juridico -->
      <div class="col-md-4 col-sm-6">
        <div class="well text-center trasparenteClaroPlus transladarAbajo animEscalarFondo">
          <h3 class="texto3d grisObscuro"><i class="fa fa-book"></i>  Servicio Jurídico</h3>
          <hr>
          <div class="row">
            <div class="col-md-8 col-md-offset-2" >
              <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/180256715s.jpg')}}"/>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <p class="text-justify formatoTexto2 sangria"><br>
                En Vázquez Hernández Contadores, S.C. nos preocupamos por el funcionamiento integral de su empresa, es por ello que le ofrecemos soluciones legales en el debido cumplimiento de la normatividad vigente, los demás aplicables a su condición, evitando así futuras controversias y asegurando su correcto desempeño.
              </p>
              <br>
            </div>
          </div>
           <div class="row">
             <div class="col-md-8 col-md-offset-2">
               <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/juridico')}}">Más información <i class="fa fa-chevron-right"></i></a>
             </div>
           </div>
         </div>
        </div>

        <!-- Servicio fiscal -->
        <div class="col-md-4 col-sm-6">
          <div class="well text-center trasparenteClaroPlus transladarIzquierda animEscalarFondo">
            <h3 class="texto3d grisObscuro"><i class="fa fa-gavel"></i> Servicio Fiscal</h3>
            <hr>
              <div class="row">
                <div class="col-md-8 col-md-offset-2" >
                  <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/178709202s.jpg')}}"/>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <p class="text-justify formatoTexto2 sangria">
                    <br><br>
                    <!--  Los servicios fiscales que ofrecemos se encuentran orientados hacia la detección de oportunidades de obtención de eficiencia fiscal.... -->
                    Los servicios que ofrecemos en este rubro, se encuentran orientados hacia la detección de áreas de oportunidades en eficiencia fiscal.
                    </p>


                  <br><br><br>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/fiscal')}}">Más información <i class="fa fa-chevron-right"></i></a>
                </div>
              </div>

            </div>
          </div>




          <div class="col-md-4 col-sm-6">
            <div class="well text-center trasparenteClaroPlus transladarDerecha animEscalarFondo">
              <h3 class="texto3d grisObscuro"><i class="fa fa-money"></i> Prevención de Lavado de Dinero (PLD)</h3>
              <hr>
                <div class="row">
                  <div class="col-md-8 col-md-offset-2" >
                    <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/139543897.jpg')}}"/>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-justify formatoTexto2 sangria">
                      Los servicios que ofrecemos en este sector están enfocados en hacer del conocimiento de nuestros clientes las obligaciones que deben cumplir en materia de PLD, como consecuencia de las operaciones que desarrollan.
                      </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/pLavado')}}">Más información <i class="fa fa-chevron-right"></i></a>
                  </div>
                </div>

              </div>
            </div>

  </div>








  <div class="row">
    <!-- Servicio Lavado -->


    <!-- auditoriaG -->
  <div class="col-md-4 col-sm-6">
    <div class="well text-center trasparenteClaroPlus transladarAbajo animEscalarFondo">
      <h3 class="texto3d grisObscuro"><i class="fa fa-th"></i> Auditoría Gubernamental</h3>
      <hr>
      <div class="row">
        <div class="col-md-8 col-md-offset-2" >
          <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/140301755.jpg')}}"/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">

          <p class="text-justify formatoTexto2 sangria">
            <!--  Elaboración de auditorías de forma profesional a entidades públicas, en puntos estratégicos, relevantes y prioritarios, apegándose a la normatividad vigente, generando recomendaciones a implementar, mejorando la eficiencia ....-->
            Elaboración profesional de auditorías, para entidades públicas, en puntos estratégicos, relevantes y prioritarios, apegadas a la normatividad vigente para generar las recomendaciones a implementar y mejorar así la eficiencia de forma preventiva y correctiva.
            </p>
            <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/auditoriaG')}}">Más información <i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6"> <!-- Laborales -->
    <div class="well text-center trasparenteClaroPlus transladarIzquierda animEscalarFondo">
      <h3 class="texto3d grisObscuro"><i class="fa fa-suitcase"></i> Servicios Laborales</h3>
      <hr>
      <div class="row">
        <div class="col-md-8 col-md-offset-2" >
          <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/467926585.jpg')}}"/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <br><br>
          <p class="text-justify formatoTexto2 sangria">
            <!--  Nuestros servicios incluyen acciones encaminadas a comprobar el correcto cumplimiento de las obligaciones laborales, mediante la elaboración de diagnósticos que determinen el grado de desempeño del patrón en dichas obligaciones. -->
            Nuestros servicios consisten en realizar auditorías en materia de cumplimiento de obligaciones laborales por parte de los patrones que empleen a trabajadores.
            </p>
             <br> <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/laborales')}}">Más información <i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-4 col-sm-6">
    <div class="well text-center trasparenteClaroPlus transladarAbajo animEscalarFondo">
      <h3 class="texto3d grisObscuro"><i class="fa fa-th"></i> Otros servicios</h3>
      <hr>
      <div class="row">
        <div class="col-md-8 col-md-offset-2" >
          <img class="imgS img-rounded img-responsive" src="{{URL::asset('img/servicios/166150527s.jpg')}}"/>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <br>
          <p class="text-justify formatoTexto2 sangria"> Administración de Nómina,
            un negocio tiene éxito cuando los empresarios dedican su tiempo y potencial al mismo, sin desviarse en actividades menores
             que obstaculicen su crecimiento.</p>
             <br><br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <a class="btn btn-primary btn-block" href="{{ URL::to('publicos/servicios/otros')}}">Más información <i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>




  </div>

  <div class="row">


  </div>
  <!-- Paneles Servicios -->

</div>
</div>
@stop

@section('javascript')
  <script>
  	$('#navServicios').addClass('activoLi');
  </script>
@stop
