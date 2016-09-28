@extends('template')
@section('page-container')
@if(Session::has('success-msg'))
<p class="alert alert-info">{{ Session::get('success-msg') }}</p>
@elseif(Session::has('error-msg'))
<p class="alert alert-danger">{{ Session::get('error-msg') }}</p>
@endif
<table width="100%">
<thead>
	<th>Name</th>
	<th>Lastname</th>
	<th>Username</th>
	<th>Email</th>
	<th>Created At</th>
	<th>Updated At</th>
</thead>
<tbody>

<?php
foreach ($users as $user) { 


//$validation = DB::table('users')->whereNull('updated_at')->get();		
?>


<tr>
<td><a href="users/{{$user->id}}/edit">{{{$user->name}}}</a></td>
<td><a href="users/{{$user->id}}/edit">{{{$user->lastname}}}</a></td>
<td><a href="users/{{$user->id}}/edit">{{{$user->username}}}</a></td>
<td><a href="users/{{$user->id}}/edit">{{{$user->email}}}</a></td>
<td><a href="users/{{$user->id}}/edit">{{{$user->created_at}}}</a></td>
<td><a href="users/{{$user->id}}/edit">{{{$user->updated_at}}}</a></td>
{{ Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete')) }}
	<td><button type="submit" onclick="onDelete()" href="{{ URL::route('users.destroy', $user->id) }}">delete</button></td>
{{ Form::close() }}

</tr>

<?php } ?>
</tbody>
</table>
<a class="btn" href="users/create">Create User</a>
<script type="text/javascript">
	function onDelete(){
		alert('Are you sure you want to delete that user?');
	}
</script>
@stop

