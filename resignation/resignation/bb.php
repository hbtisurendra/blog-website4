<?php
function getDatesFromRange($start, $end)
{
    $dates = array($start);
    while(end($dates) < $end){
        $dates[] = date('Y-m-d', strtotime(end($dates).' +1 day'));
    }
    return $dates;
}

print_r(getDatesFromRange( '2015-08-30', '2015-09-01' ));
?>