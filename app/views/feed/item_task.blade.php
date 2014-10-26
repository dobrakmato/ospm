<div class="f-item fi-task">
	<div class="fi-task-h">
		<h2 class="fi-task-ht">{{ $item->title }}</h2>
		<span class="fi-task-date" onclick="$('#fi-ted-{{ $item->taskid }}').addClass('fi-tden');" style="cursor: pointer;">+2 days</span>
		<span class="fi-task-date fi-tddi" id="fi-ted-{{ $item->taskid }}">{{ $item->date }}</span>
	</div>
	<div class="fi-task-c">
		<span class="fi-task-meta">Project: {{ $item->project }} | Task: #{{ $item->taskid }} | Category: {{ $item->category }}</span>
		<p>{{ $item->content }}</p>
	</div>
	<div class="fi-task-f">
		<span class="fi-task-bot"><span title="Sorted by priority" style="cursor: help;">by priority</span> | 
		<a class="fi-task-bot" href="#" title="mark as not important right now">not important</a></span>
	
		@if($item->actions['primary'] != null)
			<a class="fi-task-btn fi-task-bp" href="{{ $item->actions['primary']['url'] }}">{{ $item->actions['primary']['title'] }}</a>
		@endif
	</div>
</div>