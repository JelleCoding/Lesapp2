<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		/*
		  Schema::create('art', function($newtable){
			$newtable -> increments('id');
			$newtable -> string('artist');
			$newtable -> string('title',500);
			$newtable -> text('description');
			$newtable -> date('create');
			$newtable -> date('exhibition_date');
			$newtable -> timestamps();
		});


		Schema::table('art', function($newcolumn){
			$newcolumn->boolean('alumni');
			$newcolumn->dropColumn('exhibition_date');
		});

		Schema::dropIfExists('art');


		Schema::create('sculpture', function($newtable2){
			$newtable2 -> increments('id');
			$newtable2 -> string('name');
			$newtable2 -> string('artist',500);
			$newtable2 -> date('year');
		});

		Schema::table('sculpture', function($newcolumn2){
			$newcolumn2 -> timestamps();
		});

		Schema::dropIfExists('sculpture');
		*/

		$painting = new Paintings;
		$painting->title = 'Do no wrong';
		$painting->artist = 'D. DoRight';
		$painting->year = 2014;
		$painting->save();

		$theLandmarks = array("St. Marks", "Brooklyn Heights", "Central Parks");
		return View::make('hello', array('theLocation' => 'Alphen aan den Rijn', 'theWeather' => 'stormy', 'theLandmarks' => $theLandmarks));
	}

}
