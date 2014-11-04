@extends('layouts.main_2_nopadding')

@section('content')
	@include('tasks.menu')
	<div style="padding:0em 1em;">
		<div class="tasks">
			<table class="table table-striped table-hover">
				<thead>
					<th>Project</th>
					<th>Title</th>
					<th>Status</th>
					<th>Assinged to</th>
					<th>Milestone</th>
					<th>Target date</th>
					<th>Votes</th>
					<th>Priority</th>
				</thead>
				<tbody>
				@foreach($tasks as $task)
					<tr>
						<td>{{ $task->project()->getResults()->abbr }}</td>
						<td><a href="{{ action('TasksController@view', array('id' => $task->id)) }}">{{ $task->title }}</a></td>
						<td><a href="/tasks/filter/status/{{ $task->status }}" class="{{ statusLabelClass($task->status) }}">{{ $task->status }}</a></td>	
						<td><a href="/tasks/filter/assignedto_id/{{ $task->assignedto_id }}">{{ $task->assignedTo()->getResults()->displayname }}</a></td>
						<td>{{ $task->milestone()->getResults()->name }}</td>
						@if(time() > strtotime($task->target_date))
							<td><b style="color:red;">{{ $task->target_date }}</b></td>
						@else	
							<td>{{ $task->target_date }}</td>
						@endif	
						<td><span class="badge">{{ $task->votes }}</span></td>
						<td>{{ $task->priority }}</td>	
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		<a href="{{ action('TasksController@create') }}" class="btn btn-danger btn-fab btn-raised mdi-content-add" style="position: fixed;bottom: 1em;right: 1em;"></a>
	</div>
@stop