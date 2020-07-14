<?php 


$servername = "localhost";
$username = "root";
$password = "";
$database="liferay2";

$conn = mysql_connect($servername, $username, $password);
mysql_select_db($database);
$month=date('m');
$year=date('Y');
$mm=cal_days_in_month(CAL_GREGORIAN, $month, $year);
$curr_date=date('Y-m-d h:i:s');
$start_date=$year."-".$month."-"."01";
$manager_date=$year."-".$month."-".$mm;

	
$query="SELECT * FROM user_leave_trans WHERE ((leave_start_date between '$start_date' and '$manager_date') or (leave_end_date between '$start_date' and '$manager_date'))and (leave_status not in ('Canceled','Cancelled','Rejected')) and leave_status='Pending'";

$result=mysql_query($query);
$num=mysql_num_rows($result);
$rrr=mysql_fetch_array($result);

if($num>=1)
{

	while($row=mysql_fetch_array($result))
	{  

		$empcode=$row['emp_code'];
		$query2="SELECT * FROM user_directory WHERE empid='$empcode'";
		$res2=mysql_query($query2);
		$row2=mysql_fetch_array($res2);
		$location=$row2['location'];
		$con_no=$row2['contact_no'];
		$emp_code=$row['emp_code'];
		$emp_name=$row['emp_name'];
		$leave_code=$row['leave_code'];
		$leave_start_date= date("d-m-Y", strtotime($row['leave_start_date']));
		$leave_end_date= date("d-m-Y", strtotime($row['leave_end_date']));
		$leave_taken_unit= date("d-m-Y", strtotime($row['leave_taken_unit']));
		$notified_date= date("d-m-Y", strtotime($row['notified_date']));
		$manager_name= date("d-m-Y", strtotime($row['manager_name']));


    $tr .= '
         <tr>
           <td> $location </td> 
		   <td> $emp_code </td>  
		   <td> $emp_name </td>  
		   <td> $leave_code </td>
		   <td> $leave_start_date </td>
		   <td> $leave_end_date </td>
		   <td> $leave_taken_unit </td>
		   <td> $notified_date </td>
		   <td> $manager_name </td>
         </tr>';
    }


$message = '
 <table border="4" width="100%" cellpadding="2" cellspacing="3">
   <tr>
   <th>Location</th>
   <th>Employee Code</th>
   <th>Employee Name</th>
   <th>Leave Type</th>
   <th>From Date</th>
   <th>To Date</th>
   <th>No Of Leave</th>
   <th>Leave Request Date</th>
   <th>Manager Name</th>
   <th>Contact Number</th>
   </tr>
   ' . $tr . '
 </table> 
 ';

// Send email (I suppose you getting the $to $subject and $headers from somewhere)
mail($to, $subject, $message, $headers);