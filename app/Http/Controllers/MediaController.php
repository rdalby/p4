<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App;
use App\Media;
use App\Author;
use App\Mood;

class MediaController extends Controller
{

	public function create()
	{
		$authors = Author::getForDropdown();

		$moods = Mood::getForCheckboxes();

		return view('media.create')->with([
			'authors' => $authors,
			'moods' => $moods
		]);
	}


=======

class MediaController extends Controller
{
>>>>>>> 2c0946d6ea953d134db9cea5b060b939c4ff9b68
	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function mediaRequest(Request $request)
	{

		$userName = $request->session()->get('userName', '');
		$mood = $request->session()->get('mood', '');
		$bookCheck = $request->session()->get('bookCheck', false);
		$videoCheck = $request->session()->get('videoCheck', false);
		$musicCheck = $request->session()->get('musicCheck', false);
		$comicCheck = $request->session()->get('comicCheck', false);
		$mediaResults = $request->session()->get('mediaResults', null);
		# Work that was previously happening in the routes file is now happening here
		return view('media')->with([
			'userName' => $userName,
			'mood' => $mood,
			'comicCheck' => $comicCheck,
			'bookCheck' => $bookCheck,
			'videoCheck' => $videoCheck,
			'musicCheck' => $musicCheck,
			'mediaResults' => $mediaResults,
		]);
	}


	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function mediaProcess(Request $request)
	{
		$request->validate([
			'userName' => 'required'
		]);

		//This array will be used for storing any results
		$mediaResults = [];

		//each perspective input criteria is set aside as a variable
		$userName = $request->input('userName', null);
		$mood = $request->input('mood', null);
		$bookCheck = $request->input('bookCheck', false);
		$videoCheck = $request->input('videoCheck', false);
		$musicCheck = $request->input('musicCheck', false);
		$comicCheck = $request->input('comicCheck', false);


		# must have mood selected to even try to find anything
	#	if ($mood) {
	#		if ($bookCheck) {
	#			$mediaResults = self::mediaDecode('book', $mood, $mediaResults);
	#		}
	#		if ($comicCheck) {
	#			$mediaResults = self::mediaDecode('comic', $mood, $mediaResults);
	#		}
	#		if ($videoCheck) {
	#			$mediaResults = self::mediaDecode('video', $mood, $mediaResults);
	#		}
	#		if ($musicCheck) {
	#			$mediaResults = self::mediaDecode('music', $mood, $mediaResults);
	#		}
	#	}

		$media = Media::first();
		$author = $media->author;



		# Redirect back to the media page with the results if any

		return redirect('/media')->with([
			'userName' => $userName,
			'mood' => $mood,
			'comicCheck' => $request->has('comicCheck'),
			'videoCheck' => $request->has('videoCheck'),
			'bookCheck' => $request->has('bookCheck'),
			'musicCheck' => $request->has('musicCheck'),
			'mediaResults' => $mediaResults
		]);
	}

	/**
	 * @param String $mediaType
	 * @param String $userMood
	 * @param array $mediaResults
	 * @return array
	 */
	public function mediaDecode(String $mediaType, String $userMood, Array $mediaResults)
	{

		switch ($mediaType) {
			case 'book':
				$path = '/Books.json';
				break;
			case 'video':
				$path = '/Videos.json';
				break;
			case 'comic':
				$path = '/Comics.json';
				break;
			case 'music':
				$path = '/Music.json';
				break;
			default:
				$path = '/Comics.json';
				break;
		}

		// It will open each json file per media type
		// database_path() is a Laravel helper to get the path to the database folder
		// See https://laravel.com/docs/helpers for other path related helpers
		$mediaData = file_get_contents(database_path($path));

		// Decode the book JSON data into an array
		$medias = json_decode($mediaData, true);
		// Loop through all the media data from the json files for matches
		foreach ($medias as $mood => $media) {
			$match = $mood == $userMood;


			# If it was a match, add it to our results
			if ($match) {
				$mediaResults[$mediaType] = $media;
			}
		}
		return $mediaResults;
	}
}
