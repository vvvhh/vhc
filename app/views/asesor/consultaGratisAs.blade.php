@extends('asesor.layoutAsesor')

@section('head')
@stop

@section('title')
  Consultas Gratis| Vázquez Hernández Contadores, S. C.
@stop

@section('css')
  {{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('body')
@stop

@section('content')
  @include('seccionesAdmAsesor.cGratis')
@stop

@section('js')
  {{ HTML::script('js/lib/sweet-alert.min.js')}}
  {{HTML::script('js/admin/consultaGratisA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseConsulta').addClass('in');
    $('#liGratis').addClass('activoBorde');
  </script>
@stop
