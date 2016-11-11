<!-- Tabla de clientes -->

<div class="row">
  <div class="col-md-9">
    <h1> Cuestionario PLD:</h1>
  </div>
</div>

<br>
<div class="row"  id="tblPersonas">
  <input type="date" name="name" value="">

  <label for="txtTotal" class="col-md-1">Total: </label>
  <input type="text" id="txtTotal" value="" disabled>
  <br><br>
  <div class="col-md-12">
    <div class="table-responsive" id="tblPersonas">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr class="tablaAdm">
            <th class=""></th>
            <th class="col-md-3">Nombre</th>
            <th class="col-md-1 text-center">Persona</th>
            <th class="col-md-2 text-center">Teléfono</th>
            <th class="col-md-2 text-center">Correo electrónico</th>
          <!--    <th class="col-md-1 text-center">Cuestionario Completo</th> -->
            <th class="col-md-2 text-center">Fecha</th>
            <th class="col-md-1 text-center">Detalles</th>
          </tr>
        </thead>
        <tbody id="tbodyPersonas"></tbody>
      </table>
    </div>
  </div>
</div> <!-- /Tabla de clientes -->

<!--   -->
<!-- /respuestas -->


    <div class="row hidden" id="pnlDetalles">

        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-1 col-md-offset-10">
                <button class="btn btn-primary" id="btnRegresar" ><i class="fa fa-chevron-left"></i> Regresar</button>
                <br><br>
              </div>
            </div>


          <div class="row">
            <div class="col-md-2">
              <label for="">Usuario:</label>
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control input-sm" id="txtUsuario" disabled>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-2">
              <label for="">Teléfono:</label>
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control input-sm" id="txtTelefono" disabled>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-2">
              <label for="">Correo Electrónico:</label>
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control input-sm" id="txtCorreo" disabled>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-2">
              <label for="">Fecha:</label>
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control input-sm" id="txtFecha" disabled>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-2">
              <label for="">Código aceptación privacidad:</label>
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control input-sm" id="txtAceptacion" disabled>
            </div>
          </div>

        </div>
      </div>


        <div class="col-lg-12">
            <h2 class="page-header">Cuestionarios </h2>
        </div>
        <div class="col-lg-12">

            <ul id="myTab" class="nav nav-tabs nav-justified">
                <li class="active"><a href="#service-one" data-toggle="tab"><strong> Prevención de Lavado de Dinero </strong></a>
                </li>
              <!--    <li class=""><a href="#service-two" data-toggle="tab"><strong> Capacitación y adiestramiento </strong></a>
                </li>
                <li class=""><a href="#service-three" data-toggle="tab"><strong> Seguridad e higiene </strong></a>
                </li> -->
            </ul>

            <div id="myTabContent" class="tab-content transparenteClaroTxt">
                <div class="tab-pane fade active in" id="service-one">

                  <br>
                  <div class="row">
                     <div class="col-md-12">
                       <div class="table-responsive" id="tblGenerales">
                         <table class="table table-striped table-bordered table-hover">
                           <thead>
                          <!--     <tr class="tablaAdm">
                               <th colspan="3" class="text-center"> CONDICIONES GENERALES DE TRABAJO</th>
                             </tr> -->
                             <tr class="tablaAdm">
                               <td class="col-md-1 text-center">N</td>
                               <td class="col-md-9 text-center">Pregunta</td>
                               <td class="col-md-2 text-center">Respuesta</td>
                             </tr>
                           </thead>
                           <tbody id="tbodyGenerales"></tbody>
                         </table>
                       </div>
                     </div>
                   </div>

                </div>
              <!--    <div class="tab-pane fade" id="service-two">

                  <br>
                  <div class="row">
                     <div class="col-md-12">
                       <div class="table-responsive" id="tblCapacitacion">
                         <table class="table table-striped table-bordered table-hover">
                           <thead>

                             <tr class="tablaAdm">
                               <td class="col-md-1 text-center">N</td>
                               <td class="col-md-9 text-center">Pregunta</td>
                               <td class="col-md-2 text-center">Respuesta</td>
                             </tr>
                           </thead>
                           <tbody id="tbodyCapacitacion"></tbody>
                         </table>
                       </div>
                     </div>
                   </div>

                </div>-->

            <!--      <div class="tab-pane fade" id="service-three">

                  <br>
                  <div class="row">
                     <div class="col-md-12">
                       <div class="table-responsive" id="tblSeguridad">
                         <table class="table table-striped table-bordered table-hover">
                           <thead>

                             <tr class="tablaAdm">
                               <td class="col-md-1 text-center">N</td>
                               <td class="col-md-9 text-center">Pregunta</td>
                               <td class="col-md-2 text-center">Respuesta</td>
                             </tr>
                           </thead>
                           <tbody id="tbodySeguridad"></tbody>
                         </table>
                       </div>
                     </div>
                   </div>


                </div> -->


            </div>

        </div>
    </div>


  </div>  <!-- columna10 -->
</div>
