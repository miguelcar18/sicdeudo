<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoFamiliar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'grupo_familiar';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['nombreCarga', 'parentesco', 'edad', 'oficio', 'institucion', 'sueldoCarga', 'estudiante', 'peticion'];

    public function nombreEstudiante()
    {
        return $this->hasOne('App\DatosPersonales', 'estudiante', 'id');
    }

    public function nombrePeticion()
    {
        return $this->hasOne('App\Peticiones', 'id', 'peticion');
    }
}
