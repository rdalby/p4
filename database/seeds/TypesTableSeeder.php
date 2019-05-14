<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		# Array of author data to add
		$types = [
			['Comic'],
			['Book' ],
			['Music'],
			['Video']
		];
		$count = count($types);

		# Loop through each author, adding them to the database
		foreach ($types as $typeData) {
			$type = new Type();

			$type->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$type->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$type->name = $typeData[0];


			$type->save();

			$count--;
		}
    }
}
