@foreach ($items as $item)
	<span class="sb-item" style="font-size: 110%;">
		@if ($item[2] != null)
			<a href="{{ URL::action($item[0]) }}"><i class="{{ $item[2] }}"></i> {{ $item[1] }}</a>
		@else
			<a href="{{ URL::action($item[0]) }}">{{ $item[1] }}</a>
		@endif
	</span>
@endforeach