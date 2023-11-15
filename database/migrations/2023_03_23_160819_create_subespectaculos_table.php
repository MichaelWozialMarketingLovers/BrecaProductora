<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubespectaculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subespectaculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('espectaculo');
            $table->string('titulo')->nulleble();
            $table->string('categoriapadre')->nulleble();
            $table->string('descripcion')->nulleble();
            $table->string('foto')->nulleble();
            $table->string('contactodetalle')->nulleble();
            $table->foreign('espectaculo')->references('id')->on('espectaculos')->onDelete('cascade');
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
        Schema::dropIfExists('subespectaculos');
    }
}
