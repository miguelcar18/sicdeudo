<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EconomiaFamiliar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'economia_familiar';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['sueldo', 'ayudaFamiliar', 'negocio', 'rentas', 'becasCreditos', 'pensionJubilacion', 'alimentacion', 'vivienda', 'serviciosPublicos', 'transporte', 'salud', 'hijos', 'utiles', 'capitalMensual', 'observaciones', 'estudiante', 'peticion'];

    public function nombreEstudiante()
    {
        return $this->hasOne('App\DatosPersonales', 'estudiante', 'id');
    }

    public function nombrePeticion()
    {
        return $this->hasOne('App\Peticiones', 'id', 'peticion');
    }
}
