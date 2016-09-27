<?php

class LegislacionLink extends Eloquent
{
  protected $table = 'legislacionLink';
  protected $primaryKey = 'legId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'legId',
    'legNombre',
    'legLink'
  );
}
