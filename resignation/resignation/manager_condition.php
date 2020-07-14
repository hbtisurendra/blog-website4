<?php
include("conn.php");

function removeChr($str){
	return str_replace("'"," ",$str);
	
}

  $id=$_POST['main_id']; 
 
 

if ($_POST['approve'] == 'Approved') {
	$val_sub ='Approved';
	$manager=$_POST['manager_id'];
	$manager_remarks=removeChr($_POST['condition']);
	$condition=removeChr($_POST['condition']); 
	$optionval=$_POST['approve'];
    $query="UPDATE user_regination SET reg_status='$optionval',manager_remarks='$condition' WHERE id='$id'";
    $res=mysql_query($query);

	$query222="SELECT * FROM user_regination WHERE id='$id' and leave_status='$optionval'";

	$res222=mysql_query($query222);
   $value222= mysql_fetch_array($res222);
 $url="location:manager.php?id=".$manager;
   
} else if ($_POST['reject'] == 'Rejected') {
   $val_sub ='Rejected';
   $manager=$_POST['manager_id'];
   $manager_remarks=removeChr($_POST['condition']);
   $condition=removeChr($_POST['condition']);
   $optionval=$_POST['reject'];
   
   $query="UPDATE user_regination SET reg_status='$optionval',manager_remarks='$condition' WHERE id='$id'";
    $res=mysql_query($query);
   
   
  $url="location:manager.php?id=".$manager;
}else if($_POST['Submit'] == 'Submit') {
   
   $manager_remarks=removeChr($_POST['condition']);
   $manager=$_POST['manager_id'];
   $managerid=$_POST['managerid'];
   $condition=removeChr($_POST['condition']);
   $query_memail="SELECT * from user_directory where empid ='$managerid'";
   $res_m=mysql_query($query_memail);
   $val_m=mysql_fetch_array($res_m);
  
   $name = $val_m['name']; 
   $email = $val_m['email_id']; 
  
   $optionval='Pending';


 
    $query222="SELECT * FROM user_leave_trans WHERE id='$id' and leave_status='$optionval'";
$res222=mysql_query($query222);
$value222= mysql_fetch_array($res222);

 $empid=$value222['emp_code'];
 $emp_name=$value222['emp_name'];
 $site=$value222['emp_site'];
 $leave_application_no=$value222['leave_application_no'];
 $leave_code=$value222['leave_code'];

 $frdate=date('d/m/Y',strtotime($value222['leave_start_date']));
 $toend_date=date('d/m/Y',strtotime($value222['leave_end_date']));
 
 $start_an_fn_flag=$value222['start_an_fn_flag'];
 $end_an_fn_flag=$value222['end_an_fn_flag'];
 $leave_reason=$value222['leave_reason'];

 $leave_taken_unit=$value222['leave_taken_unit'];
 $remarks=$value222['leave_remark'];

 $own_email=$value222['emp_email_id'];
 $manager_email=$value222['manager_email_id'];

	$query333="SELECT * FROM user_directory WHERE empid='$empid'";
	$res333=mysql_query($query333);
	$value333= mysql_fetch_array($res333);

    $location=$value333['location'];
    $contact_no=$value333['contact_no'];
   
   
   $query="UPDATE user_leave_trans SET manager_id='$managerid',manager_name='$name',manager_email_id='$email' WHERE id='$id'";  
   $res=mysql_query($query);
   
  $url="location:manager.php?id=".$manager;
  $msg ='';
  $msgn  = "In current scenario associate $emp_name is now reporting to you. Kindly approve the leave request accordingly.";
}

if($start_an_fn_flag!=''){
	 
	 if($start_an_fn_flag=='W'){
		 
		  $session1 = 'Whole Day';
	 }
	  if($start_an_fn_flag=='F'){
		 
		  $session1 = 'First Half';
	 }
	 if($start_an_fn_flag=='S'){
		 
		  $session1 = 'Second Half';
	 }
 }
  if($end_an_fn_flag!=''){
	 
	 if($end_an_fn_flag=='W'){
		 
		  $session2 = 'Whole Day';
	 }
	  if($end_an_fn_flag=='F'){
		 
		  $session2 = 'First Half';
	 }
	 if($end_an_fn_flag=='S'){
		 
		  $session2 = 'Second Half';
	 }
 }
 
if($_POST['Submit'] == 'Submit') {
	
  $message = "$msg<br>
 <table border='1' width='90%' cellpadding='2' cellspacing='3'>
   <tr><td colspan='4' style='background:#1F497D;color:white;width:100%;'><b>Leave Request Details</b></td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Associate Code</td><td>$empid</td>
   <td style='background:#DCE6F1;color:#000;'>Associate Name</td><td>$emp_name</td></tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>Location</td><td>$location</td>
   <td style='background:#DCE6F1;color:#000;'>Site</td><td>$site</td></tr>
   <tr>
   <td style='background:#DCE6F1;color:#000;'>Application Number</td><td>$leave_application_no</td>
   <td style='background:#DCE6F1;color:#000;'>Leave Type</td><td>$leave_code</td></tr>
   </tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>From Date</td><td>$frdate</td>
   <td style='background:#DCE6F1;color:#000;'>To Date</td><td>$toend_date</td>
   </tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>Session</td><td>$session1</td>
   <td style='background:#DCE6F1;color:#000;'>Session</td><td>$session2</td></tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>No Of Leave</td><td>$leave_taken_unit</td>
   <td style='background:#DCE6F1;color:#000;'>Contact No</td><td>$contact_no</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Leave Reason </td><td colspan='3'> $leave_reason</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Remarks: </td><td colspan='3'> $remarks</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Manager Remarks: </td><td colspan='3'> $manager_remarks</td></tr>
   </table><br> 
 $msgn<br>
 Please click on this link  to <a target='_blank' href='http://portal.progressive.in/web/procare/leave-management/'> approve/reject</a> the leave request.
";

 $subject_format=$emp_name." - Applied"." -".$leave_code." from ".$frdate." to ".$toend_date.'-'.'Reporting Changed';
 $headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers .= "From: $manager_email". "\r\n";
 //$headers .= "Cc: $manager_email" ." \r\n";
 $to  = $email;

 //$to  = "shivendra.chaudhary@progressive.in";

//mail($to1, $subject_format, $message,$headers);
mail($to, $subject_format, $message,$headers);
	
}else if ($_POST['rejectbyhr'] == 'Reject by HR') {
 $message = "$msg<br>
 <table border='1' width='90%' cellpadding='2' cellspacing='3'>
   <tr><td colspan='4' style='background:#1F497D;color:white;width:100%;'><b>Leave Request Details</b></td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Associate Code</td><td>$empid</td>
   <td style='background:#DCE6F1;color:#000;'>Associate Name</td><td>$emp_name</td></tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>Location</td><td>$location</td>
   <td style='background:#DCE6F1;color:#000;'>Site</td><td>$site</td></tr>
   <tr>
   <td style='background:#DCE6F1;color:#000;'>Application Number</td><td>$leave_application_no</td>
   <td style='background:#DCE6F1;color:#000;'>Leave Type</td><td>$leave_code</td></tr>
   </tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>From Date</td><td>$frdate</td>
   <td style='background:#DCE6F1;color:#000;'>To Date</td><td>$toend_date</td>
   </tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>Session</td><td>$session1</td>
   <td style='background:#DCE6F1;color:#000;'>Session</td><td>$session2</td></tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>No Of Leave</td><td>$leave_taken_unit</td>
   <td style='background:#DCE6F1;color:#000;'>Contact No</td><td>$contact_no</td>
   </tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Leave Reason </td><td colspan='3'> $leave_reason</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Remarks: </td><td colspan='3'> $remarks</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Manager Remarks: </td><td colspan='3'> $manager_remarks</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>HR Remarks: </td><td colspan='3'> $hr_condition</td></tr>
   </table><br> 
 $msgn
";

 $subject_format=$emp_name." - Approved"." -".$leave_code." from ".$frdate." to ".$toend_date." Rejected by HR";
 $headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers .= "From: Attendance.Corp@progressive.in". "\r\n";
 $headers .= "Cc: $manager_email" ." \r\n";
 $to  = $own_email;

//$to  = "shivendra.chaudhary@progressive.in";

mail($to, $subject_format, $message,$headers);


}else if ($_POST['approvebyhr'] == 'Approve by HR') {
  $message = "$msg<br>
 <table border='1' width='90%' cellpadding='2' cellspacing='3'>
   <tr><td colspan='4' style='background:#1F497D;color:white;width:100%;'><b>Leave Request Details</b></td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Associate Code</td><td>$empid</td>
   <td style='background:#DCE6F1;color:#000;'>Associate Name</td><td>$emp_name</td></tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>Location</td><td>$location</td>
   <td style='background:#DCE6F1;color:#000;'>Site</td><td>$site</td></tr>
   <tr>
   <td style='background:#DCE6F1;color:#000;'>Application Number</td><td>$leave_application_no</td>
   <td style='background:#DCE6F1;color:#000;'>Leave Type</td><td>$leave_code</td></tr>
   </tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>From Date</td><td>$frdate</td>
   <td style='background:#DCE6F1;color:#000;'>To Date</td><td>$toend_date</td>
   </tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>Session</td><td>$session1</td>
   <td style='background:#DCE6F1;color:#000;'>Session</td><td>$session2</td></tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>No Of Leave</td><td>$leave_taken_unit</td>
   <td style='background:#DCE6F1;color:#000;'>Contact No</td><td>$contact_no</td>
   </tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Leave Reason </td><td colspan='3'> $leave_reason</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Remarks: </td><td colspan='3'> $remarks</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Manager Remarks: </td><td colspan='3'> $manager_remarks</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>HR Remarks: </td><td colspan='3'> $hr_condition</td></tr>
   </table><br> 
 $msgn
";

 $subject_format=$emp_name." - Rejected"." -".$leave_code." from ".$frdate." to ".$toend_date." Approved by HR";
 $headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers .= "From: Attendance.Corp@progressive.in". "\r\n";
 $headers .= "Cc: $manager_email" ." \r\n";
 $to  = $own_email;

//$to  = "shivendra.chaudhary@progressive.in";

mail($to, $subject_format, $message,$headers);


}else{

$message = "$msg<br>
 <table border='1' width='90%' cellpadding='2' cellspacing='3'>
   <tr><td colspan='4' style='background:#1F497D;color:white;width:100%;'><b>Leave Request Details</b></td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Associate Code</td><td>$empid</td>
   <td style='background:#DCE6F1;color:#000;'>Associate Name</td><td>$emp_name</td></tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>Location</td><td>$location</td>
   <td style='background:#DCE6F1;color:#000;'>Site</td><td>$site</td></tr>
   <tr>
   <td style='background:#DCE6F1;color:#000;'>Application Number</td><td>$leave_application_no</td>
   <td style='background:#DCE6F1;color:#000;'>Leave Type</td><td>$leave_code</td></tr>
   </tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>From Date</td><td>$frdate</td>
   <td style='background:#DCE6F1;color:#000;'>To Date</td><td>$toend_date</td>
   </tr>
  
   <tr><td style='background:#DCE6F1;color:#000;'>Session</td><td>$session1</td>
   <td style='background:#DCE6F1;color:#000;'>Session</td><td>$session2</td></tr>
   
   <tr><td style='background:#DCE6F1;color:#000;'>No Of Leave</td><td>$leave_taken_unit</td>
   <td style='background:#DCE6F1;color:#000;'>Contact No</td><td>$contact_no</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Leave Reason </td><td colspan='3'> $leave_reason</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Remarks: </td><td colspan='3'> $remarks</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>Manager Remarks: </td><td colspan='3'> $manager_remarks</td></tr>
   <tr><td style='background:#DCE6F1;color:#000;'>HR Remarks: </td><td colspan='3'> $hr_condition</td></tr>
   </table><br> 
 $msgn
";

 $subject_format=$emp_name." - ".$val_sub." -".$leave_code." from ".$frdate." to ".$toend_date ;
 $headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers .= "From: $manager_email". "\r\n";
 //$headers .= "Cc: $manager_email" ." \r\n";
$to  = $own_email;

//$to  = "shivendra.chaudhary@progressive.in";

mail($to, $subject_format, $message,$headers);

}


header($url);

?>

