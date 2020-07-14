<?php
function narrowByMonth($dates, $monthNumber) {
	$rrr=array();
    foreach ($dates as $date) {
        $split = explode('-', $date);
        $year = $split[0]; // Not needed in this example
        $month = $split[1];
        $day = $split[2]; // Not needed in this example
        if ($month == $monthNumber) {
            $rrr[]= $date;
			
        }
		echo "<pre>";
		print_r($rrr);
    }
}

$dates = array ('2013-05-25',
    '2013-05-26',
    '2013-06-02',
    '2013-06-03');

$monthNumber = '06';

print_r(narrowByMonth($dates, $monthNumber));
	
	
	
	?>