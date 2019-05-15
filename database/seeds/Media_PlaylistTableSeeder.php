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
		/*# Array of author data to add
		$media_playlists = [
			['1', '1'],
			['1', '2' ],
			['1', '3'],
			['1', '4'],
			['2', '3']
		];
		$count = count($media_playlists);

		# Loop through each author, adding them to the database
		foreach ($media_playlists as $media_playlistData) {
			$media_playlist = new Media_Playlist();

			$media_playlist->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$media_playlist->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$media_playlist->playlist_id = $media_playlistData[0];
			$media_playlist->media_id = $media_playlistData[1];


			$media_playlist->save();

			$count--;
		} */

		$faker = Faker::create();

		$playlist_ids = Playlist::pluck('id')->all();
		$media_ids = Media::pluck('id')->all();

		for($i=1; $i <= 30; $i++) {

			DB::table('media_playlist')->insert([
				'playlist_id' => $faker->randomElement($playlist_ids),
				'media_id' => $faker->randomElement($media_ids)
			]);


		}
    }
}
