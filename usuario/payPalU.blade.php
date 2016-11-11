@extends('usuario.layoutUsuario')

@section('title')
  Formas Pago | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('content')

<div class="row">
  <div class="col-md-11">
    <input type="hidden" id="idU" value={{Session::get('id')}} disabled >
    <input type="hidden" id="idPrecio" disabled >

  </div>
</div> <!-- /Tabla de solicitudes -->

<div class="row " id="pnlPago1">
  <div class="col-md-9">
    <h3>Formas de Pago:</h3>
  </div>
  <div class="row">
    <div class="col-md-12">
      <br>
      <div class="col-md-3 col-sm-3">
        <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#paypal"><i class="fa fa-paypal"></i> Pay Pal</button>
      </div>
      <div id="paypal" class="collapse">
        <div class="row">
          <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2">
            <div class="well">


              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

<input type="hidden" name="cmd" value="_s-xclick">

<input type="hidden" name="hosted_button_id" value="2UDGG4LSDBBJL">

<table>

<tr><td><input type="hidden" name="on0" value="consultas en línea">consultas en línea</td></tr><tr><td><select name="os0">

                <option value="6 consultas en línea">6 consultas en línea $4,500.00 MXN</option>

                <option value="12 consultas en línea">12 consultas en línea $7,500.00 MXN</option>

                <option value="18 consultas en línea">18 consultas en línea $10,000.00 MXN</option>

</select> </td></tr>

</table>

<input type="hidden" name="currency_code" value="MXN">

<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">

<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">

</form>


              <br>
              Una vez realizado su pago favor de notificarnos del mismo enviando un correo a: <a href="mailto:pagos@contadoresvh.com">pagos&#64;contadoresvh.com</a>
            </div>



          </div>
        </div>


      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <br>
      <div class="col-md-3 col-sm-3">
        <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#targetaCredito"><i class="fa fa-credit-card"></i> Tarjeta de credito</button>
      </div>
      <div id="targetaCredito" class="collapse">
        <div class="row ">
          <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2">
            <div class="well">
              Nombre firma: Vázquez Hernández Contadores S. C.
              <br>
              Número de cuenta: 0451908472
              <br>
              Sucursal: 0117 BBVA Bancomer
              <br><br>
              Una vez realizado su pago favor de notificarnos del mismo adjuntando su comprobante de pago al siguiente correo: <a href="mailto:pagos@contadoresvh.com">pagos&#64;contadoresvh.com</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <br>
      <div class="col-md-3 col-sm-3">
        <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#transferencia"><i class="fa fa-university"></i> Transferencia bancaria</button>
      </div>
      <div id="transferencia" class="collapse">
        <div class="row ">
          <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2">
            <div class="well">
              Nombre firma: Vázquez Hernández Contadores S. C.
              <br>
              Número de cuenta: 0451908472
              <br>
              Sucursal: 0117 BBVA Bancomer
              <br>
              Clabe: 012180004519084722
              <br><br>
              Una vez realizado su pago favor de notificarnos adjuntando su comprobante de pago al siguiente correo: <a href="mailto:pagos@contadoresvh.com">pagos&#64;contadoresvh.com</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <br>
        <div class="col-md-3 col-sm-3">
          <button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#cheque"><i class="fa fa-money"></i> Cheque</button>

        </div>

      <div id="cheque" class="collapse">
        <div class="row ">
          <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2">
            <div class="well">
              Nombre firma: Vázquez Hernández Contadores S. C.
              <br>
              Número de cuenta: 0451908472
              <br>
              Sucursal: 0117 BBVA Bancomer
              <br><br>
              Una vez realizado su pago favor de notificarnos adjuntando su comprobante de pago al siguiente correo: <a href="mailto:pagos@contadoresvh.com">pagos&#64;contadoresvh.com</a>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <br>
          <div class="col-md-3 col-sm-3">
            <a id="cancelar" class="btn btn-danger  btn-block" href="{{ URL::to('usuario/pagarContratoU') }}"><i class="fa fa-plus-circle"></i><span class="network-name"> Cancelar</span></a>

          </div>
        </div>
  </div>


  </div>





@stop

@section('js')
@stop

@section('javascript')
  <script>
    $('#collapseContra').addClass('in');
    $('#liPagar').addClass('activoBorde');
  </script>
@stop
