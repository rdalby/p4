<?php

use Illuminate\Database\Seeder;
Use App\Playlist_Media;

class Playlist_MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		# Array of author data to add
		$playlist_medias = [
			['1', '1'],
			['1', '2' ],
			['1', '3'],
			['1', '4'],
			['2', '3']
		];
		$count = count($playlist_medias);

		# Loop through each author, adding them to the database
		foreach ($playlist_medias as $playlist_mediaData) {
			$playlist_media = new Playlist_Media();

			$playlist_media->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$playlist_media->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$playlist_media->playlist_id = $playlist_mediaData[0];
			$playlist_media->media_id = $playlist_mediaData[1];


			$playlist_media->save();

			$count--;
		}
    }
}
