<?php

class ReportesPDFController extends BaseController {

private function getFecha(){
  $format = "d-m-Y H:i:s";
  $timestamp = time();
  $fecha =  date($format, $timestamp);
  return $fecha;
}
  public function pdfInscritos()
  {
    $fecha=ReportesPDFController::getFecha();

    $getPersonas = PersonasController::getPerActivas();

    $cuerpoTabla ='';
    $i=0;
    $iClientes=0;
    $iPre=0;
    foreach ($getPersonas as $value) {
      $i=$i+1;
      $nombre = $value['perNombre'];

      $persona;
      if($value['perTipoPersona'] == 1){
        $persona="moral";
      }
      if($value['perTipoPersona'] == 0){
        $persona="física";
      }

      $cliente;
      if($value['perCliente'] == 1){
        $cliente="cliente";
        $iClientes = $iClientes +1;
      }
      if($value['perCliente'] == 0){
        $iPre = $iPre+1;
        $cliente="pre-registro";
      }

      $numeroRegistro = $value['perNumeroPreregistro'];
      $fechaInscripcion = $value['perFechaPreregistro'];
      $fechaActivacion = $value['perFechaRegistro'];
      if($fechaActivacion == null){
        $fechaActivacion = '- -';
      }

      $cuerpoTabla = $cuerpoTabla.'<tr>
          <td width="3%">
            <div align="center">
            <CODE  style="font-size: 50%;">'.$i.'</code>
            </div>
          </td>
          <td width="27%" >
            <div align="justify">
            <CODE>'.$nombre.'</code>
            </div>
          </td>
          <td width="10%">
            <div align="center">
            <CODE>'.$persona.'</code>
            </div>
          </td>
          <td width="10%">
            <div align="center">
            <CODE>'.$cliente.'</code>
            </div>
          </td>
          <td width="10%">
            <div align="center">
            <CODE>'.$numeroRegistro.'</code>
            </div>
          </td>
          <td width="15%">
            <div align="center">
            <CODE>'.$fechaInscripcion.'</code>
            </div>
          </td>
          <td width="20%">
            <div align="center">
            <CODE>'.$fechaActivacion.'</code>
            </div>
          </td>
        </tr>';
    }

    $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
    .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
    .'<h3 align="center">Personas Inscritas</h3>'

    .'<table cellspacing="0"  border="1" align="center" width="550" >
      <tbody >
        <tr>
          <td width="3%" >
            <div align="center">
            </div>
          </td>
          <td width="27%" >
            <div align="center">
              <h5><strong>Nombre</strong> </h5>
            </div>
          </td>
          <td width="10%">
            <div align="center">
              <h5><strong>Persona</strong> </h5>
            </div>
          </td>
          <td width="10%">
            <div align="center">
              <h5><strong>Estado</strong> </h5>
            </div>
          </td>
          <td width="10%">
            <div align="center">
              <h5><strong>Número registro</strong> </h5>
            </div>
          </td>
          <td width="15%">
            <div align="center">
              <h5><strong>Fecha inscripción</strong> </h5>
            </div>
          </td>
          <td width="20%">
            <div align="center">
              <h5><strong>Fecha activación</strong> </h5>
            </div>
          </td>
        </tr>'
        .$cuerpoTabla

      .'</tbody
     </table>'
     .'<br> Total: <CODE>'
     .$i.'</code>'
     .'<br> Número pre-registros: <CODE>'
     .$iPre.'</code>'
     .'<br> Número clientes: <CODE>'
     .$iClientes.'</code>'
     .'<br> Fecha de impresión: <CODE>'
     .$fecha. '</code>'
    . ' </code> </body></html>';
    return PDF::load($html, 'letter', 'portrait')->show();
  }

  public function pdfReportePago()
  {
    $fechaImpresion = ReportesPDFController::getFecha();

    $getSolicitudes = SolicitudesController::getSolicitudesR();

    $cuerpoTabla ='';
    $i=0;
    $nPagados=0;
    $nNoPagados=0;

    foreach ($getSolicitudes as $value) {
      $i=$i+1;
      $nombre = $value['perNombre'];

      $cliente;
      if($value['perCliente'] == 1){
        $cliente="cliente";
      }
      if($value['perCliente'] == 0){
        $cliente="pre-registro";
      }

      $numeroPreregistro = $value['perNumeroPreregistro'];
      $fecha = $value['solFecha'];
      $servicio = $value['serNombre'];
      $nConsultas = $value['solNConsultas'];


      if($value['solPagado'] == 1){
        $pagado = "sí";
        $nPagados = $nPagados+1;
      }
      if($value['solPagado'] == 0){
        $pagado = "no";
        $nNoPagados = $nNoPagados+1;
      }

      if($value['solTipoConsulta'] == 1){
        $tipo = "En Línea";
      }
      if($value['solTipoConsulta'] == 0){
        $tipo = "Telefónica";
      }

      $cuerpoTabla = $cuerpoTabla.'<tr>
          <td>
            <div align="center">
            <CODE>'.$i.'</code>
            </div>
          </td>
          <td>
            <div align="justify">
            <CODE>'.$nombre.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$cliente.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$numeroPreregistro.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$fecha.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$servicio.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <code>'.$tipo.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$nConsultas.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$pagado.'</code>
            </div>
          </td>

        </tr>';
    }

    $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
    .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
    .'<h3 align="center">Servicios Solicitados</h3>'

    .'<table cellspacing="0"  border="1" align="center" width="550" >
      <tbody >
        <tr>
          <td width="2%" >
            <div align="center">
            </div>
          </td>
          <td width="18%" >
            <div align="center">
              <h5><strong>Nombre</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Estado</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Número registro</strong> </h5>
            </div>
          </td>
          <td width="10%">
            <div align="center">
              <h5><strong>Fecha solicitud</strong> </h5>
            </div>
          </td>
          <td width="12%">
            <div align="center">
              <h5><strong>Servicio</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Tipo</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Consultas Contratadas</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Pagado</strong> </h5>
            </div>
          </td>
        </tr>'
        .$cuerpoTabla

      .'</tbody
     </table>'
     .'<br> Total: <CODE>'
     .$i.'</code>'
     .'<br> Pagados: <CODE>'
     .$nPagados.'</code>'
     .'<br> Sin pagar: <CODE>'
     .$nNoPagados.'</code>'
     .'<br> Fecha de impresión: <CODE>'
     .$fechaImpresion. '</code>'
    . ' </body></html>';
    return PDF::load($html, 'letter', 'portrait')->show();
  }

  public function pdfReportePagados()
  {
    $fechaImpresion = ReportesPDFController::getFecha();

    $getSolicitudes = SolicitudesController::getSolicitudesPagadosR();

    $cuerpoTabla ='';
    $i=0;
    $nPagados=0;
    $nNoPagados=0;

    foreach ($getSolicitudes as $value) {
      $i=$i+1;
      $nombre = $value['perNombre'];

      $cliente;
      if($value['perCliente'] == 1){
        $cliente="cliente";
      }
      if($value['perCliente'] == 0){
        $cliente="pre-registro";
      }

      if($value['solTipoConsulta'] == 1){
        $tipo = "En Línea";
      }
      if($value['solTipoConsulta'] == 0){
        $tipo = "Telefónica";
      }

      $numeroPreregistro = $value['perNumeroPreregistro'];
      $fecha = $value['solFecha'];
      $servicio = $value['serNombre'];
      $nConsultas = $value['solNConsultas'];


      if($value['solPagado'] == 1){
        $pagado = "sí";
        $nPagados = $nPagados+1;
      }
      if($value['solPagado'] == 0){
        $pagado = "no";
        $nNoPagados = $nNoPagados+1;
      }


      $cuerpoTabla = $cuerpoTabla.'<tr>
          <td>
            <div align="center">
            <CODE>'.$i.'</code>
            </div>
          </td>
          <td>
            <div align="justify">
            <CODE>'.$nombre.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$cliente.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$numeroPreregistro.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$fecha.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$servicio.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$tipo.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$nConsultas.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$pagado.'</code>
            </div>
          </td>

        </tr>';
    }

    $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
    .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
    .'<h3 align="center">Servicios Pagados</h3>'

    .'<table cellspacing="0"  border="1" align="center" width="550" >
      <tbody >
        <tr>
          <td width="1%" >
            <div align="center">
            </div>
          </td>
          <td width="18%" >
            <div align="center">
              <h5><strong>Nombre</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Estado</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Número registro</strong> </h5>
            </div>
          </td>
          <td width="10%">
            <div align="center">
              <h5><strong>Fecha solicitud</strong> </h5>
            </div>
          </td>
          <td width="12%">
            <div align="center">
              <h5><strong>Servicio</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Tipo</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Consultas Contratadas</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Pagado</strong> </h5>
            </div>
          </td>
        </tr>'
        .$cuerpoTabla

      .'</tbody
     </table>'
     .'<br> Total: <CODE>'
     .$i.'</code>'
     .'<br> Fecha de impresión: <CODE>'
     .$fechaImpresion. '</code>'
    . ' </body></html>';
    return PDF::load($html, 'letter', 'portrait')->show();
  }


  public function pdfReporteSinPagar()
  {
    $fechaImpresion = ReportesPDFController::getFecha();

    $getSolicitudes = SolicitudesController::getSolicitudesSinPagarR();

    $cuerpoTabla ='';
    $i=0;
    $nPagados=0;
    $nNoPagados=0;

    foreach ($getSolicitudes as $value) {
      $i=$i+1;
      $nombre = $value['perNombre'];

      $cliente;
      if($value['perCliente'] == 1){
        $cliente="cliente";
      }
      if($value['perCliente'] == 0){
        $cliente="pre-registro";
      }

      if($value['solPagado'] == 1){
        $pagado = "sí";
        $nPagados = $nPagados+1;
      }
      if($value['solPagado'] == 0){
        $pagado = "no";
        $nNoPagados = $nNoPagados+1;
      }

      $numeroPreregistro = $value['perNumeroPreregistro'];
      $fecha = $value['solFecha'];
      $servicio = $value['serNombre'];
      $nConsultas = $value['solNConsultas'];


      if($value['solTipoConsulta'] == 1){
        $tipo = "En Línea";
        //$nPagados = $nPagados+1;
      }
      if($value['solTipoConsulta'] == 0){
        $tipo = "Telefónica";
        //$nNoPagados = $nNoPagados+1;
      }


      $cuerpoTabla = $cuerpoTabla.'<tr>
          <td>
            <div align="center">
            <CODE>'.$i.'</code>
            </div>
          </td>
          <td>
            <div align="justify">
            <CODE>'.$nombre.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$cliente.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$numeroPreregistro.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$fecha.'</code>
            </div>
          </td>
          <td >
            <div align="center">
            <CODE>'.$servicio.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$tipo.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$nConsultas.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$pagado.'</code>
            </div>
          </td>

        </tr>';
    }

    $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
    .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
    .'<h3 align="center">Servicios Sin Pagar</h3>'

    .'<table cellspacing="0"  border="1" align="center" width="550" >
      <tbody >
        <tr>
          <td width="2%" >
            <div align="center">
            </div>
          </td>
          <td width="18%" >
            <div align="center">
              <h5><strong>Nombre</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Estado</strong> </h5>
            </div>
          </td>
          <td width="10%">
            <div align="center">
              <h5><strong>Número registro</strong> </h5>
            </div>
          </td>
          <td width="12%">
            <div align="center">
              <h5><strong>Fecha solicitud</strong> </h5>
            </div>
          </td>
          <td width="12%">
            <div align="center">
              <h5><strong>Servicio</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Tipo</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Consultas Contratadas</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Pagado</strong> </h5>
            </div>
          </td>
        </tr>'
        .$cuerpoTabla

      .'</tbody
     </table>'
     .'<br> Total: <CODE>'
     .$i.'</code>'
     .'<br> Fecha de impresión: <CODE>'
     .$fechaImpresion. '</code>'
    . ' </body></html>';
    return PDF::load($html, 'letter', 'portrait')->show();
  }

  public function pdfReporteContenidoC(){ //****************************/
    $idCto = Input::get('cto');
    $fechaImpresion = ReportesPDFController::getFecha();

    $getNConsultas  = ContratoController::getNConsultaR($idCto);
    $getDatContrato = ContratoController::getDatContratoR($idCto);

    $getConsultas = ConsultaClienteController::getContenidoConsultaR($idCto);

    $coRealizadas  = $getNConsultas;


    $datoContrato  = $getDatContrato[0];
    $consultasContratadas = $datoContrato['solNConsultas'];
    $coRestantes   = $consultasContratadas - $coRealizadas;
    $fechaContrato = $datoContrato['ctoFecha'];
    $folio = $datoContrato['ctoId'];
    $servicio    = $datoContrato['serNombre'];
    $nombreCli   = $datoContrato['perNombre'];
    $numRegistro = $datoContrato['perNumeroPreregistro'];

    $tipoP = $datoContrato['perTipoPersona'];
    if($tipoP == 1)$tipoPersona = "Moral";
    else $tipoPersona = "Física";

    $tipoConsulta = $datoContrato['serNombre'];
    if($tipoConsulta == 1) $tipo = "En Línea";
    else $tipo = "Telefónicas";

    $cuerpoTabla ='';
    $i=0;
    foreach ($getConsultas as $value) {
      $i=$i+1;
      $titulo   = $value['ccTitulo'];
      $consulta = $value['ccContenido'];
      $fechaRecibido = $value['ccFechaEnvio'];


      $respuesta = "-";
      $fechaAtendido ="-";
      $resCta = $value['ccRespuesta'];
      if($resCta != null){
          $respuesta     = $value['ccRespuesta'];
          $fechaAtendido = $value['ccFechaAtendido'];
      }

      $duracion ="no aplica";
      $hora     = $value['ccHora'];
      $minuto   = $value['ccMinuto'];
      if($minuto != null){
          $duracion = $hora.':'.$minuto;
      }

      $nombreAs = $value['asesNombre'];
      $ape1As   = $value['asesPrimerApe'];
      $ape2As   = $value['asesSegundoApe'];


      $cuerpoTabla = $cuerpoTabla.'<tr>

          <td>
            <div align="justify">
            <CODE>'.$titulo.'</code>
            </div>
          </td>
          <td>
            <div align="justify">
            <CODE>'.$consulta.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$duracion.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$fechaRecibido.'</code>
            </div>
          </td>
          <td >
            <div align="center">
            <CODE>'.$fechaAtendido.'</code>
            </div>
          </td>
          <td >
            <div align="center">
            <CODE>'.$respuesta.'</code>
            </div>
          </td>
          <td >
            <div align="center">
            <CODE>'.$nombreAs.' '.$ape1As.' '.$ape2As.'</code>
            </div>
          </td>

        </tr>';
    }



    $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
    .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
    .'<h3 align="center">Contenido Consultas</h3> <br>'

    .'<strong>Cliente: </strong><CODE>'
    .$nombreCli. '</code>'
    .'<br><strong>Persona: </strong><CODE>'
    .$tipoPersona. '</code>'
    .'<br><strong>Número de Registro: </strong><CODE>'
    .$numRegistro. '</code>'
    .'<br><br><strong>Folio contrato: </strong><CODE>'
    .$folio. '</code>'
    .'<br><strong>Servicio: </strong><CODE>'
    .$servicio. '</code>'
    .'<br><strong>Tipo de consultas:  </strong><CODE>'
    .$tipo. '</code>'
    .'<br><strong>Fecha de contratación:  </strong><CODE>'
    .$fechaContrato. '</code>'
    .'<br><br><strong>Número de consultas contradas:   </strong><CODE>'
    .$consultasContratadas. '</code>'
    .'<br><strong>Número de consultas realizadas:   </strong><CODE>'
    .$coRealizadas. '</code>'
    .'<br><strong>Número de consultas restantes:   </strong><CODE>'
    .$coRestantes. '</code><br><br>'
    .'<h3>Consultas:</h3>'
    .'<table cellspacing="0"  border="1" align="center" width="550" >
      <tbody >
        <tr>

          <td width="10%" >
            <div align="center">
              <h5><strong>Título Consulta</strong> </h5>
            </div>
          </td>
          <td width="24%">
            <div align="center">
              <h5><strong>Consulta</strong> </h5>
            </div>
          </td>
          <td width="7%">
            <div align="center">
              <h5><strong>Duración (H:M)</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Fecha Recibido</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Fecha Respuesta</strong> </h5>
            </div>
          </td>
          <td width="24%">
            <div align="center">
              <h5><strong>Respuesta</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Asesor</strong> </h5>
            </div>
          </td>

        </tr>'
        .$cuerpoTabla

      .'</tbody
     </table>'
     .'<br> Fecha de impresión: <CODE>'
     .$fechaImpresion. '</code>'
    . ' </body></html>';
    return PDF::load($html, 'letter', 'portrait')->show();

  }

  public function pdfReporteContratos(){

    $fechaImpresion = ReportesPDFController::getFecha();

    $getContratos = ContratoController::getContratosR();

    $nTel = 0;
    $nLin = 0;

    $cuerpoTabla ='';
    $i=0;
    foreach ($getContratos as $value) {
      $i=$i+1;

      $tipoConsultaBD = $value['solTipoConsulta'];
      if($tipoConsultaBD == 1){
      $tipoConsultaBD = $value['solTipoConsulta'];
        $tipo = "En Línea";
        $nLin++;
      }
      if($tipoConsultaBD == 0){
        $tipo = "Telefónica";
        $nTel++;
      }

      $folioC   = $value['ctoId'];
      $cliente  = $value['perNombre'];
      $registro = $value['perNumeroPreregistro'];
      $fecha = $value['ctoFecha'];
      $servicio = $value['serNombre'];
      $nConsultas = $value['solNConsultas'];
      $idPrecioT = $value['solPreciosT'];

      $precioRetorno = PreciosTipoController::getPrecioPaqueteTipo($tipoConsultaBD, $idPrecioT, $nConsultas);

      $cuerpoTabla = $cuerpoTabla.'<tr>
          <td>
            <div align="center"><CODE>'
            .$folioC
            .'</code></div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$cliente.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$registro.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$fecha.'</code>
            </div>
          </td>
          <td>
            <div align="center">
            <CODE>'.$servicio.'</code>
            </div>
          </td>
          <td >
            <div align="center">
            <CODE>'.$tipo.'</code>
            </div>
          </td>
          <td >
            <div align="center">
            <CODE>'.$nConsultas.'</code>
            </div>
          </td>
          <td >
            <div align="center">
            <CODE>'.$precioRetorno.'</code>
            </div>
          </td>

        </tr>';
    }

    $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
    .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
    .'<h3 align="center">Contratados Realizados por Clientes</h3> <br>'

    .'<h3>Contratos:</h3>'
    .'<table cellspacing="0"  border="1" align="center" width="550" >
      <tbody >
        <tr>
          <td width="3%" >
            <div align="center">
              <h5><strong>Folio Contrato</strong> </h5>
            </div>
          </td>
          <td width="20%">
            <div align="center">
              <h5><strong>Cliente</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Número Registro</strong> </h5>
            </div>
          </td>
          <td width="10%">
            <div align="center">
              <h5><strong>Fecha Contrato</strong> </h5>
            </div>
          </td>
          <td width="15%">
            <div align="center">
              <h5><strong>Servicio</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Tipo Consultas</strong> </h5>
            </div>
          </td>
          <td width="8%">
            <div align="center">
              <h5><strong>Consultas Contratadas</strong> </h5>
            </div>
          </td>
          <td >
            <div align="center">
              <h5><strong>Precio ($)</strong> </h5>
            </div>
          </td>

        </tr>'
        .$cuerpoTabla

      .'</tbody
     </table>'
     .'<br> Total: <CODE>'
     .$i.'</code>'
     .'<br> En Línea: <CODE>'
     .$nLin.'</code>'
     .'<br> Telefónicos: <CODE>'
     .$nTel.'</code>'
     .'<br><br> Fecha de impresión: <CODE>'
     .$fechaImpresion. '</code>'
    . ' </body></html>';
    return PDF::load($html, 'letter', 'portrait')->show();
  }

public function pdfReporteServicioC(){
  $regU = Input::get('regU');
  $fechaImpresion = ReportesPDFController::getFecha();

  $getContratos = ContratoController::getContratosPerR($regU);
  $getCliente = PersonasController::getClienteR($regU);

  $datoCliente = $getCliente[0];
  $cliente  = $datoCliente['perNombre'];
  $registro = $datoCliente['perNumeroPreregistro'];

  $tipoP = $datoCliente['perTipoPersona'];
  if($tipoP == 1)$tipoPersona = "Moral";
  else $tipoPersona = "Física";

  $cuerpoTabla ='';
  $i=0;
  foreach ($getContratos as $value) {
    $i=$i+1;
    $servicio = $value['serNombre'];
    $folio    = $value['ctoId'];
    $fechaCto = $value['ctoFecha'];
    $tipoConsulta = $value['solTipoConsulta'];
    if($tipoConsulta == 1) $tipo = "En Línea";
    else $tipo = "Telefónicas";

    $consultasContratadas = $value['solNConsultas'];
    $getNConsultas = ContratoController::getNConsultaR($folio);
    $coRestantes   = $consultasContratadas - $getNConsultas;

    $cuerpoTabla = $cuerpoTabla.'<tr>
        <td>
          <div align="center">'
          .$i
          .'</div>
        </td>
        <td>
          <div align="center">
          <CODE>'.$folio.'</code>
          </div>
        </td>
        <td>
          <div align="center">
          <CODE>'.$fechaCto.'</code>
          </div>
        </td>
        <td>
          <div align="center">
          <CODE>'.$servicio.'</code>
          </div>
        </td>
        <td>
          <div align="center">
          <CODE>'.$tipo.'</code>
          </div>
        </td>
        <td >
          <div align="center">
          <CODE>'.$consultasContratadas.'</code>
          </div>
        </td>
        <td >
          <div align="center">
          <CODE>'.$getNConsultas.'</code>
          </div>
        </td>
        <td >
          <div align="center">
          <CODE>'.$coRestantes.'</code>
          </div>
        </td>

      </tr>';
  }

  $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
  .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
  .'<h3 align="center">Servicios Contratados por Cliente</h3> <br>'

  .'<strong>Cliente: </strong><CODE>'
  .$cliente. '</code>'
  .'<br><strong>Persona: </strong><CODE>'
  .$tipoPersona. '</code>'
  .'<br><strong>Número de Registro: </strong><CODE>'
  .$registro. '</code><br><br>'

  .'<h3>Contratos:</h3>'
  .'<table cellspacing="0"  border="1" align="center" width="550" >
    <tbody >
      <tr>
        <td width="3%" >
          <div align="center">
          </div>
        </td>
        <td width="5%" >
          <div align="center">
            <h5><strong>Folio Contrato</strong> </h5>
          </div>
        </td>
        <td width="13%">
          <div align="center">
            <h5><strong>Fecha Contrato</strong> </h5>
          </div>
        </td>
        <td width="20%">
          <div align="center">
            <h5><strong>Servicio</strong> </h5>
          </div>
        </td>
        <td width="10%">
          <div align="center">
            <h5><strong>Tipo Consultas</strong> </h5>
          </div>
        </td>
        <td width="8%">
          <div align="center">
            <h5><strong>Consultas Contratadas</strong> </h5>
          </div>
        </td>
        <td width="8%">
          <div align="center">
            <h5><strong>Consultas Realizadas</strong> </h5>
          </div>
        </td>
        <td width="8%">
          <div align="center">
            <h5><strong>Consultas Restantes</strong> </h5>
          </div>
        </td>

      </tr>'
      .$cuerpoTabla

    .'</tbody
   </table>'
   .'<br> Fecha de impresión: <CODE>'
   .$fechaImpresion. '</code>'
  . ' </body></html>';
  return PDF::load($html, 'letter', 'portrait')->show();
}

public function pdfServCliente(){
  $regU = Input::get('regU');
  $getSolicitudes = SolicitudesController::getSolicitudesPersonaR($regU);

  $fechaImpresion = ReportesPDFController::getFecha();

  $nTel = 0;
  $nLin = 0;

  $cuerpoTabla ='';
  $i=0;
  foreach ($getSolicitudes as $value) {
    $i=$i+1;

    $tipoConsultaBD = $value['solTipoConsulta'];
    if($tipoConsultaBD == 1){
    $tipoConsultaBD = $value['solTipoConsulta'];
      $tipo = "En Línea";
      $nLin++;
    }
    if($tipoConsultaBD == 0){
      $tipo = "Telefónica";
      $nTel++;
    }

    $cliente  = $value['perNombre'];
    $registro = $value['perNumeroPreregistro'];

    $fecha = $value['solFecha'];
    $servicio = $value['serNombre'];
    $nConsultas = $value['solNConsultas'];

    $pago   = $value['solPagado'];
    if ($pago==1) {
      $pagado="Sí";
    }
    else $pagado="No";


    $idPrecioT = $value['solPreciosT'];

    $precioRetorno = PreciosTipoController::getPrecioPaqueteTipo($tipoConsultaBD, $idPrecioT, $nConsultas);

    $cuerpoTabla = $cuerpoTabla.'<tr>
        <td>
          <div align="center"><CODE>'
          .$fecha
          .'</code></div>
        </td>
        <td>
          <div align="center">
          <CODE>'.$tipo.'</code>
          </div>
        </td>
        <td>
          <div align="center">
          <CODE>'.$nConsultas.'</code>
          </div>
        </td>
        <td>
          <div align="center">
          <CODE>'.$servicio.'</code>
          </div>
        </td>
        <td>
          <div align="center">
          <CODE>'.$precioRetorno.'</code>
          </div>
        </td>
        <td >
          <div align="center">
          <CODE>'.$pagado.'</code>
          </div>
        </td>

      </tr>';
  }

  $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
  .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
  .'<h3 align="center">Consultas solicitadas por clientes</h3> <br>'

  .'<p><strong>Cliente: </strong>'
  .$cliente
  .'</p>'
  .'<p><strong>Número registro: </strong>'
  .$registro
  .'</p><br>'
  .'<h3>Solicitudes:</h3>'
  .'<table cellspacing="0"  border="1" align="center" width="550" >
    <tbody >
      <tr>
        <td width="8%" >
          <div align="center">
            <h5><strong>Fecha solicitud</strong> </h5>
          </div>
        </td>
        <td width="10%">
          <div align="center">
            <h5><strong>Tipo de consultas</strong> </h5>
          </div>
        </td>
        <td width="8%">
          <div align="center">
            <h5><strong>Número Consultas</strong> </h5>
          </div>
        </td>
        <td width="10%">
          <div align="center">
            <h5><strong>Servicio</strong> </h5>
          </div>
        </td>
        <td width="10%">
          <div align="center">
            <h5><strong>Precio ($)</strong> </h5>
          </div>
        </td>
        <td width="8%">
          <div align="center">
            <h5><strong>Pagado</strong> </h5>
          </div>
        </td>

      </tr>'
      .$cuerpoTabla

    .'</tbody
   </table>'
   .'<br> Total: <CODE>'
   .$i.'</code>'
   .'<br> En Línea: <CODE>'
   .$nLin.'</code>'
   .'<br> Telefónicos: <CODE>'
   .$nTel.'</code>'
   .'<br><br> Fecha de impresión: <CODE>'
   .$fechaImpresion. '</code>'
  . ' </body></html>';
  return PDF::load($html, 'letter', 'portrait')->show();

}

  public function pdfInfoPre(){
    $regU = Input::get('regU');
    $fechaImpresion = ReportesPDFController::getFecha();
    $getPreregistro = PersonasController::getClienteR($regU);
    $preregistro = $getPreregistro[0];

    $cliente = $preregistro['perCliente'];
    $activo = $preregistro['perBaja'];
    $nombre = $preregistro['perNombre'];
    $rfc    = $preregistro['perRFC'];
    $registro     = $preregistro['perNumeroPreregistro'];
    $objetoSocial = $preregistro['perActividad'];
    $nacionalidad = $preregistro['perNacionalidad'];

    $cp = $preregistro['perCodigoP'];
    $calle   = $preregistro['perDCalle'];
    $numero  = $preregistro['perDNumero'];
    $colonia = $preregistro['perDColonia'];
    $municipio = $preregistro['perDMunicipio'];
    $entidad = $preregistro['perDEstado'];

    $persona = $preregistro['perTipoPersona'];
    if ($persona == 1) {
      $tipoPersona = "Moral";
      $representanteL = $preregistro['perRepresentanteLegal'];
      $numeroEP = $preregistro['perNumeroEP'];
      $diaEP    = $preregistro['perDiaEP'];
      $mesEP    = $preregistro['perMesEP'];
      $anioEP   = $preregistro['perAnioEP'];
      $nombreNP = $preregistro['perNombreNP'];
      $numeroNP = $preregistro['perNumeroNP'];
      $lugarNP  = $preregistro['perLugarEP'];
    }
    else{
      $tipoPersona = "Física";
      $representanteL = "- -";
      $numeroEP = "- -";
      $numeroEP = "- -";
      $diaEP    = "- -";
      $mesEP    = "- -";
      $anioEP   = "- -";
      $nombreNP = "- -";
      $numeroNP = "- -";
      $lugarNP  = "- -";
    }

    if ($cliente == 1) {
      $Titulo = "Información Cliente";
      $fechaActivacion = $preregistro['perFechaRegistro'];
      $nombreTitulo = "Nombre cliente: ";
    }
    else{
      $Titulo = "Información Pre-registro";
      $fechaActivacion = "- -";
      $nombreTitulo = "Nombre pre-registro: ";
    }

    $telefono = $preregistro['perTelefono'];
    $correo = $preregistro['perCorreo'];

    $aviso = $preregistro['perCondiciones'];


    $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
    .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
    .'<h3 align="center">'.$Titulo.'</h3>'

    .'<table cellspacing="0"  border="0" align="lefth" width="550" >
      <tbody >'
      .'<tr>
          <td width="20%" >
            <div align="right">
              <strong>'.$nombreTitulo.'</strong>
            </div>
          </td>
          <td width="80%">
            <div align="left"><CODE>
              '.$nombre.'</code>
            </div>
          </td>
        </tr>'
        .'<tr>
            <td width="20%" >
              <div align="right">
                <strong>RFC: </strong>
              </div>
            </td>
            <td width="80%">
              <div align="left"><CODE>
                '.$rfc.'</code>
              </div>
            </td>
          </tr>'
          .'<tr>
              <td width="20%" >
                <div align="right">
                  <strong>Persona: </strong>
                </div>
              </td>
              <td width="80%">
                <div align="left"><CODE>
                  '.$tipoPersona.'</code>
                </div>
              </td>
            </tr>'
        .'<tr>
            <td width="20%" >
              <div align="right">
                <strong>Número registro: </strong>
              </div>
            </td>
            <td width="80%">
              <div align="left"><CODE>
                '.$registro.'</code>
              </div>
            </td>
          </tr>'
          .'<tr>
              <td width="20%" >
                <div align="right">
                  <strong>Objeto social: </strong>
                </div>
              </td>
              <td width="80%">
                <div align="left"><CODE>
                  '.$objetoSocial.'</code>
                </div>
              </td>
            </tr>'
            .'<tr>
                <td width="20%" >
                  <div align="right">
                    <strong>Nacionalidad: </strong>
                  </div>
                </td>
                <td width="80%">
                  <div align="left"><CODE>
                    '.$nacionalidad.'</code>
                 </div>
                </td>
              </tr>'

              .'<tr>
                  <td width="20%" >
                    <div align="right">
                      <strong>Representante legal: </strong>
                    </div>
                  </td>
                  <td width="80%">
                    <div align="left"><CODE>
                      '.$representanteL.'</code>
                   </div>
                  </td>
                </tr>'
                .'<tr>
                    <td width="20%" >
                      <div align="right">
                        <strong>Número escritura pública: </strong>
                      </div>
                    </td>
                    <td width="80%">
                      <div align="left"><CODE>
                        '.$numeroEP.'</code>
                     </div>
                    </td>
                  </tr>'
                  .'<tr>
                      <td colspan="2" >
                        <div align="center"><strong>Fecha en que se otorgo Número de escritura Publica </strong>
                        </div>
                      </td>
                    </tr>'
                    .'<tr>
                        <td width="20%" >
                          <div align="right">
                            <strong>Día: </strong>
                          </div>
                        </td>
                        <td width="80%">
                          <div align="left"><CODE>
                            '.$diaEP.'</code>
                         </div>
                        </td>
                      </tr>'
                  .'<tr>
                      <td width="20%" >
                        <div align="right">
                          <strong>Mes: </strong>
                        </div>
                      </td>
                      <td width="80%">
                        <div align="left"><CODE>
                          '.$mesEP.'</code>
                       </div>
                      </td>
                    </tr>'
                .'<tr>
                    <td width="20%" >
                      <div align="right">
                        <strong>Año: </strong>
                      </div>
                    </td>
                    <td width="80%">
                      <div align="left"><CODE>
                        '.$anioEP.'</code>
                     </div>
                    </td>
                  </tr>'
                  .'<tr>
                      <td width="20%" >
                        <div align="right">
                          <strong>Lugar: </strong>
                        </div>
                      </td>
                      <td width="80%">
                        <div align="left"><CODE>
                          '.$lugarNP.'</code>
                       </div>
                      </td>
                    </tr>'
                    .'<tr>
                        <td width="20%" >
                          <div align="right">
                            <strong>Nombre notario público: </strong>
                          </div>
                        </td>
                        <td width="80%">
                          <div align="left"><CODE>
                            '.$nombreNP.'</code>
                         </div>
                        </td>
                      </tr>'
                      .'<tr>
                          <td width="20%" >
                            <div align="right">
                              <strong>Número notario público: </strong>
                            </div>
                          </td>
                          <td width="80%">
                            <div align="left"><CODE>
                              '.$numeroNP.'</code>
                           </div>
                          </td>
                        </tr>'

              .'<tr>
                  <td colspan="2" >
                    <div align="center"><strong>Domicilio fiscal </strong>
                    </div>
                  </td>
                </tr>'
              .'<tr>
                  <td width="20%" >
                    <div align="right"><strong>Código postal: </strong>
                    </div>
                  </td>
                  <td width="80%">
                    <div align="left"><CODE>
                      '.$cp.'</code>
                    </div>
                  </td>
                </tr>'
                .'<tr>
                    <td width="20%" >
                      <div align="right"><strong>Número: </strong>
                      </div>
                    </td>
                    <td width="80%">
                      <div align="left"><CODE>
                        '.$numero.'</code>
                      </div>
                    </td>
                  </tr>'
                  .'<tr>
                      <td width="20%" >
                        <div align="right"><strong>Colonia: </strong>
                        </div>
                      </td>
                      <td width="80%">
                        <div align="left"><CODE>
                          '.$colonia.'</code>
                        </div>
                      </td>
                    </tr>'
                    .'<tr>
                        <td width="20%" >
                          <div align="right"><strong>Municipio/delegación: </strong>
                          </div>
                        </td>
                        <td width="80%">
                          <div align="left"><CODE>
                            '.$municipio.'</code>
                          </div>
                        </td>
                      </tr>'
                      .'<tr>
                          <td width="20%" >
                            <div align="right"><strong>Entidad federativa: </strong>
                            </div>
                          </td>
                          <td width="80%">
                            <div align="left"><CODE>
                              '.$entidad.'</code>
                            </div>
                          </td>
                        </tr>'
                  .'<tr>
                      <td colspan="2" >
                        <div align="center"><strong>Información contacto</strong>
                        </div>
                      </td>
                  </tr>'
                  .'<tr>
                      <td width="20%" >
                        <div align="right"><strong>Correo electrónico: </strong>
                        </div>
                      </td>
                      <td width="80%">
                        <div align="left"><CODE>
                          '.$correo.'</code>
                        </div>
                      </td>
                </tr>'
                .'<tr>
                    <td width="20%" >
                      <div align="right"><strong>Teléfono: </strong>
                      </div>
                    </td>
                    <td width="80%">
                      <div align="left"><CODE>
                        '.$telefono.'</code>
                      </div>
                    </td>
              </tr>'
              .'<br>'
              .'<tr>
                  <td colspan="2" >
                    <div align="center"><strong>Acepto Política de uso y privacidad del sitio web y el Aviso de privacidad para clientes.</strong>
                    </div>
                  </td>
              </tr>'
              .'<tr>
                  <td width="20%" >
                    <div align="right"><strong>Código: </strong>
                    </div>
                  </td>
                  <td width="80%">
                    <div align="left"><CODE>
                      '.$aviso.'</code>
                    </div>
                  </td>
              </tr>'
              .'<tr>
                <td colspan="2">
                  <div align="left">año-mes-día-hora:minuto:segundo-NúmeroRegistro-Sección de registro.
                  </div>
                </td>
              </tr>'
              .'<tr>
                  <td width="20%" >
                    <div align="right"><strong>Fecha activación cuenta: </strong>
                    </div>
                  </td>
                  <td width="80%">
                    <div align="left"><CODE>
                      '.$fechaActivacion.'</code>
                    </div>
                  </td>
              </tr>'

      .'</tbody
     </table>'

     .'<br><br> Fecha de impresión: <CODE>'
     .$fechaImpresion. '</code>'
    . ' </body></html>';
    return PDF::load($html, 'letter', 'portrait')->show();
  }
}
