<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeticionesEstudiantes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'peticiones_estudiantes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['status', 'observaciones', 'estudiante', 'peticion'];

    public function nombreEstudiante()
    {
        return $this->hasOne('App\DatosPersonales', 'id', 'estudiante');
    }

    public function nombrePeticion()
    {
        return $this->hasOne('App\Peticiones', 'id', 'peticion');
    }
}
