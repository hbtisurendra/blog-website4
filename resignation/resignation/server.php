<?php
include("conn.php");
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
  
  if(isset($_GET["log"]))
  {
    // AJAX form submission
    $log = json_decode($_GET["log"]);
	
	$empcode =  $log->empcode;
	$empname =  $log->empname;
	$department =  $log->department;
	$designation =  $log->designation;
	$rmanager =  $log->rmanager;
	$manager =  $log->manager;
	$dateofapp =  $log->dateofapp;
	$rdreliving =  $log->rdreliving;
	
	$noticeperiod =  $log->noticeperiod;
	$shortnotice =  $log->shortnotice;
	
	$terms =  $log->terms;
	$answer1 =  $log->answer1;
	$answer2 =  $log->answer2;
	$answer3 =  $log->answer3;
	$answer4 =  $log->answer4;
	$answer5 =  $log->answer5;
	$answer6 =  $log->answer6;
	$answer7 =  $log->answer7;
	$answer8 =  $log->answer8;
	$answer9 =  $log->answer9;
	$answer10 =  $log->answer10;
	$answer11 =  $log->answer11;
	$answer12 =  $log->answer12;
	$answer13 =  $log->answer13;
	$answer14 =  $log->answer14;
	$answer15 =  $log->answer15;
	$allanswer = array(
	"$answer1",
	"$answer2",
	"$answer3",
	"$answer4",
	"$answer5",
	"$answer6",
	"$answer7",
	"$answer8",
	"$answer9",
	"$answer10",
	"$answer11",
	"$answer12",
	"$answer13",
	"$answer14",
	"$answer15"
	);
	
	$reason =  $log->reason;
	$remarks =  $log->remarks;
	$mremarks = 'NULL';
	$hremarks = 'NULL';
	$regstatus = 'Pending';
    if($answer15 !=''){
		$ii = 1;
	 foreach($allanswer as $valall)	{    
	$final_query_ans=mysql_query("INSERT INTO reg_question (empid, answer, q_id) VALUES('$empcode','$valall','$ii')");
	  $ii++;
	  }
	 }
   
	if($remarks !=''){
	$final_query=mysql_query("INSERT INTO user_regination (empid, name, department, designation, manager,manager_id,req_date, manager_date, reason,remarks, manager_remarks, hr_remarks,reg_status,notice_peroid,req_notice_peroid) VALUES('$empcode','$empname','$department','$designation','$rmanager','$manager','$dateofapp','$rdreliving','$reason','$remarks','$mremarks','$hremarks','$regstatus','$noticeperiod','$shortnotice')");
	}
	
    $result = json_encode(array(
      "empcode" => $log->empcode,
      "empname" => $log->empname,
      "department" => $log->department,
      "designation" => $log->designation,
      "rmanager" => $log->rmanager,
      "dateofapp" => $log->dateofapp,
      "rdreliving" => $log->rdreliving,
      "reason" => $log->reason,
      "remarks" => $log->remarks
     ));
	
	
  }
  else
  {
    $result = "INVALID REQUEST DATA";
  }

  echo $result;
}
?>