@extends('layouts.main_2')

@section('content')
	<div class="feeditems">
		<div id="feedentries">
			
		</div>
		<div style="text-align:center;margin-top:4em;">
			<a href="javascript:feed_loadMore();" id="feedstatus" style="color:#888;font-size:14px;">loading...</a>
		</div>
		<script type="text/javascript">feed_loadItems();</script>
	</div>
@stop