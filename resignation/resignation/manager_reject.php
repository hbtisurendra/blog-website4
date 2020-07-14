<!-- Rejection of leave of team member by Manager-->
<?php
include("conn.php");
$id=$_POST['id'];

$manager=$_POST['manager'];
$remarks=$_POST['remarks'];

$query="UPDATE user_leave_trans SET leave_status='Rejected',manager_remark='$remarks' WHERE id='$id'";
$res=mysql_query($query);
/*$url="location:manager.php?id=".$manager;
header($url);*/
?>

<!-- Rejection of leave of team member by Manager-->