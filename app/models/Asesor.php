<?php

class Asesor extends Eloquent
{
  protected $table = 'asesor';
  protected $primaryKey = 'aseId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'aseId',
    'aseNombre',
    'asePass',
    'aseCorreo'
  );
}
