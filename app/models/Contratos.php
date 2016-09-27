<?php

class Contratos extends Eloquent
{
  protected $table = 'contratos';
  protected $primaryKey = 'ctoId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'ctoId',
    'ctofolio',
    'ctoFecha',
    'ctoSolFactura',
    'ctoFechaFactura',
    'ctoSolicitud',
    'ctoDato'
  );
}
