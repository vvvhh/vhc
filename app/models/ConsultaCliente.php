<?php

class ConsultaCliente extends Eloquent
{
  protected $table = 'consultaCliente';
  protected $primaryKey = 'ccId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'ccId',
    'ccAtendido',
    'cctipoConsulta',
    'ccTitulo',
    'ccContenido',
    'ccFechaEnvio',
    'ccFechaAtendido',
    'ccRespuesta',
    'ccHora',
    'ccMinuto',
    'ccContrato',
    'ccAsesor'
  );
}
