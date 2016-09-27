<?php

class PersonasController extends BaseController {
  public function activarCliente(){
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

    $data = Input::all();
    $format = "d-m-Y H:i:s";
    $timestamp = time();
    $fecha =  date($format, $timestamp);

    $editar = Personas::where('perNumeroPreregistro', $data['regU'])
      ->update(array(
        'perCliente'      => true,
        'perFechaRegistro'=> $fecha
      ));

    if ( $editar ){
      $response = array(
        'status' => 'OK',
        'message' => 'Activación correcta'
        );

        $usuarioVH = Personas::where('perNumeroPreregistro', $data['regU'])
              ->where('perActivo', true)
              ->where('perBaja', true)
              ->get(array(
                'perNombre',
                'perCorreo'
                  ))
              ->toArray();
            $resUs = $usuarioVH[0];
            $dataCorreo = array(
               'correo' => $resUs['perCorreo'],
               'nombre' => $resUs['perNombre']
             );
            $toEmail = $resUs['perCorreo'];//envia al correo del cliente
               Mail::send('emails.activarCuenta', $dataCorreo, function($message) use($toEmail){
                   $message->to($toEmail);
                   $message->subject('Activación de cuenta');
                 });
    }
    else
      $response = array (
        'status' => 'ERROR',
        'message' => 'No se puede actualizar el paquete, intente otra vez'
        );
    return Response::json( $response );
  }

  public function bajaPersona(){  /*Bja persona*/
    if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'regU' => Input::get('regU')
        );

       $validaciones = array('regU' => array('required', 'alpha_num')
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
              $editar = Personas::where('perNumeroPreregistro', $data['regU'])
              ->where('perBaja', true)
              ->where('perActivo', true)
                ->update(array(
                  'perBaja' => false
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

    public function buscarPersonas(){
      $busqueda = Personas::orderBy('perNombre', 'asc')
        ->get(array(
          'perId',
          'perCliente',
          'perTipoPersona',
          'perNombre',
          'perRepresentanteLegal',
          'perPrecio'
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

    public function editarPersona(){  /*EDITAR PERSONA*/
      if( !Sesion::isUser() ){
        if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');
      }

      $token = Input::get('editarh');

      if(isset($token)) {

        $data = array(
          'idPersona'           => Input::get('idPersona'),
          'nombre'         => Input::get('nombre'),
          'nombreRepresentanteLegar'=> Input::get('nombreRepresentanteLegar'),
          'códigoPostal'        => Input::get('cp'),
          'calle'               => Input::get('calle'),
          'número'              => Input::get('numero'),
          'colonia'             => Input::get('colonia'),
          'municipio'           => Input::get('municipio'),
          'entidadFederativa'   => Input::get('entidad'),
          'nacionalidad'        => Input::get('nacionalidad'),
          'rfc'                 => Input::get('rfc'),
          'actividad'           => Input::get('actividad'),
          'numeroEP'            => Input::get('numeroEP'),
          'día'                 => Input::get('diaEP'),
          'mes'                 => Input::get('mesEP'),
          'anio'                => Input::get('anioEP'),
          'nombreNotarioPublico'=> Input::get('nombreNP'),
          'numeroNotarioPublico'=> Input::get('numeroNP'),
          'lugar'               => Input::get('lugarEP'),
          'teléfono'            => Input::get('telefono'),
          'correo'              => Input::get('correo')
        );

        $validaciones = array('nombre'          => array('required', 'max:120', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'nombreRepresentanteLegar'=> array('required',   'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'códigoPostal'    => array('required', 'digits:5'),
                              'calle'           => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'número'          => array('required', 'max:15','alpha_num'),
                              'colonia'         => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'municipio'       => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'entidadFederativa'=> array('required', 'max:30','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),

                              'nacionalidad'    => array('required', 'max:20', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'rfc'             => array('required', 'max:16', 'regex:/^([0-9a-zA-Z_\-\s])+$/'),
                              'actividad'       => array('required', 'max:50', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'numeroEP'        => array('required', 'max:50', 'alpha_num'),
                              'día'             => array('required', 'alpha_num'),
                              'mes'             => array('required', 'alpha'),
                              'anio'            => array('required', 'min:4',  'alpha_num'),
                              'nombreNotarioPublico'        => array('required', 'max:50', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'numeroNotarioPublico'        => array('required', 'max:50', 'alpha_num'),
                              'lugar'           => array('required', 'max:100','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'teléfono'        => array('required', 'max:20', 'alpha_num'),
                              'correo'          => array('required', 'email',  'max:50')
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
          $editarActivo = Personas::where('perId', $data['idPersona'])
            ->update(array(
              'perActivo' => false
            ));

          $getClientes = Personas::where('perId', $data['idPersona'])
          ->get(array(
            'perCliente',
            'perBaja',
            'perTipoPersona',
            'perFechaPreregistro',
            'perNumeroPreregistro',
            'perFechaRegistro',
            'perCondiciones',
            'perGratis',
            'perPass',
            'perPreciosT'
              ))
            ->toArray();
          $datosActuales = $getClientes[0];

          $cliente           = $datosActuales['perCliente'];
          $baja              = $datosActuales['perBaja'];
          $tipoPersona       = $datosActuales['perTipoPersona'];
          $fechaPreregistro  = $datosActuales['perFechaPreregistro'];
          $numeroPreregistro = $datosActuales['perNumeroPreregistro'];
          $fechaRegistro     = $datosActuales['perFechaRegistro'];
          $condiciones       = $datosActuales['perCondiciones'];
          $gratis            = $datosActuales['perGratis'];
          $pass              = $datosActuales['perPass'];
          $tipoPrecio        = $datosActuales['perPreciosT'];

          $insert = Personas::insert(array(
            'perActivo'              => true, //modificaciones tener historico
            'perBaja'                => true, //da de baja del sistema, no se elimina
            'perCliente'             => $cliente,
            'perTipoPersona'         => $tipoPersona,
            'perNombre'              => trim($data['nombre']),
            'perRepresentanteLegal'  => trim($data['nombreRepresentanteLegar']),
            'perNumeroEP'            => trim($data['numeroEP']),
            'perDiaEP'               => trim($data['día']),
            'perMesEP'               => trim($data['mes']),
            'perAnioEP'              => trim($data['anio']),
            'perNombreNP'            => trim($data['nombreNotarioPublico']),
            'perNumeroNP'            => trim($data['numeroNotarioPublico']),
            'perLugarEP'             => trim($data['lugar']),
            'perNacionalidad'        => trim($data['nacionalidad']),
            'perRFC'                 => trim($data['rfc']),
            'perActividad'           => trim($data['actividad']),
            'perTelefono'            => trim($data['teléfono']),
            'perCorreo'              => trim($data['correo']),
            'perFechaPreregistro'    => $fechaPreregistro,
            'perNumeroPreregistro'   => $numeroPreregistro,
            'perFechaRegistro'       => $fechaRegistro,
            'perCondiciones'         => $condiciones,
            'perCodigoP'             => trim($data['códigoPostal']),
            'perDCalle'              => trim($data['calle']),
            'perDNumero'             => trim($data['número']),
            'perDColonia'            => trim($data['colonia']),
            'perDMunicipio'          => trim($data['municipio']),
            'perDEstado'             => trim($data['entidadFederativa']),
            'perGratis'              => $gratis,
            'perPass'                => $pass,
            'perPreciosT'            => $tipoPrecio
          ));

           if ( $insert ){
             $response = array(
               'status' => 'OK',
               'message' => 'Datos actualizados');

           }

           else
             $response = array(
               'status' => 'ERROR',
               'message' => 'No se pudo realizar la actualización , intente de nuevo'
             );
        }
      }
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se pudo realizar la actualización , intente de nuevoToken'
        );
      return Response::json( $response );
    }
    public function cambiarPrecioP(){  /*EDITAR Precio**/
        if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');

      $token = Input::get('token');

      if(isset($token)) {
        $data = array(
          'numeroRegistro' => Input::get('regU'),
          'tipoPrecio'     => Input::get('tipoPrecio')
        );

        $validaciones = array('numeroRegistro' => array('required', 'alpha_num'),
                              'tipoPrecio'     => array('required', 'alpha_num')
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
          $editarPrecio = Personas::where('perNumeroPreregistro', $data['numeroRegistro'])
            ->where('perActivo',true)
            ->update(array(
              'perPreciosT' => $data['tipoPrecio']
            ));


           if ( $editarPrecio ){
             $response = array(
               'status' => 'OK',
               'message' => 'Datos actualizados');
           }

           else
             $response = array(
               'status' => 'ERROR',
               'message' => 'No se pudo realizar la actualización , intente de nuevo'
             );
        }
      }
      return Response::json( $response );
    }

    public function cambiarContra(){  /*CONTRASEÑA Actualizar*/
      if( !Sesion::isUser() )
        return Redirect::to('usuario/logout');

        $csenah = Input::get('csenah');
        if(isset($csenah)) {
          $data = array(
            'regUsuario'       => Input::get('regUsuario'),
            'idPersona'        => Input::get('idPersona'),
            'contrasenaActual' => Input::get('actual'),
            'nuevaContrasena'  => Input::get('new')
          );

          $rules = array(
              'regUsuario' => array('required','regex:/^([0-9a-zA-Z@._\-])+$/'),
              'idPersona' => array('required','regex:/^([0-9a-zA-Z@._\-])+$/'),
              'contrasenaActual'   => array('required', 'size:8', 'regex:/^([0-9a-zA-Z@\._\-])+$/'),
              'nuevaContrasena'    => array('required', 'size:8', 'regex:/^([0-9a-zA-Z@\._\-])+$/')
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
            $usuarioVH = Personas::where('perNumeroPreregistro', $data['regUsuario'])
              ->where('perActivo', true)
              ->where('perBaja', true)
              ->get(array(
                'perId',
                'perPass',
                  ))
              ->toArray();
            $resUs  = $usuarioVH[0];
            $passUs = $resUs['perPass'];

            if ( Hash::check($data['contrasenaActual'], $passUs) ){
              $editarPass = Personas::where('perId', $data['idPersona'])
                ->update(array(
                  'perPass' => Hash::make(trim($data['nuevaContrasena']))
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
                'message' => 'Contraseña actual incorrecta, verifique que ingreso su contraseña actual.'
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

    public function restaurarContra(){  /*CONTRASEÑA Actualizar*/
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');

        $csenah = Input::get('token');
        if(isset($csenah)) {
          $data = array(
            'regUsuario'         => Input::get('regU'),
            'contraAdministrador'=> Input::get('adm')
          );

          $rules = array(
              'regUsuario' => array('required','regex:/^([0-9a-zA-Z@._\-])+$/'),
              'contraAdministrador' => array('required','regex:/^([0-9a-zA-Z@._\-])+$/')
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
            $usuarioVH = Personas::where('perNumeroPreregistro', $data['regUsuario'])
              ->where('perActivo', true)
              ->where('perBaja', true)
              ->get(array(
                'perNumeroPreregistro',
                'perCorreo',
                  ))
              ->toArray();
            $resUs = $usuarioVH[0];
            $dataCorreo = array(
               'correo'          => $resUs['perCorreo'],
               'contraUsuario'   => $resUs['perNumeroPreregistro']
             );

            $admVH = Adm::where('admId', 1)
              ->get();
            $resA  = $admVH[0];
            $passAdm = $resA['admPass'];

            if ( Hash::check($data['contraAdministrador'], $passAdm) ){
              $editarPass = Personas::where('perNumeroPreregistro', $resUs['perNumeroPreregistro'])
              ->where('perActivo', true)
              ->where('perBaja', true)
                ->update(array(
                  'perPass' => Hash::make($resUs['perNumeroPreregistro'])
                ));

              if ( $editarPass ){
                $response = array(
                  'status' => 'OK',
                  'message' => 'Contraseña actualizada.'
                );

               $toEmail = $resUs['perCorreo'];//envia al correo del cliente
               Mail::send('emails.restaurarContraMail', $dataCorreo, function($message) use($toEmail){
                   $message->to($toEmail);
                   $message->subject('Correo de restauración clave');
                 });
              }

              else
                $response = array (
                  'status' => 'ERROR',
                  'message' => 'No se puede actualizar la contraseña, intente otra vez'
                  );
            }/*verifica contraseña actual*/
            else
              $response = array(
                'status' => 'ERROR',
                'message' => 'Contraseña administrador incorrecta.'
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

    public function getClientes(){  /*GET CLIENTES*/
      if( !Sesion::isUser() ){
        if (!Sesion::isAsesor()) {
          if( !Sesion::isAdmin() )
          return Redirect::to('admin/logout');
        }
      }

      $getClientes = Personas::where('perCliente', true)
      ->where('perActivo', true)
      ->leftJoin('preciosTipo', 'personas.perPreciosT', '=', 'preciosTipo.pretId')
      ->orderBy('perNombre')
      ->get(array(
        'perId',
        'perBaja',
        'perCliente',
        'perTipoPersona',
        'perNombre',
        'perRepresentanteLegal',
        'perNumeroPreregistro',
        'pretNombre'
          ))
        ->toArray();

      if ( count( $getClientes ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getClientes,
          'message' => 'Resultados obtenidos'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No se encontraron resultados'
        );

      return Response::json( $response );
    }

    public function getCliente(){  /*********/
      if( !Sesion::isUser() ){
        if ( !Sesion::isAsesor() ) {
          if( !Sesion::isAdmin() )
          return Redirect::to('admin/logout');
        }

      }
      $data = array(
        'buscarCliente' => Input::get('perNombreB')
      );

      $validaciones = array('buscarCliente' => array('required', 'alpha_num')
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
        $getClientes = Personas::where('perNombre', 'like', '%'. $data['buscarCliente'] .'%')
        ->where('perCliente', true)
        ->where('perActivo', true)
        ->leftJoin('preciosTipo', 'personas.perPreciosT', '=', 'preciosTipo.pretId')
        ->get(array(
          'perId',
          'perBaja',
          'perCliente',
          'perTipoPersona',
          'perNombre',
          'perNumeroPreregistro',
          'perPreciosT',

          'pretNombre'
            ))
          ->toArray();

        if ( count( $getClientes ) > 0 )
          $response = array(
            'status' => 'OK',
            'data' => $getClientes,
            'message' => 'Resultados obtenidos'
          );
        else
          $response = array(
            'status' => 'ERROR',
            'message' => 'No existen clientes en el sistema'
          );
      }
      return Response::json( $response );
    }


    public function getPreregistro(){  /**********/
      if( !Sesion::isAdmin() ){
        return Redirect::to('admin/logout');
      }
      $data = Input::all();
      $getClientes = Personas::where('perNumeroPreregistro', $data['numeroP'])
      ->leftJoin('preciosTipo', 'personas.perPreciosT', '=', 'preciosTipo.pretId')
      ->where('perCliente', false)
      ->where('perActivo', true)
      ->get(array(
        'perId',
        'perCliente',
        'perTipoPersona',
        'perNombre',
        'perNumeroPreregistro',

        'pretNombre',

          ))
        ->toArray();

      if ( count( $getClientes ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getClientes,
          'message' => 'Resultados obtenidos'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No existen personas pre-registradas en el sistema.'
        );

      return Response::json( $response );
    }

    public function getPreregistros(){  /********/
      if( !Sesion::isAdmin() ){
        return Redirect::to('admin/logout');
      }

      $getClientes = Personas::where('perCliente', false)
      ->leftJoin('preciosTipo', 'personas.perPreciosT', '=', 'preciosTipo.pretId')
      ->where('perActivo', true)
      ->get(array(
        'perId',
        'perBaja',
        'perCliente',
        'perTipoPersona',
        'perNombre',
        'perNumeroPreregistro',

        'pretNombre'
          ))
        ->toArray();

      if ( count( $getClientes ) > 0 )
        $response = array(
          'status' => 'OK',
          'data' => $getClientes,
          'message' => 'Resultados obtenidos'
        );
      else
        $response = array(
          'status' => 'ERROR',
          'message' => 'No existen personas pre-registradas.'
        );

      return Response::json( $response );
    }

  public function getPersona(){   /***************/
    if( !Sesion::isUser() ){
      if( !Sesion::isAdmin() )
      return Redirect::to('admin/logout');
    }

    $regU = Input::get('regU');
    $getClientes = PersonasController::getClienteR($regU);

    if ( count( $getClientes ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getClientes,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se encontraron resultados'
      );

    return Response::json( $response );
  }

  public static function getClienteR($regU){
    $getCliente = Personas::where('perNumeroPreregistro', $regU)
    ->where('perActivo', true)
    ->get(array(
      'perId',
      'perBaja',
      'perCliente',
      'perTipoPersona',
      'perNombre',
      'perRepresentanteLegal',
      'perNumeroEP',
      'perDiaEP',
      'perMesEP',
      'perAnioEP',
      'perNombreNP',
      'perNumeroNP',
      'perLugarEP',
      'perNacionalidad',
      'perRFC',
      'perActividad',
      'perTelefono',
      'perCorreo',
      'perNumeroPreregistro',
      'perFechaRegistro',
      'perCondiciones',
      'perCodigoP',
      'perDCalle',
      'perDNumero',
      'perDColonia',
      'perDMunicipio',
      'perDEstado',
      'perPreciosT'
        ))
      ->toArray();
      return $getCliente;
  }

  public function getPersonas(){  /******/
    if ( !Sesion::isAsesor() ) {
      if( !Sesion::isAdmin() )
        return Redirect::to('admin/logout');
    }

      $getPersonas = PersonasController::getPerActivas();

    if ( count( $getPersonas ) > 0 )
      $response = array(
        'status' => 'OK',
        'data' => $getPersonas,
        'message' => 'Resultados obtenidos'
      );
    else
      $response = array(
        'status' => 'ERROR',
        'message' => 'No se encontraron resultados'
      );

    return Response::json( $response );
  }

  public static function getPerActivas(){
    $getPersonas = Personas::orderBy('perFechaPreregistro','desc')
    ->where('perActivo', true)
    ->get(array(
      'perId',
      'perCliente',
      'perTipoPersona',
      'perNombre',
      'perNumeroPreregistro',
      'perFechaPreregistro',
      'perFechaRegistro',
        ))
      ->toArray();
      return $getPersonas;
  }


  public function ingresoPersonaFisica(){ /*INGRESO FISICA PUBLICO*/
    $contratarh = Input::get('contratarh');

    if(isset($contratarh)) {
      $format = "d-m-Y H:i:s";
      $timestamp = time();
      $fecha =  date($format, $timestamp);

      $data = array(
        'nombre'              => Input::get('nombre'),
        'códigoPostal'        => Input::get('cp'),
        'calle'               => Input::get('calle'),
        'número'              => Input::get('numero'),
        'colonia'             => Input::get('colonia'),
        'municipio'           => Input::get('municipio'),
        'entidadFederativa'   => Input::get('entidad'),
        'nacionalidad'        => Input::get('nacionalidad'),
        'rfc'                 => Input::get('rfc'),
        'actividad'           => Input::get('actividad'),
        'teléfono'            => Input::get('telefono'),
        'correo'              => Input::get('correo'),
        'fecha'               => $fecha
      );

     $validaciones = array('nombre'          => array('required', 'max:120','alpha'),
                            'códigoPostal'    => array('required', 'digits:5'),
                            'calle'           => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'número'          => array('required', 'max:15','alpha_num'),
                            'colonia'         => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'municipio'       => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'entidadFederativa'=> array('required', 'max:30','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),

                            'nacionalidad'    => array('required', 'max:20','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                          'rfc'             => array('required', 'max:16', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ_\-\s])+$/'),
                            'actividad'       => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'teléfono'        => array('required', 'max:20','alpha_num'),
                            'correo'          => array('required', 'email','max:50'),
                            'fecha'           => array('required'),
                            );

                            $response = array(
                              'status' => 'ERROR',
                              'message' => 'Vuelva a intentar en un momento');

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

        $usuarioVH = Personas::where('perCorreo', $data['correo'])
            ->where('perActivo',true)
            ->where('perBaja',true)
            ->get();
        if ( count( $usuarioVH ) > 0 ){
          $response = array(
            'status' => 'ERROR',
            'message' => 'Ya se tiene una cuenta con el correo electrónico que indico, ingrese otro correo electrónico.'
          );
        }
        else{
          $contra = PersonasController::crearContra();
          $complemento = substr($data['rfc'], 0,3);
          $clave = $complemento.$contra;

          /*fecha 'YYYY-MM-DD-HH:MM:SS'*/
          $formatoT = "d-m-Y-H:i:s-";
          $fechaT =  date($formatoT, $timestamp);
          $sufijo = "-registro";
          $aceptacion = $fechaT.$clave.$sufijo;

          $precioPredefinido = PreciosTipoController::getPrecioTActivoPred();
          $precioTipo   = $precioPredefinido[0];
          $idPrecioTipo = $precioTipo['pretId'];


          $dataCorreo = array(
           'nombreDeUsuario' => $data['nombre'],
           'correo'          => $data['correo'],
           'contraUsuario'   => $clave,
           'fechaRegistro'   => $fecha
         );
          $toEmail = trim($data['correo']);//envia al correo del cliente
          Mail::send('emails.registroMail', $dataCorreo, function($message) use($toEmail){
              $message->to($toEmail);
              $message->subject('Correo de Registro como Cliente');
            });


          $insert = Personas::insert(array(
            'perActivo'        => true,
            'perBaja'          => true, //0 dado de baja, 1 activo
            'perCliente'        => false, //aun no tiene cuenta
            'perTipoPersona'    => false, //persona fisica=0
            'perNombre'         => trim($data['nombre']),
            'perRepresentanteLegal'=> null,
            'perNumeroEP'      => null,
            'perDiaEP'         => null,
            'perMesEP'         => null,
            'perAnioEP'        => null,
            'perNombreNP'      => null,
            'perNumeroNP'      => null,
            'perLugarEP'       => null,
            'perCodigoP'       => trim($data['códigoPostal']),
            'perDCalle'        => trim($data['calle']),
            'perDNumero'       => trim($data['número']),
            'perDColonia'      => trim($data['colonia']),
            'perDMunicipio'    => trim($data['municipio']),
            'perDEstado'       => trim($data['entidadFederativa']),

            'perRFC'           => trim($data['rfc']),
            'perNacionalidad'  => trim($data['nacionalidad']),
            'perActividad'     => trim($data['actividad']),
            'perTelefono'      => trim($data['teléfono']),
            'perCorreo'        => trim($data['correo']),
            'perFechaPreregistro'=> trim($data['fecha']),
            'perNumeroPreregistro'=> $clave,
            'perFechaRegistro' => null,
            'perPass'          => Hash::make(trim($clave)),
            'perCondiciones'   => $aceptacion,
            'perGratis'        => false,
            'perPreciosT'        => $idPrecioTipo
          ));

            if ( $insert ){

              $response = array(
                'status' => 'OK',
                'message' => 'En breve recibirá por correo electrónico los detalles para poder iniciar sesión.');
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
        'message' => 'Vuelva a intentar en un momento.'
      );
    }
    return Response::json( $response );
  }


  public function ingresoPersonaMoral(){  /********/
      $contratarh = Input::get('contratarh');

      if(isset($contratarh)) {
        /*fecha 'YYYY-MM-DD HH:MM:SS'*/
        $format = "d-m-Y H:i:s";
        $timestamp = time();
        $fecha =  date($format, $timestamp);

        $data = array(
          'nombreMoral'         => Input::get('nombreMoral'),
          'nombreRepresentanteLegar'=> Input::get('nombreRepresentanteLegar'),
          'códigoPostal'        => Input::get('cp'),
          'calle'               => Input::get('calle'),
          'número'              => Input::get('numero'),
          'colonia'             => Input::get('colonia'),
          'municipio'           => Input::get('municipio'),
          'entidadFederativa'   => Input::get('entidad'),
          'nacionalidad'        => Input::get('nacionalidad'),
          'rfc'                 => Input::get('rfc'),
          'actividad'           => Input::get('actividad'),
          'numeroEP'            => Input::get('numeroEP'),
          'día'                 => Input::get('diaEP'),
          'mes'                 => Input::get('mesEP'),
          'anio'                => Input::get('anioEP'),
          'nombreNotarioPublico'=> Input::get('nombreNP'),
          'numeroNotarioPublico'=> Input::get('numeroNP'),
          'lugar'               => Input::get('lugarEP'),
          'teléfono'            => Input::get('telefono'),
          'correo'              => Input::get('correo'),
          'condicionesServicio' => Input::get('condicionesServicio'),
          'fecha'               =>$fecha
        );
        $validaciones = array('nombreMoral'     => array('required', 'max:120', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\_\-\s])+$/'),
                              'nombreRepresentanteLegar'=> array('required',   'max:50','alpha'),
                              'códigoPostal'    => array('required', 'digits:5'),
                              'calle'           => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'número'          => array('required', 'max:15','alpha_num'),
                              'colonia'         => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'municipio'       => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'entidadFederativa'=> array('required', 'max:30','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),

                              /*'nacionalidad'    => array('required', 'max:20', 'alpha'),*/
                              'rfc'             => array('required', 'max:16', 'regex:/^([0-9a-zA-Z_\-\s])+$/'),
                              'actividad'       => array('required', 'max:50', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'numeroEP'        => array('required', 'max:50', 'alpha_num'),
                              'día'             => array('required', 'numeric'),
                              'mes'             => array('required', 'alpha'),
                              'anio'            => array('required', 'min:4',  'numeric'),
                              'nombreNotarioPublico'        => array('required', 'max:50', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                              'numeroNotarioPublico'        => array('required', 'max:50', 'alpha_num'),
                              'lugar'           => array('required', 'max:100','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\_\-\s])+$/'),
                              'teléfono'        => array('required', 'max:20', 'alpha_num'),
                              'correo'          => array('required', 'email',  'max:50'),
                              'condicionesServicio' => array('accepted')
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
          $usuarioVH = Personas::where('perCorreo', $data['correo'])
              ->where('perActivo',true)
              ->where('perBaja',true)
              ->get();
          if ( count( $usuarioVH ) > 0 ){
            $response = array(
              'status' => 'ERROR',
              'message' => 'Ya se tiene una cuenta con el correo electrónico que indico, ingrese otro correo electrónico.'
            );
          }
          else{
            $contra = PersonasController::crearContra();
            $complemento = substr($data['rfc'], 0,3);
            $clave = $complemento.$contra;

            $formatoT = "d-m-Y-H:i:s-";
            $fechaT =  date($formatoT, $timestamp);
            $sufijo = "-registro";
            $aceptacion = $fechaT.$clave.$sufijo;

            $precioPredefinido = PreciosTipoController::getPrecioTActivoPred();
            $precioTipo   = $precioPredefinido[0];
            $idPrecioTipo = $precioTipo['pretId'];


            $dataCorreo = array(
             'nombreDeUsuario'  => $data['nombreMoral'],
             'correo'          => $data['correo'],
             'contraUsuario'   => $clave,
             'fechaRegistro'   => $fecha
           );
           $toEmail = trim($data['correo']);//envia al correo del cliente
           Mail::send('emails.registroMail', $dataCorreo, function($message) use($toEmail){
               $message->to($toEmail);
               $message->subject('Correo de Registro como Cliente');
             });

            $insert = Personas::insert(array(
               'perActivo'        => true,
               'perBaja'          => true, //0 dado de baja, 1 activo
               'perCliente'        => false, //aun no tiene cuenta activada
               'perTipoPersona'    => true, //persona moral=1
               'perNombre'         => trim($data['nombreMoral']),
               'perRepresentanteLegal'=> trim($data['nombreRepresentanteLegar']),
               'perNumeroEP'      => trim($data['numeroEP']),
               'perDiaEP'         => trim($data['día']),
               'perMesEP'         => trim($data['mes']),
               'perAnioEP'        => trim($data['anio']),
               'perNombreNP'      => trim($data['nombreNotarioPublico']),
               'perNumeroNP'      => trim($data['numeroNotarioPublico']),
               'perLugarEP'       => trim($data['lugar']),
               'perCodigoP'       => trim($data['códigoPostal']),
               'perDCalle'        => trim($data['calle']),
               'perDNumero'       => trim($data['número']),
               'perDColonia'      => trim($data['colonia']),
               'perDMunicipio'    => trim($data['municipio']),
               'perDEstado'       => trim($data['entidadFederativa']),

               'perNacionalidad'  => trim($data['nacionalidad']),
               'perRFC'           => trim($data['rfc']),
               'perActividad'     => trim($data['actividad']),
               'perTelefono'      => trim($data['teléfono']),
               'perCorreo'      => trim($data['correo']),
               'perFechaPreregistro'=> trim($data['fecha']),
               'perNumeroPreregistro'=> $clave,
               'perFechaRegistro' => null,
               'perCondiciones'   => $aceptacion,
               'perPass'          => Hash::make(trim($clave)),
               'perGratis'        => false,
               'perPreciosT'        => 1
             ));

              if ( $insert ){
               $response = array(
                 'status' => 'OK',
                 'message' => 'En breve recibirá al correo electrónico que proporciono los detalles para poder iniciar sesión.');
              }

              else
                $response = array(
                  'status' => 'ERROR',
                  'message' => 'No se pudo realizar el registro, intente de nuevo'
                );
              }
          }
      }
      return Response::json( $response );
    }

  private function crearContra(){
    $contra=null;
    $minuscula = array (
        1  => "A",
        2  => "B",
        3  => "C",
        4  => "D",
        5  => "E",
        6  => "F",
        7  => "G",
        8  => "H",
        9  => "I",
        10 => "J",
        11 => "K",
        12 => "L",
        13 => "M",
        14 => "N",
        15 => "O",
        16 => "P",
        17 => "Q",
        18 => "R",
        19 => "S",
        20 => "T",
        21 => "U",
        22 => "V",
        23 => "W",
        24 => "X",
        25 => "Y",
        26 => "Z"
    );

    $time = time();
    $numero = substr($time, 7,3); /*DE LA 7 A LA 10*/

    $aleaLetra = rand(1, 27);
    $minu1 = $minuscula[$aleaLetra];

    $aleaLetra2 = rand(1, 27);
    $minu2 = $minuscula[$aleaLetra2];

    $contra = $minu1.$numero.$minu2;
    return $contra;
  }

  public function ingresoPerFisicaAdm(){ /***INGRESO FISICA ADMINISTRADOR**/
    if( !Sesion::isAdmin() )
    return Redirect::to('admin/logout');

    $token = Input::get('token');

    if(isset($token)) {
      /*fecha 'YYYY-MM-DD HH:MM:SS'*/
      $format = "d-m-Y H:i:s";
      $timestamp = time();
      $fecha =  date($format, $timestamp);

      $data = array(
        'nombre'              => Input::get('nombre'),
        'códigoPostal'        => Input::get('cp'),
        'calle'               => Input::get('calle'),
        'número'              => Input::get('numero'),
        'colonia'             => Input::get('colonia'),
        'municipio'           => Input::get('municipio'),
        'entidadFederativa'   => Input::get('entidad'),
        'nacionalidad'        => Input::get('nacionalidad'),
        'rfc'                 => Input::get('rfc'),
        'actividad'           => Input::get('actividad'),
        'teléfono'            => Input::get('telefono'),
        'correo'              => Input::get('correo'),
        'condicionesServicio' => Input::get('condicionesServicio'),
        'tipoPrecio'          => Input::get('tipoPrecio'),
        'fecha'               => $fecha
      );

     $validaciones = array('nombre'          => array('required', 'max:120','alpha'),
                            'códigoPostal'    => array('required', 'digits:5'),
                            'calle'           => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'número'          => array('required', 'max:15','alpha_num'),
                            'colonia'         => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'municipio'       => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'entidadFederativa'=> array('required', 'max:30','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),

                            'nacionalidad'    => array('required', 'max:20','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'rfc'             => array('required', 'max:16', 'regex:/^([0-9a-zA-Z_\-\s])+$/'),
                            'actividad'       => array('required', 'max:50','alpha_num'),
                            'teléfono'        => array('required', 'max:20','alpha_num'),
                            'correo'          => array('required', 'email','max:50'),
                            'tipoPrecio'      => array('required', 'alpha_num'),
                            'condicionesServicio' => array('accepted')
                            );

                            $response = array(
                              'status' => 'ERROR',
                              'message' => 'Vuelva a intentar en un momento');

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
        $usuarioVH = Personas::where('perCorreo', $data['correo'])
            ->orWhere('perNombre', $data['nombre'])
            ->where('perActivo',true)
            ->where('perBaja',true)
            ->get();
        if ( count( $usuarioVH ) > 0 ){
          $response = array(
            'status' => 'ERROR',
            'message' => 'Ya se tiene registrada una cuenta con el correo electrónico o nombre de cliente que indico.'
          );
        }
        else{
          $contra = PersonasController::crearContra();
          $complemento = substr($data['rfc'], 0,3);
          $clave = $complemento.$contra;

          $formatoT = "d-m-Y-H:i:s-";
          $fechaT =  date($formatoT, $timestamp);
          $sufijo = "-registro";
          $aceptacion = $fechaT.$clave.$sufijo;

          $insert = Personas::insert(array(
            'perActivo'        => true,
            'perBaja'          => true, //0 dado de baja 1 esta activo
            'perCliente'        => true, //ya sera un cliente, lo registro administrador
            'perTipoPersona'    => false, //persona fisica=0
            'perNombre'         => trim($data['nombre']),
            'perRepresentanteLegal'=> null,
            'perNumeroEP'      => null,
            'perDiaEP'         => null,
            'perMesEP'         => null,
            'perAnioEP'        => null,
            'perNombreNP'      => null,
            'perNumeroNP'      => null,
            'perLugarEP'       => null,
            'perCodigoP'       => trim($data['códigoPostal']),
            'perDCalle'        => trim($data['calle']),
            'perDNumero'       => trim($data['número']),
            'perDColonia'      => trim($data['colonia']),
            'perDMunicipio'    => trim($data['municipio']),
            'perDEstado'       => trim($data['entidadFederativa']),

            'perRFC'           => trim($data['rfc']),
            'perNacionalidad'  => trim($data['nacionalidad']),
            'perActividad'     => trim($data['actividad']),
            'perTelefono'      => trim($data['teléfono']),
            'perCorreo'      => trim($data['correo']),
            'perFechaPreregistro'=> trim($data['fecha']),
            'perNumeroPreregistro'=> $clave,
            'perFechaRegistro' => trim($data['fecha']),
            'perPass'          => Hash::make(trim($clave)),
            'perCondiciones'   => $aceptacion,
            'perGratis'        => false,
            'perPreciosT'      => $data['tipoPrecio']
          ));

            if ( $insert ){
              $dataCorreo = array(
               'nombreDeUsuario'  => $data['nombre'],
               'contraUsuario'  => $clave,
               'fechaRegistro'   => $fecha
             );
            /* $correo=$data['correo'];
              $pdfReg = PersonaRegPDFController::pdfRegistro($data['correo']);*/
              //$toEmail = trim($data['correo']);//envia al correo del cliente
            /*  Mail::send('emails.registroMail', $dataCorreo, function($message) use($toEmail){
                  $message->to($toEmail);
                  $message->subject('Correo de Validación');
                });*/

              $response = array(
                'status' => 'OK',
                'message' => 'Cliente agregado correctamente.');
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

  public function ingresoPerMoralAdm(){  /*INGRESO Moral ADMINISTRADOR*/
    $token = Input::get('token');

    if(isset($token)){
      /*fecha 'YYYY-MM-DD HH:MM:SS'*/
      $format = "d-m-Y H:i:s";
      $timestamp = time();
      $fecha =  date($format, $timestamp);

      $data = array(
        'nombreMoral'         => Input::get('nombreMoral'),
        'nombreRepresentanteLegar'=> Input::get('nombreRepresentanteLegar'),
        'códigoPostal'        => Input::get('cp'),
        'calle'               => Input::get('calle'),
        'número'              => Input::get('numero'),
        'colonia'             => Input::get('colonia'),
        'municipio'           => Input::get('municipio'),
        'entidadFederativa'   => Input::get('entidad'),
        'nacionalidad'        => Input::get('nacionalidad'),
        'rfc'                 => Input::get('rfc'),
        'actividad'           => Input::get('actividad'),
        'numeroEP'            => Input::get('numeroEP'),
        'día'                 => Input::get('diaEP'),
        'mes'                 => Input::get('mesEP'),
        'anio'                => Input::get('anioEP'),
        'nombreNotarioPublico'=> Input::get('nombreNP'),
        'numeroNotarioPublico'=> Input::get('numeroNP'),
        'lugar'               => Input::get('lugarEP'),
        'teléfono'            => Input::get('telefono'),
        'correo'              => Input::get('correo'),
        'condicionesServicio' => Input::get('condicionesServicio'),
        'tipoPrecio'          => Input::get('tipoPrecio'),
        'fecha'               =>$fecha
      );
      $validaciones = array('nombreMoral'     => array('required', 'max:120', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'nombreRepresentanteLegar'=> array('required',   'max:50','alpha'),
                            'códigoPostal'    => array('required', 'digits:5'),
                            'calle'           => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'número'          => array('required', 'max:15','alpha_num'),
                            'colonia'         => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'municipio'       => array('required', 'max:50','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'entidadFederativa'=> array('required', 'max:30','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),

                            /*'nacionalidad'    => array('required', 'max:20', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),*/
                            'rfc'             => array('required', 'max:16', 'regex:/^([0-9a-zA-Z_\-\s])+$/'),
                            'actividad'       => array('required', 'max:50', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'numeroEP'        => array('required', 'max:50', 'alpha_num'),
                            'día'             => array('required', 'numeric'),
                            'mes'             => array('required', 'alpha'),
                            'anio'            => array('required', 'min:4',  'numeric'),
                            'nombreNotarioPublico'        => array('required', 'max:50', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'numeroNotarioPublico'        => array('required', 'max:50', 'regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'lugar'           => array('required', 'max:100','regex:/^([0-9a-zA-ZáéíóúÁÉÍÓÚ\.\,\-\s])+$/'),
                            'teléfono'        => array('required', 'max:20', 'alpha_num'),
                            'correo'          => array('required', 'email',  'max:50'),
                            'tipoPrecio'      => array('required', 'alpha_num'),
                            'condicionesServicio' => array('accepted')
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
        $usuarioVH = Personas::where('perCorreo', $data['correo'])
            ->orWhere('perNombre', $data['nombreMoral'])
            ->where('perActivo',true)
            ->where('perBaja',true)
            ->get();
        if ( count( $usuarioVH ) > 0 ){
          $response = array(
            'status' => 'ERROR',
            'message' => 'Ya se tiene registrada una cuenta con el correo electrónico o nombre de cliente que indico.'
          );
        }
        else{
          $contra = PersonasController::crearContra();
          $complemento = substr($data['rfc'], 0,3);
          $clave = $complemento.$contra;

          $formatoT = "d-m-Y-H:i:s-";
          $fechaT =  date($formatoT, $timestamp);
          $sufijo = "-registro";
          $aceptacion = $fechaT.$clave.$sufijo;

          $insert = Personas::insert(array(
             'perActivo'         => true,
             'perBaja'          => true, //0 dado de baja 1 esta activo
             'perCliente'        => true, //ya que el administrador registro ya es cliente
             'perTipoPersona'    => true, //persona moral=1
             'perNombre'         => trim($data['nombreMoral']),
             'perRepresentanteLegal'=> trim($data['nombreRepresentanteLegar']),
             'perNumeroEP'      => trim($data['numeroEP']),
             'perDiaEP'         => trim($data['día']),
             'perMesEP'         => trim($data['mes']),
             'perAnioEP'        => trim($data['anio']),
             'perNombreNP'      => trim($data['nombreNotarioPublico']),
             'perNumeroNP'      => trim($data['numeroNotarioPublico']),
             'perLugarEP'       => trim($data['lugar']),
             'perCodigoP'       => trim($data['códigoPostal']),
             'perDCalle'        => trim($data['calle']),
             'perDNumero'       => trim($data['número']),
             'perDColonia'      => trim($data['colonia']),
             'perDMunicipio'    => trim($data['municipio']),
             'perDEstado'       => trim($data['entidadFederativa']),

             'perNacionalidad'  => trim($data['nacionalidad']),
             'perRFC'           => trim($data['rfc']),
             'perActividad'     => trim($data['actividad']),
             'perTelefono'      => trim($data['teléfono']),
             'perCorreo'      => trim($data['correo']),
             'perFechaPreregistro'=> trim($data['fecha']),
             'perNumeroPreregistro'=> $clave,
             'perFechaRegistro' => trim($data['fecha']),
             'perCondiciones'   => $aceptacion,
             'perPass'          => Hash::make(trim($clave)),
             'perGratis'        => false,
             'perPreciosT'      => $data['tipoPrecio']
           ));

            if ( $insert ){
            /*  $dataCorreo = array(
               'nombreDeUsuario'  => $data['nombreMoral'],
               'contraUsuario'  => $clave,
               'fechaRegistro'   => $fecha
             );
             $toEmail = trim($data['correo']);//envia al correo del cliente
             Mail::send('emails.registroMail', $dataCorreo, function($message) use($toEmail){
                 $message->to($toEmail);
                 $message->subject('Correo de Validación');
               });*/

             $response = array(
               'status' => 'OK',
               'message' => 'Cliente registrado correctamente');
            }

            else
              $response = array(
                'status' => 'ERROR',
                'message' => 'No se pudo realizar el registro, intente de nuevo'
              );
            }
        }
    }
    return Response::json( $response );
  }
}
