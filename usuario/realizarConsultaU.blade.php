@extends('usuario.layoutUsuario')

@section('title')
  Pagos | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
{{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('body')
@stop

@section('content')
<body  onload="getSolPerPagoLin();">


  <div class="row">
    <div class="col-md-12">
      <h2><i class="fa fa-laptop text-primary"></i> Consultas en Línea:</h2>
    </div>
  </div>

  <div id="seleccionarServ" clas="hidden"> <!-- seleccionar servicio -->
    <div class="row">
      <div class="col-md-11">
        <h3>Servicios contratados:</h3>
      <table id="tblConsultas" class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="tablaAdm">
            <th class="col-md-1">Folio</th>
            <th class="col-md-1 text-center">Servicio</th>
            <th class="col-md-2 text-center">Fecha Contratación</th>
            <th class="col-md-1 text-center">Consultas contratadas</th>
            <th class="col-md-1 text-center">Consultas realizadas</th>
            <th class="col-md-1 text-center">Consultas restantes</th>
            <th class="text-center">Respuestas</th>
            <th class="text-center">Consulta</th>
          </tr>
        </thead>
        <tbody id="tbodyConsultas"></tbody>
      </table>

      </div>

    </div>
    <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
    <input type="hidden" id="nombreU" value="{{Session::get('nombre')}}" disabled >
    <input type="hidden" id="regU" value="{{Session::get('reg')}}" disabled >
  </div>  <!-- /seleccionar servicio -->
  <br><br>

<div id="tblContenidoC">
  <h3>Respuestas:</h3>
  <button class="btn btn-primary" id="btnRegresar"><i class="fa fa-chevron-left"></i> Regresar</button>
  <br><br>
  <fieldset id="flsContenidoC">
    <div class="form-group row">
      <label for="txtFolioC" class="col-md-4 control-label">Número de folio contrato: </label>
      <div class="col-md-7">
        <input type="text" id="txtFolioC" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="txtServicioC" class="col-md-4 control-label">Servicio: </label>
      <div class="col-md-7">
        <input type="text" id="txtServicioC" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="txtTipoC" class="col-md-4 control-label">Tipo consulta: </label>
      <div class="col-md-7">
        <input type="text" id="txtTipoC" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="txtNContratado" class="col-md-4 control-label">Número consultas contratas: </label>
      <div class="col-md-7">
        <input type="text" id="txtNContratado" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group"  >
      <label for="txtNRealizadas" class="col-md-4 control-label">Número consultas realizadas: </label>
      <div class="col-md-7">
        <input type="text" id="txtNRealizadas" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group"  >
      <label for="txtNRestantes" class="col-md-4 control-label">Número consultas restantes: </label>
      <div class="col-md-7">
        <input type="text" id="txtNRestantes" class="form-control input-sm" disabled>
      </div>
    </div>

  </fieldset>


  <div class="table-responsive " >
<br><br>
    <table class="table table-striped table-bordered  table-hover">
      <thead>
        <tr class="tablaAdm">
          <th class="col-md-2 text-center">Título Consulta</th>
          <th class="col-md-4 text-center">Consulta</th>
          <th class="col-md-1 text-center">Fecha envío</th>
          <th class="col-md-1 text-center">Fecha respuesta</th>
          <th class="col-md-4 text-center">Respuesta</th>
        </tr>
      </thead>
      <tbody id="tbodyContenidoC"></tbody>
    </table>
  </div>
</div>

  <div id="nConsulta" class="well trasparenteClaroPlus hidden">
    <button class="btn btn-primary" id="btnRegresar2"><i class="fa fa-chevron-left"></i> Regresar</button>
    <br><br>
    <div class="form-group row">
      <label for="txtFolioRC" class="col-md-3 control-label">Número de folio contrato: </label>
      <div class="col-md-6">
        <input type="text" id="txtFolioRC" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="txtServicioRC" class="col-md-3 control-label">Servicio: </label>
      <div class="col-md-6">
        <input type="text" id="txtServicioRC" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="txtNContratadas" class="col-md-3 control-label">Número de consultas contratadas: </label>
      <div class="col-md-6">
        <input type="text" id="txtNContratadas" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="txtFechaC" class="col-md-3 control-label">Fecha contratación: </label>
      <div class="col-md-6">
        <input type="text" id="txtFechaC" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="txtNRealizadasR" class="col-md-3 control-label">Número de consultas realizadas: </label>
      <div class="col-md-6">
        <input type="text" id="txtNRealizadasR" class="form-control input-sm" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="txtNRestantesR" class="col-md-3 control-label">Número de consultas restantes: </label>
      <div class="col-md-6">
        <input type="text" id="txtNRestantesR" class="form-control input-sm" disabled>
      </div>
    </div>

  </div>

  <div id="pnlContratarMas" class="well trasparenteClaroPlus text-center hidden">
    <h3>Usted ha utilizado todas sus consultas para el presente contrato, o ya transcurrio un año desde que realizo el contrato.</h3>
    <h4>Le invitamos a contratar más paquetes:</h4>
    <a id="comprarMas" class="btn btn-warning" href="{{ URL::to('usuario/contratarU') }}"><i class="fa fa-plus-circle"></i><span class="network-name"> Contratar más paquetes</span></a>
  </div>

  <div id="consulta" class="hidden">
    <div class="row">
      <div class="col-md-10">
        <div class="well trasparenteClaroPlus">
          <h3><i class="fa fa-comment text-primary"></i> Realizar Consulta</h3>
          <br>
          <label for="txtconsultaTitulo"> *Título ó asunto de la consulta:</label>
          <input type="text" id="txtconsultaTitulo" name="txtconsultaTitulo" pattern="[0-9a-zA-Z\s\.\-\¿\?,:áéíóúÁÉÍÓÚñÑ]+" placeholder="*Ingrese asunto de la consulta"  maxlength="50" class="form-control input-sm">
          <p class="text-danger formatoTexto14" id="spnTitulo"> </p>
          <br><br>
          <label for="txtConsulta"> *Duda ó problema:</label>
          <textarea type="text" class="form-control" id="txtConsulta" name="txtConsulta" rows="10" maxlength="30000" placeholder="*Redacte de manera clara su duda o problema"></textarea>
          </textarea>
          <p class="text-danger formatoTexto14" id="spnConsulta"> </p>
          <p class="text-info"><i class="fa fa-info-circle"></i> Puede utilizar caracteres alfanuméricos y los siguientes caracteres especiales: . - , : ¿ ? ( )</p>
          <br><br>
          <a id="btnEnviarConsulta" class="btn btn-md btn-primary"><i class="fa fa-paper-plane"></i> Enviar consulta</a>
          <button class="btn btn-danger" id="btnCancelar"><i class="fa fa-times-circle"></i> Cancelar</button>
        </div>


      </div>

    </div>
  </div>

</body>
@stop

@section('js')
{{ HTML::script('js/lib/sweet-alert.min.js')}}
{{HTML::script('js/usuario/realizarConsultaU.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseConsulta').addClass('in');
    $('#liConsulta').addClass('activoBorde');
  </script>
@stop
