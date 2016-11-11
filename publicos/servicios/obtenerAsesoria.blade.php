@extends('layout')

@section('head')
@stop

@section('title')
  Asesoría en línea| Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../../img/inicio/491207279.jpg ');"class="fondo paddingTexto">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisClaro"><i class="fa fa-coffee"></i> Servicios de Asesoría en Línea</h1>
      </div>
    </div>

    <div class="well transparenteClaroTxt animacionContenido">
      <div class="row text-justify">
        <div class="col-md-12">

            <h4 class="grisObscuro"><strong><i class="fa fa-check-square"></i> ¿Cómo obtener una asesoria?</strong></h4>
            <p>
              Sus datos e información se manejarán con absoluta confidencialidad.
            </p>

            <ol type=i>
              <li>
                Llenar el formulario de registro. Para ello, será indispensable dar lectura a nuestro <a href="{{ URL::to('publicos/piePagina/avisoPrivacidadClientes')}}" class="enlaceSimple">Aviso de privacidad para clientes.</a>
              </li>
              <li>
                 Una vez que recibamos su información, un integrante de la firma se pondrá en contacto con usted para dar los comentarios de nuestros expertos a su planteamiento, así como para informarle el monto de nuestros honorarios por el seguimiento u opinión particular a su diagnóstico, dictamen o asesoría.
              </li>
              <li>
                Realizar el pago correspondiente.
              </li>
              <li>
                Notoficarnos de la realización del pago.
              </li>
            </ol>
            <p>
              Su consulta es muy importante para nosotros, la notificación para darle a conocer nuestro comentario será en un periodo no mayor a 24 horas.
            </p>
            <br>

            <h4 class="grisObscuro"><strong><i class="fa fa-check-square"></i> Una vez que nos ha contactado y consultado</strong></h4>
            <p>
              Esperamos que nuestros comentarios le sean de utilidad y/o pueda resolver sus dudas a través de nuestra asesoría en línea o platicando con alguno de los contadores integrantes de nuestra firma.  Le invitamos a contratar o renovar hoy mismo nuestros servicios de consultas telefónicas y/o en línea.
            </p>
            <br>
            <h4 id="tituloContactenos" class="grisObscuro"><strong><i class="fa fa-check-square"></i> Contáctenos o llámenos y un ejecutivo lo atenderá.</strong></h4>

            <p>
              - Si usted ya cuenta con servicios de consultas telefónicas o en línea y desea renovarla o ampliar su número de consultas (diríjase a la <a href="#tituloContactenos" class="enlaceSimple"><strong>Sección A</strong></a>).
            <br>
              - Si desea realizar su pago (diríjase a la <a href="#seccionA" class="enlaceSimple"><strong>Sección B</strong></a>).
            </p>

            <br>
            <p>
              Al adquirir nuestras consultas telefónicas o en línea usted estará asesorado y respaldado por nuestro equipo de profesionales; podrá consultarlos de lunes a viernes de 9:00 am a 5:00 pm.  Con el apoyo de nuestros profesionales a través de las consultas que usted lleve a cabo, su toma de decisiones será mejor y más informada. La asesoría que llevan a cabo nuestros profesionales es de tipo consultiva, es decir, que incluye todas aquellas opiniones y comentarios que no impliquen procedimientos o elaboración de cálculos.
            </p>
          </div>
        </div>
      </div>

        <div class="well transparenteClaroTxt animacionContenido">
            <div class="row">
              <div class="col-md-7">
                <h4 id="seccionA" class="grisObscuro"><strong><i class="fa fa-check-square"></i> Sección A</strong></h4>
                <strong><i class="fa fa-phone"></i> Paquete de consultas telefónicas:</strong>
                <br>
                <p class="sangria">
                  <strong>1.-</strong> 6 consultas telefónicas &nbsp &nbsp $1,800.00
                </p>
                <p class="sangria">
                  <strong>2.-</strong> 12 consultas telefónicas &nbsp $3,000.00
                </p>
                <p class="sangria">
                  <strong>3.-</strong> 18 consultas telefónicas &nbsp $4,000.00
                </p>

                <br>

                <strong><i class="fa fa-keyboard-o"></i> Paquete de consultas en línea:</strong>
                <br>
                <p class="sangria">
                  <strong>1.-</strong> 5 consultas en línea &nbsp &nbsp &nbsp $4,500.00
                </p>
                <p class="sangria">
                  <strong>2.-</strong> 10 consultas en línea &nbsp &nbsp $7,500.00
                </p>
                <p class="sangria">
                  <strong>3.-</strong> 15 consultas en línea &nbsp $10,000.00
                </p>
              </div>
              <br>
              <div class="col-md-4">
                <img class="img-rounded img-responsive imgS" src="{{URL::asset('img/servicios/483424523.jpg')}}"/>
              </div>
            </div>
          </div>

          <div class="well transparenteClaroTxt animacionContenido">
            <div class="row">
              <div class="col-md-7">
                <h4 class="grisObscuro"><strong><i class="fa fa-check-square"></i> Sección B</strong></h4>
                <strong>Puede realizar su pago con cualquiera de nuestras modalidades: </strong>
                <ul>
                  <li> Depósito bancario. contrato pago.</li>
                  <li> Transferencia</li>
                  <li> Cheque</li>
                  <li> Tarjetas de crédito Visa / Mastercard.</li>
                  <li> Paypal</li>
                </ul>

             </div>
             <div class="col-md-4">
               <img class="img-rounded img-responsive imgS" src="{{URL::asset('img/servicios/122584470.jpg')}}"/>
             </div>

            </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 animacionContenido">
              <button id="btnContratar"type="button" class="btn btn-lg btn-success btn-block" data-toggle="collapse" data-target="#cliente"><i class="fa fa-tty"></i> Contratar paquete</button>
            </div>
          </div>
          <div class="row">
            <div id="cliente" class="collapse col-md-12 ">
                  <div class="well trasparenteClaroPlus" id="pnlMensaje">
                    <a class="enlaceSimple" href="{{ URL::to('publicos/servicios/asesoriaServ/loginCliente')}}">
                      <h4><strong><i class="fa fa-arrow-circle-right"></i> Estoy registrado como cliente.</strong>
                      </h4>
                    </a>
                    <br>
                    <a class="enlaceSimple" href="{{ URL::to('publicos/servicios/asesoriaServ/registroContratar')}}">
                      <h4><strong><i class="fa fa-arrow-circle-right"></i> Aún no estoy registrado como cliente.</strong>
                      </h4>
                    </a>
                  </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row animacionContenido" >
        <div class="col-md-2 col-md-offset-10 col-lg-2 col-lg-offset-10 transladarIzquierda">
          <br>
          <a class="btn btn-md btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar</span></a>
        </div>
      </div>

  </div>
</div>
@stop

@section('javascript')
  <script>
  	$('#navServicios').addClass('activoLi');
  </script>
@stop
