@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Reporte PLD | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<!--  <a class="btn btn-primary btn-md" href="{{ URL::to('admin/pdfReportePagados') }}" target="blanck">Imprimir</a> -->
  @include('seccionesAdmAsesor.rCuestionarioPLD');
@stop

@section('js')
{{HTML::script('js/admin/reporteCPLD.js')}}
@stop
@section('javascript')
  <script>
    $('#collapseCuestionario').addClass('in');
    $('#liCPLD').addClass('activoBorde');
  </script>
@stop
