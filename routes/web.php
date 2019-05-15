<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//This actually calls the method to process the form
Route::post('/media/search/media-process', 'MediaController@mediaProcess');

//This calls the media controller and displays the results page
Route::view('/media', 'media');
Route::view('/media/create/playlist', 'media');

Route::view('/account', 'media.account');

Route::get('/media/search', 'MediaController@search');


Route::get('/media/create', 'MediaController@create');
Route::post('/media/create', 'MediaController@createMedia');





//This view route will return the welcome view
Route::view('/', 'welcome');

//Route::get('/', function () {
//	return view('welcome');
//});

Route::get('/show-login-status', function () {
	$user = Auth::user();

	if ($user) {
		dump('You are logged in.', $user->toArray());
	} else {
		dump('You are not logged in.');
	}

	return;
});



Route::get('/debug', function () {

	$debug = [
		'Environment' => App::environment(),
	];

	/*
	The following commented out line will print your MySQL credentials.
	Uncomment this line only if you're facing difficulties connecting to the
	database and you need to confirm your credentials. When you're done
	debugging, comment it back out so you don't accidentally leave it
	running on your production server, making your credentials public.
	*/
	#$debug['MySQL connection config'] = config('database.connections.mysql');

	try {
		$databases = DB::select('SHOW DATABASES;');
		$debug['Database connection test'] = 'PASSED';
		$debug['Databases'] = array_column($databases, 'Database');
	} catch (Exception $e) {
		$debug['Database connection test'] = 'FAILED: '.$e->getMessage();
	}

	dump($debug);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
