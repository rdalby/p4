<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist__media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

			$table->bigInteger('playlist_id')->unsigned();
			$table->foreign('playlist_id')->references('id')->on('playlists');

			$table->bigInteger('media_id')->unsigned();
			$table->foreign('media_id')->references('id')->on('media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist_media');
    }
}
