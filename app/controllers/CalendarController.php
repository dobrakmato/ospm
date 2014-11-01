<?php
class CalendarController extends AdminController {
	public function index() {
		$cells = $this->generateCells(time());		
		return View::make('calendar.main')->with('cells', $cells)->with('year', date('Y'))->with('month', date('m'));
	}
	
	public function month($year, $month, $day = 1) {
		if($month > 12) {
			return Redirect:: action('CalendarController@month', array('year' => $year + floor($month / 12), 'month' => ($month % 12)));
		} else {
			$cells = $this->generateCells(mktime(0, 0, 0, $month, $day, $year));
			return View::make('calendar.main')->with('cells', $cells)->with('year', $year)->with('month', $month);
		}
	}
	
	public function generateCells($time) {
		$month = date('m', $time);
		$day = 1;
		$year = date('Y', $time);
		$month_days = date('t');
		$today = date('j');
		$lastmonth_days = date('t', mktime(0, 0, 0, $month - 1, $day, $year));
		
		$first = date('N', mktime(0, 0, 0, $month, $day, $year)) - 1;
		
		$cells = array();
		
		// Last month
		for($a = 0; $a < $first; $a++) {
			$cells[$a] = new stdClass();
			$cells[$a]->isFromMonth = false;
			$cells[$a]->day = $lastmonth_days - ($first - $a - 1);
		}
		// This month
		for($i = $first; $i < 35; $i++) {
			$cells[$i] = new stdClass();
			if($i > $month_days + 1) {
				// Next month
				$cells[$i]->isFromMonth = false;
				$cells[$i]->day = (35 - $month_days - 2) - (35 - $i) + 1;
			} else {
				// This month
				$cells[$i]->isFromMonth = true;
				$cells[$i]->day = $i - $first + 1;
				if($cells[$i]->day == $today && $month == date('m')) {
					$cells[$i]->isToday = true;
				}
			}
		}
		return $cells;
	}
}
