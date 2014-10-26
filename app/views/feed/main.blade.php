@extends('layouts.main_2')

@section('content')
	<div class="feeditems">
		@foreach($items as $item)
			@if($item->type == 'text')
				@include('feed.item_text', array('item' => $item))
			@elseif ($item->type == 'task')
				@include('feed.item_task', array('item' => $item))
			@endif
		@endforeach
		<div style="text-align:center;margin-top:4em;">
			<a href="#" style="color:#888;font-size:14px;">load more entries</a>
		</div>
	</div>
@stop