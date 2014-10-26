@extends('layouts.msgbox1')

@section('title')
Login
@stop

@section('message')
	{{ Form::open() }}
		<p>Use your username and password to log in!</p>
		{{ Form::hidden('cb', Input::get('cb')) }}
		<p>
			{{ $errors->first('username') }}
			{{ $errors->first('password') }}
		</p>
		<p>
			{{ Form::label('username', 'Username: ') }}
			{{ Form::text('username', Input::old('username'), array('placeholder' => "Username")) }}
		</p>
		<p>
			{{ Form::label('password', 'Password: ') }}
			{{ Form::password('password') }}
		</p>
		<p>{{ Form::submit('Log in') }} | {{ Form::button('Forgot password') }}</p>
	{{ Form::close() }}
@stop
