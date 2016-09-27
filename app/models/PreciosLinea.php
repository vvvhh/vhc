<?php

class PreciosLinea extends Eloquent
{
  protected $table = 'preciosLinea';
  protected $primaryKey = 'preLId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'preLId',
    'preLPrecio',
    'preLCantidad',
    'preLActivo',
    'preLPreciosT'
  );
}
