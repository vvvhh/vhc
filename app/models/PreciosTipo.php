<?php

class PreciosTipo extends Eloquent
{
  protected $table = 'preciosTipo';
  protected $primaryKey = 'pretId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'pretId',
    'pretNombre',
    'pretActivo',
    'pretPredefinido'
  );
}
