<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('Cascade');
            $table->integer('modalidad_id')->unsigned();
            $table->foreign('modalidad_id')->references('id')->on('modalidades')->onDelete('Cascade');
            $table->string('cod_fac', 55)->unique();
            $table->date('fecha');
            $table->integer('iva');
            $table->float('monto_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturaciones');
    }
}
