<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{

	protected $table = 'empleados'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nac_em', 'ced_em', 'nom_em', 'ape_em', 'genero', 'nac_fe', 'edo_civil', 'telef_em', 'dir_em', 'email',
    ];
}
