@extends('asesor.layoutAsesor')

@section('title')
Panel de Asesores | Vázquez Hernández Contadores, S. C.
@stop
@section('css')
  {{ HTML::style('fonts/font-awesome/css/font-awesome.min.css') }}
@stop

@section('content')

<div class="row">
  <h2><span class="glyphicon glyphicon-tasks text-primary"></span>
    &nbsp;Consultas
  </h2><br>
  <div class="col-md-12">
    <div class="row">

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/consultaRecibidaAs') }}" class="grisObscuro enlaceSimple">
          <i class="fa fa-laptop fa-4x"></i>
          <h4>Consultas en Línea</h4>
        </a>
      </div>

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/consultaTelAs')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-phone fa-4x"></i>
          <h4>Consultas Telefónicas</h4>
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/consultaGratisAs')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-envelope fa-4x"></i>
          <h4>Consultas Gratis</h4>
        </a>
      </div>
    </div>
  </div>
</div>
<br><br>

<div class="row">
  <h2><span class="glyphicon glyphicon-file text-primary"></span>
    &nbsp;Reportes
  </h2><br>
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/reporteInscritosAs')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-users fa-4x"></i>
          <h4>Personas Inscritas</h4>
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/reporteConsultasAs')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-tty fa-4x"></i>
          <h4>Consultas</h4>
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/reporteContratosAs')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-file-text-o fa-4x"></i>
          <h4>Contratos</h4>
        </a>
      </div>

    </div>
    <br>
    <br>

    <div class="row">
      <br>
      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/reportePagosAs')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-suitcase fa-4x"></i>
          <h4>Servicios Solicitados</h4>
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/reporteSinPagarAs')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-times fa-4x"></i>
          <h4>Servicios Sin Pagar</h4>
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/reportePagadosAs')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-check fa-4x"></i>
          <h4>Servicios Pagados</h4>
        </a>
      </div>

    </div>
    <br><br>
    <div class="row">
      <div class="col-md-3 text-center">
        <a href="{{ URL::to('asesor/consultasAs')}}" class="grisObscuro enlaceSimple">
            <i class="fa fa-bars fa-4x"></i>
          <h4>Servicios-Cliente</h4>
        </a>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')

@stop
