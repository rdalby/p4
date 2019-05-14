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
}
