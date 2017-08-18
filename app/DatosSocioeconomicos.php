<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosSocioeconomicos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'datos_socioeconomicos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['ingresosPadres', 'ingresosFamiliares', 'ingresosBecas', 'ingresosAyudantias', 'ingresosPreparadurias', 'ingresosTrabajo', 'ingresosAhorros', 'ingresosOtros', 'alojamientoLocalidad', 'alojamientoRegiones', 'condicionesEstudio', 'camasHabitacion', 'condicionesHigienicas', 'ventilacion', 'iluminacion', 'otros', 'desayunoLugar', 'almuerzoLugar', 'cenaLugar', 'desayunoCosto', 'almuerzoCosto', 'cenaCosto', 'estudiante', 'peticion'];

    public function nombreEstudiante()
    {
        return $this->hasOne('App\DatosPersonales', 'estudiante', 'id');
    }

    public function nombrePeticion()
    {
        return $this->hasOne('App\Peticiones', 'id', 'peticion');
    }
}
