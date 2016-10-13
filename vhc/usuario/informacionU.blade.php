@extends('usuario.layoutUsuario')

@section('head')
@stop

@section('title')
  Información | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('css')
{{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2">
          <h1>Información</h1>
          <button class="btn btn-primary btn-sm" id="btnEditar"><span class="glyphicon glyphicon-edit"></span> Editar</button>
        </div>
        <br><br>
      </div>

      <div  class="form-horizontal" >

        <div class="form-group">
          <label for="txtNombre" class="col-md-3 control-label">Nombre: </label>
          <div class="col-md-9">
            <input type="text" id="txtNombre" class="form-control input-sm" disabled>
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
        <div class="form-group">
          <label for="txtActividad" class="col-md-3 control-label">Actividad: </label>
          <div class="col-md-9">
            <input type="text" id="txtActividad" class="form-control input-sm" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="txtNacionalidad" class="col-md-3 control-label">Nacionalidad: </label>
          <div class="col-md-9">
            <input type="text" id="txtNacionalidad" class="form-control input-sm" disabled>
          </div>
        </div>

        <div id="dvPersonaMoral" class="hidden">

          <div class="form-group">
            <label for="txtNombreRL" class="col-md-3 control-label">Nombre del representante Legal: </label>
            <div class="col-md-9">
              <input type="text" id="txtNombreRL" class="form-control input-sm" disabled value="NULL">
            </div>
          </div>
          <div class="form-group">
            <label for="txtNumeroEP" class="col-md-3 control-label">Número de escritura pública: </label>
            <div class="col-md-9">
              <input type="text" id="txtNumeroEP" class="form-control input-sm" disabled value="NULL">
            </div>
          </div>
          <div>
            <br><br>
            <label >Fecha en que se otorgo Número de escritura Publica</label>
          </div>
          <div class="form-group">
            <label for="txtDiaEP" class="col-md-3 control-label">Día: </label>
            <div class="col-md-9">
              <input type="text" id="txtDiaEP" class="form-control input-sm" disabled value="NULL">
            </div>
          </div>
          <div class="form-group">
            <label for="txtMesEP" class="col-md-3 control-label">Mes: </label>
            <div class="col-md-9">
              <input type="text" id="txtMesEP" class="form-control input-sm" disabled value="NULL">
            </div>
          </div>
          <div class="form-group">
            <label for="txtAnioEP" class="col-md-3 control-label">Año: </label>
            <div class="col-md-9">
              <input type="text" id="txtAnioEP" class="form-control input-sm" disabled value="NULL">
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
              <input type="text" id="txtNombreNP" class="form-control input-sm" disabled value="NULL">
            </div>
          </div>
          <div class="form-group">
            <label for="txtNumeroNP" class="col-md-3 control-label">Número de notario público: </label>
            <div class="col-md-9">
              <input type="text" id="txtNumeroNP" class="form-control input-sm" disabled value="NULL">
            </div>
          </div>

        </div>

        <div class="form-group">
          <br><br>
          <label for="txtdireccion" class="col-md-3 control-label">Domicilio fiscal: </label>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">*Código Postal:</label>
          <div class="col-md-9">
            <input id="txtCP" type="text" class="form-control"   placeholder="*Código Postal" disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">*Calle:</label>
          <div class="col-md-9">
            <input id="txtCalle" type="text" class="form-control"   placeholder="*Calle" disabled>
          </div>
        </div>



        <div class="form-group">
          <label class="col-md-3 control-label">*Número:</label>
          <div class="col-md-9">
            <input id="txtNumero" type="text" class="form-control" placeholder="*Número Int. Ext." disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">*Colonia:</label>
          <div class="col-md-9">
            <input id="txtColonia" type="text" class="form-control" placeholder="*Colonia." disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">*Municipio ó Delegación:</label>
          <div class="col-md-9">
            <input id="txtMunicipio" type="text" class="form-control" placeholder="*Municipio ó delegación." disabled>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label">*Entidad federativa:</label>
          <div class="col-md-9">
            <input id="txtEntidad" type="text" class="form-control" placeholder="*Entidad federativa." disabled>
          </div>
        </div>

        <div class="form-group">
          <br><br>
          <label for="txtTelefono" class="col-md-3 control-label">Teléfono: </label>
          <div class="col-md-9">
            <input type="text" id="txtTelefono" class="form-control input-sm" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="txtCorreo" class="col-md-3 control-label">Correo electrónico: </label>
          <div class="col-md-9">
            <input type="text" id="txtCorreo" class="form-control input-sm" disabled>
          </div>
        </div>
        <p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> Recuerde que su correo electrónico es el nombre de usuario para acceder al sistema.</p>
        <div class="form-group">
          <div class="col-md-3">
            <button class="btn btn-primary btn-sm" id="btnGuardarEdit" disabled><span class="glyphicon glyphicon-floppy-disk"></span> Guardas cambios</button>
          </div>
          <div class="col-md-3">
            <button class="btn btn-danger btn-sm" id="btnCancelarEdit" disabled><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          </div>
        </div>

        <div>
          <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
          <input type="hidden" id="regU" value={{Session::get('reg')}} disabled >
          <input type="hidden" name="_token"  id="editarh" value="<?php echo csrf_token(); ?>">
        </div>

      </div>


    </div>
  </div>
@stop

@section('js')
  {{ HTML::script('js/lib/sweet-alert.min.js')}}
  {{ HTML::script('js/usuario/informacionU.js') }}
@stop
@section('javascript')
  <script>
    $('#collapseInfo').addClass('in');
    $('#liCuotas').addClass('activoBorde');
  </script>
@stop
