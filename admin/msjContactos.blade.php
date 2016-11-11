@extends('admin.layoutAdmin')

@section('head')
@stop

@section('css')
@stop

@section('title')
  Mensajes de contacto | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
  @include('seccionesAdmAsesor.msjContacto')
@stop

@section('js')
  {{HTML::script('js/admin/smjContacto.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseMensaje').addClass('in');
    $('#liMContacto').addClass('activoBorde');
  </script>
@stop
