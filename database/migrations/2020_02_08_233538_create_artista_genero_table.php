<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistaGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artista_genero', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_artista');
            $table->integer('id_genero');
            $table->foreign('id_artista')->references('id')->on('artista');
            $table->foreign('id_genero')->references('id')->on('genero');
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
        Schema::dropIfExists('artista_genero');
    }
}
