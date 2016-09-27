@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Cliente preregistro | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<div class="row">
  <div class="col-md-11">
    <h1> Activar cuenta </h1>
    <div id="buscar" class="row">
        <div class="form-group">

          <label for="txtBuscar" class="col-md-3 text-right">Buscar Pre-registros:</label>
          <div class="col-md-5">
            <input type="text" class="form-control input-sm" id="txtBuscar" placeholder="Nombre parcial o completo del pre-registro">
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnBuscar"><span class="glyphicon glyphicon-search"></span> Buscar</button>
          </div>
          <div class="col-md-2">
            <button class="btn btn-primary btn-sm" id="btnVerTodos"><span class=" glyphicon glyphicon-list-alt"></span> Ver todos</button>
          </div>
        </div>
      </div>

      <!-- Tabla de precios -->
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive" id="tblPrecio">
            <h3>Tipo de Precios Registrados</h3>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th class="col-md-1">ID</th>
                  <th class="col-md-1 text-center">Consulta</th>
                  <th class="col-md-1 text-center">6 </th>
                  <th class="col-md-1 text-center">12 </th>
                  <th class="col-md-1 text-center">18 </th>
                  <th class="col-md-1">nombre</th>
                  <th class="col-md-1 text-center">Predefinido</th>
                  <th class="col-md-1 text-center">Estado</th>

                </tr>
              </thead>
              <tbody id="tbodyPrecio"></tbody>
            </table>
          </div>
        </div>
      </div> <!-- /Tabla de precios -->

    <br>

    <!-- Panel editar -->
    <div class="row">
      <div class="col-md-10">
        <div class="well hidden" id="formEditarPC">
          <div class="form-horizontal">
            <fieldset>
              <legend>Editar precios de paquete al preregistro</legend>

              <div class="form-group">
                <label for="txtNombreC" class="col-md-3 control-label">Nombre del Cliente: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNombreC" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="txtNRegistro" class="col-md-3 control-label">Numero preregistro: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNRegistro" class="form-control input-sm" disabled>
                </div>
              </div>
              <div class="form-group"  >
                <label for="txtTipoPersona" class="col-md-3 control-label">Persona: </label>
                <div class="col-md-9">
                  <input type="text" id="txtTipoPersona" class="form-control input-sm" disabled>
                </div>
              </div>

              <div class="form-group">
               <label for="txtTipoPrecio" class="col-md-3 control-label">Tipo precio:</label>
               <div class="col-md-9">
                 <select name="" id="txtTipoPrecio" class="form-control input-sm">
                 </select>
               </div>
             </div>

              <div>
                <input type="hidden" id="txtId" class="form-control input-sm" disabled>
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


    <!-- Tabla de Persoas -->
    <div class="row">
      <div class="col-md-12 hidden" id="tblClienteP">
        <div class="table-responsive ">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-md-4">Nombre</th>
                <th class="col-md-2 text-center">Número preregistro</th>
                <th class="col-md-2 text-center">Tipo precio</th>
                <th class="col-md-1 text-center">Estado</th>
                <th class="col-md-1 text-center">Ver-Editar información</th>
                <th class="col-md-1 text-center">Editar precios</th>
                <th class="col-md-1 text-center">Activar</th>
              </tr>
            </thead>
            <tbody id="tbodyClienteP">
              <tr>
                <td class="col-md-4">0</td>
                <td class="col-md-2 ">0</td>
                <td class="col-md-2 ">0</td>
                <td class="col-md-2 ">0</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla de precios -->


    <div class="row">
      <div class="well hidden" id="formDetallesPersona">
        <div class="row">
          <div class="col-md-8">
            <h3>Detalles Preregistro</h3>
          </div>
        </div>
        <div class="row" >
          <a id="btnImprimir" href="#" class="btn btn-primary btn-md"  target="blanck">Imprimir</a>
        </div>
        <div  class="form-horizontal" >
          <div class="form-group">
            <label for="txtActivo" class="col-md-3 control-label">Activo:</label>
            <div class="col-md-9">
              <select name="" id="txtActivo" class="form-control input-sm">
                <option value="1">Sí</option>
                <option value="0">No</option>
              </select>
            </div>
          </div>
          <br><br>

          <div class="form-group">
              <label for="txtNombre" class="col-md-3 control-label">Nombre: </label>
              <div class="col-md-9">
                <input type="text" id="txtNombre" class="form-control input-sm" >
              </div>
            </div>
            <div class="form-group">
              <label for="txtRFC" class="col-md-3 control-label">RFC: </label>
              <div class="col-md-9">
                <input type="text" id="txtRFC" class="form-control input-sm" >
              </div>
            </div>
            <div class="form-group">
              <label for="txtPersona" class="col-md-3 control-label">Persona: </label>
              <div class="col-md-9">
                <input type="text" id="txtPersona" class="form-control input-sm" >
              </div>
            </div>
            <div class="form-group">
              <label for="txtRegistro" class="col-md-3 control-label">Número registro: </label>
              <div class="col-md-9">
                <input type="text" id="txtRegistro" class="form-control input-sm" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="txtActividad" class="col-md-3 control-label">Objeto social: </label>
              <div class="col-md-9">
                <input type="text" id="txtActividad" class="form-control input-sm" >
              </div>
            </div>
            <div class="form-group">
              <label for="txtNacionalidad" class="col-md-3 control-label">Nacionalidad: </label>
              <div class="col-md-9">
                <input type="text" id="txtNacionalidad" class="form-control input-sm" >
              </div>
            </div>

            <div id="dvPersonaMoral" class="hidden">

              <div class="form-group">
                <label for="txtNombreRL" class="col-md-3 control-label">Nombre del representante Legal: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNombreRL" class="form-control input-sm" value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtNumeroEP" class="col-md-3 control-label">Número de escritura pública: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNumeroEP" class="form-control input-sm" value="NULL">
                </div>
              </div>
              <div >
                <br><br>
                <label >Fecha en que se otorgo Número de escritura Pública</label>
              </div>
              <div class="form-group">
                <label for="txtDiaEP" class="col-md-3 control-label">Día: </label>
                <div class="col-md-9">
                  <input type="text" id="txtDiaEP" class="form-control input-sm" value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtMesEP" class="col-md-3 control-label">Mes: </label>
                <div class="col-md-9">
                  <input type="text" id="txtMesEP" class="form-control input-sm" value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtAnioEP" class="col-md-3 control-label">Año: </label>
                <div class="col-md-9">
                  <input type="text" id="txtAnioEP" class="form-control input-sm" value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtLugarEP" class="col-md-3 control-label">En: </label>
                <div class="col-md-9">
                  <input type="text" id="txtLugarEP" class="form-control input-sm" disabled value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtNombreNP" class="col-md-3 control-label">Nombre notario público: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNombreNP" class="form-control input-sm" value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtNumeroNP" class="col-md-3 control-label">Número de notario público: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNumeroNP" class="form-control input-sm" value="NULL">
                </div>
              </div>

            </div>

            <div class="form-group">
              <br><br>
              <label for="txtdireccion" class="col-md-3 control-label">Domicilio fiscal: </label>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Código Postal:</label>
              <div class="col-md-9">
                <input id="txtCP" type="text" class="form-control"   placeholder="Código Postal" >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Calle:</label>
              <div class="col-md-9">
                <input id="txtCalle" type="text" class="form-control"   placeholder="*Calle" >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Número:</label>
              <div class="col-md-9">
                <input id="txtNumero" type="text" class="form-control" placeholder="*Número Int. Ext." >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Colonia:</label>
              <div class="col-md-9">
                <input id="txtColonia" type="text" class="form-control" placeholder="*Colonia." >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Municipio ó Delegación:</label>
              <div class="col-md-9">
                <input id="txtMunicipio" type="text" class="form-control" placeholder="*Municipio ó delegación." >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Entidad federativa:</label>
              <div class="col-md-9">
                <input id="txtEntidad" type="text" class="form-control" placeholder="*Entidad federativa." >
              </div>
            </div>

            <div class="form-group">
              <br><br>
              <label for="txtTelefono" class="col-md-3 control-label">Teléfono: </label>
              <div class="col-md-9">
                <input type="text" id="txtTelefono" class="form-control input-sm" >
              </div>
            </div>

            <div class="form-group">
              <label for="txtCorreo" class="col-md-3 control-label">Correo electrónico: </label>
              <div class="col-md-9">
                <input type="text" id="txtCorreo" class="form-control input-sm" >
              </div>
            </div>
            <br><br>
            <div class="form-group">
              <label for="txtAceptacion" class="col-md-3 control-label">Código aceptación aviso y política de privacidad: </label>
              <div class="col-md-9">
                <input type="text" id="txtAceptacion" class="form-control input-sm" disabled>
              </div>
            </div>
            <p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> Año-Mes-Día-Hora:Minuto:Segundo-NúmeroRegistro-Sección de registro.</p>
            <br><br>
            <div class="form-group">
              <div class="col-md-9">
                <button class="btn btn-primary btn-sm" id="btnGuardarEdit" ><span class="glyphicon glyphicon-floppy-disk"></span> Guardas cambios</button>
                <button class="btn btn-danger btn-sm" id="btnRegresar"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
              </div>
            </div>

            <div>
              <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
              <!--  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">-->
              <input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>">
            </div>

          </div>

        </div>


      </div>
    </div>  <!-- /renglonDetalles -->


  </div>  <!-- columna10 -->
</div>

@stop

@section('js')
{{HTML::script('js/admin/preregistroA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseClie').addClass('in');
    $('#liPreregistro').addClass('activoBorde');
  </script>
@stop
