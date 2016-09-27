<?php

class Asesores extends Eloquent
{
  protected $table = 'asesores';
  protected $primaryKey = 'asesId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'asesId',
    'asesNombre',
    'asesPrimerApe',
    'asesSegundoApe',
    'asesActivo'
  );
}
