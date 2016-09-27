<?php

class PreciosTipoController extends BaseController{

  public function agregarPrecioTipo(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

    $data = array(
      'nombreTipoPrecio'      => Input::get('nombreTipoP'),
      'tipoPrecioPredefinido' => Input::get('predefinido')
    );

    $validaciones = array('nombreTipoPrecio'       => array('required','alpha_num'),
                          'tipoPrecioPredefinido'  => array('required','boolean')
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
      $preRepetido=0;
      if ($data['tipoPrecioPredefinido']) {
        $PredefinidoRepetido = PreciosTipo::where('pretPredefinido', true)
            ->get();
        if ( count( $PredefinidoRepetido ) > 0 ){
          $preRepetido=1;
          $response = array(
            'status' => 'ERROR',
            'message' => 'No se pudo agregar, Ya se tiene registrado un tipo de precio predefinido, solo debe existir uno.'
          );
        }
      }
      if($preRepetido==0){
        $nombreRepetido = PreciosTipo::where('pretNombre', $data['nombreTipoPrecio'])
            ->get();
        if ( count( $nombreRepetido ) > 0 ){
          $response = array(
            'status' => 'ERROR',
            'message' => 'No se pudo agregar, Ya se tiene registrado un tipo de precio con el mismo nombre.'
          );
        }
        else{
          $insert = PreciosTipo::insert(array(
             'pretNombre' => trim($data['nombreTipoPrecio']),
             'pretActivo' => true,
             'pretPredefinido'=>$data['tipoPrecioPredefinido']
           ));

           if ( $insert )
             $response = array(
               'status' => 'OK',
               'message' => 'Tipo de Precios agregado correctamente'
             );
           else
             $response = array(
               'status' => 'ERROR',
               'message' => 'No se pudo agregar el tipo de precios, intente de nuevo'
             );
        }
      }
    }

    return Response::json( $response );
  }

  /**DAR BAJA Precio**/
  public function darBajaPrecioTipo(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'idPrecio' => Input::get('id')
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
              $editar = PreciosTipo::where('pretId', $data['idPrecio'])
                ->update(array(
                  'pretActivo' => false
                ));

              if ( $editar )
                $response = array(
                  'status' => 'OK',
                  'message' => 'Nombre de precios actualizado'
                  );
              else
                $response = array (
                  'status' => 'ERROR',
                  'message' => 'No se puede actualizar el nombre de precio, intente otra vez'
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
    public function editarPrecioTipo(){
            if( !Sesion::isAdmin() )
          return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
        'id' => Input::get('id'),
        'nombreTipoPrecio'  => Input::get('nombreTipoP'),
        'activo'=> Input::get('activo'),
        'predefinido'=> Input::get('predefinido')
      );
       $validaciones = array('id'     => array('required', 'alpha_num'),
                      'nombreTipoPrecio' => array('required', 'alpha_num'),
                      'activo' => array('required', 'boolean'),
                      'predefinido' => array('required', 'boolean')
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
                                                $editar = PreciosTipo::where('pretId', $data['id'])
                                                  ->update(array(
                                                    'pretNombre'   => $data['nombreTipoPrecio'],
                                                    'pretActivo' => $data['activo'],
                                                    'pretPredefinido' => $data['predefinido']
                                                  ));

                                                  if ( $editar )
                                                    $response = array(
                                                      'status' => 'OK',
                                                      'message' => 'Tipo de Precios actualizado'
                                                      );
                                                  else
                                                    $response = array (
                                                      'status' => 'ERROR',
                                                      'message' => 'No se puede actualizar el tipo de precios, intente otra vez'
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


    /********/
 public function getPrecioTipo(){
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

      $data = Input::all();

      $seleccionar = PreciosTipo::where('pretId', $data['id'])
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
          'message' => 'No se encontraron resultados'
        );

      return Response::json($response);
  }
/***Get precio paquete ContratoU*/
public static function getPrecioPaquete(){
  if( !Sesion::isUser() ){
    if (!Sesion::isAsesor()) {
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

  }
          $data = array(
            'idPrecioTipo' => Input::get('idPrecioT'),
            'numeroPaquete'=> Input::get('paquete'),
            'tipoConsulta' => Input::get('tipoCon')
          );

         $validaciones = array(
                              'idPrecioTipo' => array('required', 'alpha_num'),
                              'numeroPaquete'=> array('required', 'alpha_num'),
                              'tipoConsulta' => array('required', 'boolean')
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
                'data' => $respuesta
              );
          }
          else{

            $precioRetorno = PreciosTipoController::getPrecioPaqueteTipo($data['tipoConsulta'], $data['idPrecioTipo'], $data['numeroPaquete']);

             $response = array(
               'status' => 'OK',
               'data' => $precioRetorno
             );

            }
      return Response::json( $response );
}

public static function getPrecioPaqueteTipo($tipoConsulta, $idPrecioT, $numeroConsultas){  //Obtener precio paquete especifico
  if ($tipoConsulta == 1) {     //Consulta en Linea
      $precioRetorno = PreciosLineaController::getPrecio($idPrecioT,$numeroConsultas);
  }
  else{   //consulta telefonica
      $precioRetorno = PreciosTelefonoController::getPrecio($idPrecioT, $numeroConsultas);
  }
  return $precioRetorno;
}

/***GetTIPO PRECIOS DESDE ADMIN*******/
  public function getTodosPrecioTipo(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

    $PreciosTipo = PreciosTipo::
      get()
      ->toArray();

    if ( count( $PreciosTipo ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $PreciosTipo,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se tienen tipos de precio registrados en el sistema'
      );
      return Response::json( $response );
  }

  /*****GetTIPO PRECIOS Activos**/
    public function getPrecioTipoActivo(){
      if( !Sesion::isUser() ){
        if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');
      }

      $PreciosTipo = PreciosTipoController::getPrecioTActivo();

      if ( count( $PreciosTipo ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $PreciosTipo,
          'message' => 'Resultados obtenidos'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se tienen tipos de precio activos en el sistema'
        );
        return Response::json( $response );
    }

    public static function getPrecioTActivo(){
      $PreciosTipo = PreciosTipo::where('pretActivo',true)
         ->get(array(
           'pretId',
           'pretNombre'
         ))
         ->toArray();
         return $PreciosTipo;
    }

    public static function getPrecioTActivoPred(){
      $PreciosTPredefinido = PreciosTipo::where('pretActivo',true)
         ->where('pretPredefinido',true)
         ->get(array(
           'pretId',
           'pretNombre'
         ))
         ->toArray();
         return $PreciosTPredefinido;
    }
}
