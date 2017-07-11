<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'datos_personales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['apellidosNombres', 'cedula', 'edad', 'fechaNacimiento', 'estadoCivil', 'lugarNacimiento', 'direccionPermanente', 'direccionLocal', 'telefonoCelular', 'telefonoReferencia', 'email', 'estado', 'supervisor', 'usuario'];

    public function nombreSupervisor()
    {
        return $this->hasOne('App\Supervisor', 'id', 'supervisor');
    }
    
    public function nombreUsuario()
    {
        return $this->hasOne('App\User', 'id', 'usuario');
    }
}
