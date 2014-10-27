@extends('layouts.main_2')

@section('content')
	@include('tasks.menu')
	<div class="task">
		<h1>Edit: {{ $task->title() }}</h1>
		<div id="information">
			{{ Form::open() }}
			
			<p>
				{{ Form::label('status', 'Status: ') }}
				{{ Form::select('status', array('new' => 'new', 'confirmed' => 'confirmed', 'assigned' => 'assigned', 'resolved' => 'resolved', 'closed' => 'closed'), $task->status()) }}
			</p>
			<p>
				{{ Form::label('author', 'Author: ') }}
				{{ Form::text('author', $task->authorDisplayName()) }}
			</p>
			<p>
				{{ Form::label('assingedto', 'Assinged to: ') }}
				{{ Form::text('assingedto', $task->assingedToDisplayName()) }}
			</p>
			<p>
				{{ Form::label('category', 'Category: ') }}
				{{ Form::text('category', 'uncategorized') }}
			</p>
			<p>
				{{ Form::label('project', 'Project: ') }}
				{{ Form::text('project', 'main') }}
			</p>
			<p>
				{{ Form::label('tags', 'Tags: ') }}
				{{ Form::text('tags', implode(', ', $task->tags())) }}
			</p>
			<p>
				{{ Form::label('targetdate', 'Target date: ') }}
				{{ Form::date('targetdate', $task->target_date()) }}
			</p>
			<p>
				{{ Form::label('visibility', 'Visibility: ') }}
				{{ Form::text('visibility', $task->visibility()) }}
			</p>
			<p>
				{{ Form::label('description', 'Description: ') }}
				{{ Form::textarea('description', $task->description()) }}
			</p>
			<p>
				{{ Form::label('reproduction', 'Reproduction: ') }}
				{{ Form::text('reproduction', $task->reproduction()) }}
			</p>
			<p>
				{{ Form::label('project', 'Project: ') }}
				{{ Form::text('project', 'main') }}
			</p>
			<p>{{ Form::submit('Save changes') }}</p>
			<p>{{ Form::button('Cancel', array('onclick' => 'window.history.back();')) }}</p>
			{{ Form::close() }}
		</div>
		<div id="comments">
			
		</div>
	</div>
@stop