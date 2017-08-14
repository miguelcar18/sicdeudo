<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnlacesInteres extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enlaces_interes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['nombre', 'url', 'path'];
}
