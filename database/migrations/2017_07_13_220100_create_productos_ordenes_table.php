<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_ordenes', function (Blueprint $table) {
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('Cascade');
            $table->integer('orden_id')->unsigned();
            $table->foreign('orden_id')->references('id')->on('ordenes')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_ordenes');
    }
}
