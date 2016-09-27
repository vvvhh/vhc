@extends('layout')

@section('head')
  {{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('title')
  Servicios Laborales | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('content')
<div style="background-image:url('../../img/inicio/478771527.jpg');"class="fondo paddingTexto">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="tituloEntrada tamTitulo grisObscuro texto3d"><i class="fa fa-pencil-square-o"></i> Diagnóstico</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-9">

        <div class="well trasparenteClaroPlus animacionContenido hidden" id="pnlCheck">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-center" id="titulo"></h3>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12 text-right">
              <small>Preguntas contestadas:&nbsp;&nbsp;&nbsp; </small> <label><span id="badgeNP" class="badge">0</span></label>&nbsp;&nbsp;&nbsp;
              <small>Total: &nbsp;&nbsp;&nbsp; </small> <label><span class="badge">20</span></label>
            </div>

          </div>
          <br>
          <div class="row">
            <div class="col-md-10 col-xs-12 text-justify">
              <p class="animEscalarSimple formatoTexto4" id="pregunta">
              </p>
            </div>
            <div class="col-md-1 col-xs-6 text-center">
              <div class="radio">
                <label>
                  <input type="radio" name="pre0" id="preSi0" value="1">
                  Sí
                </label>
              </div>
            </div>

            <div class="col-md-1 col-xs-6">
              <div class="radio">
                <label>
                  <input type="radio" name="pre0" id="preNo0" value="0">
                  No
                </label>
              </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-10 col-xs-12 text-justify">
              <p class="animEscalarSimple formatoTexto4" id="pregunta1">
              </p>
            </div>
            <div class="col-md-1 col-xs-6 text-center">
              <div class="radio">
                <label>
                  <input type="radio" name="pre1" id="preSi1" value="1">
                  Sí
                </label>
              </div>
            </div>

            <div class="col-md-1 col-xs-6">
              <div class="radio">
                <label>
                  <input type="radio" name="pre1" id="preNo1" value="0">
                  No
                </label>
              </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-10 col-xs-12 text-justify">
              <p class="animEscalarSimple formatoTexto4" id="pregunta2">
              </p>
            </div>
            <div class="col-md-1 col-xs-6 text-center">
              <div class="radio">
                <label>
                  <input type="radio" name="pre2" id="preSi2" value="1">
                  Sí
                </label>
              </div>
            </div>

            <div class="col-md-1 col-xs-6">
              <div class="radio">
                <label>
                  <input type="radio" name="pre2" id="preNo2" value="0">
                  No
                </label>
              </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-10 col-xs-12 text-justify">
              <p class="animEscalarSimple formatoTexto4" id="pregunta3">
              </p>
            </div>
            <div class="col-md-1 col-xs-6 text-center">
              <div class="radio">
                <label>
                  <input type="radio" name="pre3" id="preSi3" value="1">
                  Sí
                </label>
              </div>
            </div>

            <div class="col-md-1 col-xs-6">
              <div class="radio">
                <label>
                  <input type="radio" name="pre3" id="preNo3" value="0">
                  No
                </label>
              </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-md-10 col-xs-12 text-justify">
              <p class="animEscalarSimple formatoTexto4" id="pregunta4">
              </p>
            </div>
            <div class="col-md-1 col-xs-6 text-center">
              <div class="radio">
                <label>
                  <input type="radio" name="pre4" id="preSi4" value="1">
                  Sí
                </label>
              </div>
            </div>

            <div class="col-md-1 col-xs-6">
              <div class="radio">
                <label>
                  <input type="radio" name="pre4" id="preNo4" value="0">
                  No
                </label>
              </div>
            </div>
          </div>

          <div class="row">
            <br>
            <div class="col-md-5 col-md-offset-3">
              <button id="btnContinuar" class="btn btn-md btn-primary btn-block" ><i class="fa fa-chevron-circle-right"></i> Continuar</span></button>
            </div>
          </div>
        </div>

        <div class="well trasparenteClaroPlus animacionContenido hidden" id="pnlResultado">
          <div class="row">
            <div class="col-md-12">
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger" style="width: 0%" id="barDanger">
                </div>
                <div class="progress-bar progress-bar-warning" style="width: 0%" id="barWarning">
                </div>
                <div class="progress-bar progress-bar-success" style="width: 0%" id="barSuccess">
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-4 col-sm-4 col-xs-4 text-left">
                <strong><small>0%</small></strong>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                <strong><small>50%</small></strong>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                <strong><small>100%</small></strong>
              </div>
            </div>
            <div class="col-md-12 text-center">
                            <p class="animEscalarSimple formatoTexto4" id="txtResultado">
              </p>
              <br>
              <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                  <button id="btnSiguiente" class="btn btn-lg btn-primary btn-block" ><i class="fa fa-chevron-right"></i> Siguente evaluación</span></button>
                </div>
                <div class="col-md-4">
                  <button id="btnSalir" class="btn btn-lg btn-primary btn-block" ><i class="fa fa-sign-out"></i> Finalizar</span></button>
                </div>
              </div>
            </div>
          </div>
        </div>  <!-- Well -->

        <div class="well trasparenteClaroPlus animacionContenido " id="pnlDatos">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
              <h3 class="text-justify text-success">
                <i class="fa fa-pencil-square-o fa-2x"></i>
                Para efectos de enviarle los resultados de la presente evaluación, por favor ingrese la siguiente información:
              </h3>
              <br>

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
              <div class="form-group">
                <div class="checkbox">
                  <label class="grisObscuro">
                    <input type="checkbox" id="chkAcepto" name="acepto"  > <!--  y el <a href="{{ URL::to('publicos/piePagina/avisoPrivacidadClientes')}}" >Aviso de privacidad para clientes</a>. -->
                      *Al hacer clic en el botón, acepto la <a href="{{ URL::to('publicos/piePagina/politicaUso')}}">Política de uso y privacidad del sitio web</a>
                    </label>
                </div>
              </div>
              <br>
              <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
              <div class="col-md-8 col-md-offset-2">
                <button id="btnEnviar"  class="btn btn-primary btn-block"><i class="fa fa-paper-plane "></i> Iniciar cuestionario</button>
              </div>

            </div>
          </div>
        </div>

      </div>

      <div class="col-md-3 transladarIzquierda paddingTexto">

            <ul id="ulIntegrate"class="nav nav-sidebar colorNav" >
              <li id="liCondGT" style="cursor:pointer">
                  <a class="grisClaro texto3d" >
                    <i class="fa fa-suitcase"></i> Condiciones generales de trabajo</a>
              </li>
                <li id="liCapAdi">
                    <a class="grisClaro texto3d" style="cursor:pointer">
                      <i class="fa fa-male"></i> Capacitación y adiestramiento.
                    </a>
                </li>
                <li id="liSegHig" style="cursor:pointer">
                    <a class="grisClaro texto3d">
                      <i class="fa fa-medkit"></i> Seguridad e higiene
                    </a>
                </li>
            </ul>
            <br>
            <a class="btn btn-md btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i> Regresar</span></a>

      </div>




    </div>


    <div class="row">
      <div class="col-md-2 col-md-offset-10 col-lg-2 col-lg-offset-10 transladarIzquierda">

      </div>
    </div>

  </div>
</div>
@stop

@section('js')
  {{ HTML::script('js/publicos/servicios/autodiagnostico.js') }}
  {{ HTML::script('js/lib/sweet-alert.min.js')}}
@stop

@section('javascript')
  <script>
  	$('#navServicios').addClass('activoLi');
  </script>
@stop
