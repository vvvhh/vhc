<?php

class Solicitudes extends Eloquent
{
  protected $table = 'solicitudes';
  protected $primaryKey = 'solId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'solId',
    'solNConsultas',
    'solPagado',
    'solFecha',
    'solTipoConsulta',
    'solPersona',
    'solServicio',
    'solPreciosT',
  );
}
