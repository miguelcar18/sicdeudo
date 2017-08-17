<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'citas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['fechaCita', 'usuario', 'status'];

    public function nombreUsuario()
    {
        return $this->hasOne('App\User', 'id', 'usuario');
    }
}
