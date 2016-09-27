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
<!--  <div style="background-image:url('../img/inicio/461998221.jpg ');"class="fondo paddingTexto">
-->
<div style="background-image:url('../img/servicios/101371076s.jpg');"class="fondo paddingTexto">
  <div class="row">
    <br>
    <div class="col-md-3 col-md-offset-9">
      <input type="text" name="name" value="" placeholder="Buscar en el sitio web">
    </div>
  </div>


  <div class="container">

  <div class="row">
    <div class="col-lg-12">
      <br>
      <h1 class="tituloEntrada tamTitulo grisObscuro"><i class="fa fa-briefcase"></i> Servicios</h1>
    </div>
  </div>

  <div class="row">
  <!-- servicios contables -->
    <div class="col-md-3 col-sm-6">

      <div class="elemento transladarDerecha">
      <div class="intro-table intro-table-hover efecto1">
        <div class="dmask fondoD1">
						<div class="bottom">

						  	<p class="white heading small-pt texto3D tam1"> Contables</p>
							  <a href="{{ URL::to('publicos/servicios/contables')}}" class="btn btn-md fondoAzulClaro expand"><strong>Ver más</strong></a>

						</div>
          </div>
				</div>
      </div>

  </div>

    <div class="col-md-3 col-sm-6">
      <div class="elemento transladarArriba">
        <div class="intro-table intro-table-hover efecto2">
          <div class="dmask fondoD1">
              <div class="bottom">
                  <p class="white heading small-pt texto3D tam1"> Asesorías</p>
                  <a href="{{ URL::to('publicos/servicios/asesoria')}}" class="btn btn-md fondoAzulClaro expand"><strong>Ver más</strong></a>
              </div>
           </div>
        </div>
      </div>

      </div>



      <div class="col-md-3 col-sm-6 ">

        <div class="elemento transladarArriba">
          <div class="intro-table intro-table-hover efecto3">
            <div class="dmask fondoD1">
                <div class="bottom">
                    <p class="white heading small-pt texto3D tam1">Auditorías</p>
                    <a href="{{ URL::to('publicos/servicios/auditoria')}}" class="btn btn-md fondoAzulClaro expand"><strong>Ver más</strong></a>
                </div>
            </div>
          </div>
        </div>
      </div>
  <!--    </div>

  <div class="row">  -->
    <!-- Auditoria -->

      <!-- Servicio Juridico -->
      <div class="col-md-3 col-sm-6">
        <div class="elemento transladarIzquierda">
         <div class="intro-table intro-table-hover efecto4">
            <div class="dmask fondoD1">
               <div class="bottom">
                   <p class="white heading small-pt texto3D tam1">Jurídicos</p>
                   <a href="{{ URL::to('publicos/servicios/juridico')}}" class="btn btn-md fondoAzulClaro expand"><strong>Ver más</strong></a>
               </div>
             </div>
          </div>
        </div>
        </div>

        <!-- Servicio fiscal -->
        <div class="col-md-3 col-sm-6">
          <div class="elemento transladarDerecha">


            <div class="intro-table intro-table-hover efecto5">
                <div class="dmask fondoD1">
                  <div class="bottom">
                      <p class="white heading small-pt texto3D tam1">Fiscal</p>
                      <a href="{{ URL::to('publicos/servicios/fiscal')}}" class="btn btn-md fondoAzulClaro expand"><strong>Ver más</strong></a>
                  </div>
                </div>
              </div>
            </div>

          </div>




          <div class="col-md-3 col-sm-6">
            <div class="elemento transladarAbajo">
              <div class="intro-table intro-table-hover efecto6">
                  <div class="dmask fondoD1">
                    <div class="bottom">
                        <p class="white texto3D tam2 pld">Prevención de Lavado de Dinero</p>
                        <a href="{{ URL::to('publicos/servicios/pLavado')}}" class="btn btn-md fondoAzulClaro expand btnPld"><strong>Ver más</strong></a>
                    </div>
                  </div>
              </div>
            </div>
          </div>

<!--    </div>


  <div class="row"> -->
    <!-- Servicio Lavado -->


    <!-- auditoriaG -->
<!--    <div class="col-md-4 col-sm-6">

    <div class="elemento">
    <div class="intro-table intro-table-hover efecto8">

          <div class="bottom">
            <div class="dmask fondoD1">
              <h3 class="white heading small-pt texto3D"> Auditoría Gubernamental</h3>
              <a href="{{ URL::to('publicos/servicios/auditoriaG')}}" class="btn btn-lg btn-success expand">Ver más</a>
            </div>
          </div>
        </div>
  </div>
  </div> -->

  <div class="col-md-3 col-sm-6"> <!-- Laborales -->
    <div class="elemento transladarAbajo">
      <div class="intro-table intro-table-hover efecto7">
            <!--  <h5 class="white heading hide-hover">Servicios Contables</h5> -->
            <div class="bottom">
              <div class="dmask fondoD1">
                <p class="white heading small-pt texto3D tam1"> Laborales</p>
                <a href="{{ URL::to('publicos/servicios/laborales')}}" class="btn btn-md fondoAzulClaro expand"><strong>Ver más</strong></a>
              </div>
            </div>
          </div>
    </div>

  </div>


  <div class="col-md-3 col-sm-6">
    <div class="elemento transladarIzquierda">

      <div class="intro-table intro-table-hover efecto9">
            <!--  <h5 class="white heading hide-hover">Servicios Contables</h5> -->
            <div class="bottom">
              <div class="dmask fondoD1">
                <p class="white heading small-pt texto3D tam1"> Otros</p>
                <a href="{{ URL::to('publicos/servicios/otros')}}" class="btn btn-md fondoAzulClaro expand"><strong>Ver más</strong></a>
              </div>
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
