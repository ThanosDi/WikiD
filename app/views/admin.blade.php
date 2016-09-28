@extends('template')
@section('page-container')

Hello {{{Auth::user()->username}}} with privileges {{{Auth::user()->privileges}}}
 <br>
*// 1 = Administartor <br>
*// 2 = Moderator <br>
*// 3 = User <br>
@stop

