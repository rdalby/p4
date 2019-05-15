<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaPlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_playlist', function (Blueprint $table) {
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
        Schema::dropIfExists('media_playlist');
    }
}
