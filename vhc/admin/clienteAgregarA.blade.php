@extends('admin.layoutAdmin')

@section('head')
@stop

@section('title')
  Agregar Cliente | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')
  <h1>Agregar Cliente</h1>
<div class="well transparenteClaroTxt">
  <div class="panel-body text-justify">
    <div name="sentMessage" >  <!-- Formulario -->

      <div class="form-horizontal" >

        <div class="form-group">
          <label for="slctPersona" class="col-md-4 control-label">*Elija tipo de persona</label>
          <div class="col-md-8">
            <div class="radio">
              <label>
                <input type="radio" name="tipoPersona" id="rdioFisica" value="1" >
                Persona Física
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="tipoPersona" id="rdioMoral" value="0">
                Persona Moral
              </label>
            </div>
          </div>  <!-- ./columna 8  razón o definición social:-->
        </div>
      </div>
        <!-- ./Formulario tipo persona-->

      <div id="formCampos" class="form-horizontal hidden" data-toggle="validator" >
        <div id="nombreMoral" class="form-group hidden">
          <label class="col-md-4 control-label">* Nombre persona Moral:</label>
          <div class="col-md-8">
            <input id="txtNombreMoral" type="text" class="form-control" placeholder="*Persona moral">
          </div>
        </div>

        <div class="form-group">
          <label id="lblNombreRepresentate" class="col-md-4 control-label"> </label>
          <div class="col-md-8">
            <input id="txtNombre" type="text" class="form-control"   placeholder="*Nombre y apellidos">
          </div>
        </div>

        <div class="form-group">
          <br><br>
          <label class="col-md-4 control-label">*Domicilio fiscal:</label>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">*Código Postal:</label>
          <div class="col-md-8">
            <input id="txtCP" type="text" class="form-control"   placeholder="*Código Postal" maxlength="5">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">*Calle:</label>
          <div class="col-md-8">
            <input id="txtCalle" type="text" class="form-control" placeholder="*Calle" maxlength="50">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">*Número:</label>
          <div class="col-md-8">
            <input id="txtNumero" type="text" class="form-control" placeholder="*Número Int. Ext." maxlength="15">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">*Colonia:</label>
          <div class="col-md-8">
            <input id="txtColonia" type="text" class="form-control" placeholder="*Colonia." maxlength="50">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">*Municipio ó Delegación:</label>
          <div class="col-md-8">
            <input id="txtMunicipio" type="text" class="form-control" placeholder="*Municipio ó delegación." maxlength="50">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">*Entidad federativa:</label>
          <div class="col-md-8">
            <input id="txtEntidad" type="text" class="form-control" placeholder="*Entidad federativa." maxlength="30">
          </div>
        </div>

        <div class="form-group" id="nacionalidad">
          <br><br>
          <label class="col-md-4 control-label">*Nacionalidad:</label>
          <div class="col-md-8">
            <input id="txtNacionalidad" type="text" class="form-control" placeholder="*Nacionalidad" maxlength="20">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">*RFC:</label>
          <div class="col-md-8">
            <input id="txtRFC" type="text" class="form-control" onblur="pasarMayusculas()"  placeholder="*RFC" maxlength="15">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">*Actividad:</label>
          <div class="col-md-8">
            <input id="txtGiro" type="text" class="form-control"   placeholder="*Actividad o giro" maxlength="50">
          </div>
        </div>

        <div class="form-group" id="numeroEP">
          <br><br>
          <label for="txtNumeroEP" class="col-md-4 control-label">*Número de escritura pública: </label>
          <div class="col-md-8">
            <input type="text" id="txtNumeroEP" class="form-control input-sm" placeholder="*Número de escritura pública" maxlength="20">
          </div>
        </div>
        <div id="labelFecha" class="text-center">
          <label >Fecha en que se otorgo el número de Escritura Pública</label>
        </div>
        <div class="form-group" id="diaEP">
          <label for="slctDia" class="col-md-4 control-label">*Día: </label>
          <div class="col-md-8">
            <select id="slctDia" class="form-control input-sm">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="9">8</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>
          </div>
        </div>
        <div class="form-group" id="mesEP">
          <label for="slctMes" class="col-md-4 control-label">*Mes: </label>
          <div class="col-md-8">
            <select id="slctMes" class="form-control input-sm">
              <option value="enero">enero</option>
              <option value="febrero">febrero</option>
              <option value="marzo">marzo</option>
              <option value="abril">abril</option>
              <option value="mayo">mayo</option>
              <option value="junio">junio</option>
              <option value="julio">julio</option>
              <option value="agosto">agosto</option>
              <option value="septiembre">septiembre</option>
              <option value="octubre">octubre</option>
              <option value="noviembre">noviembre</option>
              <option value="diciembre">diciembre</option>
            </select>
          </div>
        </div>
        <div class="form-group" id="anioEP">
          <label for="txtAnioEP" class="col-md-4 control-label">*Año: </label>
          <div class="col-md-8">
            <input type="text" id="txtAnioEP" class="form-control input-sm" placeholder="*AAAA" maxlength="4">
          </div>
        </div>
        <div class="form-group" id="nombreNP">
          <label for="txtNombreNP" class="col-md-4 control-label">*Ante el Notario Público: </label>
          <div class="col-md-8">
            <input type="text" id="txtNombreNP" class="form-control input-sm" placeholder="*Nombre y apellidos del notario público"  maxlength="50">
          </div>
        </div>
        <div class="form-group" id="numeroNP">
          <label for="txtNumeroNP" class="col-md-4 control-label">*Número de notario público: </label>
          <div class="col-md-8">
            <input type="text" id="txtNumeroNP" class="form-control input-sm" placeholder="*Número de notario público"  maxlength="50">
          </div>
        </div>
        <div class="form-group" id="lugarEP">
          <label for="txtLugar" class="col-md-4 control-label">*En el:</label>
          <div class="col-md-8">
            <input type="text" id="txtLugar" class="form-control input-sm" placeholder="*Lugar" maxlength="150">
          </div>
          <br><br><br>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">*Teléfono:</label>
          <div class="col-md-8">
            <input id="txtTelefono" type="text" class="form-control"   placeholder="*Teléfono" maxlength="20">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">*Correo Electrónico:</label>
          <div class="col-md-8">
            <input id="txtCorreo" type="email" class="form-control"   placeholder="*Correo electrónico" maxlength="50">
          </div>
        </div>
        <br><br>
        <div class="form-group">
          <label for="txtTipoPrecio" class="col-md-4 control-label">Tipo precio:</label>
          <div class="col-md-8">
            <select name="" id="txtTipoPrecio" class="form-control input-sm">
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-8 col-md-offset-4">
            <div class="checkbox">
              <label>
                <input type="checkbox" id="chkAcepto"   >
                *Al hacer clic en el botón, acepto la Política de uso y privacidad del sitio web y el Aviso de privacidad para clientes</a>.
              </label>
            </div>

            <br>
            <div>
              <label>Antes de continuar verifique que no tenga errores en el llenado de los campos, ya que la información que proporcione se utilizará en procesos posteriores como el llenado de Contrato y Facturación.</label>
            </div>
          </div>
        </div>

      </div>  <!-- ./Formulario tipo persona -->
      <div>
        <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
      </div>

      <div class="col-md-5 col-md-offset-4 ">
        <button id="btnContratar" type="submit" class="btn btn-primary  hidden" href=""><span class="glyphicon glyphicon-floppy-disk"></span> Realizar Regitro</button>
        <button id="btnCancelar" type="submit" class="btn btn-danger  hidden" href=""><span class="glyphicon glyphicon-remove-sign"></span> Cancelar</button>
      </div>

    </div> <!-- /Formulario -->
  </div>

</div>  <!-- Well -->
@stop

@section('js')
{{HTML::script('js/admin/clienteAgregarA.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseClie').addClass('in');
    $('#liAgregarCli').addClass('activoBorde');
  </script>
@stop
