@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Asignar Precios | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
<div class="row">
  <div class="col-md-11">
    <h1>Clientes</h1>
    <div id="buscar" class="row">
        <div class="form-group">
          <label for="txtBuscar" class="col-md-2">Buscar Cliente:</label>
          <div class="col-md-6">
            <input type="text" class="form-control input-sm" id="txtBuscar" placeholder="Nombre parcial o completo del cliente">
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
    <!-- Tabla precios -->
    <div class="row">
      <div class="col-md-12" id="tblPrecio">
        <div class="table-responsive" >
          <h3>Precios consultas en Línea</h3>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-md-1 text-center">Precio</th>
                <th class="col-md-1 text-center">Número de consultas </th>
                <th class="col-md-1 text-center">Tipo de precio </th>
              </tr>
            </thead>
            <tbody id="tbodyPrecio"></tbody>
          </table>
        </div>
        <div class="table-responsive" >
          <h3>Precios consultas Telefónicas</h3>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-md-1 text-center">Precio</th>
                <th class="col-md-1 text-center">Número de consultas </th>
                <th class="col-md-1 text-center">Tipo de precio </th>
              </tr>
            </thead>
            <tbody id="tbodyPrecioLin"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla precios -->

    <!-- Panel editar -->
    <div class="row">
      <div class="col-md-10">
        <div class="well hidden" id="formEditarPC">
          <div class="form-horizontal">
            <fieldset>
              <legend><span class=" glyphicon glyphicon-list text-primary"></span> Editar precios de paquete a un cliente</legend>

              <div class="form-group">
                <label for="txtNombreC" class="col-md-3 control-label">Nombre del Cliente: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNombreC" class="form-control input-sm" disabled>
                </div>
              </div>
              <div id="moral" class="form-group" >
                <label for="txtNRegistro" class="col-md-3 control-label">Número de registro: </label>
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

    <!-- Tabla clientes -->
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive hidden" id="tblClienteP">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th class="col-md-3">Cliente</th>
                <th class="col-md-2 text-center">Número registro</th>
                <th class="col-md-2 text-center">Tipo precio</th>
                <th class="col-md-1 text-center">Estado</th>
                <th class="col-md-1 text-center">Dar de baja</th>
                <th class="col-md-1 text-center">Ver-Editar Información de Cliente</th>
                <th class="col-md-1 text-center">Editar Precios</th>
              </tr>
            </thead>
            <tbody id="tbodyClienteP"></tbody>
          </table>
        </div>
      </div>
    </div> <!-- /Tabla clientes -->

    <div class="row">
      <div class="well hidden transparenteClaroTxt" id="formDetallesPersona">
        <div class="row" >
          <a id="btnImprimir" href="#" class="btn btn-primary btn-md"  target="blanck">Imprimir</a>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h3><span class=" glyphicon glyphicon-edit text-primary"></span> Ver-Editar Información de Cliente</h3>
          </div>
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
                  <input type="text" id="txtNombreRL" class="form-control input-sm"  value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtNumeroEP" class="col-md-3 control-label">Número de escritura pública: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNumeroEP" class="form-control input-sm"  value="NULL">
                </div>
              </div>
              <div >
                <br><br>
                <label >Fecha en que se otorgo Número de escritura Publica</label>
              </div>
              <div class="form-group">
                <label for="txtDiaEP" class="col-md-3 control-label">Día: </label>
                <div class="col-md-9">
                  <input type="text" id="txtDiaEP" class="form-control input-sm"  value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtMesEP" class="col-md-3 control-label">Mes: </label>
                <div class="col-md-9">
                  <input type="text" id="txtMesEP" class="form-control input-sm"  value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtAnioEP" class="col-md-3 control-label">Año: </label>
                <div class="col-md-9">
                  <input type="text" id="txtAnioEP" class="form-control input-sm"  value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtLugarEP" class="col-md-3 control-label">En: </label>
                <div class="col-md-9">
                  <input type="text" id="txtLugarEP" class="form-control input-sm"  value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtNombreNP" class="col-md-3 control-label">Nombre notario público: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNombreNP" class="form-control input-sm"  value="NULL">
                </div>
              </div>
              <div class="form-group">
                <label for="txtNumeroNP" class="col-md-3 control-label">Número de notario público: </label>
                <div class="col-md-9">
                  <input type="text" id="txtNumeroNP" class="form-control input-sm"  value="NULL">
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
              <label class="col-md-3 control-label">*Calle:</label>
              <div class="col-md-9">
                <input id="txtCalle" type="text" class="form-control"   placeholder="*Calle" >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">*Número:</label>
              <div class="col-md-9">
                <input id="txtNumero" type="text" class="form-control" placeholder="*Número Int. Ext." >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">*Colonia:</label>
              <div class="col-md-9">
                <input id="txtColonia" type="text" class="form-control" placeholder="*Colonia." >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">*Municipio ó Delegación:</label>
              <div class="col-md-9">
                <input id="txtMunicipio" type="text" class="form-control" placeholder="*Municipio ó delegación." >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">*Entidad federativa:</label>
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
              <label for="txtAceptacion" class="col-md-3 control-label">Código aceptación aviso y política privacidad: </label>
              <div class="col-md-9">
                <input type="text" id="txtAceptacion" class="form-control input-sm" disabled>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-9">
                <button class="btn btn-primary btn-sm" id="btnGuardarEdit" ><span class="glyphicon glyphicon-floppy-disk"></span> Guardas cambios</button>
                <button class="btn btn-danger btn-sm" id="btnRegresar"><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
              </div>
            </div>
            <br><br>
            <div class="form-group">
              <div class="col-md-9">
                <button class="btn btn-primary btn-sm" id="btnContra"data-toggle="collapse" data-target="#reseteo"><i class="fa fa-key"></i> Restaurar Contraseña</button>
              </div>
              <div class="row">
                <div id="reseteo" class="collapse col-md-12 ">
                  <p>Para continuar ingrese la contraseña del administrador.</p>
                  <div class="form-group">
                    <label for="txtContraAdm" class="col-md-3 control-label">Contraseña de administrador: </label>
                    <div class="col-md-9">
                      <input type="password" id="txtContraAdm" class="form-control input-sm" >
                    </div>
                  </div>
                  <p class="text-info"><i class="fa fa-info-circle"></i> La contraseña volvera a ser el número de registro del cliente.</p>
                  <button class="btn btn-primary btn-sm" id="btnEnviarReseteo" ><span class="glyphicon glyphicon-floppy-disk"></span> Restaurar ahora </button>
                </div>
              </div>
            </div>

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
{{HTML::script('js/admin/clienteA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseClie').addClass('in');
    $('#liCliente').addClass('activoBorde');
  </script>
@stop
