<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>OSPM</title>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700&subset=latin-ext' rel='stylesheet' type='text/css'>
		{{ HTML::style('main.css'); }}
		{{ HTML::style('css/feed-tasks.css'); }}
		{{ HTML::script('js/feed.js'); }}
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	</head>
	<body>
		@yield('body')
	</body>
</html>