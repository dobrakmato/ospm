@extends('layouts.main_2')

@section('content')
	<div class="compose-message">
		<h1>Compose message</h1>
		{{ Form::open() }}
			<p>
				{{ Form::label('title', 'Thread title:') }}
				{{ Form::text('title') }}
			</p>
			<p>
				{{ Form::label('content', 'Message content:') }}
				{{ Form::textarea('content') }}
			</p>
			<p>
				{{ Form::label('recipients[]', 'Recipients:') }}
				{{ Form::select('recipients[]', $users, null, array('multiple' => true)) }}
			</p>
			<p>
				{{ Form::submit() }}
			</p>
		{{ Form::close() }}
	</div>
@stop