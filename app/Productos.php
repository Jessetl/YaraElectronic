<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categoria_id', 'marca_id', 'url', 'cod_pro', 'nom_pro', 'precio', 'descripcion', 'stock_minimo',
    ];
}
