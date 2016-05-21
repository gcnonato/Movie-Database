<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class EditDatabaseController extends Controller
{
    public function getChoicePage()
    {
    	return view('editchoicepage');
    }

    public function getInsertMoviePage()
    {
    	$data = array();

    	$language_ara = DB::table('language');
    	$data['language_id_ara'] = $language_ara->pluck('LANGUAGE_ID');
    	$data['language_name_ara'] = $language_ara->pluck('LANGUAGE_NAME');

    	$country_ara = DB::table('country');
    	$data['country_id_ara'] = $country_ara->pluck('COUNTRY_ID');
    	$data['country_name_ara'] = $country_ara->pluck('COUNTRY_NAME');

    	$production_house_ara = DB::table('production_house');
    	$data['production_house_id_ara'] = $production_house_ara->pluck('PROD_HOUSE_ID');
    	$data['production_house_name_ara'] = $production_house_ara->pluck('PROD_HOUSE_NAME');

    	$director_ara = DB::table('director');
    	$data['director_id_ara'] = $director_ara->pluck('DIRECTOR_ID');
    	$data['director_name_ara'] = $director_ara->pluck('DIRECTOR_NAME');

    	$genre_ara = DB::table('genre')->orderBy('GENRE_NAME');
    	$data['genre_id_ara'] = $genre_ara->pluck('GENRE_ID');
    	$data['genre_name_ara'] =  $genre_ara->pluck('GENRE_NAME');

    	return view('insertmovieform')->with('data', $data);
    }

    public function insertMovie(Request $request)
    {
		//check for auth
		$movie_name  = NULL;
		$run_time = NULL;
		$language_id = NULL;
		$relDate = NULL;
		$relMonth = NULL;
		$relYear = NULL;
		$budget = NULL;
		$country_id = NULL;
		$rating = NULL;
		$production_house_id = NULL;
		$director_id = NULL;
		$plot = NULL;

		$genre_ara = NULL;

		if($request->has('movieNameTextField'))
			$movie_name = $request->movieNameTextField;
		if($request->has(''))
			$run_time = $request->
		if($request->has(''))
			$language_id = $request->
		if($request->has(''))
			$relDate = $request->
		if($request->has(''))
			$relMonth = $request->
		if($request->has(''))
			$relYear = $request->
		if($request->has(''))
			$ = $request->
		if($request->has(''))
			$ = $request->
		if($request->has(''))
			$ = $request->
		if($request->has(''))
			$ = $request->


    }
}
