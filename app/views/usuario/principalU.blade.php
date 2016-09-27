@extends('usuario.layoutUsuario')

@section('head')
@stop

@section('title')
  Sesión | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
  {{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('body')
@stop

@section('content')
<body onload="verificarGratis();">

  <div class="row">
    <div class="col-md-12">

      <div class="row hidden" id="pnlGratis">
        <div class="col-md-10">
          <div class="well trasparenteClaroPlus">
            <h3><i class="fa fa-comment text-primary"></i> Usted puede realizar una consulta gratis:</h3>
            <br>
            <label for="txtconsultaTitulo"> *Título ó asunto de la consulta:</label>
            <input type="text" id="txtconsultaTitulo" name="txtconsultaTitulo" pattern="[0-9a-zA-Z\s\.\-\¿\?,:áéíóúÁÉÍÓÚñÑ]+" placeholder="*Ingrese asunto de la consulta"  maxlength="50" class="form-control input-sm">
            <p class="text-danger formatoTexto14" id="spnTitulo"> </p>
            <br><br>
            <label for="txtConsulta"> *Duda ó problema:</label>
            <textarea class="form-control" id="txtConsulta" name="txtConsulta" rows="10" maxlength="30000" placeholder="*Redacte de manera clara su duda o problema, la consulta puede ser en materia contable, fiscal o juridica."></textarea>
            </textarea>
            <p class="text-danger formatoTexto14" id="spnContenido"> </p>
            <p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> Puede utilizar caracteres alfanuméricos y los siguientes caracteres: . - , : </p>
            <p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> La consulta puede ser en materia contable, fiscal o juridica. </p>

            <br><br>
            <a id="btnEnviarConsulta" class="btn btn-md btn-primary"><span class="glyphicon glyphicon-send"></span> Enviar consulta gratis</a>
            <button class="btn btn-danger" id="btnCancelar"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          </div>

        </div>
        <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
        <input type="hidden" id="nombreU" value="{{Session::get('nombre')}}" disabled >
        <input type="hidden" id="numeroU" value={{Session::get('reg')}} disabled >
        <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row hidden" id="pnlRespuesta">
        <div class="col-md-10">
          <div class="well trasparenteClaroPlus">
            <h3><i class="fa fa-comment text-primary"></i> Respuesta a su consulta gratis:</h3>
            <br>
            <input id="idConsultaG" type="hidden" disabled>
            <label for="txtResTitulo"> Título ó asunto de la consulta:</label>
            <input type="text" id="txtResTitulo" disabled class="form-control input-sm">
            <br><br>
            <label for="txtResConsulta"> Duda ó problema:</label>
            <textarea class="form-control" id="txtResConsulta" rows="10" disabled></textarea>
            </textarea>
            <br>
            <label for="txtRespuesta"> Respuesta:</label>
            <textarea class="form-control" id="txtRespuesta" rows="10" disabled></textarea>
            </textarea>
            <p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> Te invitamos a que contrates nuestros servicios de asesoria en Línea.</p>
            <br>
            <a id="btnLeido" class="btn btn-md btn-primary"><i class="fa fa-check-circle"></i> Leído</a>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="row">
      <h2><i class="fa fa-tty text-primary"></i>
        Consultas:
      </h2>
      <br>
      <div class="col-md-9">
        <div class="row">

          <div class="col-md-6 text-center">
            <a href="{{ URL::to('usuario/realizarConsultaU')}}" class="grisObscuro enlaceSimple">
              <i class="fa fa-laptop fa-4x"></i>
              <h4>Consultas en Línea</h4>
            </a>
          </div>
          <div class="col-md-6 text-center">
            <a href="{{ URL::to('usuario/realizarTelU')}}" class="grisObscuro enlaceSimple">
              <i class="fa fa-phone fa-4x"></i>
              <h4>Consultas Telefónicas</h4>
            </a>
          </div>

        </div>
      </div>
    </div>


    <br><br>

    <div class="row">
      <h2><i class="fa fa-file-text-o text-primary"></i>
        &nbsp;Contratar:
      </h2>
      <br>
      <div class="col-md-9">
        <div class="row">

          <div class="col-md-6 text-center">
            <a href="{{ URL::to('usuario/contratarU') }}" class="grisObscuro enlaceSimple">
              <i class="fa fa-suitcase fa-4x"></i>
              <h4>Contratar Servicio</h4>
            </a>
          </div>
          <div class="col-md-6 text-center">
            <a href="{{ URL::to('usuario/pagarContratoU') }}" class="grisObscuro enlaceSimple">
              <i class="fa fa-file-text fa-4x"></i>
              <h4>Contratados</h4>
            </a>
          </div>

        </div>
      </div>
    </div>
    <br><br>

    <div class="row">
      <h2><i class="fa fa-list-alt text-primary"></i>
        &nbsp;Información:
      </h2>
      <br>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-6 text-center">
            <a href="{{ URL::to('usuario/informacionU') }}" class="grisObscuro enlaceSimple">
              <i class="fa fa-user fa-4x"></i>
              <h4>Mi cuenta</h4>
            </a>
          </div>
        </div>
      </div>
    </div>


</body>
@stop

@section('js')
{{ HTML::script('js/lib/sweet-alert.min.js')}}
{{HTML::script('js/usuario/principalU.js')}}
@stop
