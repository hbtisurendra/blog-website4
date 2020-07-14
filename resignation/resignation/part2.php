
<!-- Leave Application Form To Be Filled By Employee-->
<?php
session_start();
include("conn.php");
//@$idid=$_GET['idid'];
@$id=$_GET['id'];


 

?>

<html>
<head>
<title>Resignation Management System</title>

<script src="js/angular.js"></script>
  <script src="js/script.js"></script>
  

<link rel="stylesheet" href="datepicker/themes/base/jquery.ui.all.css">
	<script src="datepicker/jquery-1.10.2.js"></script>
	<script src="datepicker/ui/jquery.ui.core.js"></script>
	<script src="datepicker/ui/jquery.ui.widget.js"></script>
	<script src="datepicker/ui/jquery.ui.datepicker.js"></script>
	
	<!-- Datepicker-->
	
<link rel="stylesheet" href="style.css">


<script>


$(function() {
		var t = new Date();
		var tm = parseInt(t.getMonth())+1;
        var start = t;		
		
		$( "#datepicker" ).datepicker({

			changeMonth: true,
			changeYear: true,
			minDate: new Date(t.getFullYear()+","+tm+","+1),
			//maxDate : new Date(t.getFullYear(),11,31),
			dateFormat:"dd/mm/yy",
			 onClose: function( selectedDate ) {
    	  if(selectedDate != ""){
    		var new_mindate = $('#datepicker').datepicker('getDate', '+1d');
			new_mindate.setDate(new_mindate.getDate()); 
        	$( "#datepicker2" ).val(selectedDate);
			$( "#datepicker2" ).datepicker("option", "minDate", new_mindate );
			//$( "#datepicker2" ).datepicker("show");
    	  }
      }

		});

	});
	
	function test(s){
		var sd = jQuery("#dateofapp").val().split("/");
		var ed = jQuery("#datepicker").val().split("/");
		var oneDay = 24 * 60 * 60 * 1000; 
		// hours*minutes*seconds*milliseconds
		var firstDate = new Date(sd[2]+"/"+sd[1]+"/"+sd[0]);
		var secondDate = new Date(ed[2]+"/"+ed[1]+"/"+ed[0]);
		var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime()) / (oneDay)))+1;
		//document.getElementById('shortnotice').value = diffDays;
	  angular.element(document.querySelector("#shortnotice")).val(diffDays);
	}

	

</script>		
  <link rel="stylesheet" href="js/jquery-ui.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
 
 

 


</head>
<body>
<div id="dialog" title="Meassage" style='display:none;width:100px'>
  <p><strong> Your request successfully send. </strong></p>
</div>
<div id="dialogterms" title="Meassage" style='display:none; width:100px'>
  <p><strong> Please answer all questions before submission. </strong></p>
</div>

<div class="middleroung">
<div class="left_move">

<span class="title">Associate View</span></div>

<input type="hidden" name="leave" id="leave" value="<?php echo $leave_balance;?>">

<div class="fright1">
<div class="rightsection1">
<ul>
<?php
$hr_check="SELECT * FROM user_directory WHERE empid='$id' AND department='HR'";
$res_hr_check=mysql_query($hr_check);
$num_rows_hr=mysql_num_rows($res_hr_check);
?>
<li><a href="part1.php?id=<?php echo $id;?>"><img src="images/leavedetailicon.jpg" width="64" height="58" title="Go Back" /></a></li>
</ul>

</div>


</div>

<div class="clr"></div>
<div class="middletable">
<div style="color:red;font-weight:bold;text-align:center;font-size:18px;">

</div>
 
 
 
<div  ng-app="regination">
  <div ng-controller="RegController">
  <form name="form" class="css-form" ng-submit="update(user,value)" novalidate>
  
  
  
  
  <table width="741" cellpadding="2" class="demo back" style="margin-top:15px;border-radius:6px;">
	<?php $query="SELECT * FROM user_directory WHERE empid='$id'";
		  $res=mysql_query($query);
		  $value= mysql_fetch_array($res);
		
			
	?>
	<thead>
	
	<tr>
		<th class="headingbottom" bgcolor="#" style="color: #000;text-transform: uppercase;font-weight: bold;"></th>
		<th class="headingbottom" bgcolor="#" style="color:#;    font-weight: normal;"></th>
		<th class="headingbottom" bgcolor="#" style="color: #000;text-transform: uppercase;font-weight: bold;"></th>
		<th class="headingbottom" bgcolor="#" style="color:#; font-weight:normal;"></th>
	</tr>
	</thead>
	<tbody>

	<tr>
	  <td colspan="4" bgcolor="#f9f9f9" style="height:14px;"></td>

	  
	  </tr>
	  
	  
   <div class='emp1'>
	
	<tr>
		<td bgcolor="#f9f9f9">Associate Code :</td>
		<td align="left" bgcolor="#f9f9f9">
		  <label for="textfield"></label>
		
         <input type="text" class="input6 form-control" ng-model="user.empcode" ng-init="user.empcode='<?php echo $value['empid'];?>'" value="<?php echo $value['empid'];?>" name="empcode" ng-readonly="true" required="" />
    <br />
    <div ng-show="form.$submitted">
      <div ng-show="form.empcode.$error.required" class="alert alert-danger" >Please Enter Associate Code.</div>
    </div> 
		  
		 
		 
		 </td>
		<td align="left" bgcolor="#f9f9f9">Employee Name :</td>
		<td align="left" bgcolor="#f9f9f9">
		
		
		 <input type="text" class="input6 form-control" ng-model="user.empname" ng-init="user.empname='<?php echo $value['name'];?>'" value="<?php echo $value['name'];?>" name="empname" ng-readonly="true" required="" />
    <br />
    <div ng-show="form.$submitted">
      <div ng-show="form.empname.$error.required" class="alert alert-danger" >Please Enter Associate Name.</div>
    </div> 
		
		
		</td>
	</tr>
	<tr>
	  <td bgcolor="#f9f9f9">Department :</td>
	  <td align="left" bgcolor="#f9f9f9">
	    <label for="select"></label>
			
	    
		    <input type="text" class="input6 form-control" ng-model="user.department" ng-init="user.department='<?php echo $value['department'];?>'" value="<?php echo $value['department'];?>" name="department" ng-readonly="true" required="" />
    <br />
    <div ng-show="form.$submitted">
      <div ng-show="form.department.$error.required" class="alert alert-danger" >Please Enter Associate Department.</div>
    </div>
		
	   </td>
	  <td align="left" bgcolor="#f9f9f9">Designation :</td>
	  <td align="left" bgcolor="#f9f9f9">
	  
	  
	  <input type="text" class="input6 form-control" ng-model="user.designation" ng-init="user.designation='<?php echo $value['designation'];?>'" value="<?php echo $value['designation'];?>" name="designation" ng-readonly="true" required="" />
    <br />
    <div ng-show="form.$submitted">
      <div ng-show="form.designation.$error.required" class="alert alert-danger" >Please Enter Associate designation.</div>
    </div>
	  
	  
	 </td>
	  </tr>
	
	<tr>
	  <td bgcolor="#f9f9f9"> Date Of Resignation:</td>
	  <td align="left" bgcolor="#f9f9f9">
	  
	  
	   
	  <input type="text" class="input6 form-control" ng-model="user.dateofapp" ng-init="user.dateofapp='<?php echo date('d/m/Y');?>'" value="<?php echo date('d/m/Y');?>" name="dateofapp" id="dateofapp" ng-readonly="true" required="" />
    <br />
    <div ng-show="form.$submitted">
      <div ng-show="form.dateofapp.$error.required" class="alert alert-danger" >Please Enter Associate Date of Application.</div>
    </div>
	
	  
	  </td>
	  <td align="left" bgcolor="#f9f9f9">Reporting Manager :</td>
	  <td align="left" bgcolor="#f9f9f9"> 
	   
	  
	   
	   <input type="hidden" class="input6 form-control" ng-model="user.manager" ng-init="user.manager='<?php echo $value['manager'];?>'" value="<?php echo $value['manager'];?>" name="manager" ng-readonly="true" required="" />
	   
	   <input type="text" class="input6 form-control" ng-model="user.rmanager" ng-init="user.rmanager='<?php echo $value['manager_name'];?>'" value="<?php echo $value['manager_name'];?>" name="rmanager" ng-readonly="true" required="" />
    <br />
    <div ng-show="form.$submitted">
      <div ng-show="form.rmanager.$error.required" class="alert alert-danger" >Please Enter Associate Reporting manager.</div>
    </div>
	  
	  </td>
	  </tr>
	  <tr>
	  <td bgcolor="#f9f9f9">Requested Relieving Date :</td>
	  <td align="left" bgcolor="#f9f9f9">	
	    
	<input type="text" class="input6 form-control" name="rdreliving" id="datepicker"  ng-model="user.rdreliving" ng-init="user.rdreliving='<?php echo date('d/m/Y', strtotime("+90 days"));?>'" required  onchange ="test(this)" readonly/>
	
    <br />
    <div ng-show="form.$submitted">
      <div ng-show="form.rdreliving.$error.required" class="alert alert-danger">Please Enter Associate Requested date</div>
    </div>
	  </td>
	  <td  bgcolor="#f9f9f9">Notice Period:</td>
	  <td align="left" bgcolor="#f9f9f9"><input type="text" class="input6 form-control" ng-model="user.noticeperiod" ng-init="user.noticeperiod='<?php echo '90';?>'" value="<?php echo '90';?>" name="noticeperiod" ng-readonly="true" required="" /></td>
	  </tr>
     <tr>
	 <td bgcolor="#f9f9f9">Short Notice:</td>
	  <td align="left" bgcolor="#f9f9f9">	
	  
	<input type="text" class="input6 form-control" ng-model="user.shortnotice" ng-init="user.shortnotice='<?php echo '90';?>'" name="shortnotice" id="shortnotice" ng-readonly="true" required="" />
	 </td>
	  <td  bgcolor="#f9f9f9">&nbsp;</td>
	  <td align="left" bgcolor="#f9f9f9">&nbsp;</td>
	 
	 
     </tr>
	<tr>
	  <td style="vertical-align:top;" bgcolor="#f9f9f9">Reason :</td>
	
	<td colspan="3" align="left" style="width: 18em; 
    word-wrap: break-word;" bgcolor="#f9f9f9"> 
  
	
	<textarea class="area8" style="padding-left: 5px; height:50px; width:300px;" name="reason"  class="form-control" ng-model="user.reason" cols="" rows="8" required ></textarea>
	
    <br />
    <div ng-show="form.$submitted">
      <div ng-show="form.reason.$error.required" class="alert alert-danger" >Please Enter Associate Reason</div>
    </div>
	
	
	  </tr>
	  
    <tr>
	  <td style="vertical-align:top;" bgcolor="#f9f9f9">Remarks :</td>
	
	<td colspan="3" align="left" style="width: 18em; 
    word-wrap: break-word;" bgcolor="#f9f9f9"> 
  
	
	<textarea class="area8" style="padding-left: 5px; height:50px; width:300px;" name="remarks"  class="form-control" ng-model="user.remarks" cols="" rows="8" required ></textarea>
	
    <br />
    <div ng-show="form.$submitted">
      <div ng-show="form.remarks.$error.required" class="alert alert-danger" >Please Enter Associate Remarks</div>
    </div>
	
	
	  </tr>
	  </div>
	  <tr>
	  
	<td style="vertical-align:top;" bgcolor="#f9f9f9"> Condition :</td>
	<td colspan="3" align="left" style="width: 18em; 
    word-wrap: break-word; background:#fff;"> 
    
   
   
    <input type="checkbox" id="terms" name="terms" ng-model="user.terms" ng-true-value="'YES'" ng-false-value="'NO'" /> Your feedback is valuable. 
	<div class='nerror' style="color:red;"></div>
	
<div class="form-group" id="allQuestion" ng-show="user.terms=='YES'" style="max-height: 105px;
overflow: auto;">
  <div class='question3' rel="1">
  <label for="FirstName" class="col-md-9">
   
  1. My reason for leaving
  </label>
  <br>
  <table border="0" width="100%" style="background-color:#eeeeee">
  <tr><td width="50%">
	<label>
    <input type="radio" name='answer1' ng-model="user.answer1" value="Better Opportunity" required>
    Better Opportunity
  </label>
  </td><td width="50%">
  <label>
    <input type="radio" name='answer1' ng-model="user.answer1" value="Relocation" required>
    Relocation
  </label>
  </td>
  </tr><tr>
  <td>
  <label>
    <input type="radio" name='answer1' ng-model="user.answer1" value="Compensation" required>
    Compensation
  </label>
  </td>
  <td>
  <label>
    <input type="radio" name='answer1' ng-model="user.answer1" value="Marriage" required>
    Marriage
  </label>
  </td></tr><tr><td>
  <label>
    <input type="radio" name='answer1' ng-model="user.answer1" value="Working conditions" required>
    Working conditions
  </label>
  </td><td>
  <label>
    <input type="radio" name='answer1' ng-model="user.answer1" value="Contract End" required>
   Contract End
  </label>
  </td></tr><tr><td>
  <label>
    <input type="radio" name='answer1' ng-model="user.answer1" value="Further Studies" required>
   Further Studies
  </label></td></tr>
  </table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer1.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div> 
  </div>
  <div class='question3' rel="2">
  <label for="FirstName" class="col-md-9">
    2. I had clear understanding about the tasks that I was expected to perform 
  </label>
  <table width="100%" border="0" style="background-color:#eeeeee">
  <tr><td width="50%">
	<label>
    <input type="radio" name='answer2' ng-model="user.answer2" value="Strongly Agree" required>
    Strongly Agree
  </label>
  </td><td width="50%">
  <label>
    <input type="radio" name='answer2' ng-model="user.answer2" value="Partially Agree" required>
    Partially Agree
  </label></td></tr>
  <tr><td>
  <label>
    <input type="radio" name='answer2' ng-model="user.answer2" value="Partially Disagree" required>
    Partially Disagree
  </label>
  </td><td>
  <label>
    <input type="radio" name='answer2' ng-model="user.answer2" value="Strongly Disagree" required>
    Strongly Disagree
  </label></td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer2.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
  <div class='question3' rel="3">
  <label for="FirstName" class="col-md-9">
    3. I had all the resources to do my job effectively.  
  </label>
  <table width="100%" border="0" style="background-color:#eeeeee"><tr><td width="50%">
	<label>
    <input type="radio" name='answer3' ng-model="user.answer3" value="Strongly Agree" required>
    Strongly Agree
  </label></td>
  <td width="50%">
  <label>
    <input type="radio" name='answer3' ng-model="user.answer3" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><tr><td>
  <label>
    <input type="radio" name='answer3' ng-model="user.answer3" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer3' ng-model="user.answer3" value="Strongly Disagree" required>
    Strongly Disagree
  </label></td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer3.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
  
   <div class='question3' rel="4">
  <label for="FirstName" class="col-md-9">
 4. I received rewards recognition & for my good performance  
  </label>
 <table width="100%" border="0" style="background-color:#eeeeee">
 <tr><td>
	<label>
    <input type="radio" name='answer4' ng-model="user.answer4" value="Strongly Agree" required>
    Strongly Agree
  </label>
  </td>
  <td>
  <label>
    <input type="radio" name='answer4' ng-model="user.answer4" value="Partially Agree" required>
    Partially Agree
  </label>
  </td></tr>
  <tr><td>
  <label>
    <input type="radio" name='answer4' ng-model="user.answer4" value="Partially Disagree" required>
    Partially Disagree
  </label>
  </td><td>
  <label>
    <input type="radio" name='answer4' ng-model="user.answer4" value="Strongly Disagree" required>
    Strongly Disagree
  </label></td></tr> </table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer4.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
 
   <div class='question3' rel="5">
  <label for="FirstName" class="col-md-9">
   5. I received regular and constructive feedback about my performance       
  </label>
  <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer5' ng-model="user.answer5" value="Strongly Agree" required>
    Strongly Agree
  </label></td><td>
  <label>
    <input type="radio" name='answer5' ng-model="user.answer5" value="Partially Agree" required>
    Partially Agree
  </label></td></tr>
  <tr><td>
  <label>
    <input type="radio" name='answer5' ng-model="user.answer5" value="Partially Disagree" required>
    Partially Disagree
  </label>
  </td><td>
  <label>
    <input type="radio" name='answer5' ng-model="user.answer5" value="Strongly Disagree" required>
    Strongly Disagree
  </label></td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer5.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
   <div class='question3' rel="6">
  <label for="FirstName" class="col-md-9">
   6. My compensation and benefits were in line with the demands of my position      
  </label>
  <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer6' ng-model="user.answer6" value="Strongly Agree" required>
    Strongly Agree
  </label>
  </td><td>
  <label>
    <input type="radio" name='answer6' ng-model="user.answer6" value="Partially Agree" required>
    Partially Agree
  </label></td></tr>
  <tr><td>
  <label>
    <input type="radio" name='answer6' ng-model="user.answer6" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer6' ng-model="user.answer6" value="Strongly Disagree" required>
    Strongly Disagree
  </label></td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer6.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
   <div class='question3' rel="7">
  <label for="FirstName" class="col-md-9">
  7. I was comfortable talking to my manager about work problems      
  </label>
 <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer7' ng-model="user.answer7" value="Strongly Agree" required>
    Strongly Agree
  </label>
  </td><td>
  <label>
    <input type="radio" name='answer7' ng-model="user.answer7" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><td>
  <label>
    <input type="radio" name='answer7' ng-model="user.answer7" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer7' ng-model="user.answer7" value="Strongly Disagree" required>
    Strongly Disagree
  </label></td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer7.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
  
  <div class='question3' rel="8">
  <label for="FirstName" class="col-md-9">
  8. I received coaching, guidance or mentoring from my manager     
  </label>
 <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer8' ng-model="user.answer8" value="Strongly Agree" required>
    Strongly Agree
  </label></td><td>
  <label>
    <input type="radio" name='answer8' ng-model="user.answer8" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><tr><td>
  <label>
    <input type="radio" name='answer8' ng-model="user.answer8" value="Partially Disagree" required>
    Partially Disagree
  </label>
  </td><td>
  <label>
    <input type="radio" name='answer8' ng-model="user.answer8" value="Strongly Disagree" required>
    Strongly Disagree
  </label>  </td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer8.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
   <div class='question3' rel="9">
  <label for="FirstName" class="col-md-9">
  9. I had the opportunity to optimally use my skills    
  </label>
 <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer9' ng-model="user.answer9" value="Strongly Agree" required>
    Strongly Agree
  </label></td><td>
  <label>
    <input type="radio" name='answer9' ng-model="user.answer9" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><tr><td>
  <label>
    <input type="radio" name='answer9' ng-model="user.answer9" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer9' ng-model="user.answer9" value="Strongly Disagree" required>
    Strongly Disagree
  </label></td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer9.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
   <div class='question3' rel="10">
  <label for="FirstName" class="col-md-9">
  10. The organization's policies and practices were fair and flexible    
  </label>
   <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer10' ng-model="user.answer10" value="Strongly Agree" required>
    Strongly Agree
  </label></td><td>
  <label>
    <input type="radio" name='answer10' ng-model="user.answer10" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><tr><td>
  <label>
    <input type="radio" name='answer10' ng-model="user.answer10" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer10' ng-model="user.answer10" value="Strongly Disagree" required>
    Strongly Disagree
  </label>  </td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer10.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
  
   <div class='question3' rel="11">
  <label for="FirstName" class="col-md-9">
  11. I got timely attention to resolve my grievances & concerns   
  </label>
  <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer11' ng-model="user.answer11" value="Strongly Agree" required>
    Strongly Agree
  </label>
  </td><td>
  <label>
    <input type="radio" name='answer11' ng-model="user.answer11" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><tr><td>
  <label>
    <input type="radio" name='answer11' ng-model="user.answer11" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer11' ng-model="user.answer11" value="Strongly Disagree" required>
    Strongly Disagree
  </label></td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer11.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
  <div class='question3' rel="12">
  <label for="FirstName" class="col-md-9">
 12. My organization helped to fulfill my career goals  
  </label>
  <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer12' ng-model="user.answer12" value="Strongly Agree" required>
    Strongly Agree
  </label></td><td>
  <label>
    <input type="radio" name='answer12' ng-model="user.answer12" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><tr><td>
  <label>
    <input type="radio" name='answer12' ng-model="user.answer12" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer12' ng-model="user.answer12" value="Strongly Disagree" required>
    Strongly Disagree
  </label> </td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer12.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
   <div class='question3' rel="13">
  <label for="FirstName" class="col-md-9">
 13. I was able to find time for my personal commitments  
  </label>
<table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer13' ng-model="user.answer13" value="Strongly Agree" required>
    Strongly Agree
  </label></td><td>
  <label>
    <input type="radio" name='answer13' ng-model="user.answer13" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><tr><td>
  <label>
    <input type="radio" name='answer13' ng-model="user.answer13" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer13' ng-model="user.answer13" value="Strongly Disagree" required>
    Strongly Disagree
  </label></td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer13.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
   <div class='question3' rel="14">
  <label for="FirstName" class="col-md-9">
 14. I will be happy to join Progressive in future.  
  </label>
  <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer14' ng-model="user.answer14" value="Strongly Agree" required>
    Strongly Agree
  </label></td><td>
  <label>
    <input type="radio" name='answer14' ng-model="user.answer14" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><tr><td>
  <label>
    <input type="radio" name='answer14' ng-model="user.answer14" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer14' ng-model="user.answer14" value="Strongly Disagree" required>
    Strongly Disagree
  </label> </td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer14.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
   <div class='question3' rel="15">
  <label for="FirstName" class="col-md-9">
 15. I would recommend my friend/s and relatives to work with Progressive 
  </label>
   <table width="100%" border="0" style="background-color:#eeeeee"><tr><td>
	<label>
    <input type="radio" name='answer15' ng-model="user.answer15" value="Strongly Agree" required>
    Strongly Agree
  </label></td><td>
  <label>
    <input type="radio" name='answer15' ng-model="user.answer15" value="Partially Agree" required>
    Partially Agree
  </label></td></tr><tr><td>
  <label>
    <input type="radio" name='answer15' ng-model="user.answer15" value="Partially Disagree" required>
    Partially Disagree
  </label></td><td>
  <label>
    <input type="radio" name='answer15' ng-model="user.answer15" value="Strongly Disagree" required>
    Strongly Disagree
  </label> </td></tr></table>
  <div ng-show="form.$submitted">
      <div ng-show="form.answer15.$error.required" class="alert alert-danger" >Please select an answer.</div>
    </div>
  </div>
  
</div>

                       

 </div>
	</td>
	
	
  
  
	  </tr>

	
   
	  
	<tr>
	  <td bgcolor="#f9f9f9">&nbsp;</td>
	  <td align="center" bgcolor="#f9f9f9">&nbsp;</td>
	  <td align="left"  bgcolor="#f9f9f9">
	    
       <input type="submit" style="margin-left: -63px;
margin-top: 14px;" class="btn"  value="Submit" />
		
	   </td>
	  
	  <td align="center" bgcolor="#f9f9f9">&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#f9f9f9">&nbsp;</td>
	  <td align="center" bgcolor="#f9f9f9">&nbsp;</td>
	  <td align="center" bgcolor="#f9f9f9">&nbsp;</td>
	  <td align="center" bgcolor="#f9f9f9">&nbsp;</td>
	  </tr>
	</tbody>
</table>
  
  </form>
  <!--<br>
 
   <pre>master = {{master | json}}</pre> -->
  </div>
 </div>

 
 <script>
  $(document).ready(function(){
	$("#allQuestion").find("input").click(function(){
		var ScrollDiv = $(this).closest(".question3");
		var ScrollVal = ScrollDiv.attr("rel");
		
		var ScrollDiv_h = 0;
		
	
		
		for(i=1;i<=ScrollVal;i++){
			ScrollDiv_h+= $(".question3[rel='"+i+"']").outerHeight();
		}
		
		
		$("#allQuestion").scrollTop(ScrollDiv_h);
	});
 });
 </script>
 
</body>

</html>
<!-- Leave Application Form To Be Filled By Employee-->