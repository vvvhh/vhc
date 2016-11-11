@extends('admin.layoutAdmin')

@section('title')
Panel de Administración | Vázquez Hernández Contadores, S. C.
@stop
@section('css')
  {{ HTML::style('fonts/font-awesome/css/font-awesome.min.css') }}
@stop

@section('content')
<div class="row">
  <h2 class="text-primary"><i class="fa fa-user"></i>
    &nbsp;Clientes
  </h2><br>
  <div class="col-md-12">
    <div class="row">

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('admin/clienteAgregarA') }}" class="grisObscuro enlaceSimple">
          <i class="fa fa-plus-circle fa-4x"></i>
          <h4>Agregar</h4>
        </a>
      </div>

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('admin/clienteA')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-users fa-4x"></i>
          <h4>Clientes</h4>
        </a>
      </div>
      <div class="col-md-3 text-center">
        <a href="{{ URL::to('admin/preregistroA')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-male fa-4x"></i>
          <h4>Pre-registros</h4>
        </a>
      </div>
    </div>
  </div>
</div>
<br><br><br>

  <div class="row">
    <h2 class="text-primary"><span class="glyphicon glyphicon-tasks"></span>
      &nbsp;Consultas
    </h2><br>
    <div class="col-md-12">
      <div class="row">

        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/consultaActivarA') }}" class="grisObscuro enlaceSimple">
            <i class="fa fa-check-circle fa-4x"></i>
            <h4>Registrar Pago</h4>
          </a>
        </div>
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/consultaRecibidaA') }}" class="grisObscuro enlaceSimple">
            <i class="fa fa-laptop fa-4x"></i>
            <h4>Consultas en Línea</h4>
          </a>
        </div>
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/consultaTelA')}}" class="grisObscuro enlaceSimple">
            <i class="fa fa-phone fa-4x"></i>
            <h4>Consultas Telefónicas</h4>
          </a>
        </div>
      </div>
      <br><br><br>
      <div class="row">
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/consultaGratisA')}}" class="grisObscuro enlaceSimple">
            <i class="fa fa-envelope fa-4x"></i>
            <h4>Consultas Gratis</h4>
          </a>
        </div>
      </div>
    </div>
  </div>
<br><br><br>

  <div class="row">
    <h2 class="text-primary"><span class="glyphicon glyphicon-file"></span>
      &nbsp;Reportes
    </h2><br>
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/reporteInscritosA')}}" class="grisObscuro enlaceSimple">
            <i class="fa fa-users fa-4x"></i>
            <h4>Personas Inscritas</h4>
          </a>
        </div>
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/reporteConsultasA')}}" class="grisObscuro enlaceSimple">
            <i class="fa fa-tty fa-4x"></i>
            <h4>Consultas</h4>
          </a>
        </div>
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/reporteContratosA')}}" class="grisObscuro enlaceSimple">
            <i class="fa fa-file-text-o fa-4x"></i>
            <h4>Contratos</h4>
          </a>
        </div>

      </div>

      <br><br><br>

      <div class="row">
        <br>
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/reportePagosA')}}" class="grisObscuro enlaceSimple">
            <i class="fa fa-suitcase fa-4x"></i>
            <h4>Servicios Solicitados</h4>
          </a>
        </div>
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/reporteSinPagarA')}}" class="grisObscuro enlaceSimple">
            <i class="fa fa-times fa-4x"></i>
            <h4>Servicios Sin Pagar</h4>
          </a>
        </div>
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/reportePagadosA')}}" class="grisObscuro enlaceSimple">
            <i class="fa fa-check fa-4x"></i>
            <h4>Servicios Pagados</h4>
          </a>
        </div>

      </div>
      <br><br><br>
      <div class="row">
        <div class="col-md-3 text-center">
          <a href="{{ URL::to('admin/consultasA')}}" class="grisObscuro enlaceSimple">
              <i class="fa fa-bars fa-4x"></i>
            <h4>Servicios-Cliente</h4>
          </a>
        </div>
      </div>
    </div>

  </div>
<br><br><br>

<div class="row">
  <h2 class="text-primary"><i class="fa fa-book"></i>
    &nbsp;Asesores
  </h2><br>
  <div class="col-md-12">
    <div class="row">

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('admin/asesorAgrEditA')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-pencil-square-o fa-4x"></i>
          <h4>Agregar-Editar</h4>
        </a>
      </div>
    </div>
  </div>
</div>
<br><br><br>

<div class="row">
  <h2 class="text-primary"><i class="fa fa-suitcase"></i>
    &nbsp;Servicios
  </h2><br>
  <div class="col-md-12">
    <div class="row">

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('admin/servAgregarA') }}" class="grisObscuro enlaceSimple">
          <i class="fa fa-plus-circle fa-4x"></i>
          <h4>Agregar</h4>
        </a>
      </div>

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('admin/servEditarA')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-pencil-square-o fa-4x"></i>
          <h4>Editar</h4>
        </a>
      </div>
    </div>
  </div>
</div>
<br><br><br>

<div class="row">
  <h2 class="text-primary"><i class="fa fa-star"></i>
    &nbsp;Tipo Precios
  </h2><br>
  <div class="col-md-12">
    <div class="row">

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('admin/precioTipoA') }}" class="grisObscuro enlaceSimple">
          <i class="fa fa-pencil-square-o fa-4x"></i>
          <h4>Agregar-Editar</h4>
        </a>
      </div>

    </div>
  </div>
</div>
<br><br><br>
<div class="row">
  <h2 class="text-primary"><i class="fa fa-usd"></i>
    &nbsp;Precios
  </h2><br>
  <div class="col-md-12">
    <div class="row">

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('admin/preciosLineaA') }}" class="grisObscuro enlaceSimple">
          <i class="fa fa-laptop fa-4x"></i>
          <h4>Precios en Línea</h4>
        </a>
      </div>

      <div class="col-md-3 text-center">
        <a href="{{ URL::to('admin/preciosTelefonoA')}}" class="grisObscuro enlaceSimple">
          <i class="fa fa-phone fa-4x"></i>
          <h4>Precios Telefónicas</h4>
        </a>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')

@stop
