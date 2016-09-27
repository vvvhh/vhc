<?php

class Datos extends Eloquent
{
  protected $table = 'datos';
  protected $primaryKey = 'datId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'datId'
  );
}
