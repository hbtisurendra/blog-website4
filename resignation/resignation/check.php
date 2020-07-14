<?php
include("conn.php");
$liferay_id=$_GET['id'];
$query1="SELECT * FROM user_erp WHERE Liferay_Id='$liferay_id'";
$res1=mysql_query($query1);
$result1=mysql_fetch_array($res1);
$empid=$result1['Emp_Id'];



$query_check="SELECT * FROM user_directory WHERE empid='$user'";
$res5=mysql_query($query_check);
$num_rows=mysql_num_rows($res5);
$url="location:part1.php?id=".$user;
if($num_rows>=1 && $password='pipl?123')
{
header($url);	
}
else
{
header("location:login.php");	
}

?>