<?php

class ServiciosController extends BaseController{

  public function ingresoServicio(){ /**INGRESO Servicio**/
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

    $token = Input::get('token');

    if(isset($token)) {
      $data = array(
        'nombreServicio' => Input::get('nombreServicio')
      );

     $validaciones = array('nombreServicio' => array('required', 'max:60','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\-\s\,\.])+$/')
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

        $duplicado = Servicios::where('serNombre',$data['nombreServicio'])
          ->get()
          ->toArray();

          if ( count( $duplicado ) > 0 )
            return Response::json(array(
            'status' => 'Error',
            'message' => 'Ya existe un servicio con el mismo nombre, verifique'
          ));
          else{
            $insert = Servicios::insert(array(
              'serNombre' => trim($data['nombreServicio']),
              'serActivo' => true
            ));

              if ( $insert ){
                $response = array(
                  'status' => 'OK',
                  'message' => 'Servicio agregado correctamente.');

              }
              else
                $response = array(
                  'status' => 'ERROR',
                  'message' => 'No se pudo realizar el registro, intente de nuevo'
                );
          }

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

        /*************/
  public function buscarServicio(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

    $token = Input::get('token');

    if(isset($token)) {
      $data = array(
        'campoBuscar' => Input::get('buscar')
      );

     $validaciones = array('campoBuscar' => array('required', 'max:60','alpha_num')
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

        $busqueda = Servicios::where('serNombre', 'like', '%'. $data['campoBuscar'] .'%')
          //->where('serActivo',true)
          ->get(array(
            'serId',
            'serNombre',
            'serActivo'
          ))
          ->toArray();

          if ( count( $busqueda ) > 0 )
            $response = array(
              'status' => 'OK',
              'data' => $busqueda,
              'message' => 'Resultados obtenidos'
            );
          else
            $response = array(
              'status' => 'ERROR',
              'message' => 'No se encontró ningún servicio con esa cadena de caracteres.'
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

  public function darBajaServicio(){    /**DAR BAJA SERVICIO*/
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'idServicio' => Input::get('idServicio')
        );

       $validaciones = array('idServicio' => array('required', 'alpha_num')
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
              $editar = Servicios::where('serId', $data['idServicio'])
                ->update(array(
                  'serActivo' => false
                ));

              if ( $editar )
                $response = array(
                  'status' => 'OK',
                  'message' => 'Servicio actualizado'
                  );
              else
                $response = array (
                  'status' => 'ERROR',
                  'message' => 'No se puede actualizar el servicio, intente otra vez'
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

  public function editarServicio(){ /**EDITAR SERVICIO*****/
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'nombreServicio' => Input::get('nombreServicio'),
          'activo'         => Input::get('activo'),
          'idServicio'     => Input::get('idServicio')
        );

       $validaciones = array('nombreServicio' => array('required', 'max:60','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\-\s\,\.])+$/'),
                             'activo'     => array('required', 'boolean'),
                             'idServicio' => array('required', 'alpha_num')
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

              $editar = Servicios::where('serId', $data['idServicio'])
                ->update(array(
                  'serNombre' => $data['nombreServicio'],
                  'serActivo' => $data['activo']
                ));

              if ( $editar )
                $response = array(
                  'status' => 'OK',
                  'message' => 'Servicio actualizado'
                  );
              else
                $response = array (
                  'status' => 'ERROR',
                  'message' => 'No se puede actualizar el servicio, intente otra vez'
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

    /********************************/
  public function getServicios(){

      $data = Input::all();

      $seleccionar = Servicios::where('serActivo', true)
        ->get()
        ->toArray();

      if ( count( $seleccionar ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $seleccionar,
          'message' => 'Resultados obtenidos'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontraron servicios registrados.'
        );

      return Response::json($response);
  }

  /***********************/
  public function getTodosServicios(){
    if ( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');

      $data = Input::all();

      $seleccionar = Servicios::get()
        ->toArray();

      if ( count( $seleccionar ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $seleccionar,
          'message' => 'Resultados obtenidos'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontraron servicios registrados.'
        );

      return Response::json($response);
  }
  /****Selecciona un servicio*****/
  public function getServicio(){
    if ( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');

      $data = Input::all();

      $seleccionar = Servicios::where('serId',$data['idSer'])
        ->get()
        ->toArray();

      if ( count( $seleccionar ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $seleccionar,
          'message' => 'Resultados obtenidos'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontraron servicios registrados.'
        );

      return Response::json($response);
  }
}
