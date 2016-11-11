@extends('usuario.layoutAyudaU')

@section('head')
@stop

@section('title')
  Ayuda Leer Respuestas Consulta en Línea | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('css')
{{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('content')
<div class="row" id="pnlCambio">
  <div class="col-md-10 col-md-offset-1">
    <h3><i class="fa fa-question-circle text-warning"></i> Leer las respuestas a las Consultas en Línea</h3>
      <br>
      <div class="trasparenteAzul">
        <h4>1.- Al recibir la notificación de que su consulta ha sido respondida, diríjase al panel principal :</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="colorNav grisClaro formatoTexto3 navEj"> <i class="fa fa-home"></i>&nbsp;Inicio</span>
      <br><br><br>
      <div class="trasparenteAzul">
        <h4>2.- Dirigirse a la sección de:</h4>
      </div>
      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="formatoTexto4 navEj"><i class="fa fa-tty text-primary fa-2x"></i> Consultas:</span>
      <br><br>
      <div class="trasparenteAzul">
        <h4>3.- Seleccionar la opción:</h4>
      </div>
      <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="formatoTexto4 navEj"><i class="fa fa-laptop fa-2x"></i> Consultas en Línea</span>
      <br><br>
      <div class="trasparenteAzul">
        <h4>4.- Se visualizará una tabla con los servicios contratados y dentro de la columna "Respuestas" se encontrara el botón "Respuestas" correspondiente a cada servicio contratado:</h4>
      </div>
      <br>
      <table id="tblConsultas" class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="tablaAdm">
            <th class="col-md-1">Folio</th>
            <th class="col-md-1 text-center">Servicio</th>
            <th class="col-md-2 text-center">Fecha Contratación</th>
            <th class="col-md-1 text-center">Consultas contratadas</th>
            <th class="col-md-1 text-center">Consultas realizadas</th>
            <th class="col-md-1 text-center">Consultas restantes</th>
            <th class="text-center">Respuestas</th>
            <th class="text-center">Consulta</th>
          </tr>
        </thead>
        <tbody id="tbodyConsultas"><tr><td></td><td></td><td></td><td></td><td></td><td></td><td><button class="btn btn-success"><i class="fa fa-clock-o"></i> Respuestas</button></td><td></td></tr></tbody>
      </table>

      <br><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Al dar clic sobre el botón "Respuestas" mostrara una tabla con los siguientes campos, donde podrá  ver el contenido de la respuesta:</h4>
      <br>
      <table class="table table-striped table-bordered  table-hover">
        <thead>
          <tr class="tablaAdm">
            <th class="col-md-2 text-center">Título Consulta</th>
            <th class="col-md-4 text-center">Consulta</th>
            <th class="col-md-1 text-center">Fecha envío</th>
            <th class="col-md-1 text-center">Fecha respuesta</th>
            <th class="col-md-4 text-center">Respuesta</th>
          </tr>
        </thead>
        <tbody id="tbodyContenidoC"></tbody>
      </table>

      <br><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;También se visualizará información sobre el estado actual para el contrato en cuestión:</h4>
      <ul>
        <li>Número consultas contratas</li>
        <li>Número consultas realizadas</li>
        <li>Número consultas restantes</li>
      </ul>
    </div>
  </div>
@stop
@section('javascript')
  <script>
    $('#liLeer').addClass('activoBorde');
  </script>
@stop
