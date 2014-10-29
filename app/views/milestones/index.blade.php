@extends('layouts.main_2')

@section('content')
	<h1>Milestones / Versions</h1>
	<div class="milestones">
		@foreach($milestones as $milestone)
			<a href="{{ action('MilestonesController@view', array('id' => $milestone->id)) }}">{{ $milestone->name }}</a>
		@endforeach		
	</div>
@stop