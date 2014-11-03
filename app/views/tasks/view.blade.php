@extends('layouts.main_2_nopadding')

@section('content')
	@include('tasks.menu')
	<div style="padding:0em 1em;">
		<div class="task">
			<h1>{{ $task->title }}</h1>
			<p>{{ link_to_action('TasksController@edit', 'Edit task', array('id' => $task->id )) }} | 
			   {{ link_to_action('APIController@get', 'JSON', array('item' => 'task', 'id' => $task->id )) }}</p>
			<div id="information">
				<span><b>Status:</b> {{ $task->status }}</span><br/>
				<span><b>Author / Reporter:</b> {{ $task->author()->getResults()->displayname }}</span><br/>
				<span><b>Assinged to:</b> {{ $task->assignedTo()->getResults()->displayname }}</span><br/>
				<span><b>Category:</b> {{ $task->category()->getResults()->name }}</span><br/>
				<span><b>Project:</b> {{ $task->project()->getResults()->name }}</span><br/>
				<span><b>Tags:</b> {{ $task->tags }}</span><br/>
				<span><b>Votes:</b> {{ $task->votes }}</span><br/>
				<span><b>Target date:</b> {{ $task->target_date }}</span><br/>
				<span><b>Created at:</b> {{ $task->created_at }}</span><br/>
				<span><b>Updated at:</b> {{ $task->updated_at }}</span><br/>
				<span><b>Visibility:</b> {{ $task->visibility }}</span><br/>
				<span><b>Milestone:</b> <a href="{{ action('MilestonesController@view', array('id' => $task->milestone_id)) }}">{{ $task->milestone()->getResults()->name }}</a></span><br/>
				<span><b>Description:</b> {{ $task->description }}</span><br/>
				<span><b>Reproduction:</b> {{ $task->reproduction }}</span><br/>
			</div>
			<h2>Comments</h2>
			<div id="comments">
				<div class="list-group">
					@foreach($comments as $comment)
						@include('tasks.comment', array('comment' => $comment))
					@endforeach
				</div>
			</div>
			<h2>Write comment</h2>
			<div>
				{{ Form::open() }}
				<p>
					{{ Form::label('comment_text', 'Text: ') }}
					{{ Form::textarea('comment_text') }}
				</p>
				<p>
					{{ Form::submit() }}
				</p>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop