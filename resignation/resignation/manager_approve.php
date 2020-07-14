<?php
include("conn.php");
$id=$_GET['id'];
$manager_id=$_GET['manager_id'];
$query="UPDATE user_leave_trans SET leave_status='Approved' WHERE id='$id'";
$res=mysql_query($query);
$url="location:manager.php?id=".$manager_id;
header($url);
?>