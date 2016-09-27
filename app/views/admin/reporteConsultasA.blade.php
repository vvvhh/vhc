@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Consultas realizadas | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
  @include('seccionesAdmAsesor.rConsultas');
@stop

@section('js')
{{HTML::script('js/admin/reporteConsultasA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseReporte').addClass('in');
    $('#liConsultas').addClass('activoBorde');
  </script>
@stop
