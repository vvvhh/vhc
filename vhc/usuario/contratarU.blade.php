@extends('usuario.layoutUsuario')

@section('head')
@stop

@section('title')
  Contratar Servicio | Vázquez Hernández Contadores, S. C.
@stop

@section('css')
  {{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('body')
@stop

@section('content')


  <div class="row">
    <div class="col-md-8">
      <h3>Instrucciones para hacer uso del servicio de consultas en linea.</h3>
      <p class="formatoTexto4">
        <ul>
          <li>Seleccionar el tipo de paquete y servicio así como aceptar las políticas de uso y privacidad.</li>
          <li>Realizar el pago correspondiente.</li>
          <li>Notificarnos y enviarnos el comprobante de pago, para que un integrante de la firma active sus consultas.</li>
        </ul>
      </p>
    </div>
  </div>

  <!-- Tabla de precios -->
   <div class="row">
     <div class="col-md-6">
       <input type="hidden" id="idPrecio" disabled >
       <div class="table-responsive " id="tblPrecioTel">
         <h3><i class="fa fa-phone text-primary"></i>
            Precios Consultas Teléfonicas:</h3>
         <table class="table table-striped table-bordered table-hover">
           <thead>
             <tr class="activoLiMenu">
               <th class="col-md-2 text-center"><i class="fa fa-phone"></i> Número de consultas</th>
               <th class="col-md-2 text-center"> Precio $MXN</th>
             </tr>
           </thead>
           <tbody id="tbodyPrecioTel"></tbody>
         </table>
       </div>
     </div>
     <div class="col-md-6">
       <div class="table-responsive " id="tblPrecioLin">
         <h3><i class="fa fa-laptop text-primary"></i>
            Precios Consultas en Línea:</h3>
         <table class="table table-striped table-bordered table-hover">
           <thead>
             <tr class="activoLiMenu">
               <th class="col-md-2 text-center"><i class="fa fa-laptop"></i> Número de consultas</th>
               <th class="col-md-2 text-center"> Precio $MXN</th>
             </tr>
           </thead>
           <tbody id="tbodyPrecioLin"></tbody>
         </table>
       </div>
     </div>
   </div> <!-- /Tabla de precios -->

   <div class="form-horizontal" >
        <br><br>
        <!-- TIPO CONSULTA -->
        <h2><i class="fa fa-pencil-square-o text-primary"></i> Seleccione el servicio a contratar:</h2>
        <br>
        <div class="form-group">
          <label for="slctTConsulta" class="col-md-2 control-label">*Tipo de Consulta:</label>
          <div class="col-md-7">
            <select id="slctTConsulta" class="form-control input-sm"  >
              <option value="0">Telefónicas </option>
              <option value="1">En Línea </option>
            </select>
          </div>
        </div>

            <div class="form-group">
              <label for="slctServicios" class="col-md-2 control-label">*Servicios a solicitar:</label>
              <div class="col-md-7">
                <select id="slctServicios" class="form-control input-sm"  >
                </select>
                <label>Al seleccionar la cuarta opción usted podrá variar sus consultas, que podrán ser en materia contable, fiscal ó jurídica.</label>
              </div>
            </div>

            <!-- SERVICIOS -->
            <div class="form-group">
              <label for="slctConsultas" class="col-md-2 control-label">*Seleccione paquete:</label>
              <div class="col-md-7">
                <select id="slctLinea" class="form-control input-sm hidden"  >
                </select>
                <select id="slctTel" class="form-control input-sm"  >
                </select>
              </div>
            </div>

          <div class="form-group">
            <div class="col-md-7 col-md-offset-2">
              <div class="checkbox">
                <label>
                  <input type="checkbox" id="chkAcepto"   >
                  *Acepto la <a href="{{ URL::to('usuario/piePagina/politicaUso')}}">Política de uso y privacidad del sitio web</a> y el <a href="{{URL::to('usuario/piePagina/avisoPrivacidadClientes')}}">Aviso de privacidad para clientes</a>.
                </label>
              </div>
                <div>
                     <br>
                     <label for="">Una vez leido y aceptado las políticas de uso y privacidad, de clic en el botón "Realizar Contrato" posteriormente tendra que realizar el pago y notificarnos que ha realizado su pago.</label>
               </div>

            </div>
          </div>

          <div class="col-md-4 col-md-offset-3 ">
            <button id="btnRealizarContrato"  class="btn btn-primary btn-block"><i class="fa fa-tty"></i> Realizar Solicitud</button>
          </div>





      <!--    <div>
          <input type="hidden" name="contratarh" id="contratarh" value="contratar">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </div>
      -->

      </div>
      <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
      <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
      <input type="hidden" id="regU" value={{Session::get('reg')}} disabled >
     </div>



@stop

@section('js')
{{HTML::script('js/usuario/contratarU.js')}}
{{ HTML::script('js/lib/sweet-alert.min.js')}}
@stop

@section('javascript')
  <script>
    $('#collapseContra').addClass('in');
    $('#liContraPaquete').addClass('activoBorde');
  </script>
@stop
