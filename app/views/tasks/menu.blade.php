<div style="margin-bottom: 16px;">
	<ul class="nav nav-tabs">
	    <li><a href="{{ action('TasksController@create') }}">Create task</a></li>
	    <li><a href="{{ action('TasksController@index') }}">All tasks</a></li>
	    <li><a href="{{ action('TasksController@index') }}/filter/assignedto_id/{{ Auth::user()->id }}">Assigned to me</a></li>
	 </ul>
</div>