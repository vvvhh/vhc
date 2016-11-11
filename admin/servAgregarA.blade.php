@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Agregar Servicio | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<h1 id="page-header"><span class="glyphicon glyphicon-plus text-primary"></span> Agregar Servicios</h1>

  <div class="row">
  <div class="col-md-10">

    <!-- Tabla servicios -->
    <div class="row">
      <div class="col-md-12">
        <h3>Servicios registrados:</h3>
        <div class="table-responsive" id="tblServicios">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-md-1">ID servicio</th>
                <th class="col-md-2">Nombre servicio</th>
              </tr>
            </thead>
            <tbody id="tbodyServicios"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla servicios -->

        <div class="well" id="frmAgregar">
          <div class="form-horizontal" >
            <fieldset>
              <legend><span class="glyphicon glyphicon-plus text-primary"></span> Agregar Servicio</legend>
              <div class="form-group">
                <label for="txtNombreServ" class="col-md-3 control-label">Nombre del Servicio:</label>
                <div class="col-md-9">
                  <input type="text" class="form-control input-sm" id="txtNombreServ" placeholder="Ingrese nombre del servicio" maxlength="60">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                  <button class="btn btn-primary btn-sm" id="btnAgregar"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</button>
                  <button class="btn btn-danger btn-sm" id="btnCancelar"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
                  <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
                </div>
              </div>
            </fieldset>
          </div>
        </div>  <!-- /well -->

  </div>  <!-- col 10 -->
</div>

@stop

@section('js')
{{HTML::script('js/admin/servAgregarA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseServicios').addClass('in');
    $('#liAgregarServicio').addClass('activoBorde');
  </script>
@stop
