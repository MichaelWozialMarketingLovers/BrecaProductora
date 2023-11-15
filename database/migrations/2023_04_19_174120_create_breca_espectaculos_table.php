<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrecaEspectaculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breca_espectaculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categoria');
            $table->text('imagen')->nullable();
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('contacto')->nullable();
            $table->boolean('activo')->default(0);
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
        Schema::dropIfExists('breca_espectaculos');
    }
}
