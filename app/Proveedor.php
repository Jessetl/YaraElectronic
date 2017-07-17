<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nac_prov', 'rif', 'rif_ult', 'cod_prov', 'nom_prov', 'telefono', 'email', 'dir_prov', 'descripcion',
    ];
}
