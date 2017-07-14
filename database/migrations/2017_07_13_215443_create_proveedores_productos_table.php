<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores_productos', function (Blueprint $table) {
            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('Cascade');
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores_productos');
    }
}
