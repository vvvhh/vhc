@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Asesores | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<h1>Asesores</h1>

  <div class="row">
  <div class="col-md-11">

    <!-- Tbl precios -->
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive" id="tblPrecio">
          <h3>Asesores Actuales</h3>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-md-1">Id</th>
                <th class="col-md-2 text-center">Nombre(s)</th>
                <th class="col-md-2 text-center">Primer Apellido</th>
                <th class="col-md-2 text-center">Segundo Apellido</th>
                <th class="col-md-1 text-center">Estado</th>
                <th class="col-md-1 text-center">Dar de baja</th>
                <th class="col-md-1 text-center">Editar</th>
              </tr>
            </thead>
            <tbody id="tbodyPrecio"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tbl precios -->

    <div class="well trasparenteClaroPlus" id="frmAgregar">
      <div class="form-horizontal" >
        <fieldset>
          <legend><span class="glyphicon glyphicon-plus text-primary"></span> Agregar asesor</legend>

          <div class="form-group">
            <label for="txtNombre" class="col-md-3 control-label">Nombre(s):</label>
            <div class="col-md-9">
              <input type="text" class="form-control input-sm" id="txtNombre" placeholder="Ingrese Nombre(s) del asesor">
            </div>
          </div>
          <div class="form-group">
            <label for="txtApe1" class="col-md-3 control-label">Primer Apellido:</label>
            <div class="col-md-9">
              <input type="text" class="form-control input-sm" id="txtApe1" placeholder="Ingrese primer apellido del asesor">
            </div>
          </div>
          <div class="form-group">
            <label for="txtApe2" class="col-md-3 control-label">Segundo Apellido:</label>
            <div class="col-md-9">
              <input type="text" class="form-control input-sm" id="txtApe2" placeholder="Ingrese segundo apellido del asesor">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
              <button class="btn btn-primary btn-sm" id="btnAgregarG"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</button>
              <button class="btn btn-danger btn-sm" id="btnCancelarG"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
            </div>
          </div>
        </fieldset>
      </div>
    </div>  <!-- /well -->

    <!-- Panel editar -->
    <div class="row">
      <div class="col-md-10">
        <div class="well hidden" id="formEditarP">
          <div class="form-horizontal">
            <fieldset>
              <legend><span class="glyphicon glyphicon-edit text-primary"></span> Editar Asesor</legend>
              <p class="text-danger"><span class="glyphicon glyphicon-exclamation-sign"></span> Al realizar la modificar se alteraran todos los registros pasados que estén asociados a este campo (contratos anteriores, vistas a clientes).<br><span class="glyphicon glyphicon-exclamation-sign"></span> Si desea realizar el cambio para futuros contratos pero ya se cuenta con contratos firmados con este precio, tiene que dar de baja este precio y agregar uno nuevo.</p>

              <div class="form-group">
                <label for="txtId" class="col-md-3 control-label">Id Asesor: </label>
                <div class="col-md-9">
                  <input type="text" id="txtId" class="form-control input-sm" disabled>
                </div>
              </div>

              <div class="form-group">
                <label for="txtEditNombre" class="col-md-3 control-label">Nombre(s): </label>
                <div class="col-md-9">
                  <input type="text" id="txtEditNombre" class="form-control input-sm" placeholder="Nombre(s) del asesor" autofocus>
                </div>
              </div>

              <div class="form-group">
                <label for="txtEditApe1" class="col-md-3 control-label">Primer Apellido: </label>
                <div class="col-md-9">
                  <input type="text" id="txtEditApe1" class="form-control input-sm" placeholder="Primer Apellido del Asesor" autofocus>
                </div>
              </div>

              <div class="form-group">
                <label for="txtEditApe2" class="col-md-3 control-label">Segundo Apellido: </label>
                <div class="col-md-9">
                  <input type="text" id="txtEditApe2" class="form-control input-sm" placeholder="Segundo Apellido del Asesor" autofocus>
                </div>
              </div>

              <div class="form-group">
                <label for="txtActivo" class="col-md-3 control-label">Activo:</label>
                <div class="col-md-9">
                  <select name="" id="txtActivo" class="form-control input-sm">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                  <button class="btn btn-primary btn-sm" id="btnGuardarE"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar cambios</button>
                  <button class="btn btn-danger btn-sm" id="btnCancelarE"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div> <!-- Panel editar -->
    <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
  </div>  <!-- col 10 -->
</div>

@stop

@section('js')
{{HTML::script('js/admin/asesorAgrEditA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseAsesor').addClass('in');
    $('#liAsesorAgrEdit').addClass('activoLiMenu');
  </script>
@stop
