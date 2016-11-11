@extends('usuario.layoutAyudaU')

@section('head')
@stop

@section('title')
  Ayuda Pagos | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('css')
{{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('content')
<div class="row" id="pnlCambio">
  <div class="col-md-10 col-md-offset-1">
    <h3><i class="fa fa-question-circle text-warning"></i> Realizar el Pago</h3>
      <br>
      <div class="trasparenteAzul">
        <h4>1.- Al finalizar una nueva solicitud de pago se mostrará las modalidades de pago, si al momento de realizar la solicitud de contrato no realizo el pago puede acceder posteriormente desde:</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="colorNav grisClaro formatoTexto3 navEj"> <i class="fa fa-home"></i>&nbsp;Inicio</span>
      <br><br><br>
      <div class="trasparenteAzul">
        <h4>2.- Dirigirse a la sección de:</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="formatoTexto4 navEj"><i class="fa fa-file-text-o text-primary fa-2x"></i>&nbsp;Contratar</span>
      <br><br>
      <div class="trasparenteAzul">
        <h4>3.- Seleccionar la opción:</h4>
      </div>
      <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="formatoTexto4 navEj"><i class="fa fa-file-text fa-2x"></i>&nbsp;Contratados</span>
      <br><br>
      <div class="trasparenteAzul">
        <h4>4.- Se visualizaran los servicios solicitados y dentro de la columna "pagado" aparecerá el botón "Pagar ahora" si dicho servicio no ha sido pagado o aún no se registra su pago:</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="{{ URL::to('usuario/payPalU')}}" class="btn btn-primary"><i class="fa fa-cc-paypal"></i> Pagar ahora</a>
      <br><br>
        <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Al dar clic se visualizarán las modalidades de pago vigentes, deberá realizar el pago correspondiente.</h4>
      <br><br>

      <div class="trasparenteAzul">
        <h4>5.- Notificarnos y enviarnos el comprobante de pago, para que un integrante de la firma active sus consultas al siguiente correo:</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:pagos@contadoresvh.com">pagos&#64;contadoresvh.com</a>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cuando se active su servicio se le notificara vía correo electrónico para que pueda utilizar el servicio contratado desde la sección de consultas. 
  </div>
</div>
@stop
@section('javascript')
  <script>
    $('#liPagos').addClass('activoBorde');
  </script>
@stop
