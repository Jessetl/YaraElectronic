<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosFacturacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_facturaciones', function (Blueprint $table) {
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('Cascade');
            $table->integer('facturacion_id')->unsigned();
            $table->foreign('facturacion_id')->references('id')->on('facturaciones')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_facturaciones');
    }
}
