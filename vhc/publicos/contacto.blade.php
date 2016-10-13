@extends('layout')

@section('head')
  <meta name="description" content="Contáctenos para recibir un diagnóstico, una opinión o una asesoría, con gusto uno de nuestros asesores le atenderá.">
  <meta name="keywords" content="domicilio fiscal, direccion, teléfono, horario atención, mensaje, contacto" />
@stop

@section('title')
  Contáctenos | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
  {{ HTML::style('css/lib/sweet-alert.css') }}
  {{ HTML::style('css/inicio.css') }}
@stop

@section('body')
@stop

@section('content')
<div style="background-image:url('../img/contacto/491522385.jpg ');"class="fondo paddingTexto">

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
    <h1 id="tituloContacto" class="tituloEntrada tamTitulo grisClaro texto3D"><i class="fa fa-map-marker"></i> Contáctenos
      </h1>
      <br>
    </div>
  </div>



  <div class="row">

    <div class="col-md-12" >
      <div class="well transparenteObscuro transladarAbajo" id="mapaDF"><!-- Map-->
        <div class="row">
          <h3 class="text-center texto3D grisClaro">Ciudad de México</h3>
          <hr>
          <div class="col-md-8 transladarDerecha">
            <iframe width="100%" height="400px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.1215612285746!2d-99.1592!3d19.407153000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff1635487267%3A0xd84dc57705c9e4c4!2sV%C3%A1zquez+Hern%C3%A1ndez+Contadores%2C+S.C.!5e0!3m2!1ses!2smx!4v1426613320449" ></iframe>
          </div>
          <div class="col-md-4 transladarIzquierda">
            <br><br>
            <p class="texto3D grisClaro">
              <i class="fa fa-map-marker"></i> Huatabampo 72 Int. 1, 2<br> Col. Roma Sur, Cuauhtémoc, CP.06760<br>Cd. México, México<br>
            </p>
            <p class="texto3D grisClaro">
              <i class="fa fa-phone"></i> 55 74 41 91 - 55 74 27 95 <br> 55 64 38 07 - 55 84 26 12 </p>
            <p class="texto3D grisClaro">

            <p class="texto3D grisClaro">
                <i class="fa fa-clock-o"></i> Lunes - Viernes: 8:00 AM a 6:00 PM</p>
          </div>
        </div>

      </div>
    </div>

  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="well transparenteObscuro transladarDerecha" id="mapaCancun">
        <h3 class="text-center texto3D grisClaro">Cancún</h3><hr>
        <div class="row">
          <div class="col-md-8">
            <iframe width="100%" height="200px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1860.591693979294!2d-86.83033263819414!3d21.145098919750577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s+Av.+Xpuhil+sur+!5e0!3m2!1sen!2smx!4v1470782484505"></iframe>
            <!--    <iframe width="100%" height="200px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14884.960312646033!2d-86.829949!3d21.142842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPlaza+Atrium+CP.+77500%2C+Canc%C3%BAn%2C+Quintana+Roo.!5e0!3m2!1ses-419!2smx!4v1425600726657"></iframe> -->
          </div>
          <div class="col-md-4">
            <p class="texto3D grisClaro">
              <i class="fa fa-map-marker"></i>  Av. Xpuhil sur <br>Mza. 2, Lote 23,<br> Despacho 201, <br> Supermanzana 19, <br> Benito Juárez, <br>C.P. 77505 <br> Quintana Roo. <br>
              <p class="texto3D grisClaro"><i class="fa fa-phone"></i> (998) 868 30 55</p>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="well transparenteObscuro transladarIzquierda" id="mapaCancun">
        <h3 class="text-center texto3D grisClaro">Mérida</h3>   <hr>
        <div class="row">
          <div class="col-md-8">
            <iframe  width="100%" height="200" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3724.4691890303093!2d-89.65561181162407!3d21.013904579551106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1425748093767"></iframe>
          </div>
          <div class="col-md-4">
            <p class="texto3D grisClaro">
              <i class="fa fa-map-marker"></i>  Calle 33 No. 618A<br> Col. Pedregales de Ciudad Caucel, CP. 97314,<br> Mérida, Yucatán.<br>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
          <!-- Formulario Mensaje -->
          <br>
          <div class="row center-block transladarAbajo" id="tituloEnviar">
            <div class="col-md-8">
              <h2  class="texto3D grisClaro"> <i class="fa fa-envelope"></i> Envíenos un Mensaje
              </h2>

              <div name="enviarMensaje" id="enviarMensaje" >
                <div class="control-group form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input id="inpNombre" name="nombreContacto" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]+" type="text" class="form-control grisObscuro"  placeholder="*Nombre" maxlength="50">
                  </div>
                  <p class="text-danger" id="spnNombre"> </p>
                </div>
                <div class="control-group form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input id="inpTelefono" name="telefonoContacto" pattern="[0-9a-zA-Z\+\s]+" type="tel" class="form-control grisObscuro"  placeholder="*Número Telefónico" maxlength="20">
                  </div>
                  <p class="text-danger" id="spnTel"> </p>
                </div>
                <div class="control-group form-group">
                  <div class="input-group">
                    <span class="input-group-addon glyphicon"><i class="fa fa-at"></i></span>
                    <input id="inpEmail" name="correoContacto" type="email" class="form-control grisObscuro"  placeholder="*Correo Electrónico" maxlength="50">
                    <p class="text-danger" id="spnCorreo"> </p>
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <textarea id="txtMensaje" name="mensajeContacto" rows="8" cols="100" class="form-control grisObscuro"  maxlength="500" style="resize:none" placeholder="*Mensaje"></textarea>
                    <p class="text-danger" id="spnMensaje"> </p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox"> <!-- animacionEscalaLoop -->
                    <label class="grisClaro" id="aceptoCheck">
                      <input type="checkbox" id="chkAcepto" name="acepto">
                        *Al hacer clic en el botón, acepto la <a href="{{ URL::to('publicos/piePagina/politicaUso')}}">Política de uso y privacidad del sitio web</a> y el <a href="{{ URL::to('publicos/piePagina/avisoPrivacidadClientes')}}" >Aviso de privacidad para clientes</a>.
                      </label>
                  </div>
                </div>
                <div>
                  <input type="hidden" name="contactoh" id="contactoh" value="contacto">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </div>

                <div class="col-md-8 col-md-offset-2">
                  <button id="btnEnviar"  class="btn btn-primary btn-block"><i class="fa fa-paper-plane "></i> Enviar Mensaje</button>
                  <br>
                  <div class="grisClaro text-center hidden" id="procesoEnviar">
                      <i class="fa fa-spinner fa-pulse fa-3x fa-fw "></i>
                      Enviando...
                  </div>
                </div>


              </div>
            </div>

          </div>
          <!--  ./Formulario Mensaje -->
        </div>

  </div>  <!-- /container -->
</div>
@stop

@section('js')
  {{ HTML::script('js/publicos/contacto.js') }}
  {{ HTML::script('js/lib/sweet-alert.min.js')}}
@stop

@section('javascript')
  <script>
  	$('#navContacto').addClass('activoLi');
  </script>
@stop
