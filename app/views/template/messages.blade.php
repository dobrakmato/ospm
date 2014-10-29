{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('author_id', 'Author_id:') }}
			{{ Form::text('author_id') }}
		</li>
		<li>
			{{ Form::label('thread_id', 'Thread_id:') }}
			{{ Form::text('thread_id') }}
		</li>
		<li>
			{{ Form::label('content', 'Content:') }}
			{{ Form::text('content') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}