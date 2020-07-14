<html>
<head>
<title>Resignation Management System</title>
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

function golink(t){
	window.location.href=t;
}
</script>
<script>

function check_cancel()
{
	
	
	$("#confirm_alert").dialog({
		width: 400,
		
		modal: true,
		buttons : {
		"Confirm" : function() {
			 e.preventDefault();
		  //window.location.href = targetUrl;
		  return false;
		},
		"Cancel" : function() {
			 e.preventDefault();
		  $(this).dialog("close");
		  return false;
		}
      }
    });
	
	
	
	
}
</script>
  <link rel="stylesheet" href="js/jquery-ui.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
</head>
<style>
body{  margin:10px; padding:0px;font: 62.5%/1.4 Arial,Helvetica,Verdana,sans-serif;}
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

.label {
    font: bold 100% Arial,Helvetica,sans-serif;
    color: #26306b;
    font-size: 10pt;
    min-width: 85px;
    display: inline-block;
    text-align: left;
}
.middleroung{width:auto;height:617px; margin:0 auto; background:#f7f5ee;border-radius:5px 5px 0 0; padding:10px;
 padding-bottom:21px;margin-top:24px;}
.middleroung h1{font-family: Arial, Helvetica, sans-serif;font-size: 15px;color: #191970;
    text-decoration: none;
    padding: 0 0 6px 0;}
.shadow{ background:url(images/shadow.png) no-repeat; width:911px; height:58px; margin:0 auto; clear:both; display:none;}


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
.leftsearch{float: left;
    font: bold 100% Arial,Helvetica,sans-serif;
    color: #26306b;
    font-size: 10pt;
    min-width:65px;
    display: inline-block;
    text-align: left;
    margin-top: 5px;}
.rightsearch{float: left;}
.input5{border: 1px solid #ccc;padding-left: 5px;
    height: 26px;
    
    font-family: arial;
    box-shadow: 0 0 10px #ccc inset;
    border-radius: 5px;
    color: #666;margin-right: 11px;}
.input5:focus{ outline:none;}

.title {
    padding-bottom:5px;
    border-bottom: 1px solid #191970;
    color: #191970!important;
    font-weight: bold;
    font-size: medium;
    text-align: left;
    font-size: 15px!important;margin-left:8px;
}

.left_move {margin-top: 2px;width: 62%;float: left;}

a {
    color: #5b677d;
    text-decoration: underline;
}

a:hover{ color:#428bca}
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
    padding: 3px;
}
.datagrid table thead th {background: transparent url("images/images/subheader_bg.png") repeat-x scroll 0px 0px;
    border-left: 1px solid #CCC;
    font-size: 12px !important;
    font-weight: bold;
    padding: 3px;
    white-space: nowrap;
    line-height: 29px;
}

.datagrid table thead th:first-child {
    border: none;
}

.datagrid table tbody td {
color: #000;
    /* border-left: 1px solid #E1EEF4; */
    font-size: 12px;
    font-weight: normal;
    background: 0;
    border: 1px solid;
    border-color: #d7d7d7 #e7e7e7;
    padding: 5px 6px; font-family:Arial, Helvetica, sans-serif;
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




.portlet-msg-info {
 background-color: #dff4ff !important;
 background-image:url(images/info.png) !important;
 background-repeat: no-repeat !important;
 border:1 px solid !important;
 border-color: #a7cedf !important;
 font: 11px Arial,Helvetica,Verdana,sans-serif !important;
 font-weight:bold !important;
}


.portlet-msg-info {
 background: #EEE none no-repeat 6px 50%;
 border: 1px solid #555;
 color: #34404f;
 display: block;
 font-weight: bold;
 margin: 2px auto 14px;
 padding: 6px 6px 6px 30px;
 text-align: left;    margin-top: 3px;
    box-shadow: 0 0 6px #CCE inset;
}

.middlesearch{width:21%;margin: 0 auto;}


.portlet-body{border:0px;}

</style>

<div class="middleroung">
<div class="left_move">
<span class="title">Associate View</span></div>
<?php
include("conn.php");
$id=$_GET['id'];
?>

<div class="fright">
<div class="rightsection">
<ul>
<?php if($id=='000004') {?>
<li><a href="javascript:void(0)" onclick="golink('permissions.php?id=<?php echo $id;?>')"><img src="images/managerp.png" title="Manager Permissions" width="64" height="58" /></a></li>

<li><a href="javascript:void(0)" onclick="golink('hr_permissions.php?id=<?php echo $id;?>')"><img src="images/hrp.png" title="HR Permissions" width="64" height="58" /></a></li>
<?php } ?>
<li><a href="javascript:void(0)" onclick="golink('part2.php?id=<?php echo $id;?>')"><img src="images/1.jpg" title="New Leave Query" width="64" height="58" /></a></li>
<?php
$manager_check="SELECT * FROM user_directory WHERE  empid='$id' AND (grade='M1' OR grade='M2' OR grade='M3' OR grade='M4' OR grade='S1' OR grade='S2' OR grade='S3' OR grade='S4')";
$res_check=mysql_query($manager_check);
$num_rows_check=mysql_num_rows($res_check);

if($num_rows_check>=1)
{
?>	

<li><a href="javascript:void(0)" onclick="golink('manager.php?id=<?php echo $id;?>')" ><img src="images/2.jpg" title="Manager View" width="64" height="58" /></a></li>
<?php } ?>

<?php
$hr_check="SELECT * FROM user_directory WHERE empid='$id' AND department='HR'";
$res_hr_check=mysql_query($hr_check);
$num_rows_hr=mysql_num_rows($res_hr_check);

if($num_rows_hr>=1)
{
?>
<li><a  href="javascript:void(0)" onclick="golink('hr.php?id=<?php echo $id;?>&&page=-1')"><img src="images/3.jpg" title="HR View" width="64" height="58" /></a></li>
<?php } ?>
</ul>

</div>


</div>

<div class="middlesearch">

<div class="mainsearch"></div>

<div class="leftsearch">Search</div>
<div class="rightsearch">
<form action="check_status.php" method="post">
<input type="hidden" name="empid" value="<?php echo $id;?>">
<select name="status" class="input5">
<option value="Approved">Approved</option>
<option value="Pending">Pending</option>
<option value="Rejected">Rejected</option>
</select>

</div>
<div style="width:6%; float:left;"><input style="background('images/sbutton.jpg');" type="submit" value="Show"></div>
</form>
</div>
<div class="clr"></div>
<div class="maintable5">

<div class="datagrid"><table>
<thead>
<?php
$first_date=date("Y-m-d",strtotime("-2 Months"));
$month=date("m")-2;
$current_month=date('m');
$year=date("Y");
$number = cal_days_in_month(CAL_GREGORIAN, $current_month, $year);
$current_date=date("Y-m-".$number);

//$previous_date=$year."-"."0".$month."-"."01";

$show_inf="SELECT * FROM user_regination WHERE  empid='$id' AND reg_status='Approved'";
$result=mysql_query($show_inf);
$num_rows_inf=mysql_num_rows($result);

?>

<tr>
<th >Application No</th><th>Associate Type</th><th>Code</th><th>Name</th><th>Location</th><th>Site</th><th>Associate Date</th><th>Manager Date</th><th>Reporting Manager</th><th>Status</th><th>Action</th>
</tr>
<?php ?>
</thead>

<tbody>
<tr>
<?php
while($row4=mysql_fetch_array($result))
{
$show_inf2="SELECT * FROM user_directory WHERE empid='$id'";
$result2=mysql_query($show_inf2);
$row41=mysql_fetch_array($result2);	
 ?>
<td>
<a  href="javascript:void(0)" onclick="golink('leave_view.php?id=<?php echo $row4['id']; ?>&& empid=<?php echo $id; ?>')" ><?php echo $row4['empid'];?></a>
</td>
<td><?php echo 'Regular';?></td>
<td><?php echo $row4['empid'];?></td>
<td><?php echo $row4['name'];?></td>
<td><?php echo $row41['location'];?></td>
<td>HO<?php //echo $row4['emp_site'];?></td>
<td><?php echo date("d-m-Y", strtotime($row4['req_date']));?></td>
<td><?php echo date("d-m-Y", strtotime($row4['manager_date']));?></td>
<td><?php echo $row4['manager'];?></td>
<td><?php echo $row4['reg_status'];?></td>
<td><a href="#" onclick="javascript:confirm('?main_id=<?php echo $row4['id'];?>&& empid=<?php echo $id; ?>');"><input type="button" name="button" value="Cancel"></a>
<div id="dialog-confirm" title="Confirm" style="display:none; font-size: 14px;">
    <p>Are you sure to cancel leave ?</p>
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
<?php if($num_rows_inf==0)
{
?>
<div class="portlet-msg-info"> No Results were found for the Selected Criteria </div>
<?php } ?>
</div>
<div class="shadow"></div>	
</html>