@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Personas inscritas| Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<a class="btn btn-primary btn-md" href="{{ URL::to('admin/pdfInscritos') }}" target="blanck"> Imprimir</span></a>
  @include('seccionesAdmAsesor.rInscritos')
@stop

@section('js')
{{HTML::script('js/admin/reporteInscritosA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseReporte').addClass('in');
    $('#liPInscritas').addClass('activoBorde');
  </script>
@stop
