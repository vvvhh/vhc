<?php

class PersonaRegPDFController extends BaseController {

  public static function pdfRegistro()
  {
    $correo = Input::get('c');

    $getCliente = Personas::where('perCorreo', $correo)
    ->where('perBaja', true)
    ->where('perActivo', true)
    ->get(array(
      'perTipoPersona',
      'perNombre',
      'perRFC',
      'perNumeroPreregistro',
      'perFechaRegistro',
      'perCorreo',

        ))
      ->toArray();
    $datos = $getCliente[0];

    $nombre  = $datos['perNombre'];
    $rfc     = $datos['perRFC'];
    $personaBD = $datos['perTipoPersona'];
    $numeroRegistro = $datos['perNumeroPreregistro'];;
    $clave = $datos['perNumeroPreregistro'];;
    $fecha = $datos['perFechaRegistro'];;

    if($personaBD==1)$persona="Moral";
    else $persona="Física";

    $html = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><body>'
    /*.'<h4 align="left">Vázquez Hernández Contadores, S.C.</h4>'
    .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'*/
    .'<table cellspacing="0"  border="0" align="center" width="550" >
      <tbody>
        <tr>
          <td width="40%" >'
          /*.'<img src="'.asset('img/inicio/91430302.jpg').'" alt="" />'*/
          .'</td>
          <td width="60%" >'
          .'<h4 align="right">Vázquez Hernández Contadores, S.C.</h4>'
          .'</td>
        </tr>'
      .'</tbody
     </table>'
    .'<h3 align="center">Registro al sistema de consultas en Línea</h3>'

     .'<br> Nombre Cliente: '
     .$nombre
     .'<br> RFC: '
     .$rfc
     .'<br> Número de registro: '
     .$numeroRegistro
     .'<br> Tipo de persona: '
     .$persona
     .'<br><br><strong> Usuario: </strong><CODE>'
     .$correo.'</code>'
     .'<br><strong> Contraseña: </strong><CODE>'
     .$clave.'</code>'
     .'<br><br> Fecha de impresión: <CODE>'
     .$fecha. '</code>'
    . '</body></html>';
    $nombreArchivo="Registro_".$numeroRegistro;
    return PDF::load($html, 'letter', 'portrait')->download($nombreArchivo);
  }

}
