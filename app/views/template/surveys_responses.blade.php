{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('survey_id', 'Survey_id:') }}
			{{ Form::text('survey_id') }}
		</li>
		<li>
			{{ Form::label('response', 'Response:') }}
			{{ Form::textarea('response') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}