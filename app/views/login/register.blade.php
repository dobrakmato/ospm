@extends('layouts.msgbox1')

@section('title')
Register
@stop

@section('message')
	{{ Form::open(array('action' => 'LoginController@showLogin')) }}
		<p>Sorry, registrations are disabled!</p>
		<button>I would like to log in.</button>
	{{ Form::close() }}
@stop
