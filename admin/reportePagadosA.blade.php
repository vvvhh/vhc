@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Reporte pagados | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<a class="btn btn-primary btn-md" href="{{ URL::to('admin/pdfReportePagados') }}" target="blanck">Imprimir</a>
  @include('seccionesAdmAsesor.rPagados');
@stop

@section('js')
{{HTML::script('js/admin/reportePagadosA.js')}}
@stop
@section('javascript')
  <script>
    $('#collapseReporte').addClass('in');
    $('#liRPagados').addClass('activoBorde');
  </script>
@stop
