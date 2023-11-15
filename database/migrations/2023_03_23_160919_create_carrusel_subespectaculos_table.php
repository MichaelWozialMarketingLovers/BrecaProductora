<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarruselSubespectaculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrusel_subespectaculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subespectaculo');
            $table->string('foto')->nullable();
            $table->foreign('subespectaculo')->references('id')->on('subespectaculos')->onDelete('cascade');
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
        Schema::dropIfExists('carrusel_subespectaculos');
    }
}
