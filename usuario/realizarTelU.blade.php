@extends('usuario.layoutUsuario')

@section('title')
  Consultas Teléfonicas | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
{{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('body')
@stop

@section('content')
<body  onload="getSolPerPagoTel();">


  <div class="row">
    <div class="col-md-12">
      <h2><i class="fa fa-phone text-primary"></i> Consultas Teléfonicas</h2>
    </div>
  </div>

  <div id="seleccionarServ" clas="hidden"> <!-- seleccionar servicio -->
    <div class="row">
      <div class="col-md-12">

      <table id="tblConsultas" class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="tablaAdm">
            <th class="col-md-1 text-center">Folio Contrato</th>
            <th class="col-md-3 text-center">Servicio</th>
            <th class="col-md-2 text-center">Fecha Contratación</th>
            <th class="col-md-1 text-center">Consultas contratadas</th>
            <th class="col-md-1 text-center">Consultas realizadas</th>
            <th class="col-md-1 text-center">Consultas restantes</th>
            <th class="text-center">Historial</th>
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

  <div id="tblContenidoC" class="hidden">
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
            <th class="col-md-4 text-center">Asunto</th>
            <th class="col-md-1 text-center">Duración H:MM</th>
            <th class="col-md-1 text-center">Fecha</th>
            <!--  <th class="col-md-4 text-center">Respuesta</th> -->
          </tr>
        </thead>
        <tbody id="tbodyContenidoC"></tbody>
      </table>
    </div>
  </div>




  <div id="pnlContratarMas" class="text-center ">
    <a id="comprarMas" class="btn btn-warning" href="{{ URL::to('usuario/contratarU') }}"><i class="fa fa-plus-circle"></i><span class="network-name"> Contratar más paquetes</span></a>
  </div>


</body>
@stop

@section('js')
{{ HTML::script('js/lib/sweet-alert.min.js')}}
{{HTML::script('js/usuario/realizarTelU.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseConsulta').addClass('in');
    $('#liConsultaTel').addClass('activoBorde');
  </script>
@stop
