@extends('layouts.master')

@section('body')
	<div class="wrapper">
		<div class="topbar">
			<span class="title">{{ OSPMConfig::$title }}</span>
			@foreach(ModuleEngine::getTopbarItems() as $item)
				<span class="tb-item tb-right">
					@if($item[2] != null)
						<img src="{{ asset($item[2]) }}">
					@endif
					
					@if($item[3] == null)
						{{ HTML::linkAction($item[0], $item[1]) }}
					@else
						<a href="#" onclick="$('#{{ $item[3] }}').slideToggle();$('#{{ $item[3] }}').load('{{ action($item[0]) }}');">{{ $item[1] }}</a>
						<div id="{{ $item[3] }}" class="tbif tbif-hidden" style="position: absolute;width: 250px;height: 300px;right: 0px;z-index: 999;box-shadow: 1px 1px 8px 0px rgba(0,0,0,0.5);padding: 8px;display: none;background: white;margin-top: 14px;">
							Loading...
						</div>
					@endif
				</span>
			@endforeach
			<span class="tb-item tb-right">{{ HTML::linkAction('LoginController@logout', 'Logout') }}</span>
			<span class="tb-item tb-right">{{ HTML::linkAction('SystemController@users', 'Manage users') }}</span>
			<span class="tb-item tb-right">{{ HTML::linkAction('SystemController@projects', 'Manage projects') }}</span>
		</div>
		<div class="page">
			<div class="sidebar">
				@include('layouts.sidebar_2', array('items'=> ModuleEngine::getSidebarItems()))
			</div>
			<div class="content">
				@yield('content')
			</div>
		</div>
	</div>
@stop