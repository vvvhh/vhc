@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Consultas | Vázquez Hernández Contadores, S. C.
@stop
@section('css')
  {{ HTML::style('fonts/font-awesome/css/font-awesome.min.css') }}
@stop
@section('body')
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Consultas solicitadas por clientes sin activar</h1>

    <br>
    <div class="table-responsive" id="tblsolicitudes">
      <br>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th class="col-md-3 text-center">Cliente</th>
            <th class="col-md-1 text-center">Número registro</th>
            <th class="col-md-2 text-center">Fecha (DD-MM-AAAA)</th>
            <th class="col-md-1 text-center">Tipo de consultas</th>
            <th class="col-md-1 text-center">Número de consultas</th>
            <th class="col-md-2 text-center">Servicio</th>
            <th class="col-md-2 text-center">Precio</th>
            <th class="col-md-2 text-center">Activar</th>
          </tr>
        </thead>
        <tbody id="tbodySolicitudes"></tbody>
      </table>
      <br>
      <button class="btn btn-danger btn-sm" id="btnCancelar"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
    </div><!-- /Tabla de solicitudes -->

  </div>  <!-- columna12 -->
</div>

@stop

@section('js')
{{HTML::script('js/admin/consultaActivarA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseConsulta').addClass('in');
    $('#liActivarConsulta').addClass('activoBorde');
  </script>
@stop
