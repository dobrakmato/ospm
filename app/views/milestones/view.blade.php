@extends('layouts.main_2')

@section('content')
	<div class="milestone">
		<h1>Milestone / Version: {{ $milestone->name }}</h1>
		<div id="information">
			<h2>Users participated</h2>
			<h2>Milestone progress</h2>
			<span>Progress: 55% (1/9)</span>
			<div class="progress">
			    <div class="progress-bar progress-bar-default" style="width: 60%"></div>
			</div>
			<h3>Tasks in this milestone</h3>
			<div>
				@foreach($milestone->tasks()->getResults() as $task)
					[{{ $task->status }}] <a href="{{ action('TasksController@view', array('id' => $task->id)) }}">{{ $task->title }}</a><br/>
				@endforeach
			</div>
		</div>
	</div>
@stop