{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('username', 'Username:') }}
			{{ Form::text('username') }}
		</li>
		<li>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email') }}
		</li>
		<li>
			{{ Form::label('displayname', 'Displayname:') }}
			{{ Form::text('displayname') }}
		</li>
		<li>
			{{ Form::label('role_id', 'Role_id:') }}
			{{ Form::text('role_id') }}
		</li>
		<li>
			{{ Form::label('last_logged_in', 'Last_logged_in:') }}
			{{ Form::text('last_logged_in') }}
		</li>
		<li>
			{{ Form::label('metadata_id', 'Metadata_id:') }}
			{{ Form::text('metadata_id') }}
		</li>
		<li>
			{{ Form::label('password', 'Password:') }}
			{{ Form::text('password') }}
		</li>
		<li>
			{{ Form::label('remember_token', 'Remember_token:') }}
			{{ Form::text('remember_token') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}