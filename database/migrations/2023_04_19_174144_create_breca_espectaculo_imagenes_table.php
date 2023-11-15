<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrecaEspectaculoImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breca_espectaculo_imagenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('espectaculo');
            $table->string('foto')->nullable();
            $table->foreign('espectaculo')->references('id')->on('breca_espectaculos')->onDelete('cascade');
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
        Schema::dropIfExists('breca_espectaculo_imagenes');
    }
}
