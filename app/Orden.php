<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'proveedor_id', 'cod_or', 'fecha_sol', 'fecha_en', 'monto_or', 'estatus', 'descripcion',
    ];
}
