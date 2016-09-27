<?php

class personasLaboral extends Eloquent
{
  protected $table = 'cCapacitacion';
  protected $primaryKey = 'ccaId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'ccaId',
    'ccaRespuesta',
    'ccaPregunta',
    'ccaPersonaLaboral'
  );
}
