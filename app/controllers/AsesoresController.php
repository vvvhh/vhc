<?php

class AsesoresController extends BaseController{

  public function agregarAsesor(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'nombre'    => Input::get('nom'),
          'primerApellido'  => Input::get('ape1'),
          'segundoApellido'  => Input::get('ape2')
        );

       $validaciones = array(
                             'nombre' => array('required', 'alpha_num'),
                             'primerApellido' => array('required', 'alpha_num'),
                             'segundoApellido' => array('required', 'alpha_num')
       );

       $validator = Validator::make($data , $validaciones);

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
          $insert = Asesores::insert(array(
            'asesNombre'     => trim($data['nombre']),
            'asesPrimerApe'  => trim($data['primerApellido']),
            'asesSegundoApe' => trim($data['segundoApellido']),
            'asesActivo'     => true,
          ));

          if ( $insert )
            $response = array(
              'status' => 'OK',
              'message' => 'Asesor agregado correctamente'
            );
          else
            $response = array(
              'status' => 'ERROR',
              'message' => 'No se pudo agregar el Asesor, intente de nuevo'
            );
        }
      }

      else{
        $response = array(
          'status' => 'ERROR',
          'message' => 'Vuelva a intentar en un momento'
        );
      }
      return Response::json( $response );
  }

  /*DAR BAJA*/
  public function bajaAsesor(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'id' => Input::get('id')
        );

       $validaciones = array('id' => array('required', 'alpha_num')
       );

       $validator = Validator::make($data , $validaciones);

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
              $editar = Asesores::where('asesId', $data['id'])
                ->update(array(
                  'asesActivo' => false
                ));

              if ( $editar )
                $response = array(
                  'status' => 'OK'
                  );
              else
                $response = array (
                  'status' => 'ERROR',
                  'message' => 'No se puede actualizar, intente otra vez'
                  );
            }
      }

      else{
        $response = array(
          'status' => 'ERROR',
          'message' => 'Vuelva a intentar en un momento'
        );
      }
      return Response::json( $response );
  }

  /*EDITAR*/
  public function editarAsesor(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'id' => Input::get('id'),
          'nombre'    => Input::get('nom'),
          'primerApellido'  => Input::get('ape1'),
          'segundoApellido'  => Input::get('ape2'),
          'activo'=> Input::get('activo')
        );

       $validaciones = array('id'     => array('required', 'alpha_num'),
                             'nombre' => array('required', 'alpha_num'),
                             'primerApellido'  => array('required', 'alpha_num'),
                             'segundoApellido' => array('required', 'alpha_num'),
                             'activo' => array('required', 'boolean')
       );

       $validator = Validator::make($data , $validaciones);

       if ($validator->fails()){
          $respuesta;
          $mensajes = $validator->messages();
          foreach ($mensajes->all() as $mensaje){
              $respuesta = $mensaje;
          }
            $response = array(
              'status'  => 'ERROR',
              'message' => $respuesta
            );
        }
        else{
          $editar = Asesores::where('asesId', $data['id'])
            ->update(array(
              'asesNombre'     => $data['nombre'],
              'asesPrimerApe'  => $data['primerApellido'],
              'asesSegundoApe' => $data['segundoApellido'],
              'asesActivo'     => $data['activo'],
            ));

            if ( $editar )
              $response = array(
                'status' => 'OK',
                'message' => 'Datos de Asesor actualizado'
                );
            else
              $response = array (
                'status' => 'ERROR',
                'message' => 'No se puede actualizar los datos del asesor, intente otra vez'
                );
            }
      }

      else{
        $response = array(
          'status' => 'ERROR',
          'message' => 'Vuelva a intentar en un momento'
        );
      }
      return Response::json( $response );
  }

 public function seleccionarAsesor(){
    //if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
     $data = Input::all();

      $seleccionar = Asesores::
        where('asesId', $data['id'])
        ->get()
          ->toArray();

        if ( count( $seleccionar ) > 0 )
          $response = array(
            'status' => 'OK',
            'data' => $seleccionar
          );
        else
          $response = array(
            'status' => 'ERROR',
            'message' => 'No se encontraron resultados'
          );

    return Response::json($response);
  }


  public function getAsesoresActivo(){
     if( !Sesion::isAsesor() ){
       if( !Sesion::isAdmin() )
       return Redirect::to('admin/logout');
     }

       $seleccionar = Asesores::
         where('asesActivo', true)
         ->get(array(
           'asesId',
           'asesNombre',
           'asesPrimerApe',
           'asesSegundoApe'
         ))
           ->toArray();

         if ( count( $seleccionar ) > 0 )
           $response = array(
             'status' => 'OK',
             'data' => $seleccionar
           );
         else
           $response = array(
             'status' => 'ERROR',
             'message' => 'No hay asesores registrados.'
           );

     return Response::json($response);
   }

/*Get DESDE ADMIN*/
  public static function getAsesores(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

    $asesores = Asesores::
       get()
         ->toArray();

    if ( count( $asesores ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $asesores,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se tienen asesores registrados.'
      );
      return Response::json( $response );
  }
}
