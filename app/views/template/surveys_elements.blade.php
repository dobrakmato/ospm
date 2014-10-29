{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('type', 'Type:') }}
			{{ Form::text('type') }}
		</li>
		<li>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</li>
		<li>
			{{ Form::label('survey_id', 'Survey_id:') }}
			{{ Form::text('survey_id') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::text('description') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}