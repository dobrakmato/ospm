@foreach($items as $item)
	@if($item->type == 'text')
		@include('feed.item_text', array('item' => $item))
	@elseif ($item->type == 'task')
		@include('feed.item_task', array('item' => $item))
	@elseif (startsWith($item->type, 'log'))
		@include('log.generic', array('item' => $item))
	@endif
@endforeach