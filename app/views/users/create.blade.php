@extends('template')
@section('page-container')
hello
	{{ Form::open(array('url' => 'insert')) }}

				<label>Name</label>
		 	{{ Form::text('name', Input::old('name'), ['required']) }}
		 		<label>Lastname</label>
		    {{ Form::text('lastname', Input::old('lastname') , ['required']) }}
		    	<label>Username</label>
			{{ Form::text('username', Input::old('username') , ['required']) }}
				<label>Password</label>
			{{ Form::password('password' , ['required'])}}
				<label>Email</label>
			{{ Form::text('email', Input::old('email') , ['required']) }}
			{{ Form::hidden('created_at', date('Y-m-d H:i:s'))}}
			<label>Privileges</label>
			{{ Form::radio('privileges', '1')}} Administrator
			{{ Form::radio('privileges', '2')}} Moderator
			{{ Form::radio('privileges', '3')}} User
			<br>
			{{ Form::submit('Insert User', ['name' => 'submit']) }}
{{ Form::close() }}
@stop