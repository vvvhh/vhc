<?php

class Contactos extends Eloquent
{
  protected $table = 'contactos';
  protected $primaryKey = 'ctomId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'ctomId',
    'ctomNombre',
    'ctomTelefono',
    'ctomCorreo',
    'ctomMensaje',
    'ctomFecha',
    'ctomCondicionServicio'
  );
}
