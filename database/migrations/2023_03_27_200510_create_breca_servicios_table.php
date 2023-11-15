<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrecaServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breca_servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo')->nulleable();
            $table->string('descripcion')->nullable();
            $table->string('foto')->nulleable();
            $table->string('contacto')->nulleable();
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
        Schema::dropIfExists('breca_servicios');
    }
}
