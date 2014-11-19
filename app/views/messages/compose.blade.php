@extends('layouts.main_2')

@section('content')
	<div class="compose-message">
		<div class="col-lg-7">
			<div class="well bs-component">
				{{ Form::open(array('class' => 'form-horizontal')) }}
					<legend>Compose message</legend>
					<p>Use this form to compose a message!</p>
					<fieldset>
						<div class="form-group">
							{{ Form::label('title', 'Thread title:', array('class' => 'col-lg-3 control-label')) }}
							<div class="col-lg-9">
								{{ Form::text('title', null, array('placeholder' => "Title", 'class' => 'form-control input-lg required')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('content', 'Message content:', array('class' => 'col-lg-3 control-label')) }}
							<div class="col-lg-9">
								{{ Form::textarea('content', null, array('placeholder' => "Message", 'class' => 'form-control required')) }}
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('recipients[]', 'Recipients:', array('class' => 'col-lg-3 control-label')) }}
							<div class="col-lg-9">
								{{ Form::select('recipients[]', $users, null, array('multiple' => true, 'class' => 'form-control required')) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-9 col-lg-offset-3">
								{{ Form::reset('Cancel', array('class' => 'btn btn-default')) }}
								{{ Form::submit('Send', array('class' => 'btn btn-primary')) }}
							</div>
						</div>
					</fieldset>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop