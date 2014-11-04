@extends('layouts.main_1')

@section('content')
	<div class="row">
		<div class="col-lg-4" style="margin: 6em auto;position: relative;float: none;">
			<div class="well bs-component">
				<div>
					@yield('message')
				</div>
			</div>
		</div>
	</div>
@stop
