<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('servicio');
            $table->string('titulo')->nulleable();
            $table->string('descripcion')->nulleable();
            $table->string('foto')->nulleable();
            $table->string('titulo_tarjeta')->nulleable();
            $table->string('descripcion_tarjeta')->nullable();
            $table->string('foto_tarjeta')->nullable();
            $table->foreign('servicio')->references('id')->on('servicios')->onDelete('cascade');
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
        Schema::dropIfExists('servicio_detalles');
    }
}
