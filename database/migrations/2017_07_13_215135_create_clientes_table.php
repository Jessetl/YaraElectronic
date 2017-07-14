<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nac_cli');
            $table->integer('ced_cli')->unique();
            $table->string('nom_cli', 55);
            $table->string('ape_cli', 55);
            $table->enum('genero', array('M', 'F'));
            $table->string('telf_cli', 30);
            $table->longText('dir_cli');
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
        Schema::dropIfExists('clientes');
    }
}
