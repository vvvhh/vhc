@extends('asesor.layoutAsesor')

@section('head')
@stop

@section('title')
  Busqueda respuestas | Vázquez Hernández Contadores, S. C.
@stop
@section('css')
  {{ HTML::style('css/lib/sweet-alert.css') }}
@stop
@section('body')
@stop

@section('content')
  @include('seccionesAdmAsesor.busqueda')
@stop

@section('js')
  {{ HTML::script('js/lib/sweet-alert.min.js')}}
  {{HTML::script('js/admin/busqueda.js')}}
@stop

@section('javascript')
  <script>    
    $('#libusqueda').addClass('activoBorde');
  </script>
@stop
