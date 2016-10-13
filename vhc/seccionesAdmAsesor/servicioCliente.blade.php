<div class="row">
  <div class="col-md-12S">
    <h1>Consultas solicitadas solo por clientes</h1>
    <div id="buscar" class="row">
      <br>
        <div class="form-group">
          <label for="txtBuscar" class="col-md-2">Buscar Cliente</label>
          <div class="col-md-6">
            <input type="text" class="form-control input-sm" id="txtBuscar" placeholder="Nombre parcial o completo del Cliente">
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnBuscar"><span class="glyphicon glyphicon-search"></span> Buscar</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnVerTodos"><span class=" glyphicon glyphicon-list-alt"></span> Ver todos</button>
          </div>
        </div>
      </div>

<!-- Tabla de solicitudes -->
<div class="row">
  <div class="col-md-11" id="solicitudes">
    <br>

    <div class="form-horizontal">
      <div class="form-group">
        <label class="col-md-4 control-label">Nombre Cliente:</label>
        <div class="col-md-8">
          <input id="nombreCliente" type="text" class="form-control" value="" disabled>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Número de registro:</label>
        <div class="col-md-8">
          <input id="numeroCliente" type="text" class="form-control" disabled>
        </div>
      </div>

    </div>

    <a id="btnImprimir" href="#" class="btn btn-primary btn-md"  target="blanck">Imprimir</a>
    <br>
    <div class="table-responsive" id="tblsolicitudes">
      <br>
      <table class="table table-striped table-bordered table-hover">
        <thead class="tablaAdm">
          <tr>
            <th class="col-md-2">Fecha solicitud (DD-MM-AAAA)</th>
            <th class="col-md-2">Fecha contrato (DD-MM-AAAA)</th>
            <th class="col-md-2">Código Aceptación</th>
            <th class="col-md-1 text-center">Tipo de consultas</th>
            <th class="col-md-1 text-center">N. de consultas</th>
            <th class="col-md-2 text-center">Servicio</th>
            <th class="col-md-2 text-center">Precio</th>
            <th class="col-md-1 text-center">Pagado</th>
          </tr>
        </thead>
        <tbody id="tbodySolicitudes"></tbody>
      </table>
      <br>
      <button class="btn btn-danger btn-sm" id="btnCancelar"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
    </div>
  </div>
</div> <!-- /Tabla de solicitudes -->


<!-- Tabla de clientes -->
<div class="row">
  <div class="col-md-12">
    <div class="table-responsive hidden" id="tblClienteP">
      <br><br>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th class="col-md-4">Cliente</th>
            <th class="col-md-2 text-center">Número registro</th>
            <!--  <th class="col-md-2 text-center">Tipo precios</th>-->
            <th class="col-md-2 text-center">Servicios solicitados</th>
          </tr>
        </thead>
        <tbody id="tbodyClienteP"></tbody>
      </table>
    </div>
  </div>
</div> <!-- /Tabla de clientes -->




  </div>  <!-- columna10 -->
</div>
