<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class SearchMovieController extends Controller
{
    public function searchMovie(Request $request, $movie_id)
    {
    	if($request->has('movieName'))
    	{
    		$mName = $request->movieName;

    		$movie = DB::table('movie')->where('MOVIE_NAME', $mName)->first();

            //$movie_id = $movie->MOVIE_ID;
            return redirect('/movies/'.$movie_id);

    		// $rating = $movie->RATING;

      //       $budget = $movie->BUDGET;
      //       $runtime = $movie->RUNTIME;

      //       $dir_id = $movie->DIRECTOR_ID;
      //       $director = DB::table('director')->where('DIRECTOR_ID', $dir_id)->first();
      //       $director_name = $director->DIRECTOR_NAME;

      //       $lang = DB::table('movie_language')->where('MOVIE_ID', $movie_id)->first();
      //       $language_id = $lang->LANGUAGE_ID;
      //       $language = DB::table('language')->where('LANGUAGE_ID', $language_id)->first();
      //       $language_name = $language->LANGUAGE_NAME;

      //       $country_id = $movie->COUNTRY_ID;
      //       $country = DB::table('country')->where('COUNTRY_ID', $country_id)->first();
      //       $country_name = $country->COUNTRY_NAME;

      //       $prod_house_id = $movie->PROD_HOUSE_ID;
      //       $production_house = DB::table('production_house')->where('PROD_HOUSE_ID', $prod_house_id)->first();
      //       $production_house_name = $production_house->PROD_HOUSE_NAME;


      //       $genre_id_ara = DB::table('movie_genre')->where('MOVIE_ID', $movie_id)->pluck('GENRE_ID');
      //       $genre_name_ara='';

      //       foreach ($genre_id_ara as $genre_id) {
      //           $genre_name = DB::table('genre')->where('GENRE_ID', $genre_id)->first()->GENRE_NAME;
      //           $genre_name_ara = $genre_name_ara ."/" .$genre_name;
      //       }
      //       $genre_name_ara = substr($genre_name_ara, 1);

            
      //       $actor_id_ara = DB::table('actor_list')->where('MOVIE_ID', $movie_id)->pluck('ACTOR_ID');
      //       $count = 0;
      //       $actor_name_ara = array();
      //       foreach ($actor_id_ara as $actor_id) {
      //           $actor_name_ara[$count] = DB::table('actor')->where('ACTOR_ID', $actor_id)->first()->NAME;
      //           $count++;
      //       }
      //       $character_name_ara = DB::table('actor_list')->where('MOVIE_ID', $movie_id)->pluck('CHARACTER_NAME');

    		// return view('moviepage')->with('name', $mName)->with('rating', $rating)->with('budget', $budget)->with('runtime', $runtime)->with('director_name', $director_name)->with('language_name', $language_name)->with('movie_id', $movie_id)->with('country_name', $country_name)->with('production_house_name', $production_house_name)->with('genre_name_ara', $genre_name_ara)->with('actor_name_ara', $actor_name_ara)->with('character_name_ara', $cha);
    	}
    }

}
