<div class="row">
  <div class="col-md-12">
    <h1><span class="glyphicon glyphicon-earphone text-primary"></span> Registrar consulta telefónica</h1>
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


      <div id="seleccionarServ" clas=""> <!-- seleccionar servicio -->
        <div class="row">
          <div class="col-md-12">
            <br>
            <button id="btnCancelar" type="submit" class="btn btn-md btn-primary" href=""><i class="fa fa-chevron-left"></i> Regresar</button>
            <br><br>
          <table id="tblConsultas" class="table table-striped table-bordered table-hover">
            <thead>
              <tr class="tablaAdm">
                <th class="col-md-1">Folio contrato</th>
                <th class="col-md-3">Servicio</th>
                <th class="col-md-2 text-center">Fecha contrato</th>
                <th class="col-md-1 text-center">Tipo precios</th>
                <th class="col-md-1 text-center">Consultas contratadas</th>
                <th class="col-md-1 text-center">Consultas realizadas</th>
                <th class="col-md-1 text-center">Consultas restantes</th>
                <th class="col-md-1 text-center">Registrar consulta</th>
              </tr>
            </thead>
            <tbody id="tbodyConsultas"></tbody>
          </table>

          </div>

        </div>
      </div>  <!-- /seleccionar servicio -->


      <div  id="pnlRegistrarC">
        <br><br>
        <h3><span class=" glyphicon glyphicon-comment text-primary"></span> Registro</h3>
      <div class="well trasparenteClaroPlus" >

        <div class="form-group row">
          <label for="txtFolioC" class="col-md-3 control-label">Número de folio contrato: </label>
          <div class="col-md-8">
            <input type="text" id="txtFolioC" class="form-control input-sm" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtServicioC" class="col-md-3 control-label">Servicio: </label>
          <div class="col-md-8">
            <input type="text" id="txtServicioC" class="form-control input-sm" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtFechaC" class="col-md-3 control-label">Fecha contrato: </label>
          <div class="col-md-8">
            <input type="text" id="txtFechaC" class="form-control input-sm" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtClienteC" class="col-md-3 control-label">Cliente: </label>
          <div class="col-md-8">
            <input type="text" id="txtClienteC" class="form-control input-sm" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtClienteC" class="col-md-3 control-label">Correo: </label>
          <div class="col-md-8">
            <input type="text" id="txtCorreoC" class="form-control input-sm" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtClienteC" class="col-md-3 control-label">Teléfono: </label>
          <div class="col-md-8">
            <input type="text" id="txtTelefonoC" class="form-control input-sm" disabled>
          </div>
        </div>
        <br><br>
        <div class="form-group row">
          <label for="txtNContratadas" class="col-md-3 control-label">Número de consultas contratadas: </label>
          <div class="col-md-8">
            <input type="text" id="txtNContratadas" class="form-control input-sm" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtNRealizadas" class="col-md-3 control-label">Número de consultas realizadas: </label>
          <div class="col-md-8">
            <input type="text" id="txtNRealizadas" class="form-control input-sm" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="txtNRestantes" class="col-md-3 control-label">Número de consultas restantes: </label>
          <div class="col-md-8">
            <input type="text" id="txtNRestantes" class="form-control input-sm" disabled>
          </div>
        </div>

        <br>
        <br>
        <div class="form-group">
          <label for="slctAsesor" class="col-md-3 control-label">Asesor que atendio: </label>
          <div class="col-md-9">
            <select class="form-control" name="" id="slctAsesor">
            </select>
          </div>
        </div>
        <br><br>
        <div class="form-group">
          <label for="txtTitulo" class="col-md-3 control-label">*Título o Asunto:</label>
          <div class="col-md-9">
            <input type="text" id="txtTitulo" name="txtTitulo" pattern="[0-9a-zA-Z\s\.\-\¿\?,:áéíóúÁÉÍÓÚñÑ]+" maxlength="50" placeholder="*Título o asunto de la consulta" class="form-control"></input>
            <p class="text-danger formatoTexto14" id="spnTitulo"> </p>
          </div>
        </div>
        <br><br>
        <div class="form-group">
          <label for="txtContenido" class="col-md-3 control-label">*Descripción o contenido:</label>
          <div class="col-md-9">
            <textarea class="form-control" id="txtContenido" name="txtContenido" maxlength="30000" placeholder="*Breve descripción o contenido de la consulta"></textarea>
            </textarea>
            <p class="text-danger formatoTexto14" id="spnRespuesta"> </p>
            <p class="text-info"><i class="fa fa-info-circle"></i> Puede utilizar caracteres alfanuméricos y los siguientes caracteres especiales: . - , : ¿ ? ( )</p>
          </div>
        </div>
        <br>

        <br>

        <!--  -->

        <br><br><br>
        <div class="row">
          <h4><span class="glyphicon glyphicon-time text-primary"></span> Duración de la llamada:</h4>

          <p class="text-info"><i class="fa fa-info-circle"></i> Una consulta puede tener una duración de 15 minutos, si se excede del tiempo se tendra que registrar como otra consulta el tiempo posterior a los 15 minutos.</p>
          <br>

          <div class="row">

            <div class="col-md-5">
              <div class="col-md-1">
                <span id="spnTiempo" class="glyphicon glyphicon-circle-arrow-right text-danger"></span>
              </div>
              <div class="col-md-6">
                <button id="btnPlay" type="button" class="btn btn-sm btn-block btn-success"><span class="glyphicon glyphicon-play"></span> Iniciar / Continuar</button>
              </div>
              <div class="col-md-5">
                <button id="btnPause" type="button" class="btn btn-sm btn-block btn-warning" disabled><span class="glyphicon glyphicon-pause"></span> Pausar / Detener</button>
              </div>

            </div>
            <div class="col-md-7">
              <div class="col-md-4 col-lg-4">
                  <div class="form-group">
                    <div class="col-md-5 col-lg-5">
                      <label for="txtMin" class="control-label">*Minutos:</label>
                    </div>
                    <div class="col-md-5 col-lg-5">
                      <input type="text" name="txtMin" id="txtMin" class="form-control" disabled>
                    </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4 hidden">
                  <div class="form-group">
                    <div class="col-md-5 col-lg-5">
                      <label for="txtHora" class="control-label">*Hora:</label>
                    </div>
                    <div class="col-md-5 col-lg-5">
                      <input type="text" name="txtHora" id="txtHora" class="form-control hidden" disabled >
                    </div>

                </div>
              </div>
              <div class="col-md-4 col-lg-4">
                  <div class="form-group">
                    <div class="col-md-5 col-lg-5">
                      <input type="text" name="txtSeg" id="txtSeg" class="form-control" disabled>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <hr>

          <div class="row">
            <div class="col-md-5">
              <div class="col-md-1">
                <span id="spnManual" class="glyphicon glyphicon-circle-arrow-right hidden text-danger" disabled></span>
              </div>
              <div class="col-md-6">
                <button id="btnManual" type="button" class="btn btn-sm btn-block btn-success"><span class="glyphicon glyphicon-hand-right"></span> Manual</button>
              </div>

            </div>
            <div class="col-md-7">
                <div class="col-md-4 col-lg-4">
                  <div class="form-group">
                    <label for="slctMin" class="col-md-5 col-lg-5 control-label">*Minutos:</label>
                    <div class="col-md-4 col-lg-4">
                      <select id="slctMin" disabled>
                        <option value="0" selected>0</option>
                      </select>
                    </div>
                  </div>
                  <select id="slctHora" class="hidden">
                      <option value="0" selected>0</option>
                    </select>
                </div>

            </div>
          </div>
        </div>

        <br><br>
        <div class="row">
          <div class="col-md-3">
            <button  id="btnGuardarReg" class="btn btn-block btn-primary btn-md"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Consulta</button>
          </div>
          <div class="col-md-3">
            <button id="btnCancelarReg" type="submit" class="btn btn-block btn-md btn-danger" href=""><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
          </div>
        </div>

      </div>
    </div>


<!-- Tabla de clientes -->
<div class="row">
  <div class="col-md-12">
    <div class="table-responsive hidden" id="tblClienteP">
      <br><br>
      <h3>Clientes que han contratado consultas telefónicas:</h3>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr class="tablaAdm">
            <th class="col-md-4">Cliente</th>
            <th class="col-md-1 text-center">Persona</th>
            <th class="col-md-2 text-center">Número registro</th>
            <th class="col-md-2 text-center">Tipo precios</th>
            <th class="col-md-2 text-center">Registrar</th>
          </tr>
        </thead>
        <tbody id="tbodyClienteP"></tbody>
      </table>
    </div>
  </div>
</div> <!-- /Tabla de clientes -->




  </div>  <!-- columna10 -->
</div>
