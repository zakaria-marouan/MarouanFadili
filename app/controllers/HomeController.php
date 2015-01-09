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

	
	public function showWelcome1()
	{
		return View::make('home');
	}
	public function showWelcome2()
	{
		return View::make('inscription');
	}
	public function showWelcome3()
	{
		return View::make('NouveauteCinema');
	}
	public function showWelcome4()
	{
		return View::make('ClassiqueCinema');
	}

	}
