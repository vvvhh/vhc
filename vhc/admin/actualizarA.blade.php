@extends('admin.layoutAdmin')

@section('title')
Panel de Administración | VHC
@stop

@section('content')


<h1 class="page-header text-center" id="page-header">Actualizar Información</h1>

  <div class="row">
    <div class="col-md-12">

      <div name="enviarMensaje" class="form-horizontal" >

        <div class="form-group">
          <label for="txtNumeroEscritura" class="col-md-3 control-label">Número de escritura pública</label>
          <div class="col-md-9">
            <input type="text" id="txtCurp" class="form-control input-sm" placeholder="Número de escritura pública" maxlength="20" >
          </div>
        </div>

        <hr>
        <div>
          <label>Fecha en que se otorgo el número de escritura pública:</label>
        </div>
        <div class="form-group">
            <label for="slctDia" class="col-md-3 control-label">Día</label>
            <div class="col-md-9">
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

          <div class="form-group">
              <label for="slctDia" class="col-md-3 control-label">Mes</label>
              <div class="col-md-9">
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

            <div class="form-group">
              <label for="txtAnio" class="col-md-3 control-label">Año:</label>
              <div class="col-md-9">
                <input type="text" id="txtAnio" class="form-control input-sm" placeholder="AAAA" maxlength="4">
              </div>
            </div>
            <hr>

          <div class="form-group">
            <label for="txtNombreNotario" class="col-md-3 control-label">Nombre del notario público:</label>
            <div class="col-md-9">
              <input type="text" id="txtCurp" class="form-control input-sm" placeholder="Nombre del notario público" maxlength="50">
            </div>
          </div>

          <div class="form-group">
            <label for="txtNumeroNotario" class="col-md-3 control-label">Número del notario público:</label>
            <div class="col-md-9">
              <input type="text" id="txtCurp" class="form-control input-sm" placeholder="Número del notario público" maxlength="50">
            </div>
          </div>

          <div class="form-group">
            <label for="txtCurp" class="col-md-3 control-label">En el:</label>
            <div class="col-md-9">
              <input type="text" id="txtCurp" class="form-control input-sm" placeholder="En el" maxlength="50">
            </div>
          </div>

          <div class="form-group">
            <label for="txtActividades" class="col-md-3 control-label">Actividades:</label>
            <div class="col-md-9">
              <input type="text" id="txtCurp" class="form-control input-sm" placeholder="Objeto social" maxlength="50">
            </div>
          </div>

        <div>
          <input type="hidden" name="contactoh" id="contactoh" value="contacto">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </div>


        <div class="col-md-8 col-md-offset-2">
          <button id="btnEnviar"  class="btn btn-primary btn-block"> Actualizar contenido</button>
        </div>

      </div>

    </div>
  </div>
@stop

@section('js')
{{ HTML::script('js/admin/actualizarA.js') }}
@stop
