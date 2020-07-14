<html>
	<head>
	<!--Datepicker-->
	<link rel="stylesheet" href="datepicker/themes/base/jquery.ui.all.css">
	<script src="datepicker/jquery-1.10.2.js"></script>
	<script src="datepicker/ui/jquery.ui.core.js"></script>
	<script src="datepicker/ui/jquery.ui.widget.js"></script>
	<script src="datepicker/ui/jquery.ui.datepicker.js"></script>

	<!-- Datepicker-->
	<script src="public/js/main.js"></script>
	<link rel="stylesheet" href="dialog/jquery-ui.css">
	<script src="dialog/jquery-1.10.2.js"></script>
	<script src="dialog/jquery-ui.js"></script>
<?php session_start();?>
<script language="javascript">
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
  if(navigator.appName == "Netscape")
     document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
  function mischandler(){
   return false;
 }
  function mousehandler(e){
     var myevent = (isNS) ? e : event;
     var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
 }
 document.oncontextmenu = mischandler;
 document.onmousedown = mousehandler;
 document.onmouseup = mousehandler;
function killCopy(e){
    return false
}
function reEnable(){
    return true
}
/*
document.onselectstart = new Function ("return false"){
if (window.sidebar){
    document.onmousedown=killCopy
    document.onclick=reEnable
}
}
*/
function golink(t){
	window.location.href=t;
}
</script>
	<script>

	function mess()
	{
	jQuery("#hr_timeover").dialog({
		width: 400,
		modal: true,
		buttons: {
		Ok: function() {
		  $( this ).dialog( "close" );
		}
	  }
	});
	//alert("Your approval time is over. Please contact to admin.");
	return false;
	}


	$(function() {
		var t = new Date();
		var tm = parseInt(t.getMonth())+1;	
		$( "#hrdate1" ).datepicker({

			changeMonth: true,
			changeYear: true,
			yearRange: '2015:2030',
			//minDate: new Date(t.getFullYear()+","+tm+","+1),
			//maxDate : new Date(t.getFullYear(),11,31),
			dateFormat:"dd/mm/yy",
			 onClose: function( selectedDate ) {
		  if(selectedDate != ""){
			var new_mindate = $('#hrdate1').datepicker('getDate', '+1d');
			new_mindate.setDate(new_mindate.getDate()); 
			$( "#hrdate2" ).val(selectedDate);
			$( "#hrdate2" ).datepicker("option", "minDate", new_mindate );
			//$( "#datepicker2" ).datepicker("show");
		  }
	  }

		});

	});


	$(function() {
		var t = new Date();
		var tm = parseInt(t.getMonth())+1;	
		$( "#hrdate2" ).datepicker({
				
			changeMonth: true,
			changeYear: true,
			yearRange: '2015:2030',
			//minDate: new Date(),
			//maxDate : new Date(t.getFullYear(),11,31),
			//minDate: new Date(t.getFullYear()+","+tm+","+1),
			dateFormat:"dd/mm/yy",
		

		});

	});	
	</script>
	<title>Leave Management System</title>


	<script>
	function confirm(callback){

	var urlval = jQuery('#hr_update_redirecturl').val();
	var nurlval = urlval+callback;

	$( "#dialog-confirm_hr" ).dialog({
		resizable: false,
		modal: false,
		buttons: {
			"Ok": function() {
				window.location.href=nurlval;
				$( this ).dialog( "close" );
				eval(callback)
			},
			Cancel: function() {
				$( this ).dialog( "close" );
				return false;
			}
		}
	});
	}

	function do_function(params,checkid){



	console.log('approved');
	}
	jQuery(document).ready(function(){

		var hasClass = $('.new').length;

			if(hasClass >= 1)
			{
			$(".portlet-msg-info1").css('display','none');
			}
		  
	});



	</script>

	<style>
	body{ margin:10px; padding:0px;font: 62.5%/1.4 Arial,Helvetica,Verdana,sans-serif;}
	input[type="submit"], input[type="button"], input[type="reset"], button {
	background: #d4d4d4 url(images/header_bg.png) repeat-x 0 0;
	border: 1px solid;
	border-color: #c8c9ca #9e9e9e #9e9e9e #c8c9ca;
	color: #666;
	cursor: pointer;
	border-radius: 5px;
	font-weight: bold;
	overflow: visible;
	line-height: 21px;
	margin-top: 0px;
	text-shadow: 1px 1px #FFF;
	width: auto;
	height: auto;
	font-size: 12px;    padding-right: 8px;
	}
	.middleroung{width:auto;height:617px; auto; margin:0 auto; background:#f7f5ee; border-radius:5px 5px 0 0; padding:10px;
	padding-bottom:21px;margin-top:24px;}

	.middleroung h1{font-family: Arial, Helvetica, sans-serif;font-size: 15px;color: #191970;
	text-decoration: none;
	padding: 0 0 6px 0;}
	a {
	color: #5b677d;
	text-decoration: underline;
	}




	a:hover{ color:#428bca}
	.fright{ float:right; margin-right:20px;margin-top:4px;}
	.rightsection{ float:left;}
	.rightsection ul{ margin:0px; padding:0px;}
	.rightsection ul li{ float:left; list-style:none;padding: 0 9px;}
	.rightsection ul li:hover{opacity: 0.75; cursor:pointer;}
	.fright1{ float:right;}
	.rightsection1{ float:left;}
	.rightsection1 ul{ margin:0px; padding:0px;}
	.rightsection1 ul li{ float:left; list-style:none;padding: 0 9px;}
	.rightsection1 ul li:hover{opacity: 0.75; cursor:pointer;}


	.mainsearch{ clear: both;text-align: center;}
	.leftsearch{    float: none; font: bold 100% Arial,Helvetica,sans-serif;
	color: #26306b;
	font-size: 10pt;
	min-width:65px;
	margin-right:10px;
	display: inline-block;
	text-align: left;
	margin-top: 5px;}
	.leftsearch1{ float: none; font: bold 100% Arial,Helvetica,sans-serif;
	color: #26306b;
	font-size: 10pt;
	min-width:65px;
	display: inline-block;
	text-align: left;
	margin-top: 5px;}
	.rightsearch{float: left;}
	.input5{border: 1px solid #ccc;    padding-left: 5px;
	height: 26px;
    width:120px;
	font-family: arial;
	box-shadow: 0 0 10px #ccc inset;
	margin-right:2px;
	border-radius: 5px;
	color: #666;}
	.input5:focus{ outline:none;}

	.input2{border: 1px solid #ccc;height: 26px;width: 168px;font-family: arial;box-shadow: 0 0 10px #ccc;}

	.middletable{ width:742px; margin:0 auto;    clear: both;}
	.demo {border-collapse:collapse;border: 1px solid #fff;
	box-shadow: 0 0 4px #ccc;
	padding: 6px;

	}
	.demo th { padding-top: 10px;
	font-family: arial;
	font-size: 13px;


	}
	.demo td { 
	line-height: 20px;
	padding-left: 27px;
	font-size: 14px;font-weight: bold;

	}

	.datagrid table {
	border-collapse: collapse;
	text-align: left;
	width: 100%;
	}
	.datagrid {
	font: normal 12px/150% Arial, Helvetica, sans-serif;
	background: #fff;
	overflow: hidden;
	border: 1px solid #ccc;

	}
	.datagrid table td,
	.datagrid table th {
	padding: 3px 10px;
	}
	.datagrid table thead th {background: transparent url("images/images/subheader_bg.png") repeat-x scroll 0px 0px;
	border-left: 1px solid #CCC;
	font-size: 12px !important;
	font-weight: bold;
	padding: 3px;
	white-space: nowrap;
	line-height: 29px;
	}
	.datagrid table tbody td {
	color: #000;
	/* border-left: 1px solid #E1EEF4; */
	font-size: 12px;
	font-weight: normal;
	background: 0;
	border: 1px solid;
	border-color: #d7d7d7 #e7e7e7;
	padding: 5px 10px;
	font-family: Arial, Helvetica, sans-serif;
	}
	.datagrid table tbody .alt td {
	background: #f5f8fb;
	color: #000;
	}
	.datagrid table tbody td:first-child {
	border-left: none;
	}
	.datagrid table tbody tr:last-child td {
	border-bottom: none;
	}
	.datagrid table tfoot td div {
	border-top: 1px solid #006699;
	background: #E1EEF4;
	}
	.datagrid table tfoot td {
	padding: 0;
	font-size: 12px
	}
	.datagrid table tfoot td div {
	padding: 2px;
	}
	.datagrid table tfoot td ul {
	margin: 0;
	padding: 0;
	list-style: none;
	text-align: right;
	}
	.datagrid table tfoot li {
	display: inline;
	}
	.datagrid table tfoot li a {
	text-decoration: none;
	display: inline-block;
	padding: 2px 8px;
	margin: 1px;
	color: #FFFFFF;
	border: 1px solid #006699;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F));
	background: -moz-linear-gradient( center top, #006699 5%, #00557F 100%);
	filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');
	background-color: #006699;
	}
	.datagrid table tfoot ul.active,
	.datagrid table tfoot ul a:hover {
	text-decoration: none;
	border-color: #006699;
	color: #FFFFFF;
	background: none;
	background-color: #00557F;
	}
	div.dhtmlx_window_active,
	div.dhx_modal_cover_dv {
	position: fixed !important;
	}


	.maintable5{ width:100%; margin:0 auto; clear:both;}
	.selectbox{width: 85%;height: 21px;margin-top: 5px;margin-bottom: 5px;}
	.input3{width: 83%;height: 14px;margin-top: 5px;margin-bottom: 8px;}

	.title {
	padding-bottom: 5px;    margin-left:8px;
	border-bottom: 1px solid #191970;
	color: #191970!important;
	font-weight: bold;
	font-size: medium;
	text-align: left;
	font-size: 15px!important;
	}

	.left_move {margin-top: 2px;width: 62%;float: left;}

	.clr{ clear:both;}
	.middlesearch{width:73%;margin: 0 auto;}

	.portlet-msg-info {
	background-color: #dff4ff !important;
	background-image:url(images/info.png) !important;
	background-repeat: no-repeat !important;
	border:1 px solid !important;
	border-color: #a7cedf !important;
	font: 11px Arial,Helvetica,Verdana,sans-serif !important;

	text-align: left;
	box-shadow: 0 0 6px #CCE inset;
	}


	.portlet-msg-info {
	background: #EEE none no-repeat 6px 50%;
	border: 1px solid #555;
	color: #34404f;
	display: block;
	font-weight: bold;
	margin:3px auto 14px;
	padding: 6px 6px 6px 30px;
	text-align: left;
	}
	.clr{float: left; margin-top: 29px;}
	.clr a{font-size:14px;}
	.rightsection ul{float:right;}
	</style>


	<head>
	<body>

	<?php include("conn.php");
   
	$id=$_GET['id'];
	if($_GET['status']!=''){
	$statusn=$_GET['status'];
	$location=$_GET['location'];
	$fromdate=$_GET['fromdate'];
	if (strpos($fromdate, '-') == true) {
			   $fromdate = explode('-',$fromdate);	
			    $fromdate=date($fromdate[2]."/".$fromdate[1]."/".$fromdate[0]);
	    }
	$todate=$_GET['todate'];
	if (strpos($todate, '-') == true) {
			   $to_date = explode('-',$todate);	
			   $todate=date($to_date[2]."/".$to_date[1]."/".$to_date[0]);
	    }
	$_SESSION['status'] = $statusn;
	$_SESSION['location'] = $location;
	
	$_SESSION['fromdate'] = $fromdate;
	$_SESSION['todate'] = $todate;
	
	   
	
	}else{
		unset($_SESSION['status']);
		unset($_SESSION['location']);
		unset($_SESSION['fromdate']);
		unset($_SESSION['todate']);
	}
	
	$rec_limit = 10;
	error_reporting(0);
	?>



	<div class="middleroung">
	<div class="left_move"><span class="title">HR View</span></div>



	<div class="fright">
	<div class="rightsection">
	<div class="clr">
	<?php
$hr_check="SELECT * FROM user_directory WHERE empid='$id' AND department='HR'";
$res_hr_check=mysql_query($hr_check);
$num_rows_hr=mysql_num_rows($res_hr_check);

if($num_rows_hr >=1)
{
?>

	
	</div>
	<ul>
	<li><a href="javascript:void(0)" onclick="golink('part1.php?id=<?php echo $id;?>')" ><img src="images/home.jpg" width="64" height="58" /></a></li>


	</ul>
<?php } ?>
	</div>


	</div>
	<div class="clr"></div>
	<div class="middlesearch">
	<div class="mainsearch">
	</div>
	<?php
	$curr_month=date('m');
	$curr_year=date('Y');
	$number_in_month = cal_days_in_month(CAL_GREGORIAN, $curr_month, $curr_year);
	$last_date=$number_in_month."/".$curr_month."/".$curr_year;
	?>
	
	
	<div class="rightsearch">
	<form action="hr.php?id=<?php echo $id;?>&&page=-1&&status=" method="post">
	<input type="hidden" name="id" value="<?php echo $id;?>">
    
	<div class="leftsearch">From Date:</div>
	<?php if($_SESSION['fromdate'] ==''){?>
	<input type="text" id="hrdate1" name="hrdate1" class="input5" placeholder="Start Date" <?php  
	if(isset($_POST['contact']) && !empty($_POST['id'])){
	$date1 = $_POST['hrdate1'];
	if(isset($date1)) {?> value="<?php echo $date1;?>"<?php }}else{?> value="<?php echo date('01/m/Y');  ?>" <?php }?> required>
	<?php }else{ ?>
	<input type="text" id="hrdate1" name="hrdate1" class="input5" placeholder="Start Date" <?php  
	if(!empty($_SESSION['fromdate'])){
	$fromdate = $_SESSION['fromdate'];
	if(isset($fromdate)) {?> value="<?php echo $fromdate;?>"<?php }}else{?> value="<?php echo date('01/m/Y');  ?>" <?php }?> required>
    <?php }?>
    
	<div class="leftsearch1">To Date:</div>
	<?php if($_SESSION['todate']==''){ ?>
	<input type="text" id="hrdate2" name="hrdate2" class="input5" placeholder="End Date" <?php  
	if(isset($_POST['contact']) && !empty($_POST['id'])){
	$date2 = $_POST['hrdate2'];
	if(isset($date2)) {?> value="<?php echo $date2;?>"<?php }}else{?> value="<?php echo $last_date; ?>" <?php }?>  required>

     <?php }else{ ?>
	<input type="text" id="hrdate2" name="hrdate2" class="input5" placeholder="Start Date" <?php  
	if(!empty($_SESSION['todate'])){
	$todate = $_SESSION['todate'];
	if(isset($todate)) {?> value="<?php echo $todate;?>"<?php }}else{?> value="<?php echo date('01/m/Y');  ?>" <?php }?> required>
    <?php }?>
	
	<?php $query71="SELECT u.location from user_directory as u join user_erp ur where u.empid = ur.emp_id and ur.emp_status='E' group by location";
	$res71=mysql_query($query71);
	//$result71=mysql_fetch_array($res71);
	//echo '<pre>';
	//print_r($result71);

	?>
	
	<select name="location" class="input5">
	
	<option value="ALL">ALL</option>
	<?php while($result71=mysql_fetch_array($res71)) {?>
   
   <?php if($_SESSION['location'] ==''){?>
	<option value="<?php echo $result71['location']; ?>" <?php  if(isset($_POST['contact']) && !empty($_POST['id'])){

	$location=$_POST['location']; 
	if($result71['location']==$location){ echo "selected=selected";}}?>><?php echo $result71['location']; ?></option>
	<?php }else{ ?>
	<option value="<?php echo $result71['location'];?>" <?php  if(!empty($_SESSION['location'])){

	$location=$_SESSION['location']; 
	if($result71['location']==$location){ echo "selected=selected";}}?>><?php echo $result71['location']; ?></option>
	<?php } ?>
	
	<?php } ?>
    

	</select>

	<select name="status" class="input5">
	
	<?php if($_SESSION['status'] !='Approved'){?>
	<option value="Approved" <?php if(isset($_POST['contact']) && !empty($_POST['id'])){
	  $status=$_POST['status'];
	if($status=='Approved' && $_SESSION['status']==''){ echo 'selected=selected';  } }  ?>>Approved</option>
	<?php } ?>
	<?php if($_SESSION['status'] !='Pending'){?>
	<option value="Pending" <?php if(isset($_POST['contact']) && !empty($_POST['id'])){

	
     $status=$_POST['status'];
	  if($status=='Pending' && $_SESSION['status']==''){ echo 'selected=selected'; }}  ?>>Pending</option>
	<?php } ?>
	<?php if($_SESSION['status'] !='Rejected'){?>
	<option value="Rejected" <?php if(isset($_POST['contact']) && !empty($_POST['id'])){

	 $status=$_POST['status'];
	 if($status=='Rejected' && $_SESSION['status']==''){ echo 'selected=selected';}}   ?>>Rejected</option>
   
   <?php }?>
    <?php if($_SESSION['status'] ==$_GET['status'] && $_SESSION['status'] !=''){?>
	<option value="<?php echo $_SESSION['status'];?>" <?php

	$status=$_SESSION['status']; if($status==$_SESSION['status']){ echo 'selected=selected';}  ?>><?php echo $_SESSION['status'];?></option>
	<?php } ?>
	</select>

	</div>
	<div style="width:6%; float:left;"><input type="submit" name="contact" value="Show"></div>
	</div>
	</form>


	<div class="maintable5">
	<?php $query7="SELECT * from hr_permissions WHERE empid='$id' ";
	$res7=mysql_query($query7);
	$result7=mysql_fetch_array($res7);
	$permissions=$result7['permission'];
   
  // print_r($_SESSION);
   
	?>
	<div class="datagrid" style=" margin-top:45px;"><table>
	<thead><tr>
	<th >Application No</th><th>Associate Type</th><th>Code</th><th>Name</th><th>Location</th><th>Site</th><th>Associate Date</th><th>Manager Date</th><th>Reporting Manager</th><th>Status</th>
	
	<th>HR Action</th>
	
		
		</tr></thead>
	<tfoot></tfoot>
	<tbody>
    



	<?php
	if(isset($_POST['contact']) && !empty($_POST['id'])){
		
		
	   $s_empid =  $_POST['id'];
	   $s_fromdate = $_POST['hrdate1'];
	   $s_location = $_POST['location'];
	   if($s_location =='ALL'){
		  $slocation = ""; 
	   }else{
		  $slocation = "AND ud.location='$s_location'";  
	   }
	   $s_status = $_POST['status'];
	   
	   $s_todate = $_POST['hrdate2'];
	 
	 $query_count="SELECT * FROM user_regination as ut join user_directory as ud on (ut.empid= ud.empid) WHERE ut.reg_status='$s_status'  $slocation ORDER BY ut.empid"; 
	  
	}else{
     
	 if($_SESSION['status'] !=''){
	 $s_status = $_SESSION['status'];
	   }else{
		$s_status = 'Approved';   
	   }	
		
	$query_count="SELECT * FROM user_regination WHERE reg_status='$s_status' ORDER BY empid";
	}
	$result_count=mysql_query($query_count);
	$only_count=mysql_num_rows($result_count);

	



	if(isset($_POST['contact']) && !empty($_POST['id'])){
		$s_empid =  $_POST['id'];
		$hrdate1 = $_POST['hrdate1'];
		$s_location = $_POST['location'];
		if($s_location =='ALL'){
		  $slocation = ""; 
	   }else{
		  $slocation = "AND ud.location='$s_location'";  
	   }
		
		
		 $s_status = $_POST['status'];
		$hrdate2 = $_POST['hrdate2'];
	   
		$final_date1_explode=explode('/',$hrdate1);
		$final_date2_explode=explode('/',$hrdate2);
		$final_date1_date=$final_date1_explode[0];
		$final_date1_month=$final_date1_explode[1];
		$final_date1_year=$final_date1_explode[2];
		$final_date2_date=$final_date2_explode[0];
		$final_date2_month=$final_date2_explode[1];
		$final_date2_year=$final_date2_explode[2];
		
		 $s_fromdate=$final_date1_year."-".$final_date1_month."-".$final_date1_date;
		
		  $s_todate=$final_date2_year."-".$final_date2_month."-".$final_date2_date;


	   $query = "SELECT * FROM user_regination as ut join user_directory as ud on (ut.empid= ud.empid) WHERE ut.reg_status='$s_status'  $slocation
	ORDER BY ut.empid"; 
	  
	}else{
		$current_month=date('m');
		$current_year=date('Y');
		$days_in_month = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);
		

		$current_date=date("Y-m-d h:i:s");
		if($_SESSION['status'] !=''){
			
		  $s_status = $_SESSION['status'];
		  $todate = $_SESSION['todate'];
		  $fromdate = $_SESSION['fromdate'];
		  $location = $_SESSION['location'];
		   if($location =='ALL'){
			  $slocation = ""; 
		   }else{
			  $slocation = "AND ud.location='$location'";  
		   }  
          
         
			   $to_date = explode('/',$todate);	
			   $last_date=date($to_date[2]."-".$to_date[1]."-".$to_date[0]);
			
			
			   $from_date = explode('/',$fromdate);
		       $first_date=date($from_date[2]."-".$from_date[1]."-".$from_date[0]);
			
		 
		}else{
		  $slocation = '';
		  $s_status = 'Approved';
          $first_date=date($current_year."-".$current_month."-"."01");
		  $last_date=date($current_year."-".$current_month."-".$days_in_month);		
		}
		$query="SELECT * FROM user_regination as ut join user_directory as ud on (ut.empid= ud.empid) WHERE ut.reg_status='$s_status'  $slocation
	ORDER BY ut.empid";

	}
   


	$result=mysql_query($query);
	 $num_rows_result=mysql_num_rows($result);
	if($num_rows_result==0)
	{
	echo "<tr style='width:100%;'>

	<td colspan='12' class='portlet-msg-info1' style='background:#dff4ff !important;'>No Results were found for the Selected Criteria </td></tr>";die;		

	}
	while($row4=mysql_fetch_array($result))
	{

    $empid=$row4['empid'];	
    $show_inf2="SELECT * FROM user_directory WHERE empid='$empid'";
	$result2=mysql_query($show_inf2);
	$row41=mysql_fetch_array($result2);
	//$count41=mysql_num_rows($result2);
	$location=$row41['location'];
	
	
		
	
	?>

		<tr class="new">
		<td>
		<a style='text-decoration:none;' href="javascript:void(0)" onclick="golink('leave_view.php?id=<?php echo $row4['id']; ?> && empid=<?php echo $id; ?>&&status=<?php echo $row4['reg_status'];?>&&location=<?php echo$s_location;?>&&fromdate=<?php echo $hrdate1; ?>&&todate=<?php echo $hrdate2; ?>')">APP-<?php echo $row4['id'];?></a>
		</td>
		<td><?php echo 'Regular';?></td>
		<td><?php echo $row4['empid'];?></td>
		<td><?php echo $row4['name'];?></td>
		<td><?php echo $location;?></td>
		<td>HO<?php //echo $row4['emp_site'];?></td>
		<td><?php echo $row4['req_date'];?></td>
		<td><?php echo $row4['manager_date'];?></td>
		<td><?php echo $row4['manager'];?></td>
		<td><?php echo $row4['reg_status'];?></td>
		<td><a href="#" onclick="javascript:confirm('?main_id=<?php echo $row4['id'];?>&& empid=<?php echo $id; ?>');"><input type="button" name="button" value="Cancel"></a>
		<div id="dialog-confirm" title="Confirm" style="display:none; font-size: 14px;">
		<p>Are you sure to cancel your resignation ?</p>
		</div>

		<input type="hidden" value="associate_cancel.php" id="redirecturl">

		<script>
		function confirm(callback){

		var urlval = jQuery('#redirecturl').val();
		var nurlval = urlval+callback;

		$( "#dialog-confirm" ).dialog({
			resizable: false,

			modal: false,
			buttons: {
				"Ok": function() {
					window.location.href=nurlval;
					$( this ).dialog( "close" );
					eval(callback)
				},
				Cancel: function() {
					$( this ).dialog( "close" );
					return false;
				}
			}
		});
		}

		function do_function(params){
		console.log('approved');
		}
		</script>


		</td>

		</tr>

	<?php } ?>
	</tbody>

	</table></div>
	

	</div>

	</div>
	<div class="ui-widget" title="Message" id="hr_timeover" style="display:none;font-size: 14px;margin-top:20px;">Your approval time is over. Please contact to admin.</div>
	</body>
	</html>
	<!-- HR View of all leave applications submitted by employees according to locations-->