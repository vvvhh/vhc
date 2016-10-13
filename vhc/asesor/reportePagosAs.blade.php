@extends('asesor.layoutAsesor')

@section('head')
@stop

@section('title')
  Reporte pagos | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
  <a class="btn btn-primary btn-md" href="{{ URL::to('asesor/pdfReportePago') }}" target="blanck"> Imprimir</span></a>
  @include('seccionesAdmAsesor.rPagos');
@stop

@section('js')
{{HTML::script('js/admin/reportePagoA.js')}}
@stop
@section('javascript')
  <script>
    $('#collapseReporte').addClass('in');
    $('#liRPagos').addClass('activoBorde');
  </script>
@stop
