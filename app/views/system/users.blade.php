@extends('layouts.main_2')

@section('content')
	<div class="users">
		@foreach($users as $user)
			{{$user}}
		@endforeach
	</div>
@stop