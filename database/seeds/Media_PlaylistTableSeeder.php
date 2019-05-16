<?php

use Illuminate\Database\Seeder;
Use App\Playlist;
Use App\Media;
Use Faker\Factory as Faker;

class Media_PlaylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


	/*	$faker = Faker::create();

		$playlist_ids = Playlist::pluck('id')->all();
		$media_ids = Media::pluck('id')->all();

		for($i=1; $i <= 30; $i++) {

			DB::table('media_playlist')->insert([
				'playlist_id' => $faker->randomElement($playlist_ids),
				'media_id' => $faker->randomElement($media_ids)
			]);


		} */
    }
}
