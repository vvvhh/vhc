<?php

class PreciosTelefono extends Eloquent
{
  protected $table = 'preciosTelefono';
  protected $primaryKey = 'preTId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'preTId',
    'preTPrecio',
    'preTCantidad',
    'preTActivo',
    'preTPreciosT'
  );
}
