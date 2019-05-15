<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
	public function media(){
		return $this->belongsToMany('App\Media')->withTimestamps();
	}

	public function mood(){
		return $this->belongsTo('App\Mood');
	}

}
