<div class="row">
  <div class="col-md-12">
    <h1>Consultas gratis recibidas sin contestar</h1>
    <br>

    <!-- Panel editar -->
    <div class="row">
      <div class="col-md-12 hidden"  id="formConsulta">
        <h3><span class=" glyphicon glyphicon-comment text-primary"></span> Consulta gratis recibida</h3>
        <div class="well trasparenteClaroPlus">
          <button class="btn btn-primary btn-sm" id="btnRegresar"><i class="fa fa-chevron-left"></i> Regresar</button>
          <br><br>
          <div class="form-horizontal">
            <fieldset>
              <div class="form-group">
                <label for="txtNombreC" class="col-md-3 control-label">Nombre del Cliente: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNombreC" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="txtRFC" class="col-md-3 control-label">RFC: </label>
                <div class="col-md-9">
                  <input type="text" id="txtRFC" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="txtRegistro" class="col-md-3 control-label">Número registro: </label>
                <div class="col-md-9">
                  <input type="text" id="txtRegistro" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group"  >
                <label for="txtTipoPersona" class="col-md-3 control-label">Persona: </label>
                <div class="col-md-9">
                  <input type="text" id="txtTipoPersona" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group"  >
                <label for="txtEstado" class="col-md-3 control-label">Estado registro: </label>
                <div class="col-md-9">
                  <input type="text" id="txtEstado" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group"  >
                <label for="txtTelefono" class="col-md-3 control-label">Teléfono: </label>
                <div class="col-md-9">
                  <input type="text" id="txtTelefono" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group"  >
                <label for="txtCorreo" class="col-md-3 control-label">Correo electrónico: </label>
                <div class="col-md-9">
                  <input type="text" id="txtCorreo" class="form-control input-sm" disabled>
                </div>
              </div>


                <br><br>
                <div class="form-group">
                  <label for="txtFecha" class="col-md-3 control-label">Fecha envío: </label>
                  <div class="col-md-9">
                    <input type="text" id="txtFecha" class="form-control input-sm" disabled>
                  </div>
                </div>
                <br><br>
              <div class="form-group">
                <label for="txtTitulo" class="col-md-3 control-label">Asunto ó título: </label>
                <div class="col-md-9">
                  <input type="text" id="txtTitulo" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="txtContenido" class="col-md-3 control-label">Duda o  problema: </label>
                <div class="col-md-9">
                  <textarea rows="10"  maxlength="3000" id="txtContenido" class="form-control" disabled>
                  </textarea>
                </div>
              </div>


              <button class="btn btn-danger btn-sm" id="btnCancelar"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
              <button class="btn btn-primary btn-sm" id="btnResponder"><span class=" glyphicon glyphicon-comment"></span> Responder</button>

              <div>
                <input type="hidden" id="txtId" class="form-control input-sm" disabled>
              </div>

            </fieldset>
          </div>
        </div>

        <div class="hidden" id="pnlResponder">
          <br><br>
          <h3><span class=" glyphicon glyphicon-comment text-primary"></span> Responder</h3>
        <div class="well trasparenteClaroPlus" >

          <br>
          <div class="form-group">
            <div class="row">
              <label for="txtContenido" class="col-md-3 control-label">*Responder la consulta gratuita:</label>
            </div>
            <div class="row">
              <div class="col-md-12">
                <textarea class="form-control" id="txtRespuesta" rows="10" maxlength="4000" placeholder="*Redacte la respuesta"></textarea>
                </textarea>
                <p class="text-danger formatoTexto14" id="spnRespuesta"> </p>
                <p class="text-info"><i class="fa fa-info-circle"></i> Puede utilizar caracteres alfanuméricos y los siguientes caracteres especiales: . - , : ¿ ? ( )</p>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <label for="slctAsesor" class="col-md-3 control-label">Asesor que atendio: </label>
                <div class="col-md-9">
                  <select class="form-control" name="" id="slctAsesor">
                  </select>
                </div>
              </div>
            </div>
          </div>
        <button  id="btnEnviarRespuesta" class="btn btn-primary btn-sm" id="btnResponder"><span class="glyphicon glyphicon-floppy-disk"></span> Registrar respuesta</button>
        </div>
      </div>


      </div>
    </div> <!-- Panel editar -->


    <!-- Tabla de clientes -->
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive hidden" id="tblConsultaR">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr class="tablaAdm">
                <th class="col-md-3 text-center">Asunto</th>
                <th class="col-md-3 text-center">Usuario</th>
                <th class="col-md-1 text-center">Estado</th>
                <th class="col-md-1 text-center">Número registro</th>
                <th class="col-md-2 text-center">Fecha Envío</th>
                <th class="col-md-1 text-center">Ver</th>
              </tr>
            </thead>
            <tbody id="tbodyConsultaR"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla de clientes -->


  </div>  <!-- columna10 -->
</div>
