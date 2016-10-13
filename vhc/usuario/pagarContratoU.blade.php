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
<!-- Tabla de solicitudes -->
<div class="row">
  <div class="col-md-12">
    <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
    <input type="hidden" id="regU" value={{Session::get('reg')}} disabled >
    <input type="hidden" id="idPrecio" disabled >
    <div class="table-responsive " id="tblPago">
      <div class="row">
        <div class="col-md-9">
          <h3>Solicitudes de contrato:</h3>
        </div>
        <div class="col-md-3">
          <a id="comprarMas" class="btn btn-warning" href="{{ URL::to('usuario/contratarU') }}"><i class="fa fa-plus-circle"></i><span class="network-name"> Contratar más paquetes</span></a>
        </div>
      </div>

      <table class="table table-striped  table-hover">
        <thead>
          <tr class="tablaAdm">
            <th class="col-md-2">Fecha contrato <br>(DD-MM-AAAA)</th>
            <th class="col-md-1 text-center">N. de consultas</th>
            <th class="col-md-1 text-center">Tipo de consultas</th>
            <th class="col-md-2 text-center">Servicio</th>
            <th class="col-md-1 text-center">Precio</th>
            <th class="col-md-2 text-center">Pagado</th>
            <th class="col-md-1 text-center">Contrato</th>
            <th class="col-md-1 text-center">Solicitar factura</th>
          </tr>
        </thead>
        <tbody id="tbodyPago"></tbody>
      </table>
    </div>
  </div>
</div> <!-- /Tabla de solicitudes -->
<br>




@stop

@section('js')
{{ HTML::script('js/lib/sweet-alert.min.js')}}
{{HTML::script('js/usuario/pagarContratoU.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseContra').addClass('in');
    $('#liPagar').addClass('activoBorde');
  </script>
@stop
