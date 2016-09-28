@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Legislación Infoteca | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<div class="row">
  <div class="col-md-11">
    <h1>Enlaces </h1>
    <h5>Enlaces a sitios externos desde página Sitios de interés / Legislación </h5>
    <div id="buscar" class="row">
        <div class="form-group">
          <label for="txtBuscar" class="col-md-2">Buscar Enlace:</label>
          <div class="col-md-6">
            <input type="text" class="form-control input-sm" id="txtBuscar" placeholder="Palabra clave">
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnBuscar"><span class="glyphicon glyphicon-search"></span> Buscar</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnVerTodos"><span class=" glyphicon glyphicon-list-alt"></span> Ver todos</button>
          </div>
        </div>
      </div>
    <br>
    <!-- Tabla de clientes -->
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive hidden" id="tblClienteP">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-md-3">Nombre</th>
                <th class="col-md-2 text-center">Enlace</th>
                <th class="col-md-2 text-center">Sección</th>
                <th class="col-md-1 text-center">eliminar</th>
                <th class="col-md-1 text-center">Editar</th>
              </tr>
            </thead>
            <tbody id="tbodyClienteP"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla de clientes -->


     <div class="row">
      <div class="well  transparenteClaroTxt" id="formAgregar">
        <div class="row">
          <div class="col-md-6">
            <h3><span class=" glyphicon glyphicon-edit text-primary"></span> Agregar enlace</h3>
          </div>
        </div>
        <div  class="form-horizontal" >

          <div class="form-group">
              <label for="txtNombreA" class="col-md-2 control-label">Nombre: </label>
              <div class="col-md-10">
                <input type="text" id="txtNombreA" class="form-control input-sm" >
              </div>
            </div>
            <div class="form-group">
              <label for="txtEnlaceA" class="col-md-2 control-label">Enlace: </label>
              <div class="col-md-10">
                <input type="text" id="txtEnlaceA" class="form-control input-sm" >
              </div>
            </div>

            <div class="form-group">
              <label for="txtTipoA" class="col-md-2 control-label">Sección:</label>
              <div class="col-md-10">
                <select name="" id="txtTipoA" class="form-control input-sm">
                  <option value="1">Constitución</option>
                  <option value="2">Códigos</option>
                  <option value="3">Leyes</option>
                  <option value="4">Reglamentos</option>
                <!--   <option value="5">Estatutos</option>  -->
                  <option value="6">Otros</option>
                  <option value="7">Legislación estatal</option>
                  <option value="8">NOM</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-9">
                <button class="btn btn-primary btn-sm" id="btnGuardarA" ><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</button>
                <button class="btn btn-danger btn-sm" id="btnRegresarA"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
              </div>
            </div>
            <br><br>

            <div>
              <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
              <input type="hidden" id="txtId" class="form-control input-sm" disabled>
              <input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>">
            </div>

          </div>
        </div>

      </div>
    </div>  <!-- /renglonAgregar -->

    <div class="row">
      <div class="well hidden transparenteClaroTxt" id="formDetallesPersona">
        <div class="row">
          <div class="col-md-6">
            <h3><span class=" glyphicon glyphicon-edit text-primary"></span> Editar enlace</h3>
          </div>
        </div>
        <div  class="form-horizontal" >

          <div class="form-group">
              <label for="txtIdE" class="col-md-2 control-label">Id: </label>
              <div class="col-md-10">
                <input type="text" id="txtIdE" class="form-control input-sm" disabled >
              </div>
            </div>
          <div class="form-group">
              <label for="txtNombre" class="col-md-2 control-label">Nombre: </label>
              <div class="col-md-10">
                <input type="text" id="txtNombre" class="form-control input-sm" >
              </div>
            </div>
            <div class="form-group">
              <label for="txtEnlace" class="col-md-2 control-label">Enlace: </label>
              <div class="col-md-10">
                <input type="text" id="txtEnlace" class="form-control input-sm" >
              </div>
            </div>

            <div class="form-group">
              <label for="txtTipo" class="col-md-2 control-label">Sección:</label>
              <div class="col-md-10">
                <select name="" id="txtTipo" class="form-control input-sm">
                  <option value="1">Constitución</option>
                  <option value="2">Códigos</option>
                  <option value="3">Leyes</option>
                  <option value="4">Reglamentos</option>
                  <!--    <option value="5">Estatutos</option> -->
                  <option value="6">Otros</option>
                  <option value="7">Legislación estatal</option>
                  <option value="8">NOM</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-9">
                <button class="btn btn-primary btn-sm" id="btnGuardarEdit" ><span class="glyphicon glyphicon-floppy-disk"></span> Guardas cambios</button>
                <button class="btn btn-danger btn-sm" id="btnRegresar"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
              </div>
            </div>
            <br><br>

            <div>
              <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
              <input type="hidden" id="txtId" class="form-control input-sm" disabled>
              <input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>">
            </div>

          </div>

        </div>

      </div>
    </div>  <!-- /renglonDetalles -->



  </div>  <!--/columna10 contenido-->
</div>

@stop

@section('js')
{{HTML::script('js/admin/enlaceLegislacion.js')}}
@stop

@section('javascript')
  <script>
    $('#enlacesInfo').addClass('activoBorde');
  </script>
@stop
