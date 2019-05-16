<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Media;

class CreateMediasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();

			$table->string('title');

			$table->bigInteger('author_id')->unsigned()->nullable();
			$table->foreign('author_id')->references('id')->on('authors');

			$table->bigInteger('mood_id')->unsigned();
			$table->foreign('mood_id')->references('id')->on('moods');

			$table->text('cover')->nullable();
			$table->text('url')->nullable();

			$table->bigInteger('type_id')->unsigned();
			$table->foreign('type_id')->references('id')->on('types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('medias');
	}
}
