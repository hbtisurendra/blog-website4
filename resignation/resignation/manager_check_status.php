<?php
include("conn.php");
$empid=$_POST['empid'];
$status=$_POST['leave_status'];
if($status=='Approved')
{
$url="location:team_approved.php?id=".$empid;
header($url);
}
if($status=='Rejected')
{
$url="location:team_rejected.php?id=".$empid;
header($url);
}
if($status=='Pending')
{
$url="location:manager.php?id=".$empid;
header($url);
}
?>