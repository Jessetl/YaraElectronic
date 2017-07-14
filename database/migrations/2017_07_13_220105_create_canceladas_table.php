<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanceladasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canceladas', function (Blueprint $table) {
            $table->integer('orden_id')->unsigned();
            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('Cascade');
            $table->longText('razon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canceladas');
    }
}
