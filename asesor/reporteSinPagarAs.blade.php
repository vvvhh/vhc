@extends('asesor.layoutAsesor')

@section('head')
@stop

@section('title')
  Reporte sin pagar | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<a class="btn btn-primary btn-md" href="{{ URL::to('asesor/pdfReporteSinPagar') }}" target="blanck"> Imprimir</a>
  @include('seccionesAdmAsesor.rSinPagar');
@stop

@section('js')
{{HTML::script('js/admin/reporteSinPagar.js')}}s
@stop
@section('javascript')
  <script>
    $('#collapseReporte').addClass('in');
    $('#liRSinPagar').addClass('activoBorde');
  </script>
@stop
