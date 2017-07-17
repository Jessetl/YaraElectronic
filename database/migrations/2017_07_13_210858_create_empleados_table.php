<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url', 255);
            $table->enum('nac_em', array('V', 'E'));
            $table->integer('ced_em');
            $table->string('nom_em', 55);
            $table->string('ape_em', 55);
            $table->enum('genero', array('M', 'F'));
            $table->date('nac_fec');
            $table->enum('edo_civil', array('Soltero/a', 'Casado/a', 'Viudo/a'));
            $table->string('telf_em', 30); 
            $table->longText('dir_em');
            $table->string('email', 25)->unique();
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
        Schema::dropIfExists('empleados');
    }
}
