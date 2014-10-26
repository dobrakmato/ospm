@foreach ($items as $item)
	<span class="sb-item">
		@if ($item[2] != null)
			<a href="{{ URL::action($item[0]) }}"><img class="sb-icon" src={{asset($item[2])}} alt="$item[1]"> {{ $item[1] }}</a>
		@else
			<a href="{{ URL::action($item[0]) }}">{{ $item[1] }}</a>
		@endif
	</span>
@endforeach