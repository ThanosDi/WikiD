@extends('template')
@section('page-container')
@if(isset($user))
    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'patch','role' => 'form')) }}

@else
    {{ Form::open(['route' => 'users.index']) }}
@endif

    {{ Form::text('name', Input::old('name')) }}
    {{ Form::text('lastname', Input::old('lastname')) }}
	{{ Form::text('username', Input::old('username')) }}
	{{ Form::text('old-pass') }}
	{{ Form::text('new-pass' )}}
	{{ Form::text('email', Input::old('email')) }}


    {{ Form::submit('Save', ['name' => 'submit']) }}
{{ Form::close() }}

<!-- <table width="100%">
<thead>
	<th>Name</th>
	<th>Lastname</th>
	<th>Username</th>
	<th>Old Password</th>
	<th>New Password</th>
	<th>Email</th>
</thead>
<tbody>

<tr>
<td><input type="text" name="name" value="{{{$user->name}}}"></td>
<td><input type="text" name="lastname" value="{{{$user->lastname}}}"></td>
<td><input type="text" name="username" value="{{{$user->username}}}"></td>
<td><input type="password" name="old-pass" value=""></td>
<td><input type="password" name="new-pass" value=""></td>
<td><input type="email" name="email" value="{{{$user->email}}}"></td> 

</tr>
<tr>
<td>
<input type="submit" value="Update">
</td>
</tr>


</tbody>

</table> -->

@stop

