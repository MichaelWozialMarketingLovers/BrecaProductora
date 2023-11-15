<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterclass', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('imagen1')->nullable();
            $table->string('titulo1')->nullable();
            $table->text('descripcion1')->nullable();
            $table->text('contacto')->nullable();
            $table->text('imagen2')->nullable();
            $table->string('titulo2')->nullable();
            $table->text('descripcion2')->nullable();
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
        Schema::dropIfExists('masterclass');
    }
}
