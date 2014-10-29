{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('status', 'Status:') }}
			{{ Form::text('status') }}
		</li>
		<li>
			{{ Form::label('tags', 'Tags:') }}
			{{ Form::text('tags') }}
		</li>
		<li>
			{{ Form::label('votes', 'Votes:') }}
			{{ Form::text('votes') }}
		</li>
		<li>
			{{ Form::label('target_date', 'Target_date:') }}
			{{ Form::text('target_date') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description') }}
		</li>
		<li>
			{{ Form::label('reproduction', 'Reproduction:') }}
			{{ Form::textarea('reproduction') }}
		</li>
		<li>
			{{ Form::label('type', 'Type:') }}
			{{ Form::text('type') }}
		</li>
		<li>
			{{ Form::label('project_id', 'Project_id:') }}
			{{ Form::text('project_id') }}
		</li>
		<li>
			{{ Form::label('category_id', 'Category_id:') }}
			{{ Form::text('category_id') }}
		</li>
		<li>
			{{ Form::label('author_id', 'Author_id:') }}
			{{ Form::text('author_id') }}
		</li>
		<li>
			{{ Form::label('assignedto_id', 'Assignedto_id:') }}
			{{ Form::text('assignedto_id') }}
		</li>
		<li>
			{{ Form::label('priority', 'Priority:') }}
			{{ Form::text('priority') }}
		</li>
		<li>
			{{ Form::label('milestone_id', 'Milestone_id:') }}
			{{ Form::text('milestone_id') }}
		</li>
		<li>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}