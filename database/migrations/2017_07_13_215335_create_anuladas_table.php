<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnuladasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuladas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factura_id')->unsigned();
            $table->foreign('factura_id')->references('id')->on('facturaciones');
            $table->longText('razon');
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
        Schema::dropIfExists('anuladas');
    }
}
