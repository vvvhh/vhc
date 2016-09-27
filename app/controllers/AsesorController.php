<?php

class AsesorController extends BaseController {

  /*
  | Controlador cuenta de asesores
  */

  public function cambiarCAsesores(){  /*CONTRASEÑA Actualizar*/
    if( !Sesion::isAdmin() )
    return Redirect::to('admin/logout');

      $csenah = Input::get('csenah');
      if(isset($csenah)) {
        $data = array(
          'contrasenaAdministrador' => Input::get('actual'),
          'nuevaContrasena' => Input::get('new'),
          'usuarioAsesor'   => Input::get('us')
        );

        $rules = array(
            'contrasenaAdministrador' => array('required', 'size:8', 'regex:/^([0-9a-zA-Z@._\-])+$/'),
            'nuevaContrasena' => array('required', 'size:8', 'regex:/^([0-9a-zA-Z@._\-])+$/'),
            'usuarioAsesor'   => array('required', 'max:50', 'email')
          );

        $validator = Validator::make($data , $rules);
        if ($validator->fails()){
          $respuesta;
          $mensajes = $validator->messages();
          foreach ($mensajes->all() as $mensaje){
              $respuesta = $mensaje;
          }
            $response = array(
              'status' => 'ERROR',
              'message' => $respuesta
            );
        }
        else{
          $admVH = Adm::where('admId', 1)
            ->get();

          if ( Hash::check($data['contrasenaAdministrador'], $admVH[0]->admPass) ){//verifica contraseña actual
            $asesorVH = Asesor::get();

            if ( count( $asesorVH ) > 0 ){
              $editarPass = Asesor::where('aseId', 1)
              ->update(array(
                'asePass'   => Hash::make(trim($data['nuevaContrasena'])),
                'aseCorreo' => trim($data['usuarioAsesor']),
                'aseNombre' => "Asesores"
              ));

              if ( $editarPass )
                $response = array(
                  'status' => 'OK',
                  'message' => 'Cuenta Asesores Actualizada.'
                );
              else
                $response = array (
                  'status' => 'ERROR',
                  'message' => 'No se puede actualizar los datos, intente otra vez'
                  );
            }

            else{
              $editarPass = Asesor::insert(array(
                'asePass'   => Hash::make(trim($data['nuevaContrasena'])),
                'aseCorreo' => trim($data['usuarioAsesor']),
                'aseNombre' => "Asesores"
              ));

            if ( $editarPass )
              $response = array(
                'status' => 'OK',
                'message' => 'Cuenta Asesores Creada.'
              );
            else
              $response = array (
                'status' => 'ERROR',
                'message' => 'No se puede Crear Cuenta Asesores, intente otra vez'
                );
            }
          }/*verifica contraseña actual*/
          else
            $response = array(
              'status' => 'ERROR',
              'message' => 'Contraseña administrador incorrecta, debe ingresar la contraseña de administrador.'
            );
        }
      }/*valor oculto*/
      else{
        $response = array(
          'status' => 'ERROR',
          'message' => 'Vuelva a intentar.'
        );
      }
    return Response::json( $response );
  }

  public function getUsuAsesor(){
    if( !Sesion::isAdmin() )
    return Redirect::to('admin/logout');

    $usuarioAsesor = Asesor::where('aseId',1)
    ->get(array('aseCorreo'));

    if ( count( $usuarioAsesor ) > 0 ){
      $asesor = $usuarioAsesor[0];
      $cuenta = $asesor['aseCorreo'];

      $response = array(
        'status' => 'OK',
        'data' => $cuenta,
        'message' => 'Resultados obtenidos'
      );
    }
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'Ingrese aquí nueva cuenta para Asesores'
      );

    return Response::json( $response );
  }

}
