<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosAcademicos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'datos_academicos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['estudiante', 'especialidad', 'escuela', 'anioIngresoUdo', 'anioIngresoPrograma', 'semestreActual', 'creditosSemestreAnterior', 'creditosAprobadosCarrera', 'promedioSemestreAnterior', 'numeroMateriasInscritas', 'numeroCreditosInscritos', 'materiasInscritasSemestreAnterior', 'materiasCursadasSemestreAnterior', 'materiasAprobadasSemestreAnterior', 'materiasRetiradasSemestreAnterior'];

    public function nombreEstudiante()
    {
        return $this->hasOne('App\DatosPersonales', 'estudiante', 'id');
    }
}
