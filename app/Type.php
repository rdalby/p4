<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	public function media()
	{
		return $this->hasMany('App\Media');
	}

	public static function getForCheckboxes()
	{
		return self::orderBy('name')->select(['name', 'id'])->get();
	}

	public function getType() {
		return $this->type;
	}
}
