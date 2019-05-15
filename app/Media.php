<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function playlist(){
		return $this->belongsToMany('App\Playist')->withTimestamps();
	}

	public function author(){
    	return $this->belongsTo('App\Author');
	}

	public function mood(){
		return $this->belongsTo('App\Mood');
	}

	public function type(){
		return $this->belongsTo('App\Type');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}

	public static function getForDropDown(){
		return self::orderBy('title')->select(['title', 'id'])->get();
	}
}
