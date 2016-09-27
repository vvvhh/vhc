<?php

class Servicios extends Eloquent
{
  protected $table = 'servicios';
  protected $primaryKey = 'serId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'serId',
    'serNombre',
    'serActivo'
  );
}
