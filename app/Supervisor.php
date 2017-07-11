<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'supervisores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['nombre', 'dependencia', 'extensionTelefono', 'relacion', 'tareasAyudante', 'permanecerSitio', 'detallesPermanencia', 'reubicacion'];
}
