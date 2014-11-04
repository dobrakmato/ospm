@extends('layouts.msgbox1')

@section('message')
	{{ Form::open(array('class' => 'form-horizontal')) }}
		<fieldset>
			<legend>Log in</legend>
			<p>Use your username and password to log in!</p>
			{{ Form::hidden('cb', Input::get('cb')) }}

			<div class="form-group">
				{{ $errors->first('username') }}
				{{ $errors->first('password') }}
			</div>
			<div class="form-group">
				{{ Form::label('username', 'Username: ', array('class' => 'col-lg-3 control-label')) }}
				<div class="col-lg-9">
					{{ Form::text('username', Input::old('username'), array('placeholder' => "Username", 'class' => 'form-control')) }}
				</div>
			</div>
			<div class="form-group">
				{{ Form::label('password', 'Password: ', array('class' => 'col-lg-3 control-label')) }}
				<div class="col-lg-9">
					{{ Form::password('password', array('class' => 'form-control', 'placeholder' => "Password")) }}
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-9 col-lg-offset-3">
					{{ Form::button('Forgot password', array('class' => 'btn btn-default')) }}
					{{ Form::submit('Log in', array('class' => 'btn btn-primary')) }}
				</div>
			</div>
		</fieldset>
	{{ Form::close() }}
@stop
