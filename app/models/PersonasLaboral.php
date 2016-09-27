<?php

class PersonasLaboral extends Eloquent
{
  protected $table = 'personasLaboral';
  protected $primaryKey = 'clabId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'clabId',
    'clabNombre',
    'clabRFC',
    'clabTelefono',
    'clabCorreo',
    'clabFecha',
    'clabCondicion',
    'cLabTipoPersona',
    'clabCompleto'
  );
}
