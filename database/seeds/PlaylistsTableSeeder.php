<?php

use Illuminate\Database\Seeder;
Use App\Playlist;
class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		# Array of author data to add
		$playlists = [
			['1', '1', 'test'],
			['1', '2', 'test2' ]
		];
		$count = count($playlists);

		# Loop through each author, adding them to the database
		foreach ($playlists as $playlistData) {
			$playlist = new Playlist();

			$playlist->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$playlist->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$playlist->mood_id = $playlistData[0];
			$playlist->user_id = $playlistData[1];
			$playlist->name = $playlistData[2];


			$playlist->save();

			//$playlist->playlist()->sync($playlistData);

			$count--;
		}
    }
}
