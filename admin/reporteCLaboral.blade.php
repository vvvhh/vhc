@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Reporte Cuestionario Laboral | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<!--  <a class="btn btn-primary btn-md" href="{{ URL::to('admin/pdfReportePagados') }}" target="blanck">Imprimir</a> -->
  @include('seccionesAdmAsesor.rCuestionarioLaboral');
@stop

@section('js')
{{HTML::script('js/admin/reporteCLaboral.js')}}
@stop
@section('javascript')
  <script>
    $('#collapseCuestionario').addClass('in');
    $('#liCLaboral').addClass('activoBorde');
  </script>
@stop
