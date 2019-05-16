<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Media;
use App\Author;
use App\Mood;
use App\Type;
use App\User;
use App\Playlist;
use App\Media_Playlist;

class MediaController extends Controller
{
	public function index()
	{
		# Get all the books from our library
		$media = Media::with(['author'], ['type'], ['mood'])->orderBy('title')->get();

		# Query on the existing collection to get our recently added books
		$moods = Mood::get(['name']);

		# Query on the existing collection to get our recently added books
		$happyMedias = Media::with(['author'], ['type'], ['mood'])->where('mood_id', '=', '5')->get();
		$sadMedias = Media::with(['author', 'type', 'mood'])->where('mood_id', '=', '2')->get();
		$mehMedias = Media::with(['author', 'type', 'mood'])->where('mood_id', '=', '4')->get();
		$madMedias = Media::with(['author', 'type', 'mood'])->where('mood_id', '=', '1')->get();
		$excitedMedias = Media::with(['author', 'type', 'mood'])->where('mood_id', '=', '3')->get();

		return view('media')->with([
			'medias' => $media,
			'moods' => $moods,
			'happyMedias' => $happyMedias,
			'sadMedias' => $sadMedias,
			'mehMedias' => $mehMedias,
			'madMedias' => $madMedias,
			'excitedMedias' => $excitedMedias,
		]);
	}

	public function create()
	{
		$authors = Author::getForDropdown();

		$moods = Mood::getForCheckboxes();

		$types = Type::getForCheckboxes();

		return view('media.create')->with([
			'authors' => $authors,
			'moods' => $moods,
			'types' => $types
		]);
	}

	public function createPlaylistStart()
	{
		$authors = Author::getForDropdown();
		$titles = Media::getForDropDown();
		$moods = Mood::getForCheckboxes();

		$types = Type::getForCheckboxes();

		return view('media.create_playlist')->with([
			'authors' => $authors,
			'titles' => $titles,
			'moods' => $moods,
			'types' => $types
		]);
	}

	public function show($id)
	{
		$playlist = Playlist::with('title', 'user')->get();
		$media = Media::with('author')->find($id);

		if (!$media) {
			return redirect('/media')->with(['alert' => 'Media not found']);
		}

		return view('media.show')->with([
			'media' => $media,
			'playlist' => $playlist
		]);
	}

	public function accounts(Request $request)
	{
		$user = $request->user();
		$playlists = $user->playlist()->orderBy('name')->get();
		//$name = (new \App\User)->getName();

		//$email = (new \App\User)->getEmail();

		//$password = (new \App\User)->getPassword();

		return view('media.account')->with([
			'playlist' => $playlists,
			'name' => $user['name'],
			'email' => $user['email'],
			'password' => $user['password']
		]);
	}

	public function playlistShow($id)
	{
		$playlistName = Playlist::select('name')->where('id', $id)->get();
		$medias = Media::with('playlist')->get();
		$medias1 = [];
		foreach ($medias as $media) {
			if ($media->playlist != null) {

				foreach ($media->playlist as $playlist) {
					if ($playlist->id == $id) {
						$medias1[] = $media;
					}

				}
			}
		}

		return view('media.show', ['medias' => $medias1, 'playlist' => $playlistName]);

	}


	public function playlistDelete($id)
	{
		$playlist = Playlist::find($id);

		if (!$playlist) {
			return redirect('/account')->with(['alert' => 'playlist not found']);
		}

		return view('media.delete')->with([
			'playlist' => $playlist,
		]);
	}

	public function playlistFinalDelete($id)
	{
		$playlist = Playlist::find($id);

		$playlist->media()->detach();

		$playlist->delete();

		return redirect('/account')->with([
			'alert' => '“' . $playlist->name . '” was removed.'
		]);
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function mediaRequest(Request $request)
	{

		$playlistName = $request->session()->get('playlistName', '');
		$mood = $request->session()->get('mood', '');
		$moodId = Mood::select('id')->where('name', $mood)->get();
		$playlistResults = [];//$request->session()->get('playlistResults', null);
		$data = [];
		# Work that was previously happening in the routes file is now happening here
		return view('media.search')->with([
			'playlist' => $playlistName,
			'moodId' => $moodId,
			'data' => $data,
			'mood' => $mood,
			'playlistResults' => $playlistResults,
		]);
	}


	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function mediaProcess(Request $request)
	{
		$request->validate([
			//'userName' => 'required'
		]);

		//each perspective input criteria is set aside as a variable
		$mood = $request->input('mood', null);

		$moodIds = Mood::where('name', $mood)->pluck('id');
		$playlistName = $request->input('playlistName', null);

		if ($playlistName != "") {
			$playlistName = Playlist::select('name', 'id')->where('name', $playlistName)->get();

		} elseif ($mood) {
			$playlistName = Playlist::select('name', 'id')->where('mood_id', $moodIds)->get();
		}


		return view('media.search', ['playlist' => $playlistName]);
		/*

				//each perspective input criteria is set aside as a variable
				//$playlistName = $request->input('playlistName', null);
				$mood = $request->input('mood', null);
				$user = $request->user();
				$playlistName = $request->input('playlistName', null);

				$moodIds = Mood::find($mood);

				$playlist = Playlist::with('mood')->find($moodIds);
				//$data = Playlist::where('mood_id', $moodIds)->pluck('name');
				$data = $user->playlist()->orderBy('name')->get();
				//$moodId = $moodIds->id;

					$playlistResults = Playlist::where('mood_id', $moodIds)->get();



				# Redirect back to the media page with the results if any

				return view('media.search')->with([
					'playlist' => $playlistName,
					'data' => $data,
					'moodId' => $moodIds,
					'mood' => $mood,
					'playlistResults' => $playlist
				]);*/
	}


	public function createMedia(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'author_id' => 'required',
			'mood' => 'required',
			'type' => 'required'
		]);

		$author = $request->input('author_id');
		$mood = $request->input('mood');
		$type = $request->input('type');

		$media = new Media();
		$media->title = $request->input('title');
		$media->author()->associate($author);
		$media->mood()->associate($mood);
		$media->cover = $request->input('cover');
		$media->url = $request->input('url');
		$media->type()->associate($type);
		$media->save();

		return redirect('/media/create')->with([
			'alert' => 'Your media was added.'
		]);
	}

	public function createPlaylist(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'mood' => 'required'
		]);
		//$user =Auth::user();
		$mood = $request->input('mood');
		$title = $request->input('title');
		$title['title'] = $title;

		$playlist = new Playlist();
		$playlist->name = $request->input('name');
		$playlist->mood()->associate($mood);
		$playlist->user_id = $request->user()->id;
		$playlist->save();

		$playlist->media()->sync($request->input('title'));

		return redirect('/media/create/playlist')->with([
			'alert' => 'Your playlist was created'
		]);
	}
}
