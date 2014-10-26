@extends('layouts.main_1')

@section('content')
	<div style="margin: 10em auto; width:24em; background: #fafafa;border: 1px solid #aaa;border-radius:5px;">
			<h1 style="background: #33dd88;padding:8px 16px;margin: 0;color:white;border-bottom:3px solid #11cc66;border-radius:5px 5px 0px 0px">@yield('title')</h1>
			<div class="elements" style="padding: 16px;">
				@yield('message')
			</div>
	</div>
@stop
