<?php

class LegislacionLinkController extends BaseController {

  /*
  | busqueda de enlaces a leyes, legislacion.blade.php
  */
  public function agregarEnlace(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

        $data = array(
          'nombre' => Input::get('nom'),
          'enlace' => Input::get('enl'),
          'tipo'   => Input::get('tipo')
        );

       $validaciones = array(
                             'nombre' => array('required'),
                             'enlace' => array('required'),
                             'tipo'   => array('required', 'numeric')
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
          $ingresar = LegislacionLink::insert(array(
              'legNombre' => $data['nombre'],
              'legLink'   => $data['enlace'],
              'legTipo'   => $data['tipo']
            ));

            if ( $ingresar )
              $response = array(
                'status' => 'OK',
                'message' => 'Enlace Agregado'
                );
            else
              $response = array (
                'status' => 'ERROR',
                'message' => 'No se puede Agregar, intente otra vez'
                );
            }

      return Response::json( $response );
  }

  public function getLegislacion(){  /**Para busqueda*/

    $data = array(
      'buscarLey' => Input::get('bsc'),
      'adm' => Input::get('adm')
    );

    $validaciones = array('buscarLey' => array('required')
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
      if ($data['adm'] != 1) {
        $getLegislacion = LegislacionLink::where('legNombre', 'like', '%'. $data['buscarLey'] .'%')
        ->get(array(
          'legNombre',
          'legLink'
            ))
          ->toArray();
      }
      else if ($data['adm'] == 1) {
        $getLegislacion = LegislacionLink::where('legNombre', 'like', '%'. $data['buscarLey'] .'%')
        ->get(array(
          'legNombre',
          'legLink',
          'legTipo',
          'legId'
            ))
          ->toArray();
      }

      if ( count( $getLegislacion ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getLegislacion
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontro ningún enlace con la palabra que ingreso'
        );
    }
    return Response::json( $response );
  }

  public function getLegislaciones(){  /*GetLegislaciones para lista seccion*/

    $data = array(
      'tipoLegislacion' => Input::get('tp')
    );

    $validaciones = array('tipoLegislacion' => array('required', 'numeric')
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
      $getLegislacion = LegislacionLink::where('legTipo', $data['tipoLegislacion'] )
      ->get(array(
        'legNombre',
        'legLink'
          ))
        ->toArray();

      if ( count( $getLegislacion ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getLegislacion
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontraron elementos que coincidan con tipo. '
        );
    }
    return Response::json( $response );
  }

  public function getLegTodos(){  /**Get todos**/
      $getLegislacion = LegislacionLink::
      get(array(
        'legNombre',
        'legLink',
        'legTipo',
        'legId'
          ))
        ->toArray();

      if ( count( $getLegislacion ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getLegislacion
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontraron elementos que coincidan con tipo. '
        );

    return Response::json( $response );
  }


  public function getLegEspecifico(){  /*Get para editar*/
    $data = array(
      'id' => Input::get('id')
    );

    $validaciones = array('id' => array('required', 'numeric')
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
      $getLegislacion = LegislacionLink::where('legId', $data['id'] )
      ->get()
      ->toArray();

      if ( count( $getLegislacion ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getLegislacion
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontraron elementos. '
        );
    }
    return Response::json( $response );
  }

  /*EDITAR Enlace*/
  public function editarELegislacion(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

        $data = array(
          'id'     => Input::get('id'),
          'nombre' => Input::get('nom'),
          'enlace' => Input::get('enl'),
          'tipo'   => Input::get('tipo')
        );

       $validaciones = array('id'     => array('required', 'alpha_num'),
                             'nombre' => array('required'),
                             'enlace' => array('required'),
                             'tipo'   => array('required', 'numeric')
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
          $editar = LegislacionLink::where('legId', $data['id'])
            ->update(array(
              'legNombre' => $data['nombre'],
              'legLink'   => $data['enlace'],
              'legTipo'   => $data['tipo'],
            ));

            if ( $editar )
              $response = array(
                'status' => 'OK',
                'message' => 'Enlace Actualizado'
                );
            else
              $response = array (
                'status' => 'ERROR',
                'message' => 'No se puede actualizar, intente otra vez'
                );
            }

      return Response::json( $response );
  }

  public function eliminarEnlaceLeg(){
    $data = array(
      'id' => Input::get('id')
    );

    $validaciones = array('id' => array('required', 'numeric')
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
   $enlace = LegislacionLink::find($data['id']);
   $enlace->delete();

      if ( $enlace )
        $response = array(
          'status' => 'OK',
          'message' => 'Elemento eliminado correctamente'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se pudo eliminar.'
        );
    }
    return Response::json( $response );
  }
}
