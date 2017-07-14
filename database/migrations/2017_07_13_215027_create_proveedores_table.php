<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('nac_prov', array('V', 'E', 'G', 'J', 'C'));
            $table->integer('rif')->unique();
            $table->integer('rif_ult');
            $table->string('cod_prov', 5);
            $table->string('nom_prov', 155);
            $table->string('telefono', 30);
            $table->string('email', 25);
            $table->longText('dir_prov');
            $table->longText('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
