<?php

use Illuminate\Database\Seeder;
use App\Mood;

class MoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		# Array of author data to add
		$moods = [
			['mad'],
			['sad' ],
			['excited'],
			['meh'],
			['happy']
		];
		$count = count($moods);

		# Loop through each author, adding them to the database
		foreach ($moods as $moodData) {
			$mood = new Mood();

			$mood->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$mood->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$mood->name = $moodData[0];


			$mood->save();

			$count--;
		}
    }
}
