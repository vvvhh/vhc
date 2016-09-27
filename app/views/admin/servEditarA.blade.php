@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Editar Servicios | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<div class="row">
  <div class="col-md-10">
    <h1><span class="glyphicon glyphicon-edit text-primary"></span> Editar Servicios</h1><br>
    <div id="buscar" class="row">
        <div class="form-group">
          <label for="txtBuscar" class="col-md-2">Buscar Servicio</label>
          <div class="col-md-6">
            <input type="text" class="form-control input-sm" id="txtBuscar" placeholder="Nombre completo o parcial del servicio">
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnBuscar">Buscar</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnVerTodos">Ver todos</button>
          </div>
        </div>
      </div>

      <!-- Tabla de servicios -->
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive hidden" id="tblServicios">
            <h3>Servicios en el sistema:</h3>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-md-1">ID servicio</th>
                  <th class="col-md-2">Nombre servicio</th>
                  <th class="col-md-1 text-center">Estado</th>
                  <th class="col-md-1 text-center">Editar</th>
                  <th class="col-md-1 text-center">Dar de baja</th>
                </tr>
              </thead>
              <tbody id="tbodyServicios"></tbody>
            </table>
          </div>
        </div>
      </div> <!-- /Tabla de servicios -->
    <br>

    <!-- Panel editar -->
   <div class="row">
      <div class="col-md-10">
        <div class="well transparenteClaro hidden" id="formEditarServ">

          <div class="form-horizontal">
            <fieldset>
              <p class="text-danger"><span class="glyphicon glyphicon-exclamation-sign"></span> Al realizar la modificar se alteraran todos los registros pasados que estén asociados a este campo (contratos anteriores, vistas a clientes).<br><span class="glyphicon glyphicon-exclamation-sign"></span> Si desea realizar el cambio para futuros contratos pero ya se cuenta con contratos firmados con este servicio, tiene que dar de baja este servicio y agregar uno nuevo.</p>
              <br><br>
              <legend><span class="glyphicon glyphicon-edit text-primary"></span> Editar Servicio</legend>
              <input type="hidden" id="txtIdServicio" value="">
              <div class="form-group">
                <label for="txtNombreServ" class="col-md-4 control-label">Nombre del Servicio:</label>
                <div class="col-md-7">
                  <input type="text" class="form-control input-sm" id="txtNombreServ" placeholder="Ingrese nombre del servicio" maxlength="55">
                </div>
              </div>
              <div class="form-group">
							  <label for="txtActivo" class="col-md-4 control-label">Activo:</label>
							  <div class="col-md-7">
								  <select name="" id="txtActivo" class="form-control input-sm">
									  <option value="1">Sí</option>
									  <option value="0">No</option>
								  </select>
							  </div>
						  </div>
              <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                  <button class="btn btn-primary" id="btnGuardar"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar cambios</button>
                  <button class="btn btn-danger " id="btnCancelar"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>

    <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">

  </div>  <!--/columna10 contenido-->
</div>
@stop

@section('js')
{{HTML::script('js/admin/servEditarA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseServicios').addClass('in');
    $('#liEditarServicios').addClass('activoBorde');
  </script>
@stop
