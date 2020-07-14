<?php
include("conn.php");
session_start();
$manager_name=$_POST['manager_name'];
$access=$_POST['access'];
/*$month=$_POST['month'];
$year=$_POST['year'];
$ss=$year."-".$month;
$date=$_POST['date'];
$time=$_POST['time'];
$datetime=$date." ".$time.":00";*/
$id2=$_POST['id2'];


$query="UPDATE hr_permissions SET permission='$access' WHERE empid='$manager_name'";
$res=mysql_query($query);	
header("location:hr_permissions.php?id=$id2");		



?>