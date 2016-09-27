<?php

class CSeguridad extends Eloquent
{
  protected $table = 'cSeguridad';
  protected $primaryKey = 'cseId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'cseId',
    'cseRespuesta',
    'csePregunta',
    'csePersonaLaboral'
  );
}
