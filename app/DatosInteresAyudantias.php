<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosInteresAyudantias extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'datos_interes_ayudantias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['estudiante', 'lugar', 'habilidades', 'observaciones'];

    public function nombreEstudiante()
    {
        return $this->hasOne('App\DatosPersonales', 'id', 'estudiante');
    }
}
