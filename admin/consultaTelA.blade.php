@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Consultas | Vázquez Hernández Contadores, S. C.
@stop
@section('css')
  {{ HTML::style('css/lib/sweet-alert.css') }}
@stop
@section('body')
@stop

@section('content')
  @include('seccionesAdmAsesor.cRegistroTel')
@stop

@section('js')
  {{ HTML::script('js/lib/sweet-alert.min.js')}}
  {{HTML::script('js/admin/consultaTelA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseConsulta').addClass('in');
    $('#liRevisarTel').addClass('activoBorde');
  </script>
@stop
