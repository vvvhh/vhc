@extends('admin.layoutAdmin')

@section('head')
@stop

@section('css')
  {{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('title')
  Consultas en Línea | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
  @include('seccionesAdmAsesor.cRecibidasLinea')
@stop

@section('js')
  {{ HTML::script('js/lib/sweet-alert.min.js')}}
  {{HTML::script('js/admin/consultaRecibidaA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseConsulta').addClass('in');
    $('#liRevisarConsulta').addClass('activoBorde');
  </script>
@stop
