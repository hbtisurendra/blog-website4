<?php
include("conn.php");
session_start();
$manager_name=$_POST['manager_name'];
$month=$_POST['month'];
$year=$_POST['year'];
$ss=$year."-".$month;
$date=$_POST['date'];
$time=$_POST['time'];
$datetime=$date." ".$time.":00";
$id2=$_POST['id2'];
$query="UPDATE user_leave_trans SET leave_logged_date='$datetime',leave_status='Pending' WHERE leave_start_date LIKE '%$ss%'";
$res=mysql_query($query);
if($res)
{
$_SESSION['message']="Succesfully Updated";	
header("location:permissions.php?id=$id2");	
}
else
{
	
	echo "no record";
}


?>