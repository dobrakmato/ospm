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
			{{ Form::label('content', 'Content:') }}
			{{ Form::text('content') }}
		</li>
		<li>
			{{ Form::label('visibility', 'Visibility:') }}
			{{ Form::text('visibility') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}