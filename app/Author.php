<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	public function media()
	{
		return $this->hasMany('App\Media');
	}
}