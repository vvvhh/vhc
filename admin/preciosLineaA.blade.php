@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
Precios | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<h1>Precios de paquetes En Línea</h1>


  <div class="row">
  <div class="col-md-10">

    <!-- Tabla precios -->
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive" id="tblPrecio">
          <h3>Precios Actuales</h3>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-md-1 text-center">Id</th>
                <th class="col-md-2 text-center">Tipo precio</th>
                <th class="col-md-2 text-center">Precio ($)</th>
                <th class="col-md-2 text-center">Número consultas</th>
                <th class="col-md-1 text-center">Estado</th>
                <th class="col-md-1 text-center">Dar de baja</th>
                <th class="col-md-1 text-center">Editar</th>
              </tr>
            </thead>
            <tbody id="tbodyPrecio"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla precios -->

    <div class="well" id="frmAgregar">
      <div class="form-horizontal" >
        <fieldset>
          <legend><span class="glyphicon glyphicon-plus text-primary"></span> Agregar precio</legend>

          <div class="form-group">
            <label for="txtPrecio" class="col-md-3 control-label">Precio ($):</label>
            <div class="col-md-9">
              <input type="text" class="form-control input-sm" id="txtPrecio" placeholder="Cantidad en pesos">
            </div>
          </div>
          <div class="form-group">
            <label for="txtNumero" class="col-md-3 control-label">Número de consultas:</label>
            <div class="col-md-9">
              <input type="text" class="form-control input-sm" id="txtNumero" placeholder="Número de consultas">
            </div>
          </div>
          <div class="form-group">
              <label for="slcTipoPrecio" class="col-md-3 control-label">Tipo precio:</label>
              <div class="col-md-9">
                <select name="" id="slcTipoPrecio" class="form-control input-sm">
                </select>
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
              <legend><span class="glyphicon glyphicon-edit text-primary"></span> Editar precios de paquete</legend>
              <p class="text-danger"><span class="glyphicon glyphicon-exclamation-sign"></span> Al realizar la modificar se alteraran todos los registros pasados que estén asociados a este campo (contratos anteriores, vistas a clientes).<br><span class="glyphicon glyphicon-exclamation-sign"></span> Si desea realizar el cambio para futuros contratos pero ya se cuenta con contratos firmados con este precio, tiene que dar de baja este precio y agregar uno nuevo.</p>

              <div class="form-group">
                <label for="txtId" class="col-md-3 control-label">Id: </label>
                <div class="col-md-9">
                  <input type="text" id="txtId" class="form-control input-sm" disabled>
                </div>
              </div>

              <div class="form-group">
                <label for="txtEditPrecio" class="col-md-3 control-label">Precio: </label>
                <div class="col-md-9">
                  <input type="text" id="txtEditPrecio" class="form-control input-sm" placeholder="Cantidad en pesos" autofocus>
                </div>
              </div>

              <div class="form-group">
                <label for="txtEditNum" class="col-md-3 control-label">Número de consultas: </label>
                <div class="col-md-9">
                  <input type="text" id="txtEditNum" class="form-control input-sm" placeholder="Número de consultas" autofocus>
                </div>
              </div>

              <div class="form-group">
                  <label for="slcEditTPrecio" class="col-md-3 control-label">Tipo precio:</label>
                  <div class="col-md-9">
                    <select name="" id="slcEditTPrecio" class="form-control input-sm">
                    </select>
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
{{HTML::script('js/admin/preciosLineaA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapsePrecios').addClass('in');
    $('#liPLinea').addClass('activoBorde');
  </script>
@stop
