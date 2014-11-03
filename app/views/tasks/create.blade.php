@extends('layouts.main_2_nopadding')

@section('content')
	@include('tasks.menu')
	<div style="padding:0em 1em;">
		<div class="task">
			<h1>Create task</h1>
			<div id="information">
				{{ Form::open() }}
				
				<p>
					{{ Form::label('status', 'Status: ') }}
					{{ Form::select('status', array('new' => 'new', 'confirmed' => 'confirmed', 'assigned' => 'assigned', 'resolved' => 'resolved', 'closed' => 'closed')) }}
				</p>
				<p>
					{{ Form::label('author', 'Author: ') }}
					{{ Form::text('author', Auth::user()->displayname, array('disabled')) }}
				</p>
				<p>
					{{ Form::label('assingedto', 'Assigned to: ') }}
					{{ Form::text('assingedto' ) }}
				</p>
				<p>
					{{ Form::label('category', 'Category: ') }}
					{{ Form::select('category', TaskCategory::all()->lists('name')) }}
				</p>
				<p>
					{{ Form::label('project', 'Project: ') }}
					{{ Form::select('project', Project::all()->lists('name')) }}
				</p>
				<p>
					{{ Form::label('tags', 'Tags: ') }}
					{{ Form::text('tags') }}
				</p>
				<p>
					{{ Form::label('targetdate', 'Target date: ') }}
					{{ Form::date('targetdate') }}
				</p>
				<p>
					{{ Form::label('visibility', 'Visibility: ') }}
					{{ Form::text('visibility') }}
				</p>
				<p>
					{{ Form::label('description', 'Description: ') }}
					{{ Form::textarea('description') }}
				</p>
				<p>
					{{ Form::label('reproduction', 'Reproduction: ') }}
					{{ Form::textarea('reproduction') }}
				</p>
				<p>{{ Form::submit('Create task') }}</p>
				<p>{{ Form::button('Cancel', array('onclick' => 'window.history.back();')) }}</p>
				{{ Form::close() }}
			</div>
			<div id="comments">
				
			</div>
		</div>
	</div>
@stop