<?php

class ContratoController extends BaseController {

public function nConsultas(){ /*************/
  if( !Sesion::isUser() ){
    if( !Sesion::isAsesor() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }
  }

  $idCto = Input::get('idCto');
  $getNConsultas = ContratoController::getNConsultaR($idCto);

  if ( $getNConsultas  >= 0 ){
    $getNContratado = ContratoController::nConsutasCtoR($idCto); /*Obtener cuanto contrato*/

      $getnContratado = $getNContratado[0];
      $nContratado = $getnContratado['solNConsultas'];

    $response = array(
      'status' => 'OK',
      'data' => $getNConsultas,
      'contratado' => $nContratado
    );
  }
  else
    $response = array(
      'status' => 'ERROR',
      'message' => 'Ocurrio un error, intentelo de nuevo.'
    );
  return Response::json( $response );
}

public static function nConsutasCtoR($idCto){
  $getNContratado = Contratos:: /*Obtener cuanto contrato*/
  leftJoin('solicitudes', 'contratos.ctoSolicitud', '=', 'solicitudes.solId')
  ->where('ctoId',$idCto)
  ->get(array(
    'solNConsultas'
      ))
    ->toArray();
  return $getNContratado;
}

public function nConsultasServ(){ /**************/
  if( !Sesion::isUser() ){
    if( !Sesion::isAsesor() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }
  }

  $idCto = Input::get('idCto');
  $getNConsultas = ContratoController::getNConsultaR($idCto);

  if ( $getNConsultas  >= 0 ){
    $getDatContrato = ContratoController::getDatContratoR($idCto);
    $response = array(
      'status' => 'OK',
      'data'   => $getNConsultas,
      'contratado' => $getDatContrato
    );
  }
  else
    $response = array(
      'status' => 'ERROR',
      'message' => 'Ocurrio un error, intentelo de nuevo.'
    );
  return Response::json( $response );
}

 public static function getNConsultaR($idCto){
   $getNConsultas = ConsultaCliente::
   leftJoin('contratos', 'consultaCliente.ccContrato', '=', 'contratos.ctoId')
   ->where('ctoId',$idCto)
   ->count();
   return $getNConsultas;
 }
 public static function getDatContratoR($idCto){
   $getDatContrato = Contratos:: /*Obtener cuanto contrato*/
   leftJoin('solicitudes', 'contratos.ctoSolicitud', '=', 'solicitudes.solId')
   ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
   ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
   ->where('ctoId',$idCto)
   ->get(array(
     'ctoId',
     'ctoFecha',

     'solNConsultas',
     'solTipoConsulta',

     'serNombre',

     'perNombre',
     'perCorreo',
     'perTelefono',
     'perTipoPersona',
     'perNumeroPreregistro',
       ))
     ->toArray();
     return $getDatContrato;
 }

function getContratoPersona(){  /*********/
  if ( !Sesion::isAsesor() ) {
    if( !Sesion::isAdmin() )
    return Redirect::to('admin/logout');
  }


  $regU = Input::get('regU');
  $getContratos = ContratoController::getContratosPerR($regU);

    if ( count( $getContratos ) > 0 ){
      $response = array(
        'status' => 'OK',
        'data' => $getContratos,
      );
  }
  else{
    $getPersona = Personas::where('perNumeroPreregistro',$regU)
      ->where('perActivo', true)
      ->get(array(
        'perId',
        'perNombre',
        'perTipoPersona',
        'perNumeroPreregistro',

      ))
      ->toArray();
      $response = array(
        'status' => 'ERROR',
        'data' => $getPersona,
        'message' => 'No se encuentra activada las consultas del cliente.'
      );
  }

  return Response::json( $response );

}

public static function getContratosPerR($regU){
  $getContratos = Contratos::
    leftJoin('solicitudes', 'contratos.ctoSolicitud', '=', 'solicitudes.solId')
    ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
    ->where('perNumeroPreregistro', $regU)
    ->where('solPagado',true)
    ->where('perCliente',true)
    ->orderBy('ctoId','desc')
    ->get(array(
      'perId',
      'perNombre',
      'perTipoPersona',
      'perNumeroPreregistro',
      'ctoId',
      'ctoFecha',
      'ctoFolio',
      'solTipoConsulta',
      'solPreciosT',
      'solNConsultas',
      'serNombre'

    ))
    ->toArray();
    return $getContratos;
}

function getContratos(){  /***********/
  if (!Sesion::isAsesor()) {
    if( !Sesion::isAdmin() )
    return Redirect::to('admin/logout');
  }


  $regU = Input::get('regU');
  $getContratos = ContratoController::getContratosR();

    if ( count( $getContratos ) > 0 ){
      $response = array(
        'status' => 'OK',
        'data' => $getContratos,
      );
  }
  else{
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se han realizado contratos.'
      );
  }
  return Response::json( $response );

}

public static function getContratosR(){
  $getContratos = Contratos::
    leftJoin('solicitudes', 'contratos.ctoSolicitud', '=', 'solicitudes.solId')
    ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
    ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
    ->where('solPagado',true)
    ->where('perCliente',true)
    /*->where('perActivo',true)*/
    ->orderBy('ctoId','desc  ')
    ->get(array(
      'perNombre',
      'perNumeroPreregistro',
      'ctoId',
      'ctoFecha',
      'solTipoConsulta',
      'solNConsultas',
      'solPreciosT',
      'solId',
      'serNombre'
    ))
    ->toArray();
    return $getContratos;
}

          /********************************/
public function solicitudFactura(){
  if( !Sesion::isUser() ){
    if( !Sesion::isAdmin() )
    return Redirect::to('admin/logout');
  }

  $idSol = Input::get('idSol');

  $data = Input::all();
  $format = "d-m-Y H:i:s";
  $timestamp = time();
  $fecha =  date($format, $timestamp);

  $getContrato = Solicitudes::where('solId', $idSol)
  ->leftJoin('personas', 'solicitudes.solPersona', '=', 'personas.perId')
  ->leftJoin('contratos', 'solicitudes.solId', '=', 'contratos.ctoSolicitud')
  ->leftJoin('servicios', 'solicitudes.solServicio', '=', 'servicios.serId')
  ->get(array(
    'solId',
    'solNConsultas',
    'solTipoConsulta',
    'solPreciosT',

    'perTipoPersona',
    'perNombre',
    'perCodigoP',
    'perDCalle',
    'perDNumero',
    'perDColonia',
    'perDMunicipio',
    'perDEstado',
    'perNacionalidad',
    'perRFC',
    'perActividad',
    'perTelefono',
    'perCorreo',

    'ctoId',
    'ctoFecha',

    'serNombre'

      ))
    ->toArray();
      if ( count( $getContrato ) > 0 ){
        $datos        = $getContrato[0];

        $nombreP      = $datos['perNombre'];
        $tipoP        = $datos['perTipoPersona'];
        $rfc          = $datos['perRFC'];
  			$actividad    = $datos['perActividad'];
  			$telefono     = $datos['perTelefono'];
  			$correo       = $datos['perCorreo'];
        $perCodigoP   = $datos['perCodigoP'];
        $perDCalle    = $datos['perDCalle'];
  			$perDNumero   = $datos['perDNumero'];
  			$perDColonia  = $datos['perDColonia'];
  			$perDMunicipio= $datos['perDMunicipio'];
  			$perDEstado   = $datos['perDEstado'];
  			$nacionalidad = $datos['perNacionalidad'];

  			$servicio  = $datos['serNombre'];

        $idContrato    = $datos['ctoId'];
        $fechaContrato = $datos['ctoFecha'];
  			$diaContrato   = date('j',strtotime($fechaContrato));
  			$mes           = date('n',strtotime($fechaContrato));
  			$mesContrato   = ContratoPDFController::mesLetra($mes);
  			$anioContrato  = date('Y',strtotime($fechaContrato));

        $tipoConsulta = $datos['solTipoConsulta'];
        if($tipoConsulta) $tipConsulta = "En Línea";
        else $tipConsulta = "Teléfonico";
        $idPrecio = $datos['solPreciosT'];
  			$nConsulta = $datos['solNConsultas'];
  			$precioContrato = PreciosTipoController::getPrecioPaqueteTipo($tipoConsulta,$idPrecio,$nConsulta);

        if($tipoP == 1) $tipoPersona = "Moral";
        else $tipoPersona = "Física";

       $dataCorreo = array(
         'nombreP'     => $nombreP,
         'tipoPersona' => $tipoPersona,
         'rfc'         => $rfc,
         'actividad'   => $actividad,
         'telefono'    => $telefono,
         'correo'      => $correo,
         'perDCalle'   => $perDCalle,
         'perCodigoP'  => $perCodigoP,
         'perDNumero'  => $perDNumero,
         'perDColonia' => $perDColonia,
         'perDMunicipio'=> $perDMunicipio,
         'perDEstado'  => $perDEstado,
         'nacionalidad'=> $nacionalidad,

         'idContrato'  => $idContrato,
         'diaContrato' => $diaContrato,
         'mesContrato' => $mesContrato,
         'anioContrato'=> $anioContrato,

         'nConsulta'   => $nConsulta,
         'precioContrato'=> $precioContrato,
         'tConsulta'   => $tipConsulta,

         'serNombre'   => $servicio,

         'fechaSol'    => $fecha
       );

       $asunto = 'Solicitud Factura '.trim($nombreP);
       $toEmail = 'facturacion@contadoresvh.com';
       Mail::send('emails.solicitudFacturaMail', $dataCorreo, function($message) use($toEmail,$asunto){
         $message->to($toEmail);
         $message->subject($asunto);
       });


       $editar = Contratos::where('ctoId', $idContrato)
         ->update(array(
           'ctoSolFactura'   => true,
           'ctoFechaFactura'=> $fecha
         ));

        $response = array(
                 'status' => 'OK',
                 'message' => 'En breve se le notificara a su correo electrónico la factura.'
               );
      }

      else{
        $response = array(
                 'status' => 'ERROR',
                 'message' => 'No se pudo enviar la solicitud intente de nuevo.'
               );
      }
    return Response::json( $response );

  }
}
