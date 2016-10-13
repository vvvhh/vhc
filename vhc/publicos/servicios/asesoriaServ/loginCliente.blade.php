@extends('layout')

@section('title')
  Iniciar Sesión | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
@stop

@section('content')
<body>

<div style="background-image:url('../../../img/inicio/491207279.jpg ');"class="fondo paddingTexto">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <h1 class="tituloEntrada tamTitulo grisClaro "><i class="fa fa-users"></i> Sesión</h1>
        <br>
      </div>
    </div>

      <div class="row animacionContenido" id="pnlIngreso">
        <div class="col-md-4 col-md-offset-4">  <!-- Login -->
          <div class="well trasparenteClaroPlus" >
        <br>
        {{ Form::open(array('url' => 'login', 'method' => 'post', 'class' => 'form-signin')) }}

              <div class="control-group form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  {{ Form::text('usuario', null,
                      array('placeholder' => 'Usuario', 'class' => 'form-control', 'maxlength' => '50', 'required')); }}
                </div>
              </div>

              <div class="control-group form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    {{ Form::password('pass',
                      array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required')); }}
                </div>
              </div>
              {{ Form::submit('Login', array('class' => 'btn btn-primary btn-block')); }}
            {{ Form::close() }}

            <br><br><br>
      </div>
    </div>  <!-- Login -->

  </div>
  <div class="row">
    <div class="col-md-2 col-md-offset-10 col-lg-2 col-lg-offset-10 transladarIzquierda">
      <a class="btn btn-md btn-primary btn-block" href="javascript:history.back()"><i class="fa fa-chevron-left"></i><span class="network-name"> Regresar</span></a>
    </div>
  </div>

  </div>
</div>
</body>
@stop

@section('js')

@stop
