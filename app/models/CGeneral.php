<?php

class CGeneral extends Eloquent
{
  protected $table = 'cGeneral';
  protected $primaryKey = 'cgeId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'cgeId',
    'cgeRespuesta',
    'cgePregunta',
    'cgePersonaLaboral'
  );
}
