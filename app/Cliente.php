<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nac_cli', 'ced_cli', 'nom_cli', 'ape_cli', 'genero', 'telf_cli', 'dir_cli',
    ];
}
