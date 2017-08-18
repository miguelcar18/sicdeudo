<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicodinamica extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'psicodinamica';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['problemasFamiliares', 'problemasProfesores', 'problemasEstudiantes', 'problemasDuenoResidencia', 'desintegracionFamiliar', 'desorganizacionFamiliar', 'madreSoltera', 'cuidadoHijos', 'obsproblemasFamiliares', 'obsproblemasProfesores', 'obsproblemasEstudiantes', 'obsproblemasDuenoResidencia', 'obsdesintegracionFamiliar', 'obsdesorganizacionFamiliar', 'obsmadreSoltera', 'obscuidadoHijos', 'comportamiento', 'observacionesGenerales', 'estudiante', 'peticion'];

    public function nombreEstudiante()
    {
        return $this->hasOne('App\DatosPersonales', 'estudiante', 'id');
    }

    public function nombrePeticion()
    {
        return $this->hasOne('App\Peticiones', 'id', 'peticion');
    }
}
