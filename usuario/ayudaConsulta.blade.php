@extends('usuario.layoutAyudaU')

@section('head')
@stop

@section('title')
  Ayuda Consulta en Línea | Vázquez Hernández Contadores, S. C.
@stop

@section('body')
@stop

@section('css')
{{ HTML::style('css/lib/sweet-alert.css') }}
@stop

@section('content')
<div class="row" id="pnlCambio">
  <div class="col-md-10 col-md-offset-1">
    <h3><i class="fa fa-question-circle text-warning"></i> Realizar consultas en línea</h3>
      <br>
      <div class="trasparenteAzul">
        <h4>1.- Al finalizar el proceso de pago correspondiente, podrá realizar consultas en línea, para eso diríjase a:</h4>
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
        <h4>4.- Se visualizará una tabla, y dentro de la columna "consulta" se encontrara el botón "Realizar Consulta":</h4>
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
        <tbody id="tbodyConsultas"><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><button class="btn btn-primary" id="'+o.ctoId+'"><i class="fa fa-keyboard-o"></i> Realizar Consulta</button></td></tr></tbody>
      </table>
      <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Al dar clic sobre el botón se visualizará información sobre el contrato y en la parte inferior se mostrara el formulario para realizar una consulta en línea.</h4>
      <br>
      <div class="trasparenteAzul">
        <h4>5.- Ingresar el Título ó asunto de la consulta en línea y redactar de manera clara su duda o problema, en los campos correspondientes:</h4>
      </div>

       <div >
        <div class="well trasparenteClaroPlus">
          <h3><i class="fa fa-comment text-primary"></i> Realizar Consulta</h3>
          <br>
          <label for="txtconsultaTitulo"> *Título ó asunto de la consulta:</label>
          <input type="text" id="txtconsultaTitulo" name="txtconsultaTitulo" pattern="[0-9a-zA-Z\s\.\-\¿\?,:áéíóúÁÉÍÓÚñÑ]+" placeholder="*Ingrese asunto de la consulta"  maxlength="50" class="form-control input-sm">
          <p class="text-danger formatoTexto14" id="spnTitulo"> </p>
          <br><br>
          <label for="txtConsulta"> *Duda ó problema:</label>
          <textarea type="text" class="form-control" id="txtConsulta" name="txtConsulta" rows="10" maxlength="30000" placeholder="*Redacte de manera clara su duda o problema"></textarea>
          </textarea>
          <p class="text-danger formatoTexto14" id="spnConsulta"> </p>
          <p class="text-info"><i class="fa fa-info-circle"></i> Puede utilizar caracteres alfanuméricos y los siguientes caracteres especiales: . - , : ¿ ? ( )</p>
          <br><br>
      </div>
  </div>
  <br><br>

    <div class="trasparenteAzul">
    <h4>6.- Al presionar el botón "Envía consulta" la consulta será registrada dentro del sistema y en breve un integrante de la firma le atenderá.</h4>
  </div>
  <br><br><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="btnEnviarConsulta" class="btn btn-md btn-primary"><i class="fa fa-paper-plane"></i> Enviar consulta</a>
  <br><br><p class="text-center">Se le notificará mediante un mensaje que su consulta ha sido registrado correctamente.</p>
  <br><br><img id="imgI1" class="img-rounded img-responsive" src="{{URL::asset('img/cuentas/consultaEnviada.png')}}"/>
  <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se le notificara vía correo electrónico cuando se atienda a su consulta.
</div>
</div>
@stop
@section('javascript')
  <script>
    $('#liLinea').addClass('activoBorde');
  </script>
@stop
