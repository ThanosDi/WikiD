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
		return View::make('hello');
	}

	public function doLogin()
	{
			// create our user data for the authentication
			$userdata = array(
				'username' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::to('/admin');
				

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('/');

			}
	}

	public function insert(){
		DB::table('users')->insert(array(
    			'name' 	=> Input::get('name'),
				'lastname' 	=> Input::get('lastname'),
				'username' 	=> Input::get('username'),
				'password' 	=> Hash::make(Input::get('password')),
				'email' 	=> Input::get('email'),
				'created_at' 	=> Input::get('created_at'),
				'privileges' 	=> Input::get('privileges')
));
	   
	    	return Redirect::to('users')->with('success-msg', 'User Added successfully');


	}
}
