@extends('usuario.layoutAyudaU')

@section('head')
@stop

@section('title')
  Ayuda Contratar Servicio | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('css')
@stop

@section('content')
<div class="row" id="pnlCambio">
  <div class="col-md-10 col-md-offset-1">
    <h3><i class="fa fa-question-circle text-warning"></i> Contratar un Servicio</h3>
      <br>
      <div class="trasparenteAzul">
        <h4>1.- Desde el panel principal o también desde el menú izquierdo seleccionar:</h4>
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
      <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="formatoTexto4 navEj"><i class="fa fa-suitcase fa-2x"></i>&nbsp;Contratar Servicio</span>
      <br><br>
      <div class="trasparenteAzul">
        <h4>4.- Se mostraran los tipos de consulta y sus respectivos precios. Y dentro de la sección:</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="formatoTexto4"><i class="fa fa-pencil-square-o text-primary fa-2x"></i> Seleccione el servicio a contratar:</span>
      <br><br>
      <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seleccionar el tipo de consulta, servicio y paquete desde los menús desplegables.</h4>
      <br><br>
      <div class="trasparenteAzul">
        <h4>5.- Aceptar las políticas de uso y privacidad.</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input type="checkbox" id="chkAcepto" checked>
        *Acepto la <a href="{{ URL::to('usuario/piePagina/politicaUso')}}">Política de uso y privacidad del sitio web</a> y el <a href="{{URL::to('usuario/piePagina/avisoPrivacidadClientes')}}">Aviso de privacidad para clientes</a>.
      </label>
      <br><br>
      <div class="trasparenteAzul">
        <h4>6.- Dar clic en el botón "Realizar Solicitud".</h4>
      </div>
      <br>
      <div class="col-md-4 col-md-offset-3 ">
        <button id="btnRealizarContrato"  class="btn btn-primary btn-block"><i class="fa fa-tty"></i> Realizar Solicitud</button>
      </div>
      <br><br><br>
      <div class="trasparenteAzul">
        <h4>7.- El sitio lo direccionara a las formas de pago vigentes para que pueda realizar el pago correspondiente.</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="{{ URL::to('usuario/payPalU')}}">modalidades de pago.</a>
      <br><br>
      <div class="trasparenteAzul">
        <h4>8.- Notificarnos y enviarnos el comprobante de pago, para que un integrante de la firma active sus consultas al siguiente correo:</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:pagos@contadoresvh.com">pagos&#64;contadoresvh.com</a>
      <br>La fecha de registro del pago será la fecha de contratación.
  </div>
</div>
@stop
@section('javascript')
  <script>
    $('#liContratar').addClass('activoBorde');
  </script>
@stop
