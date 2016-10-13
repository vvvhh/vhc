@extends('usuario.layoutAyudaU')

@section('head')
@stop

@section('title')
  Ayuda Consulta Teléfonica | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('css')
{{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('content')
<div class="row" id="pnlCambio">
  <div class="col-md-10 col-md-offset-1">
    <h3><i class="fa fa-question-circle text-warning"></i> Realizar consultas Telefónicas</h3>
      <br>
      <div class="trasparenteAzul">
        <h4>1.- Al finalizar el proceso de pago correspondiente, recibirá una notificación indicandole que se ha activado su servicio.</h4>
      </div>
      <br><br>
      <div class="trasparenteAzul">
        <h4>2.- Una vez recibida la notificación podrá realizar sus llamadas para efectuar las consultas al siguiente número telefónico:</h4>
      </div>

      <h4>Bastará con que realice una llamada telefónica al profesionista quien entablará una conversación no mayor a 15 minutos a efecto de resolver la duda o problema planteado. <br>Si la duración de la llamada sobrepasa los 15 minutos, el tiempo excedido se registrará como una consulta adicional.</h4>

</div>
</div>
@stop
@section('javascript')
  <script>
    $('#liTelefonica').addClass('activoBorde');
  </script>
@stop
