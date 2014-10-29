@extends('layouts.main_2')

@section('content')
	<div class="milestone">
		<h1>Milestone / Version: {{ $milestone->name }}</h1>
		<div id="information">
			<h2>Users participated</h2>
			<h2>Milestone progress</h2>
			<span>Progress: 55% (1/9)</span>
			<div class="progressbar" style="height: 1.5em;border: 1px solid black;width:250px;">
				<div class="probgressbar-fill" style="background:#44dd99;height:1.5em;width:66px;"></div>
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