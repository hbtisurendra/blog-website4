<?php
include("conn.php");
$id="00".$_REQUEST['id'];
$start_date = date('Y-m-d', strtotime($_REQUEST['start_date']));
//$end_date=$_POST['end_date'];
echo $start_date;die;
//echo $end_date;die;
$query="SELECT * FROM user_leave_trans where leave_start_date = '$start_date' and leave_end_date = '$end_date' and emp_code='$id' and(leave_code='CL' OR leave_code='PL')";




//echo $query;
$res=mysql_query($query);
$number=mysql_num_rows($res);
echo $number;
?>
