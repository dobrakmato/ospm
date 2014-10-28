@extends('layouts.master')

@section('body')
	<div class="wrapper">
		<div class="topbar">
			<span class="title">{{ OSPMConfig::$title }}</span>
			<span class="tb-item tb-right">{{ HTML::linkAction('LoginController@logout', 'Logout') }}</span>
			<span class="tb-item tb-right">{{ HTML::linkAction('SystemController@users', 'Manage users') }}</span>
			<span class="tb-item tb-right">{{ HTML::linkAction('SystemController@projects', 'Manage projects') }}</span>
		</div>
		<div class="page">
			<div class="sidebar">
				@include('layouts.sidebar_2', array('items'=>ModuleEngine::getSidebarItems()))
			</div>
			<div class="content">
				@yield('content')
			</div>
		</div>
	</div>
@stop