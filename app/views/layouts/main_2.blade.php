@extends('layouts.master')

@section('body')
	<div class="wrapper">
		<div class="navbar navbar-default nvb">
			<div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="{{ action('IndexController@index') }}">{{ OSPMConfig::$title }}</a>
		    </div>
			 <div class="navbar-collapse collapse navbar-responsive-collapse">
		        <ul class="nav navbar-nav navbar-right">           			
					@foreach(ModuleEngine::getTopbarItems() as $item)
						<li>
							@if($item[2] != null)
								<!--  <img src="{{ asset($item[2]) }}"> -->
							@endif
							
							@if($item[3] == null)
								{{ HTML::linkAction($item[0], $item[1]) }}
							@else
								<a href="#" onclick="$('#{{ $item[3] }}').slideToggle();$('#{{ $item[3] }}').load('{{ action($item[0]) }}');"><i class="{{ $item[2] }}"></i> {{ $item[1] }}</a>
								<div id="{{ $item[3] }}" class="tbif tbif-hidden" style="position: absolute;width: 250px;height: 300px;right: 0px;z-index: 999;box-shadow: 1px 1px 8px 0px rgba(0,0,0,0.5);padding: 8px;display: none;background: white;margin-top: 14px;">
									Loading...
								</div>
							@endif
						</li>
					@endforeach
					<li class="dropdown">
		                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->displayname; }} <b class="caret"></b></a>
		                <ul class="dropdown-menu">
		                    <li>{{ HTML::linkAction('SystemController@users', 'Manage users') }}</li>
		            		<li>{{ HTML::linkAction('SystemController@projects', 'Manage projects') }}</li>
		                    <li class="divider"></li>
		                    <li><a href="{{ action('SystemController@settings') }}"><i class="mdi-action-settings"></i> Settings</a></li>
		                    <li><a href="{{ action('LoginController@logout') }}"><i class="mdi-action-lock"></i> Logout</a></li>
		                </ul>
		            </li>
		        </ul>
		    </div>
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