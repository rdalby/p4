<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	public function media()
	{
		return $this->hasMany('App\Media');
	}

	/**
	 * Helper method to get all the authors for displaying in a dropdown
	 * @return mixed
	 */
	public static function getForDropdown()
	{
		return self::orderBy('last_name')->select(['first_name', 'last_name', 'id'])->get();
	}

	public function getFullName() {
		return $this->first_name.' '.$this->last_name;
	}
}