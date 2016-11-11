@extends('asesor.layoutAsesor')

@section('head')
@stop

@section('title')
  Consultas | Vázquez Hernández Contadores, S. C.
@stop
@section('css')
@stop
@section('body')
@stop

@section('content')
  @include('seccionesAdmAsesor.servicioCliente');
@stop

@section('js')
{{HTML::script('js/admin/consultaA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseReporte').addClass('in');
    $('#liSerCliente').addClass('activoBorde');
  </script>
@stop
