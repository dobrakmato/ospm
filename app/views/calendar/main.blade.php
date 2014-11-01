@extends('layouts.main_2')

@section('content')
	<div class="calendar_w">
		<h1>Calendar</h1>
		<style>
			.calendar {
				border: 1px solid #888;
				border-spacing: 0px;
			}
			
			table.calendar > tbody > tr > td {
				border: 1px solid #ccc;
				height:8em;
				width:14.285%;
			}
		</style>
		<div id="calendar_navigation" style="margin-bottom: 1em;">
			<a href="{{ action('CalendarController@month', array('year' => $year, 'month' => $month - 1)) }}">Prev month</a> |
			<a href="{{ action('CalendarController@month', array('year' => $year, 'month' => $month + 1)) }}">Next month</a>
		</div>
		<div>
			<table class="calendar">
				<thead>
					<tr>
						<th>Mon</th>
						<th>Tue</th>
						<th>Wen</th>
						<th>Thu</th>
						<th>Fri</th>
						<th>Sat</th>
						<th>Sun</th>
					</tr>	
				</thead>
				<tbody>
					@for($a = 0; $a < 5; $a++)
						<tr>
							@for($b = 0; $b < 7; $b++)
								@if( $cells[($a * 7) + $b]->isFromMonth)
									@if(!empty($cells[($a * 7) + $b]->isToday))
										<td style="background:#FFC170">{{ $cells[($a * 7) + $b]->day }}</td>
									@else 
										<td>{{ $cells[($a * 7) + $b]->day }}</td>
									@endif
								@else
									<td style="background:#fafafa">{{ $cells[($a * 7) + $b]->day }}</td>
								@endif
							@endfor
						</tr>
					@endfor
				</tbody>
			</table>
		</div>
	</div>
@stop