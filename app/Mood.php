<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
	public function media()
	{
		return $this->hasMany('App\Media');
	}

	public function playlist()
	{
		return $this->hasMany('App\Playlist');
	}

	public static function getForCheckboxes()
	{
		return self::orderBy('name')->select(['name', 'id'])->get();
	}

	public function getMood() {
		return $this->mood;
	}

}
