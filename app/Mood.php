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
<<<<<<< HEAD

	public static function getForCheckboxes()
	{
		return self::orderBy('name')->select(['name', 'id'])->get();
	}

=======
>>>>>>> 2c0946d6ea953d134db9cea5b060b939c4ff9b68
}
