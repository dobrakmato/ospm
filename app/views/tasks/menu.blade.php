<div style="margin-bottom: 16px;">
	<ul class="nav nav-tabs">
	    <li><a href="{{ action('TasksController@index') }}">All tasks</a></li>
	    <li><a href="{{ action('TasksController@index') }}/filter/assignedto_id/{{ Auth::user()->id }}">Assigned to me</a></li>
	    <li class="divider"></li>
	    <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
	            Projects <span class="caret"></span>
	        </a>
	        <ul class="dropdown-menu">
	        	@foreach(Project::all(array('abbr', 'name', 'id')) as $project)
	            	<li>
	            		<a href="{{ action('TasksController@filter', array('by' => 'project_id', 'cond' => $project->id)) }}" 
	            		   title="{{ $project->name }}"><i class="mdi-file-folder-open"></i> {{ $project->abbr }}</a>
	            	</li>
	            @endforeach
	        </ul>
	    </li>
	 </ul>
</div>