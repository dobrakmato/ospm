{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('content', 'Content:') }}
			{{ Form::textarea('content') }}
		</li>
		<li>
			{{ Form::label('uploaded', 'Uploaded:') }}
			{{ Form::text('uploaded') }}
		</li>
		<li>
			{{ Form::label('filename', 'Filename:') }}
			{{ Form::text('filename') }}
		</li>
		<li>
			{{ Form::label('author_id', 'Author_id:') }}
			{{ Form::text('author_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}