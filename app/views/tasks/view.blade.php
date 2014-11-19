@extends('layouts.main_2_nopadding')

@section('content')
	@include('tasks.menu')
	<div style="padding:0em 1em;">
		<div class="task">
			<h1>
			@if($task->status == "new")
				<i class="mdi-action-assignment-returned"></i>
			@elseif($task->status == "confirmed")
				<i class="mdi-action-assignment-return"></i>
			@elseif($task->status == "assigned")
				<i class="mdi-action-assignment-ind"></i>
			@elseif($task->status == "resolved")
				<i class="mdi-action-assignment-turned-in"></i>
			@elseif($task->status == "closed")
				<i class="mdi-action-assignment-turned-in"></i>
			@endif
			{{ $task->title }} <small> / {{ $task->project()->getResults()->abbr }}</small></h1>
			<p>{{ link_to_action('TasksController@edit', 'Edit task', array('id' => $task->id )) }} | 
			   {{ link_to_action('APIController@get', 'JSON', array('item' => 'task', 'id' => $task->id )) }} |
			   {{ link_to_action('TasksController@remove', 'Remove', array('id' => $task->id )) }}	</p>
			<h2>Informations</h2>
			<div id="information" class="">
				<span><b>Status:</b> <span class="{{ statusLabelClass($task->status) }}">{{ $task->status }}</span></span><br/>
				<span><b>Author / Reporter:</b> {{ $task->author()->getResults()->displayname }}</span><br/>
				<span><b>Assinged to:</b> {{ $task->assignedTo()->getResults()->displayname }}</span><br/>
				<span><b>Category:</b> {{ $task->category()->getResults()->name}}</span><br/>
				<span><b>Tags:</b> {{ $task->tags }}</span><br/>
				<span><b>Votes:</b> <span class="badge">{{ $task->votes }}</span></span><br/><span><b>Visibility:</b> {{ $task->visibility }}</span><br/>
				<span><b>Milestone:</b> <a href="{{ action('MilestonesController@view', array('id' => $task->milestone_id)) }}">{{ $task->milestone()->getResults()->name }}</a></span><br/>
				<br/>
				<span><b>Target date:</b> {{ $task->target_date }}</span><br/>
				<span><b>Created at:</b> {{ $task->created_at }}</span><br/>
				<span><b>Updated at:</b> {{ $task->updated_at }}</span><br/>
			</div>
			<h2>Reproduction</h2>
			<div class="col-lg-12" style="padding:0px;">
				<div class="">
					<span><b>Description:</b> {{ $task->description }}</span><br/>
					<span><b>Reproduction:</b> {{ $task->reproduction }}</span><br/>
				</div><br/>
			</div>
			<h2>History & discussion</h2>
			<div id="comments col-lg-12">
				<div class="col-lg-12" style="padding:0px;">
					<div class="col-lg-6" style="padding:0px;">
						@foreach($comments as $comment)
							@include('tasks.comment', array('comment' => $comment))
						@endforeach
					</div>
				</div>
			</div>
			<hr>
			<div id="writeCommentDiv" class="well bs-component col-lg-6">
				<legend>Write comment</legend>
				<div>
					{{ Form::open(array('class' => 'form-horizontal')) }}
					<fieldset>
						<div class="form-group">
							{{ Form::label('comment_text', 'Text: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::textarea('comment_text', null, array('class' => 'form-control', 'style' => 'height:3em;')) }}
							</div>
						</div>
						<div class="form-group"> 
							<div class="col-lg-10 col-lg-offset-2">
								{{ Form::submit('Add comment', array('class' => 'btn btn-primary')) }}
							</div>
						</div>
					</fieldset>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@stop