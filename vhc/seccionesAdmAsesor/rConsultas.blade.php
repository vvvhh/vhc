
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-10">
        <h1>Consultas realizadas por clientes</h1>
      </div>
      <div class="col-md-2">
        <button class="btn btn-danger btn-sm" id="btnCancelar">Cancelar</button>
      </div>
    </div>


    <div id="buscar" class="row">
        <div class="form-group">
          <label for="txtBuscar" class="col-md-2">Buscar cliente:</label>
          <div class="col-md-6">
            <input type="text" class="form-control input-sm" id="txtBuscar" placeholder="Número de preregistro">
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnBuscar">Buscar</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnVerTodos">Ver todos</button>
          </div>
        </div>
      </div>

    <!--Tabla de contratos persona -->
    <div class="row hidden" id="pnlClienteConsulta">
      <div class="col-md-12">

        <div class="row">
          <div class="col-md-2">
            <label for="">Cliente:</label>
          </div>
          <div class="col-md-10">
            <input type="text" class="form-control input-sm" id="txtCliente" disabled>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-2">
            <label for="">Número registro:</label>
          </div>
          <div class="col-md-10">
            <input type="text" class="form-control input-sm" id="txtNRegistro" disabled>
          </div>
        </div>

        <div class="table-responsive " id="tblContrato">
          <h3>Servicios Contratados por el cliente</h3>
          <div class="col-md-3">
            <a id="btnImprimirServ" href="#" class="btn btn-primary btn-md"  target="blanck">Imprimir</a>
          </div>
          <br><br>
          <table class="table  table-bordered table-hover">
            <thead>
                <tr class="tablaAdm">
                <th class="col-md-1">Folio contrato</th>
                <th class="col-md-1 text-center">Fecha contrato</th>
                <th class="col-md-1 text-center">Servicio</th>
                <th class="col-md-1 text-center">Tipo consultas</th>
                <th class="col-md-1 text-center">Consultas contratadas</th>
                <th class="col-md-1 text-center">Consultas realizadas</th>
                <th class="col-md-1 text-center">Consultas restantes</th>
                <th class="col-md-1 text-center">Detalles</th>
              </tr>
            </thead>
            <tbody id="tbodyContrato"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla de precios -->
    <br>

    <!-- Panel editar -->
  <div class="row">
      <div class="col-md-12">
        <div class="well hidden trasparenteClaroPlus" id="pnlNConsultas">
          <div class="form-horizontal">
            <h3>Contenido Consultas</h3>
            <div class="col-md-3">
              <a id="btnImprimirContra" href="#" class="btn btn-primary btn-md"  target="blanck">Imprimir</a>
            </div>
            <fieldset id="flsContenidoC">
              <div class="form-group row">
                <label for="txtFolioC" class="col-md-4 control-label">Número de folio contrato: </label>
                <div class="col-md-7">
                  <input type="text" id="txtFolioC" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="txtServicioC" class="col-md-4 control-label">Servicio: </label>
                <div class="col-md-7">
                  <input type="text" id="txtServicioC" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="txtTipoC" class="col-md-4 control-label">Tipo consulta: </label>
                <div class="col-md-7">
                  <input type="text" id="txtTipoC" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="txtNContratado" class="col-md-4 control-label">Número consultas contratas: </label>
                <div class="col-md-7">
                  <input type="text" id="txtNContratado" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group"  >
                <label for="txtNRealizadas" class="col-md-4 control-label">Número consultas realizadas: </label>
                <div class="col-md-7">
                  <input type="text" id="txtNRealizadas" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group"  >
                <label for="txtNRestantes" class="col-md-4 control-label">Número consultas restantes: </label>
                <div class="col-md-7">
                  <input type="text" id="txtNRestantes" class="form-control input-sm" disabled>
                </div>
              </div>

            </fieldset>

            <div class="table-responsive " id="tblContenidoC">
              <h3>Consultas:</h3>
              <table class="table  table-bordered  table-hover">
                <thead>
                  <tr class="tablaAdm">
                    <th class="col-md-1 text-center">Título Consulta</th>
                    <th class="col-md-3 text-center">Consulta</th>
                    <th class="col-md-1 text-center">Duración (min)</th>
                    <th class="col-md-1 text-center">Fecha recibido</th>
                    <th class="col-md-1 text-center">Fecha respuesta</th>
                    <th class="col-md-4 text-center">Respuesta</th>
                    <th class="col-md-1 text-center">Asesor</th>
                  </tr>
                </thead>
                <tbody id="tbodyContenidoC"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- Panel editar -->



    <!-- Tabla de clientes -->
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive hidden" id="tblClienteP">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr class="tablaAdm">
                <th class="col-md-4">Cliente</th>
                <th class="col-md-2">Número registro</th>
                <!--  <th class="col-md-2">Número paquete</th> -->
                <th class="col-md-2">Ver consultas</th>
              </tr>
            </thead>
            <tbody id="tbodyClienteP"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla de clientes -->


  </div>  <!-- columna10 -->
</div>
