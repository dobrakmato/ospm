@extends('layouts.main_2')

@section('content')
	<div class="zone">
		<h1>Join</h1>
		<p>Joining room, please wait...</p>
		<script type="text/javascript">
			function a(sessionkey) {
				var l = window.location;
				window.location = l.toString().replace('join', 'session') + "/" + sessionkey;
			}
			setTimeout(function () {
				a('RD5J5I9SE7GH12S9FHQ95O8P8G');
			}, 1000);
		</script>
	</div>
@stop