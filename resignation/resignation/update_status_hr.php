<!-- Code for final approval of leave by HR-->
<?php
include("conn.php");
$id=$_GET['id'];
$empid=$_GET['empid'];
$query1="SELECT * FROM user_leave_trans WHERE id='$id'";
$res1=mysql_query($query1);
$res1_result=mysql_fetch_array($res1);
$count=$res1_result['leave_taken_unit']*8;

$empcode=$res1_result['emp_code'];
$leave_type=$res1_result['leave_code'];
$query="UPDATE user_leave_trans SET leave_status='Approved-HR' WHERE id='$id'";
$res=mysql_query($query);
if($leave_type=='CL')
{
$query2="UPDATE user_leave_balance SET cl_balance=cl_balance-'$count' WHERE Emp_id='$empcode'";
$res2=mysql_query($query2);
}
if($leave_type=='PL')
{
$query2="UPDATE user_leave_balance SET pl_balance=pl_balance-'$count' WHERE Emp_id='$empcode'";
$res2=mysql_query($query2);
}
$url="location:hr.php?id=".$empid;
if($res)
header($url);
?>
<!-- Code for final approval of leave by HR-->