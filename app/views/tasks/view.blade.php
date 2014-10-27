@extends('layouts.main_2')

@section('content')
	@include('tasks.menu')
	<div class="task">
		<h1>{{ $task->title() }}</h1>
		<p>{{ link_to_action('TasksController@edit', 'Edit task', array('id' => $task->id() )) }} | 
		   {{ link_to_action('APIController@get', 'JSON', array('item' => 'task', 'id' => $task->id() )) }}</p>
		<div id="information">
			<span><b>Status:</b> {{ $task->status() }}</span><br/>
			<span><b>Author / Reporter:</b> {{ $task->authorDisplayName() }}</span><br/>
			<span><b>Assinged to:</b> {{ $task->assingedToDisplayName() }}</span><br/>
			<span><b>Category:</b> {{ 'uncategorized'; //$task->categoryName() }}</span><br/>
			<span><b>Project:</b> {{ 'main'; //$task->project() }}</span><br/>
			<span><b>Tags:</b> {{ implode(', ', $task->tags()) }}</span><br/>
			<span><b>Votes</b> {{ $task->votes() }}</span><br/>
			<span><b>Target date:</b> {{ $task->target_date() }}</span><br/>
			<span><b>Created at:</b> {{ $task->created_at() }}</span><br/>
			<span><b>Updated at:</b> {{ $task->updated_at() }}</span><br/>
			<span><b>Visibility:</b> {{ $task->visibility() }}</span><br/>
			<span><b>Description:</b> {{ $task->description() }}</span><br/>
			<span><b>Reproduction:</b> {{ $task->reproduction() }}</span><br/>
		</div>
		<h2>Comments</h2>
		<div id="comments">
			@foreach($comments as $comment)
				@include('tasks.comment', array('comment' => $comment))
			@endforeach
		</div>
	</div>
@stop