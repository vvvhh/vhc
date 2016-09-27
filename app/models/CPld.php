<?php

class CPld extends Eloquent
{
  protected $table = 'cPld';
  protected $primaryKey = 'cpldId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'cpldId',
    'cpldRespuestas',
    'cpldPregunta',
    'cpldPersonapld'
  );
}
