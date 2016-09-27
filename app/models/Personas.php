<?php

class Personas extends Eloquent
{
  protected $table = 'personas';
  protected $primaryKey = 'perId';
  public $timestamps = false;
  public $incrementing = true;
  protected $fillable = array(
    'perId',
    'perActivo',
    'perBaja',
    'perCliente',
    'perTipoPersona',
    'perNombre',
    'perRepresentanteLegal',
    'perNumeroEP',
    'perDiaEP',
    'perMesEP',
    'perAnioEP',
    'perNombreNP',
    'perNumeroNP',
    'perLugarEP',
    'perNacionalidad',
    'perRFC',
    'perActividad',
    'perTelefono',
    'perCorreo',
    'perFechaPreregistro',
    'perNumeroPreregistro',
    'perFechaRegistro',
    'perCondiciones',
    'perCodigoP',
    'perDCalle',
    'perDNumero',
    'perDColonia',
    'perDMunicipio',
    'perDEstado',
    'perPass',
    'perGratis',    
    'perPrecioT'
  );
}
