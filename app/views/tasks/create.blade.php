@extends('layouts.main_2_nopadding')

@section('content')
	@include('tasks.menu')
	<div style="padding:0em 1em;">
		<div class="task">
			<div id="information" class="well bs-component col-lg-6">
				{{ Form::open(array('class' => 'form-horizontal')) }}
					<legend>Create task</legend>
					<p>Use this form to create a task!</p>
					<fieldset>
						<div class="form-group">
							{{ Form::label('title', 'Title: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::text('title', null, array('class' => 'form-control input-lg', 'placeholder' => 'enter task title...', 'required')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('status', 'Status: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::select('status', array('new' => 'new', 'confirmed' => 'confirmed', 'assigned' => 'assigned', 'resolved' => 'resolved', 'closed' => 'closed'), array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('author', 'Author: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::text('author', Auth::user()->displayname, array('disabled', 'class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('assingedto', 'Assigned to: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::text('assingedto', null, array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('category', 'Category: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::select('category', TaskCategory::all()->lists('name'), null, array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('project', 'Project: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::select('project', Project::all()->lists('name'), null, array('class' => 'form-control', 'required')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('tags', 'Tags: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::text('tags', null, array('class' => 'form-control', 'placeholder' => 'enter tags separated by comma')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('targetdate', 'Target date: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::date('targetdate', null, array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('visibility', 'Visibility: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::text('visibility', null, array('class' => 'form-control', 'placeholder' => 'enter groups separated by comma')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('description', 'Description: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::textarea('description', null, array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('reproduction', 'Reproduction: ', array('class' => 'col-lg-2 control-label')) }}
							<div class="col-lg-10">
								{{ Form::textarea('reproduction', null, array('class' => 'form-control')) }}
							</div>
						</div>
						<div class="form-group"> 
							<div class="col-lg-10 col-lg-offset-2">
								{{ Form::button('Cancel', array('class' => 'btn btn-default', 'onclick' => 'window.history.back();')) }}
								{{ Form::submit('Create task', array('class' => 'btn btn-primary')) }}
							</div>
						</div>
					</fieldset>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop