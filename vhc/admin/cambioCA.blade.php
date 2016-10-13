@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Cambio contraseña | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('css')

@stop

@section('content')
<div class="row" id="pnlCambio">
  <div class="col-md-10 col-md-offset-1">
    <h3><i class="fa fa-key"></i> Contraseña</h3>

    <form class="form-horizontal" id="form" name="form" novalidate>
      <div class="form-group" id="groupActual">
        <label for="txtActual" class="col-md-3 control-label">*Contraseña Actual: </label>
        <div class="col-md-8">
          <input id="txtActual" name="txtActual" pattern="[\d\w@._-]+" type="password" class="form-control grisObscuro"  placeholder="*Contraseña Actual" maxlength="8" required>
          <p class="text-danger formatoTexto14" id="spnActual"> </p>
        </div>
      </div>

      <div class="form-group" id="groupNueva">
        <label for="txtNueva" class="col-md-3 control-label">*Nueva contraseña: </label>
        <div class="col-md-8">
          <input id="txtNueva" name="txtNueva" pattern="[\d\w@._-]+" type="password" class="form-control grisObscuro"  placeholder="*Nueva contraseña:" maxlength="8" required>
          <p class="text-danger formatoTexto14" id="spnNueva"> </p>
        </div>
      </div>
      <div class="form-group" id="groupNueva2">
        <label for="txtNueva2" class="col-md-3 control-label">*Repetir nueva contraseña: </label>
        <div class="col-md-8">
          <input id="txtNueva2" name="txtNueva2" pattern="[\d\w@._-]+" type="password" class="form-control grisObscuro"  placeholder="*Repita la nueva contraseña:" maxlength="8" required>
          <p class="text-danger formatoTexto14" id="spnNueva2"> </p>
        </div>
      </div>
      <input type="hidden" name="contrah" id="contrah" value="<?php echo csrf_token(); ?>">

      <div id="name">
        <p class="text-info">
          <i class="fa fa-info-circle"></i> La contraseña tiene que ser de 8 caracteres alfanuméricos y puede utilizar siguientes caracteres especiales:</strong>
          <br>
          a-z, A-Z, 0-9, @ . _ -

        </p>
      </div>
      <br>
      <button id="btnGuardar" type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar cambios</button>
      <button id="btnCancelar"  class="btn btn-danger"><i class="fa fa-times-circle"></i> Cancelar</button>
    </form>

  </div>
</div>

@stop

@section('js')
{{HTML::script('js/admin/cambioCA.js')}}
@stop
