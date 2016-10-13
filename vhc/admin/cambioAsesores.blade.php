@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Cuenta Asesores | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('css')

@stop

@section('content')

<div class="row" id="pnlCambio">

  <div class="col-md-10 col-md-offset-1">
    <h3>Cuenta para Asesores</h3>

    <div class="form-horizontal" >

      <div class="form-group">
        <label for="txtUsuario" class="col-md-3 control-label">*Usuario Asesores: </label>
        <div class="col-md-8">
          <input id="txtUsuario" name="txtUsuario" type="email" class="form-control grisObscuro"  placeholder="*Usuario Asesores" maxlength="50">
          <p class="text-danger formatoTexto14" id="spnUsuario"> </p>
        </div>
      </div>
      <br><br>
      <div class="form-group">
        <label for="txtNueva" class="col-md-3 control-label">*Nueva contraseña Asesores: </label>
        <div class="col-md-8">
          <input id="txtNueva" name="txtNueva" pattern="[\d\w@._-]+" type="password" class="form-control grisObscuro"  placeholder="*Nueva contraseña para Asesores" maxlength="8">
          <p class="text-danger formatoTexto14" id="spnNueva"> </p>
        </div>
      </div>
      <div class="form-group">
        <label for="txtNueva2" class="col-md-3 control-label">*Repetir nueva contraseña Asesores: </label>
        <div class="col-md-8">
          <input id="txtNueva2" name="txtNueva2"  pattern="[\d\w@._-]+" type="password" class="form-control grisObscuro"  placeholder="*Repita la nueva contraseña para ASesores" maxlength="8">
          <p class="text-danger formatoTexto14" id="spnNueva2"> </p>
        </div>
      </div>
      <br><br>
      <div class="form-group">
        <label for="txtActual" class="col-md-3 control-label">*Contraseña Administrador: </label>
        <div class="col-md-8">
          <input id="txtActual" name="txtActual" pattern="[\d\w@._-]+" type="password" class="form-control grisObscuro"  placeholder="*Contraseña de Administrador" maxlength="20">
          <p class="text-danger formatoTexto14" id="spnActual"> </p>
        </div>
      </div>
      <input type="hidden" name="contrah" id="contrah" value="<?php echo csrf_token(); ?>">

      <div id="name">
        <p>
          <br>
          <p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> El usuario debe tener el formato de un correo electrónico.</p>

          <p class="text-info">
            <i class="fa fa-info-circle"></i> La contraseña tiene que ser de 8 caracteres alfanuméricos y puede utilizar siguientes caracteres especiales:</strong>
            <br>
            a-z, A-Z, 0-9, @ . _ -

          </p>
        </p>
      </div>
      <br>
      <button id="btnGuardar"  class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar cambios</button>
      <button id="btnCancelar"  class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
    </div>

  </div>
</div>

@stop

@section('js')
{{HTML::script('js/admin/cambioAsesores.js')}}
@stop
