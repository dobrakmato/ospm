@extends('layouts.main_2')

@section('content')
	@include('tasks.menu')
	<div class="tasks">
		<table>
			<thead>
				<th>Title</th>
				<th>Status</th>
				<th>Assinged to</th>
				<th>Target date</th>
				<th>Votes</th>
				<th>Priority</th>
				<th>Actions</th>
			</thead>
			<tbody>
			@foreach($tasks as $task)
				<tr>
					<td>{{ $task->title }}</td>
					<td><a href="/tasks/filter/status/{{ $task->status }}">{{ $task->status }}</a></td>	
					<td><a href="/tasks/filter/assignedto_id/{{ $task->assignedto_id }}">{{ $task->assignedTo()->getResults()->displayname }}</a></td>	
					<td>{{ $task->target_date }}</td>	
					<td>{{ $task->votes }}</td>
					<td>{{ $task->priority }}</td>
					<td>{{ link_to_action('TasksController@view', 'View', array('id' => $task->id )) }} |
						{{ link_to_action('TasksController@edit', 'Edit', array('id' => $task->id )) }} |
						{{ link_to_action('TasksController@remove', 'Remove', array('id' => $task->id )) }}</td>		
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@stop