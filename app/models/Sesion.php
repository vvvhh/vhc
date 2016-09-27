<?php

class Sesion
{
  public static function isAdmin(){
    if ( Session::has('tipo') && Session::get('tipo') == '101' )
      return true;
    else
      return false;
  }

  public static function isUser(){
    if ( Session::has('tipo') && Session::get('tipo') == '110' )
      return true;
    else
      return false;
  }

  public static function isAsesor(){
    if ( Session::has('tipo') && Session::get('tipo') == '111' )
      return true;
    else
      return false;
  }
}
