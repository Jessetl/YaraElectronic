<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
     protected $table = 'proveedores'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_user', 'operacion', 'fecha', 'hora', 
    ];
}
