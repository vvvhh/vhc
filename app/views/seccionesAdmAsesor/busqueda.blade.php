<div class="row">
  <div class="col-md-12">
    <h1><i class="fa fa-search text-primary"></i> Buscar respuestas en consultas</h1>
    <div id="buscar" class="row">
      <br>
        <div class="form-group">
          <label for="txtBuscar" class="col-md-2">Buscar palabra:</label>
          <div class="col-md-6">
            <input type="text" class="form-control input-sm" id="txtBuscar" placeholder="Nombre parcial o completo del Cliente">
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnBuscar"><span class="glyphicon glyphicon-search"></span> Buscar</button>
          </div>
        </div>
      </div>


<!-- Tabla de resultados -->
<div class="row">
  <div class="col-md-12">
    <div class="table-responsive hidden" id="tblClienteP">
      <br><br>
      <h3>Resultados:</h3>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr class="tablaAdm">
            <th class="col-md-1">Título Consulta</th>
            <th class="col-md-4 text-center">Contenido consulta</th>
            <th class="col-md-4 text-center">Respuesta</th>
            <th class="col-md-2 text-center">Cliente</th>
          </tr>
        </thead>
        <tbody id="tbodyClienteP"></tbody>
      </table>
    </div>
  </div>
</div> <!-- /Tabla de clientes -->


  </div>  <!-- columna10 -->
</div>
