<?php

class PreciosLineaController extends BaseController{

  public function agregarPrecioLinea(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'precio'    => Input::get('precio'),
          'numeroConsultas'  => Input::get('num'),
          'tipoPrecio'  => Input::get('tipo')
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
          $insert = PreciosLinea::insert(array(
            'preLPrecio'   => $data['precio'],
            'preLCantidad' => trim($data['numeroConsultas']),
            'preLPreciosT'   => $data['tipoPrecio'],
            'preLActivo'   => true,
          ));

          if ( $insert )
            $response = array(
              'status' => 'OK',
              'message' => 'Paquete de Precios agregado correctamente'
            );
          else
            $response = array(
              'status' => 'ERROR',
              'message' => 'No se pudo agregar el paquete precios, intente de nuevo'
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

  /**PARA ASIGNAR**/
  public function getPrecioLinActivo(){
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

    $preciosTelefono = PreciosLinea::
       where('preLActivo',true)
       ->leftJoin('preciosTipo', 'preciosLinea.preLPreciosT', '=', 'preciosTipo.pretId')
       ->get(array(
         'preciosLinea.preLPrecio',
         'preciosLinea.preLCantidad',

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
        'message' => 'No se tienen precios para consultas en línea registrados.'
      );
      return Response::json( $response );
}

  /****************/
  public function precioLinCliente(){
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
          $busqueda = PreciosLinea::
          leftJoin('preciosTipo', 'preciosLinea.preLPreciosT', '=', 'preciosTipo.pretId')
          ->leftJoin('personas', 'preciosTipo.pretId', '=', 'personas.perPreciosT')
          ->where('personas.perId', $data['id'])
          ->where('preciosLinea.preLActivo', true)
          ->get(array(
            'preciosLinea.preLPrecio',
            'preciosLinea.preLCantidad'
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
              'message' => 'No se le han asignado precios, comuníquese con nosotros.'
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
  public function bajaPrecioLinea(){
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
              $editar = PreciosLinea::where('preLId', $data['id'])
                ->update(array(
                  'preLActivo' => false
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

  /***EDITAR PRECIO*/
  public function editarPLinea(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'id' => Input::get('id'),
          'precio'    => Input::get('precio'),
          'numeroConsultas'  => Input::get('num'),
          'activo'=> Input::get('activo')
        );

       $validaciones = array('id'     => array('required', 'alpha_num'),
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
          $editar = PreciosLinea::where('preLId', $data['id'])
            ->update(array(
              'preLPrecio'   => $data['precio'],
              'preLCantidad' => $data['numeroConsultas'],
              'preLActivo'   => $data['activo'],
            ));

            if ( $editar )
              $response = array(
                'status' => 'OK',
                'message' => 'Paquete de Precios en Línea actualizado'
                );
            else
              $response = array (
                'status' => 'ERROR',
                'message' => 'No se puede actualizar el paquete de precios en línea, intente otra vez'
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

    /**seleccionar PRECIOS TIPO DE PRECIO****/
 public function seleccionarPrecioLinea(){
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }
      $data = Input::all();
      $seleccionar = PreciosLinea::where('preciosLinea.preLId', $data['id'])
      ->leftJoin('preciosTipo', 'preciosLinea.preLPreciosT', '=', 'preciosTipo.pretId')
      ->get(array(
        'preciosLinea.preLId',
        'preciosLinea.preLPrecio',
        'preciosLinea.preLCantidad',
        'preciosLinea.preLActivo',

        'preciosTipo.pretId',
        'preciosTipo.pretNombre'
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
            'message' => 'No se encontraron resultados'
          );
    return Response::json($response);
  }

/***GetTIPO PRECIOS DESDE ADMIN**/
  public static function getTodosPrecioLinea(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

    $preciosTelefono = PreciosLinea::
      leftJoin('preciosTipo', 'preciosLinea.preLPreciosT', '=', 'preciosTipo.pretId')
      ->get(array(
        'preciosLinea.preLId',
        'preciosLinea.preLPrecio',
        'preciosLinea.preLCantidad',
        'preciosLinea.preLActivo',

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
        'message' => 'No se tienen precios para consultas en línea registrados.'
      );
      return Response::json( $response );
  }

                                      /**PRECIO PAQUETE n CONSULTAS*/
  public static function getPrecio($idPrecioT,$numeroConsultas){
    $precio = PreciosLinea::where('preLPreciosT',$idPrecioT)
      ->where('preLCantidad',$numeroConsultas)
      ->get(array('preLPrecio'))
      ->toArray();
      $precioFinal = $precio[0];
      $precioRetorno = $precioFinal['preLPrecio'];

      return $precioRetorno;
  }
}
