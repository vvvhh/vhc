<?php

class PreciosController extends BaseController{

  public function agregarPrecio(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

    /*$data = Input::all();*/
    $data = array(
      'precio6'  => Input::get('precio6'),
      'precio12' => Input::get('precio12'),
      'precio18' => Input::get('precio18')
    );

    $validaciones = array('precio6'  => array('required','alpha_num'),
                          'precio12' => array('required','alpha_num'),
                          'precio18' => array('required','alpha_num') );

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
       $insert = Precios::insert(array(
          'preSeis' => trim($data['precio6']),
          'preDoce' => trim($data['precio12']),
          'preDiesciocho' => trim($data['precio18']),
          'preActivo' => true
        ));

        if ( $insert )
          $response = array(
            'status' => 'OK',
            'message' => 'Paquete agregado correctamente'
          );
        else
          $response = array(
            'status' => 'ERROR',
            'message' => 'No se pudo agregar el paquete, intente de nuevo'
          );
    }
  /*  $response = array(
      'status' => 'ERROR',
      'message' => 'No se pudo agregar el paquete, intente de nuevo'
    );*/

    return Response::json( $response );
  }

  public function buscarPrecioActivo(){   /***************PARA ASIGNAR***************/
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

    $busqueda = Precios::orderBy('preId', 'asc')
      ->where('preActivo',true)
      ->get(array(
        'preId',
        'preSeis',
        'preDoce',
        'preDiesciocho',
        'preActivo'
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

    return Response::json( $response );
  }

  public function buscarPrecio(){   /******************************/
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

    $busqueda = Precios::orderBy('preId', 'asc')
      ->get(array(
        'preId',
        'preSeis',
        'preDoce',
        'preDiesciocho',
        'preActivo'
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

    return Response::json( $response );
  }

  public function buscarPrecioCliente(){  /****************/
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }
      $data = Input::all();

      $idPrecio = Personas::where('perId', $data['idCliente'])
      ->get(array(
        'perId',
        'perPrecio'
      ))
      ->toArray();

      $idP=$idPrecio[0];
      $idPrecios=$idP['perPrecio'];

      $busqueda = Precios::where('preId', $idPrecios)
      ->get(array(
        'preId',
        'preSeis',
        'preDoce',
        'preDiesciocho'
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

    return Response::json( $response );
  }


  public function darBajaPrecio(){    /*************DAR BAJA Precio********/
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'idPrecio' => Input::get('idPrecio')
        );

       $validaciones = array('idPrecio' => array('required', 'alpha_num')
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
              $editar = Precios::where('preId', $data['idPrecio'])
                ->update(array(
                  'preActivo' => false
                ));

              if ( $editar )
                $response = array(
                  'status' => 'OK',
                  'message' => 'Precio actualizado'
                  );
              else
                $response = array (
                  'status' => 'ERROR',
                  'message' => 'No se puede actualizar el precio, intente otra vez'
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


  public function editarPrecio(){   /******EDITAR PRECIO**************/
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'id' => Input::get('id'),
          'precio6'=> Input::get('precio6'),
          'precio12'=> Input::get('precio12'),
          'precio18'=> Input::get('precio18'),
          'activo'=> Input::get('activo')
        );

       $validaciones = array('id' => array('required', 'alpha_num'),
                             'precio6' => array('required', 'alpha_num'),
                             'precio12' => array('required', 'alpha_num'),
                             'precio18' => array('required', 'alpha_num'),
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
              'status' => 'ERROR',
              'message' => $respuesta
            );
        }
        else{
          $editar = Precios::where('preId', $data['id'])
            ->update(array(
              'preSeis' => $data['precio6'],
              'preDoce' => $data['precio12'],
              'preDiesciocho' => $data['precio18'],
              'preActivo' => $data['activo']
            ));

            if ( $editar )
              $response = array(
                'status' => 'OK',
                'message' => 'Paquete actualizado'
                );
            else
              $response = array (
                'status' => 'ERROR',
                'message' => 'No se puede actualizar el paquete, intente otra vez'
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

    /**************************************************************************/
  public function seleccionarPrecio(){
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

      $data = Input::all();

      $seleccionar = Precios::where('preId', $data['id'])
      ->get(array(
        'preId',
        'preSeis',
        'preDoce',
        'preDiesciocho',
        'preActivo'
        ))
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
          'message' => 'No se encontraron resultados'
        );

      return Response::json($response);
  }

/************************************GetGrupos******************************************/
  public static function getPrecioPaquete(){
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

    $data = Input::all();
    if ($data['paquete'] == 6){ //precio 6 consultas
       $precio = Precios::where('preId',$data['idPrecio'])
         ->get(array('preSeis'))
         ->toArray();
      $precioFinal = $precio[0];
      $precioRetorno = $precioFinal['preSeis'];
     }
     if ($data['paquete'] == 12){
       $precio = Precios::where('preId',$data['idPrecio'])
         ->get(array('preDoce'))
         ->toArray();
        $precioFinal = $precio[0];
        $precioRetorno = $precioFinal['preDoce'];
     }
     if ($data['paquete'] == 18){
       $precio = Precios::where('preId',$data['idPrecio'])
         ->get(array('preDiesciocho'))
         ->toArray();
       $precioFinal = $precio[0];
       $precioRetorno = $precioFinal['preDiesciocho'];
     }
     $response = array(
       'status' => 'OK',
       'data' => $precioRetorno
     );

     return Response::json($response);
  }

}
