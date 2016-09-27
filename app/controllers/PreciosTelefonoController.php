<?php

class PreciosTelefonoController extends BaseController{

  public function agregarPrecioTelefono(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'precio'          => Input::get('precio'),
          'numeroConsultas' => Input::get('num'),
          'tipoPrecio'      => Input::get('tipo'),
        );

       $validaciones = array(
                             'precio' => array('required', 'alpha_num'),
                             'tipoPrecio' => array('required', 'alpha_num'),
                             'numeroConsultas' => array('required', 'digits_between:1,3')
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
          $insert = PreciosTelefono::insert(array(
            'preTPrecio'   => $data['precio'],
            'preTCantidad' => trim($data['numeroConsultas']),
            'preTActivo'   => true,
            'preTPreciosT'   => $data['tipoPrecio']
          ));

          if ( $insert )
            $response = array(
              'status' => 'OK',
              'message' => 'Paquete de Precios agregado correctamente'
            );
          else
            $response = array(
              'status' => 'ERROR',
              'message' => 'No se pudo agregar el paquete de precios, intente de nuevo'
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

  /*PARA ASIGNAR*/
  public function getPrecioTelActivo(){
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

    $preciosTelefono = PreciosTelefono::
      leftJoin('preciosTipo', 'preciosTelefono.preTPreciosT', '=', 'preciosTipo.pretId')
      ->where('preciosTelefono.preTActivo', true)
       ->get(array(
         'preciosTelefono.preTPrecio',
         'preciosTelefono.preTCantidad',

         'preciosTipo.pretNombre'
           ))
         ->toArray();

    if ( count( $preciosTelefono ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $preciosTelefono,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se encontraron precios registrados en la B.D.'
      );

    return Response::json( $response );
  }

  /***********/
  public function precioTelCliente(){
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

      $token = Input::get('token');
      if(isset($token)) {
        $data = array(
          'id' => Input::get('idCliente')
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
          $busqueda = PreciosTelefono::
          leftJoin('preciosTipo', 'preciosTelefono.preTPreciosT', '=', 'preciosTipo.pretId')
          ->leftJoin('personas', 'preciosTipo.pretId', '=', 'personas.perPreciosT')
          ->where('personas.perId', $data['id'])
          ->where('preciosTelefono.preTActivo', true)
          ->get(array(
            'preciosTelefono.preTPrecio',
            'preciosTelefono.preTCantidad',

            'preciosTipo.pretId'
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
              'message' => 'No se encontraron resultados'
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


  /***DAR BAJA Precio**/
  public function bajaPrecioTelefono(){
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
              $editar = PreciosTelefono::where('preTId', $data['id'])
                ->update(array(
                  'preTActivo' => false
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

  /**EDITAR PRECIO****/
  public function editarPTelefonico(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'id' => Input::get('id'),
          'precio'    => Input::get('precio'),
          'numeroConsultas'  => Input::get('num'),
          'tipoPrecio'  => Input::get('tipo'),
          'activo'=> Input::get('activo')
        );

       $validaciones = array('id'     => array('required', 'alpha_num'),
                             'tipoPrecio'     => array('required', 'alpha_num'),
                             'precio' => array('required', 'alpha_num'),
                             'numeroConsultas' => array('required', 'digits_between:1,3'),
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
          $editar = PreciosTelefono::where('preTId', $data['id'])
            ->update(array(
              'preTPrecio'   => $data['precio'],
              'preTCantidad' => $data['numeroConsultas'],
              'preTActivo'   => $data['activo'],
              'preTPreciosT' => $data['tipoPrecio']
            ));

            if ( $editar )
              $response = array(
                'status' => 'OK',
                'message' => 'Paquete de Precios telefonicos actualizado'
                );
            else
              $response = array (
                'status' => 'ERROR',
                'message' => 'No se puede actualizar el paquete de precios telefonicos, intente otra vez'
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

    /*seleccionar PRECIOS TIPO DE PRECIO*/
 public function seleccionarPrecioTelefono(){
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

      $data = Input::all();

      $seleccionar = PreciosTelefono::where('preciosTelefono.preTId', $data['id'])
        ->leftJoin('preciosTipo', 'preciosTelefono.preTPreciosT', '=', 'preciosTipo.pretId')
        ->get(array(
          'preciosTelefono.preTId',
          'preciosTelefono.preTPrecio',
          'preciosTelefono.preTCantidad',
          'preciosTelefono.preTActivo',

          'preciosTipo.pretId',
          'preciosTipo.pretNombre'
        ))
        ->toArray();

      if(count( $seleccionar ) > 0){

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
      }
      return Response::json($response);
  }

/**GetTIPO PRECIOS DESDE ADMIN***/
  public static function getTodosPrecioTelefono(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

    $preciosTelefono = PreciosTelefono::
    leftJoin('preciosTipo', 'preciosTelefono.preTPreciosT', '=', 'preciosTipo.pretId')
    ->get(array(
      'preciosTelefono.preTId',
      'preciosTelefono.preTPrecio',
      'preciosTelefono.preTCantidad',
      'preciosTelefono.preTActivo',

      'preciosTipo.pretId',
      'preciosTipo.pretNombre'
    ))
    ->toArray();

    if ( count( $preciosTelefono ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $preciosTelefono,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se tienen registrados precios para consultas telefónicas.'
      );
      return Response::json( $response );
  }
    /**PRECIO PAQUETE 6 CONSULTAS**/
  public static function getPrecio($idPrecioT, $numeroConsultas){
    $precio = PreciosTelefono::where('preTPreciosT',$idPrecioT)
      ->where('preTCantidad',$numeroConsultas)
      ->get(array('preTPrecio'))
      ->toArray();
    $precioFinal = $precio[0];
    $precioRetorno = $precioFinal['preTPrecio'];

    return $precioRetorno;
  }    

}
