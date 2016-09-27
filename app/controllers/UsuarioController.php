<?php

class UsuarioController extends BaseController
{

  public function login(){
    $datos = Input::all();

    if ( !array_key_exists('usuario', $datos) || $datos['usuario'] === "" ){
      Session::flush();
      return Redirect::to('/?e=01');
    }
    if ( !array_key_exists('pass', $datos) || $datos['pass'] === "" ){
      Session::flush();
      return Redirect::to('/?e=01');
    }

    /* Reglas de validación */
    $rules = array(
        'usuario' => array('required', 'email','max:50'),
        'pass'    => array('required', 'size:8', 'regex:/^([0-9a-zA-Z@\.\-_])+$/')
      );
    $validator = Validator::make($datos, $rules);
      if( $validator->fails() ){
        Session::flush();
        return Redirect::to('/?e=10VAlidacion');
      }


    $usuarioVH = 0;
    $usuarioVH = Personas::where('perCorreo', $datos['usuario'])
      ->where('perBaja', true)
      ->where('perActivo', true)
      ->get(array(
          'perNombre',
          'perId',
          'perNumeroPreregistro',
          'perPass'
          ))
      ->toArray();
    if (count( $usuarioVH ) > 0 ){
        $resUs = $usuarioVH[0];
        $passUs = $resUs['perPass'];
        if ( Hash::check($datos['pass'], $passUs) ){
          Session::put('tipo', '110');
          Session::put('nombre', $resUs['perNombre']);
          Session::put('id', $resUs['perId']);
          Session::put('reg', $resUs['perNumeroPreregistro']);
          return Redirect::to('/usuario/principalU');
        }
        else{
          Session::flush();
          return Redirect::to('/?e=10Usuario');
        }
    }

    $aseVH = 0;                                             //Asesor
    $aseVH = Asesor::where('aseCorreo', $datos['usuario'])
      ->get(array(
          'asePass'
          ))
      ->toArray();
    if (count( $aseVH ) > 0 ){
        $resAse = $aseVH[0];
        $passAse = $resAse['asePass'];
        if ( Hash::check($datos['pass'], $passAse) ){
          Session::put('tipo', '111');
          Session::put('nombre', 'Asesores');
          return Redirect::to('/asesor');
          }
      else{
            Session::flush();
            return Redirect::to('/?e=11Asesor');
          }
    }

    $admVH = 0;                                               //ADM
    $admVH = Adm::where('admCorreo', $datos['usuario'])
      ->get(array(
          'admPass'
          ))
      ->toArray();
    if (count( $admVH ) > 0 ){
        $resAdm = $admVH[0];
        $passAdm = $resAdm['admPass'];
        //if ( Hash::check($datos['pass'], $passAdm) ){
        if ( $datos['pass']== $passAdm ){
          Session::put('tipo', '101');
          Session::put('nombre', 'Administrador');
          return Redirect::to('/admin');
          }
      else{
            Session::flush();
            return Redirect::to('/?e=11ADM');
          }
    }

      return Redirect::to('/?e=100');
  }

  public function logout(){
    Session::flush();
    Cache::flush();
    /*Cookie::forget('sce_session');*/
    return Redirect::to('/', 302)
      ->header('cache-control', 'no-store, no-cache, must-revalidate')
      ->header('pragma', 'no-cache');
  }
}
