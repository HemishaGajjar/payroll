<?php
Class Payroll {
	
	public $dateval;
	
	public function getFirstworkingDayOftheMonth()
    {
		$dateval = $this->dateval;
        $date = new DateTime($dateval);
		$date->modify('first day of this month');
		$first_day_this_month = $date->format('Y-m-d');
		if ((new DateTime($first_day_this_month))->format("N") > 5) {
			$date->modify('next monday');
			return $date->format('Y-m-d');
		}else{ 
			return $first_day_this_month;
		}
    }
	
	
	public function getFifteenworkingDayOftheMonth()
    {
		$dateval = $this->dateval;
		$date = new DateTime($dateval);
		$fifteen_day_this_month = $date->format('Y-m-d');
		if ((new DateTime($fifteen_day_this_month))->format("N") > 5) {
			$date->modify('next monday');
			return $date->format('Y-m-d');
		}else{ 
			return $fifteen_day_this_month;
		}
    }
	
	
	public function getLastworkingDayOftheMonth()
    {
		$dateval = $this->dateval;
        $date = new DateTime($dateval);
		$date->modify('last day of this month');
		$date->modify('+1 day');
		$date->modify('last weekday');
		return $last_day_this_month = $date->format('Y-m-d');
    }
	
	
	
	
	
	
	
	
}


?>