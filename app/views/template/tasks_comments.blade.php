{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('task_id', 'Task_id:') }}
			{{ Form::text('task_id') }}
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