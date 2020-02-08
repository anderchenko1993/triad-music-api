<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistaAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artista_album', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_artista');
            $table->integer('id_album');
            $table->foreign('id_artista')->references('id')->on('artista');
            $table->foreign('id_album')->references('id')->on('album');
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
        Schema::dropIfExists('artista_album');
    }
}
