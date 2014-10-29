{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('abbr', 'Abbr:') }}
			{{ Form::text('abbr') }}
		</li>
		<li>
			{{ Form::label('leader_id', 'Leader_id:') }}
			{{ Form::text('leader_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}