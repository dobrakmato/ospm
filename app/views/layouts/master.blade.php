<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>OSPM</title>
		<link href='http://fonts.googleapis.com/css?family=Source Sans Pro:400,100,700&subset=latin-ext' rel='stylesheet' type='text/css'>
		{{ HTML::style('main.css'); }}
		{{ HTML::style('css/feed-tasks.css'); }}
		{{ HTML::script('js/feed.js'); }}
		
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::style('css/ripples.min.css'); }}
		{{ HTML::style('css/material-wfont.min.css'); }}
        
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	</head>
	<body>
		@yield('body')
		{{ HTML::script('js/bootstrap.min.js'); }}
		{{ HTML::script('js/ripples.min.js'); }}
		{{ HTML::script('js/material.min.js'); }}
        <script>
            $(document).ready(function() {
                $.material.init();
            });
        </script>
		@if(Session::get('ajax') == true)
			{{ HTML::script('js/ajax.js'); }}
		@endif
		
	</body>
</html>