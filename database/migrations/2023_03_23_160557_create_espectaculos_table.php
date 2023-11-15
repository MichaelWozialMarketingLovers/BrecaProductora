<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspectaculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espectaculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categoria');
            $table->string('fotoshow')->nullable();
            $table->string('tituloshow')->nulleble();
            $table->string('subtituloshow')->nulleble();
            $table->string('fotocentro')->nulleble();
            $table->string('titulocentro')->nulleble();
            $table->string('subtitulocentro')->nulleble();
            $table->string('fotolateral')->nulleble();
            $table->string('titulolateral')->nulleble();
            $table->string('subtitulolateral')->nulleble();
            $table->string('descripcionlateral')->nulleble();
            $table->string('fotoizq')->nulleble();           
            $table->string('fotoder')->nulleble();
            $table->foreign('categoria')->references('id')->on('espectaculos_categorias')->onDelete('cascade');
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
        Schema::dropIfExists('espectaculos');
    }
}
