<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // protected $table = 'proveedores'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unidad_id', 'nom_cat', 'create_at', 'updated_at',
    ];
}
