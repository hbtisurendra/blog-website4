<?php

include("conn.php");
$val=$_REQUEST['value'];
echo $val;die;
$query="SELECT * FROM user_leave_balance WHERE Emp_id='$val'";
$res=mysql_query($query);
$value= mysql_fetch_array($res);
echo $value['cl_balance'];

?>