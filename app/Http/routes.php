<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::auth();

Route::get('searchpage', function() {
	return view('searchpage');
});

Route::get('/movies', 'MoviePageController@getAllMovies');
Route::post('/searchMovie', 'SearchMovieController@searchMovie');
Route::post('/movies/{movie_id}/add_coment', 'MoviePageController@addComment');
Route::get('/movies/{movie_id}', 'MoviePageController@getMovie');
Route::get('/home', 'HomeController@index');

Route::get('/actors/{actor_id}', 'ActorPageController@getActor');

Route::get('/edit', 'EditDatabaseController@getChoicePage');
Route::get('/edit/add/movie', 'EditDatabaseController@getInsertMoviePage');
Route::post('edit/add/movie/blah', 'EditDatabaseController@insertMovie');

Route::get('/report', 'ReportController@getReport');
