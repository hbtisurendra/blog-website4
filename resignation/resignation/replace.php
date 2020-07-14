<?php

header('Content-Type: text/html; charset=utf-8');
header('Content-Disposition: attachment; filename=data.xls');
header("Pragma: no-cache");

include('conn.php');
$id=$_GET['id'];
$query="TRUNCATE user_leave_balance_temp";
$res=mysql_query($query);

$query2="insert into user_leave_balance_temp select * from user_leave_balance";
$res2=mysql_query($query2);

if($res && $res2)
{
$query3="SELECT * FROM user_leave_balance_temp";
$res3=mysql_query($query3);
echo "<table border='2'>";
echo "<tr>";
echo "<th>Id</th><th>Employee Id</th><th>Leave Code</th><th>Cl Balance</th><th>Pl Balance</th>";
echo "</tr>";
while($row3=mysql_fetch_array($res3))
{
	$id=$row3['id'];
	$emp_id=$row3['Emp_id'];
	$lcode=$row3['leave_cal_code'];
	$cl_balance=(float)$row3['cl_balance'];
	$pl_balance=(float)$row3['pl_balance'];
	
echo "<tr>";
echo "<td>$id</td>";
echo "<td>$emp_id</td>";
echo "<td>$lcode</td>";
echo "<td>$cl_balance</td>";
echo "<td>$pl_balance</td>";
echo "</tr>";	
	
	
}
echo "</table>";
//header("location:part1.php?id=$id");
}
?>