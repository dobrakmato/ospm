<div style="margin-bottom: 16px;">
	<a href="{{ action('TasksController@create') }}">Create task</a> |
	<a href="{{ action('TasksController@index') }}">All tasks</a> |
	<a href="{{ action('TasksController@index') }}/?filter=user&c={{ Auth::user()->id() }}">Assigned to me</a>
</div>