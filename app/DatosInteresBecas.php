<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosInteresBecas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'datos_interes_becas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['estudiante', 'alquilaSolo', 'observacionesResidencia', 'observaciones', 'mismaResidencia', 'detallesMismaResidencia', 'direccionNuevaResidencia'];

    public function nombreEstudiante()
    {
        return $this->hasOne('App\DatosPersonales', 'id', 'estudiante');
    }
}
