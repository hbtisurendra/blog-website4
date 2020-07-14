<?php
include("conn.php");
$id=$_GET['main_id'];
$emp_id=$_GET['empid'];
$query="UPDATE user_regination SET reg_status='Cancelled' WHERE id='$id'";
$res=mysql_query($query);
$url="location:part1.php?id=".$emp_id;
header($url);
?>