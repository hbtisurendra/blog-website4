<!-- HR View of all leave applications submitted by employees according to locations-->
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
	
<script>


$(function() {
		var t = new Date();
		var tm = parseInt(t.getMonth())+1;	
		$( "#hrdate1" ).datepicker({

			changeMonth: true,
			changeYear: true,
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
			minDate: new Date(),
			//maxDate : new Date(t.getFullYear(),11,31),
			//minDate: new Date(t.getFullYear()+","+tm+","+1),
			dateFormat:"dd/mm/yy",
		

		});

	});	
</script>
<title>Leave Management System</title>
<script>
function check_update()
{
	var x=confirm("Are you sure to post ?");
	if(x==true)
		return true;
	else
		return false;
	
}
</script>
<style>
body{ margin:10px; padding:0px;background:url('http://portal.progressive.in/html/icons/background.png');font: 62.5%/1.4 Arial,Helvetica,Verdana,sans-serif;}
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
.middleroung{ width:80%;height: auto; margin:0 auto; background:#f7f5ee; border-radius:5px 5px 0 0; padding:10px; padding-bottom:21px;margin-top:24px;  -webkit-box-shadow: 0 11px 6px -6px #434343;
    -moz-box-shadow: 0 10px 6px -6px #434343;
    /* box-shadow: 0 10px 6px -6px #777; */}

.middleroung h1{font-family: Arial, Helvetica, sans-serif;font-size: 15px;color: #191970;
text-decoration: none;
padding: 0 0 6px 0;}
a {
color: #5b677d;
text-decoration: underline;
}

a:hover{ color:#428bca}
.fright{ float:right; margin-right:20px;margin-top: 35px;}
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
.leftsearch{    float: left; font: bold 100% Arial,Helvetica,sans-serif;
color: #26306b;
font-size: 10pt;
min-width: 85px;
display: inline-block;
text-align: left;
margin-top: 5px;}
.rightsearch{float: left;}
.input5{border: 1px solid #ccc;    padding-left: 5px;
height: 26px;

font-family: arial;
box-shadow: 0 0 10px #ccc inset;margin-right:11px;
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
.middlesearch{width:71%;margin: 0 auto;}



</style>

</head>
<?php include("conn.php");
$id=$_POST['id'];
$location=$_POST['location'];
$status=$_POST['status'];
?>

<div class="middleroung">
<div class="left_move"><span class="title">HR Post Leave To ERP View</span></div>



<div class="fright">
<div class="rightsection">
<ul>
<li><a href="part1.php?id=<?php echo $id;?>"><img src="images/home.jpg" width="64" height="58" /></a></li>


</ul>

</div>


</div>
<div class="clr"></div>
<div class="middlesearch">
<div class="mainsearch">
</div>
<?php
$date1=$_POST['date1'];
$date2=$_POST['date2'];
?>
<div class="leftsearch">Search:</div>
<div class="rightsearch">
<form action="hr_location_search.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="text" id="hrdate1" class="input5" placeholder="Start Date" name="date1" <?php if(isset($date1)) {?> value="<?php echo $date1;?>" <?php }?> required>
<select name="location" id="location" class="input5">
<option value="NOIDA" <?php if($location=='NOIDA') echo "selected=selected";?>>NOIDA</option>
<option value="AHMEDABAD" <?php if($location=='AHMEDABAD') echo "selected=selected";?>>AHMEDABAD</option>
<option value="BHOPAL" <?php if($location=='BHOPAL') echo "selected=selected";?>>BHOPAL</option>
<option value="CHANDIGARH" <?php if($location=='CHANDIGARH') echo "selected=selected";?>>CHANDIGARH</option>
<option value="CHENNAI" <?php if($location=='CHENNAI') echo "selected=selected";?>>CHENNAI</option>
<option value="DUBAI" <?php if($location=='DUBAI') echo "selected=selected";?>>DUBAI</option>
<option value="HYDERABAD" <?php if($location=='HYDERABAD') echo "selected=selected";?>>HYDERABAD</option>
<option value="JAIPUR" <?php if($location=='JAIPUR') echo "selected=selected";?>>JAIPUR</option>
<option value="KOLKATA" <?php if($location=='KOLKATA') echo "selected=selected";?>>KOLKATA</option>
<option value="LUCKNOW" <?php if($location=='LUCKNOW') echo "selected=selected";?>>LUCKNOW</option>
<option value="MUMBAI" <?php if($location=='MUMBAI') echo "selected=selected";?>>MUMBAI</option>


</select>
<select name="status" class="input5">
<option <?php if($status=='Approved') echo 'selected=selected';?> value="Approved">Approved</option>
<option <?php if($status=='Pending') echo 'selected=selected';?> value="Pending">Pending</option>
<option <?php if($status=='Rejected') echo 'selected=selected';?>value="Rejected">Rejected</option>


</select>
<input type="text" id="hrdate2" class="input5" placeholder="End Date" name="date2" <?php if(isset($date2)) {?> value="<?php echo $date2;?>" <?php }?> required>

</div>
<div style="width:6%; float:left;"><!--<input style="background('images/sbutton.jpg');" type="submit" value="Show">--><input type="submit" name="submit" value="Display"></div>
</div>
</form>
<div class="maintable5">
<?php $query7="SELECT * from hr_permissions WHERE empid='$id' ";
$res7=mysql_query($query7);
$result7=mysql_fetch_array($res7);
$permissions=$result7['permission'];
?>

<?php

$final_date1_explode=explode('/',$date1);
$final_date2_explode=explode('/',$date2);
$final_date1_date=$final_date1_explode[0];
$final_date1_month=$final_date1_explode[1];
$final_date1_year=$final_date1_explode[2];
$final_date2_date=$final_date2_explode[0];
$final_date2_month=$final_date2_explode[1];
$final_date2_year=$final_date2_explode[2];
$date1=$final_date1_year."-".$final_date1_month."-".$final_date1_date;
$date2=$final_date2_year."-".$final_date2_month."-".$final_date2_date;





$current_month=date('m');
$current_year=date('Y');
$days_in_month = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);
$first_date=date($current_year."-".$current_month."-"."01");
$last_date=date($current_year."-".$current_month."-".$days_in_month);




$query="SELECT * FROM user_leave_trans WHERE leave_status='$status' AND leave_start_date>='$date1' AND leave_end_date<='$date2' ORDER BY emp_code";
$result=mysql_query($query);
$num_rows_result=mysql_num_rows($result);

?>
<div class="datagrid"><table>
<thead>
<?php //if($num_rows_result>0) {?>
<tr><th>Application No</th><th>Type</th><th>Code</th><th>Name</th><th>Location</th><th>Site</th><th>From Date</th><th>To Date</th><th>Count</th><th>Reporting Manager</th><th>Status</th><?php if($status=='Approved') {?><th>Action</th><?php } ?></tr>
<?php //}?>
</thead>
<tfoot></tfoot>
<tbody>

<?php
if($num_rows_result==0)
{
echo " <tr>

<td colspan='12' class='portlet-msg-info'>No Results were found for the Selected Criteria </td></tr>";die;		
	
}
 ?>



<?php 
while($row4=mysql_fetch_array($result))
{
$empid=$row4['emp_code'];	
$show_inf2="SELECT * FROM user_directory WHERE empid='$empid'";
$result2=mysql_query($show_inf2);
$row41=mysql_fetch_array($result2);
$location2=$row41['location'];
if($location2!=$location)
{
echo " <tr>

<td colspan='12' class='portlet-msg-info'>No Results were found for the Selected Criteria </td></tr>";die;	
}
if($location2==$location)
{
 ?>
<td><a href="leave_view.php?id=<?php echo $row4['id']; ?> && empid=<?php echo $id; ?>"><?php echo $row4['leave_application_no'];?></a></td><td><?php echo $row4['leave_code'];?></td><td><?php echo $row4['emp_code'];?></td><td><?php echo $row4['emp_name'];?></td><td><?php echo $row41['location'];?></td><td><?php echo $row4['emp_site'];?></td><td><?php echo date("d-m-Y", strtotime($row4['leave_start_date']));?></td><td><?php echo date("d-m-Y", strtotime($row4['leave_end_date']));?></td><td><?php echo $row4['leave_taken_unit'];?></td><td><?php echo $row4['manager_name'];?></td><td><?php echo $row4['leave_status'];?></td><?php if($status=='Approved') {?><td><a style="text-decoration:none;<?php if($current_date>$leave_logged_date) echo "pointer-events:none;"?>" onClick="return check_update();" href="update_status_hr.php?id=<?php echo $row4['id']; ?>&& empid=<?php echo $id; ?>"><input type="button" style="<?php if($current_date>$leave_logged_date) echo "background:none !important;"?>"  name="button"  value="Post"></a></td><?php }?></tr>
<?php }
	

} ?>
</tbody>

</table></div>


</div>

</div>
</body>
</html>
<!-- HR View of all leave applications submitted by employees according to locations-->