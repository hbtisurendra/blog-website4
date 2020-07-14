<?php
include("conn.php");
$empid=$_POST['empid'];
$status=$_POST['status'];
if($status=='Approved')
{
$url="location:approved.php?id=".$empid;
header($url);
}
if($status=='Rejected')
{
$url="location:rejected.php?id=".$empid;
header($url);
}
if($status=='Pending')
{
$url="location:part1.php?id=".$empid;
header($url);
}


?>