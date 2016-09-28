<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();	
		
		return View::make('users/index')->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
   		return View::make('users.edit')->withUser($user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		$user = User::find($id);
		if ( Hash::check(Input::get("old-pass"), $user->password) ) {
			$user = User::find($id); /// HERE!
		    $user->name = Input::get("name");
		    $user->lastname = Input::get("lastname");
		    $user->username = Input::get("username");
	    	$user->password = Hash::make(Input::get("new-pass"));
	    	$user->email = Input::get("email");
	    	$user->updated_at = date('Y-m-d H:i:s');
	    	$user->save();
	    	return Redirect::to('users')->with('success-msg', 'User updated successfully');
	    }else{
	    	return Redirect::to('users')->with('error-msg', 'User could not updated.Wrong password');;
	    }

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);

		$user->delete();
		return Redirect::to('users')->with('success-msg', 'User deleted successfully');
	}

	public function logout(){

	    Auth::logout();

	    return Redirect::to('/');
	}

}

