<?php

class PersonasPld extends Eloquent
{
  protected $table = 'personasPld';
  protected $primaryKey = 'cpldId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'cpldId',
    'cpldNombre',
    'cpldRFC',
    'cpldTelefono',
    'cpldCorreo',
    'cpldFecha',
    'cpldCondicion'
  );
}
