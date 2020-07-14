<?php
include("conn.php");
$user=$_POST['user'];
trim($user);
$password=$_POST['password'];
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