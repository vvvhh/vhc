<?php

class ConsultasGratis extends Eloquent
{
  protected $table = 'consultasGratis';
  protected $primaryKey = 'cgrId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'cgrId',
    'cgrAtentido',
    'cgrTitulo',
    'cgrContenido',
    'cgrFechaEnvio',
    'cgrRespuesta',
    'cgrFechaRespuesta',
    'cgrPersona',
    'cgrAsesor'
  );
}
