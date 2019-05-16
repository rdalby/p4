<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		# Array of author data to add
		$authors = [
			['J.K.', 'Rowling'],
			['David', 'Sedaris'],
			['Maria', 'Semple'],
			['Stephen', 'Chbosky'],
			['Marvin', ''],
			['Jerry Scott and', 'Jim Borgman'],
			['PHD', 'Comic'],
			['Charles', 'Schulz'],
			['Imagine', 'Dragons'],
			['Marshmello ft.', 'Bastile'],
			['Bastille', ''],
			['Sony Pictures Home Entertainment', ''],
			['WarnerBrothers', ''],
			['Walt Disney Studios', ''],
			['Universal Pictures Home Entertainment', '']
		];
		$count = count($authors);

		# Loop through each author, adding them to the database
		foreach ($authors as $authorData) {
			$author = new Author();

			$author->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$author->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$author->first_name = $authorData[0];
			$author->last_name = $authorData[1];


			$author->save();

			$count--;
		}
	}
}
