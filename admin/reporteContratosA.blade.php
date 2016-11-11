@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Reporte contratos | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<a class="btn btn-primary btn-md" href="{{ URL::to('admin/pdfReporteContratos') }}" target="blanck"> Imprimir</a>
  @include('seccionesAdmAsesor.rContratos');
@stop

@section('js')
{{HTML::script('js/admin/reporteContratosA.js')}}
@stop
@section('javascript')
  <script>
    $('#collapseReporte').addClass('in');
    $('#liContratos').addClass('activoBorde');
  </script>
@stop
