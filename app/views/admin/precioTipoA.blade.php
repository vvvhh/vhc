@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Tipos de Precios | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<h1>Tipo de Precios</h1>


  <div class="row">
  <div class="col-md-11">

    <!-- Tabla de precios -->
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive" id="tblPrecio">
          <h3>Tipo de Precios Registrados</h3>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-md-1 text-center">Id</th>
                <th class="col-md-2 text-center">Nombre tipo Precio</th>
                <th class="col-md-1 text-center">Predefinido</th>
                <th class="col-md-1 text-center">Estado</th>
                <th class="col-md-1 text-center">Dar de baja</th>
                <th class="col-md-1 text-center">Editar</th>

              </tr>
            </thead>
            <tbody id="tbodyPrecio"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla de precios -->

    <div class="well" id="frmAgregar">
      <div class="form-horizontal" >
        <fieldset>
          <legend><span class="glyphicon glyphicon-plus text-primary"></span> Agregar nuevo tipo de precios</legend>
          <div class="form-group">
            <label for="txtNombreTP" class="col-md-4 control-label">Nombre del tipo de precios:</label>
            <div class="col-md-8">
              <input type="text" class="form-control input-sm" id="txtNombreTP" placeholder="Nombre para identificar tipo precios">
            </div>
          </div>
          <div class="form-group">
            <label for="txtTipoPred" class="col-md-4 control-label">Tipo precio predefinido:</label>
            <div class="col-md-8">
              <select name="" id="txtTipoPred" class="form-control input-sm">
                <option value="0">No</option>
                <option value="1">Sí</option>
              </select>
            </div>
          </div>

          <p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> Tipo de precio predefinido será el que el sistema asigne al cliente cuando este se registra desde el sitio web. </p>
          <p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> Solo debe de existir un tipo de precio como predefinido. </p>

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
      <div class="col-md-11">
        <div class="well hidden" id="formEditarP">
          <div class="form-horizontal">
            <fieldset>
              <legend><span class="glyphicon glyphicon-edit text-primary"></span> Editar tipo de precios</legend>
              <p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> Al modificar, se cambiara el nombre con que los clientes ven su paquete de precios. </p>

              <div class="form-group">
                <label for="txtEditId" class="col-md-4 control-label">Id: </label>
                <div class="col-md-8">
                  <input type="text" id="txtEditId" class="form-control input-sm" disabled>
                </div>
              </div>

              <div class="form-group">
                <label for="txtEditNombreTP" class="col-md-4 control-label">Nombre del tipo de precios: </label>
                <div class="col-md-8">
                  <input type="text" id="txtEditNombreTP" class="form-control input-sm" placeholder="Nombre para identificar tipo precios" autofocus>
                </div>
              </div>
              <div class="form-group">
                <label for="txtEditTipoPred" class="col-md-4 control-label">Tipo precio predefinido:</label>
                <div class="col-md-8">
                  <select name="" id="txtEditTipoPred" class="form-control input-sm">
                    <option value="0">No</option>
                    <option value="1">Sí</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="txtActivo" class="col-md-4 control-label">Activo:</label>
                <div class="col-md-8">
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
{{HTML::script('js/admin/preciosTipoA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseTPrecio').addClass('in');
    $('#liPrecioTipo').addClass('activoBorde');
  </script>
@stop
