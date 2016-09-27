<?php

class AdmController extends BaseController {

  public function cambiarCA(){  /*CONTRASEÑA Actualizar*/
    if( !Sesion::isAdmin() )
    return Redirect::to('admin/logout');

      $csenah = Input::get('csenah');
      if(isset($csenah)) {
        $data = array(
          'contrasenaActual' => Input::get('actual'),
          'nuevaContrasena'  => Input::get('new')
        );

        $rules = array(
            'contrasenaActual'   => array('required', 'size:8', 'regex:/^([0-9a-zA-Z@._\-])+$/'),
            'nuevaContrasena'    => array('required', 'size:8', 'regex:/^([0-9a-zA-Z@._\-])+$/')
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
        else{ //verifica contraseña actual

          $admVH = Adm::where('admId', 1)
            ->get();

          if ( Hash::check($data['contrasenaActual'], $admVH[0]->admPass) ){
            $editarPass = Adm::where('admId', 1)
              ->update(array(
                'admPass' => Hash::make(trim($data['nuevaContrasena']))
              ));

            if ( $editarPass )
              $response = array(
                'status' => 'OK',
                'message' => 'Contraseña actualizada.'
              );
            else
              $response = array (
                'status' => 'ERROR',
                'message' => 'No se puede actualizar la contraseña, intente otra vez'
                );
          }/*verifica contraseña actual*/
          else
            $response = array(
              'status' => 'ERROR',
              'message' => 'Contraseña actual incorrecta, debe ingresar su actual contraseña.'
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

}
