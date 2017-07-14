<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('Cascade');
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('Cascade');
            $table->string('url', 255);
            $table->string('cod_pro', 15)->unique();
            $table->string('nom_pro', 155)->unique();
            $table->float('precio');
            $table->longText('descripcion');
            $table->integer('stock_minimo');
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
        Schema::dropIfExists('productos');
    }
}
