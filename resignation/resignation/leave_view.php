<!-- Displaying of leave records of particular associate according to application id -->
<?php include("conn.php");
session_start();
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="dialog/jquery-ui.css">
<script src="dialog/jquery-1.10.2.js"></script>
<script src="dialog/jquery-ui.js"></script>

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

jQuery( document ).ready(function() {
    
	$("#mapprove").submit(function() {
    if ($("input[type='submit']").val() == "Approved") {
		
		var con = jQuery('#condition').val();
		if(con==''){
		jQuery("#manager_remarks").dialog({
		width: 400,
		modal: true,
		buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });	
			
        //alert("Please Enter Manager Remarks");
        return false;
		}
    }
	
});
$("#mapprove").submit(function() {
    if ($("input[type='submit']").val() == "Rejected") {
        var con = jQuery('#condition').val();
		if(con==''){
		
		jQuery("#manager_remarks").dialog({
		width: 400,
		modal: true,
		buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });	
	
		//alert("Please Enter Manager Remarks");
        
        return false;
		}
    }

});

});

</script>
<style>
body{ margin:10px; padding:0px;font: 62.5%/1.4 Arial,Helvetica,Verdana,sans-serif;overflow-x:hidden;}
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
.middleroung{width:auto;height: 600px; margin:0 auto; background:#f7f5ee;border-radius:5px 5px 0 0; padding:10px;
 padding-bottom:21px;margin-top:24px;}

.middleroung h1{font-family: Arial, Helvetica, sans-serif;font-size: 15px;color: #191970;
    text-decoration: none;
    padding: 0 0 6px 0;}
.shadow{ background:url(images/shadow.png) no-repeat; width:911px; height:58px; margin:0 auto; clear:both; display:none;}
.fright{ float:right; margin-right:20px;margin-top: 35px;}
.rightsection{ float:right;}
.rightsection ul{ margin:0px; padding:0px;}
.rightsection ul li{ float:left; list-style:none;padding: 0 9px;}
.rightsection ul li:hover{opacity: 0.75; cursor:pointer;}
.fright1{ float:right;}
.rightsection1{ float:left;}
.rightsection1 ul{ margin:0px; padding:0px;}
.rightsection1 ul li{ float:left; list-style:none;padding: 0 9px;}
.rightsection1 ul li:hover{opacity: 0.75; cursor:pointer;}


.mainsearch{ clear: both;text-align: center;}
.leftsearch{    float: left;
    margin-left: 397px;
    font: bold 100% Arial,Helvetica,sans-serif;
    color: #26306b;
    font-size: 10pt;
    min-width: 85px;
    display: inline-block;
    text-align: left;
    margin-top: 5px;}
.rightsearch{float: left;}
.input5{border: 1px solid #ccc;
    height: 25px;
    
    font-family: arial;
    box-shadow: 0 0 10px #ccc inset;
    border-radius: 5px;padding-left: 5px;
    color: #666;}
.input5:focus{ outline:none;}

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
.datagrid {background: rgba(237,237,237,1);
background: -moz-linear-gradient(top, rgba(237,237,237,1) 0%, rgba(246,246,246,1) 34%, rgba(247,245,238,1) 63%, rgba(247,245,238,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(237,237,237,1)), color-stop(34%, rgba(246,246,246,1)), color-stop(63%, rgba(247,245,238,1)), color-stop(100%, rgba(247,245,238,1)));
background: -webkit-linear-gradient(top, rgba(237,237,237,1) 0%, rgba(246,246,246,1) 34%, rgba(247,245,238,1) 63%, rgba(247,245,238,1) 100%);
background: -o-linear-gradient(top, rgba(237,237,237,1) 0%, rgba(246,246,246,1) 34%, rgba(247,245,238,1) 63%, rgba(247,245,238,1) 100%);
background: -ms-linear-gradient(top, rgba(237,237,237,1) 0%, rgba(246,246,246,1) 34%, rgba(247,245,238,1) 63%, rgba(247,245,238,1) 100%);
background: linear-gradient(to bottom, rgba(237,237,237,1) 0%, rgba(246,246,246,1) 34%, rgba(247,245,238,1) 63%, rgba(247,245,238,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#f7f5ee', GradientType=0 ); border-top:3px solid #25336a;overflow: hidden;
    padding: 11px;
   
}
.datagrid table td,
.datagrid table th {
    padding: 3px 10px;
}
.datagrid table thead th {    background: url(images/images/subheader_bg.png) 0 0 repeat-x;    border-left: 1px solid #ccc;
    border-color: #d7d7d7 #e7e7e7;white-space: nowrap;
    /* border: 1px solid #ccc; */
    color: #000;
 font-size:12px!important;
    font-weight: bold;line-height: 24px;
    text-transform: capitalize;
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
    /* border: 1px solid; */
    border-color: #d7d7d7 #e7e7e7;
    padding: 8px 10px;
    font-family: Arial, Helvetica, sans-serif;
    border-bottom: 1px solid #ccc;white-space: -moz-pre-space;
}




.datagrid table tbody .alt td {
    background: #f5f8fb;
    color: #000;
}
.datagrid table tbody td:first-child {
   
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
 text-align: left;
}


.innerbox {
    width: 70%;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    background: #f2f2f2;
    margin: 0 auto;
    border: 1px solid #dedede;
}


.newinput{width:154%;height:79%;border:1px solid #cecece;
border-radius:3px;padding-left:5px;"}



.datagrid table {
    border-collapse: collapse;
    text-align: left;
    width:100%;
    margin: 0 auto;
}
.datagrid {
    font: normal 12px/150% Arial, Helvetica, sans-serif;
    background: #fff;
    width: 70%;
    overflow: hidden;
    border: 1px solid #006699;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.datagrid table td,
.datagrid table th {
    padding: 3px 10px;
}
.datagrid table thead th {    background: url(images/images/subheader_bg.png) 0 0 repeat-x;    border-left: 1px solid #ccc;

color: #000;
font-size:12px!important;
font-weight: bold;

    padding: 9px;
text-transform: capitalize;
}
.datagrid table thead th:first-child {
    
}
.datagrid table tbody td {
    color: #00496B;
    
    font-size: 12px!important;
    font-weight: normal;
}
.datagrid table tbody .alt td {
    background: #E1EEF4;
    color: #00496B;
}
.datagrid table tbody td:first-child {

}
.datagrid table tbody tr:last-child td {

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
.text10{padding: 8px !important;
font-family: arial !important;
font-size: 12px !important;}

</style>

</head>
<?php

$id=$_GET['id'];
$empid=$_GET['empid'];
$query="SELECT * FROM user_regination WHERE id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res);
$emp=$row['empid'];
$leave_status=$row['reg_status'];
$manager_id=$row['manager_id'];
$query2="SELECT * FROM user_directory Where empid='$emp'";
$res2=mysql_query($query2);
$row2=mysql_fetch_array($res2);

if($_GET['status'] !=''){
$preval = $_GET['status'];
$location = $_GET['location'];
$fromdate = $_GET['fromdate'];
$todate = $_GET['todate'];
}

 ?>
<body style="background:url('http://portal.progressive.in/html/icons/background.png');">
<div class="middleroung">
<div class="left_move">
<span class="title">Resignation Details View</span></div>


<div class="rightsection">
<ul>
 <?php if($_GET['status'] !=''){?>
<li><a href="javascript:void(0)" onclick="golink('<?php echo $_SERVER['HTTP_REFERER'];?>&&status=<?php echo $preval;?>&&location=<?php echo $location;?>&&fromdate=<?php echo $fromdate;?>&&todate=<?php echo $todate;?>')"><img style="width:64px;height:58px;margin-top: 15px;" src="images/leavedetailicon.jpg"></a></li>
 <?php }?>
  <?php if($_GET['status'] ==''){?>
<li><a href="javascript:void(0)" onclick="golink('<?php echo $_SERVER['HTTP_REFERER'];?>')"><img style="width:64px;height:58px;margin-top: 15px;" src="images/leavedetailicon.jpg"></a></li>
 <?php }?>
</ul>
</div>

<div class="datagrid" style="margin:0 auto; width:70%; margin-top:85px;">
<table width="70%">
	<tr>
		<td width="25%"><b>Employee Code:</b></td>
		<td width="25%"><?php echo $row['empid'];?></td>
		<td width="25%"><b>Employee Name: </b></td>
		<td width="25%"><?php echo $row['name'];?></td>
	</tr>
	<tr>
		<td><b>Department:</b></td>
		<td><?php echo $row['department'];?></td>
		<td><b>Designation:</b></td>
		<td><?php echo $row['department'];?></td>
	</tr>
	<tr>
		<td><b>Date Of Application:</b></td>
		<td><?php echo $row['req_date'];?></td>
		<td><b>Reporting Manager:</b></td>
		<td><?php echo $row['manager'];?></td>
	</tr>
	<tr>
		<td><b>Requested Relieving Date:</b></td>
		<td><?php echo $row['manager_date'];?></td>
	    <td><b>Resignation Status:</b></td>
		<td><?php echo $row['reg_status'];?></td>
	</tr>
	<tr>
		<td><b>Notice Period:</b></td>
		<td><?php echo $row['notice_peroid'];?></td>
	    <td><b>Short Notice:</b></td>
		<td><?php echo $row['req_notice_peroid'];?></td>
	</tr>
	<tr>
		<td><b>Location:</b></td>
		<td><?php echo $row2['location'];?></td>
	    <td><b>&nbsp;</b></td>
		<td>&nbsp;</td>
	</tr>
	
</table>
<table width="100%">
<tr><td style="border: 0;" width="24%">
<b>Reason</b>
</td>
<td colspan="3" style="border: 0; ">
<input type="text" readOnly value="<?php echo $row['reason'];?>" name="reason" style="width:52%;height:30px;border:1px solid #cecece;
border-radius:3px;padding-left:6px;margin-left:3px;">
</td>

</tr>
<tr>
<td style="vertical-align:top;border-bottom:0px;" ><b>Associate Remarks</b></td>
<td colspan="3" style="border:0px;">
<textarea name="remarks" style="font-family: arial;font-size: 13px;padding:7px;border:1px solid #cecece;margin:0px;" readOnly cols="48"  ><?php echo $row['remarks'];?></textarea>	

<form action="manager_condition.php" name="manager_condition" method="post" id="mapprove" style="margin:0px;height:0px;">
<input type="hidden" name="main_id" id="main_id" value="<?php echo $row['id'];?>">
<input type="hidden" name="manager_id" id="manager_id" value="<?php echo $row['manager_id'];?>">



</td></tr>

<?php if($row['manager_remarks']=='NULL' && $leave_status=='Pending') {?>

<?php if($empid==$manager_id){?>
<tr>
<td style="vertical-align:top;border: 0;"><b>Change Manager</b></td>
<td  style=" vertical-align:top;border: 0;" colspan="3"><input type="checkbox" name="transfer" id="transfer" style="float:left;margin:0px;margin-left:3px;"><div id="mtransfer" style="margin:0px;float:left;width:80%;" >
<style>.selectbox7{border: 1px solid #cecece;padding: 5px;border-radius: 3px;box-sizing: border-box;-moz-box-sizing: border-box;width:79%;max-width: 240px;padding-left:2px;margin: 0;outline: 0;background: #FFF;color: #333;font-family: Arial;}
</style>
	<select name="managerid" id="managerid" class="selectbox7">
	<option value=""> -- Select -- </option>
	
	<?php $query="SELECT DISTINCT u.manager,u.manager_name from user_directory as u join user_erp ur where u.empid = ur.emp_id and ur.emp_status='E' and (manager!='NONE' AND manager!='NULL')  order by manager_name";
	$res=mysql_query($query);
	while($val=mysql_fetch_array($res))
	{ ?>
    
	<option value="<?php echo $val['manager'];?>"><?php echo $val['manager_name'].'('.$val['manager'].')';?></option>
	<?php }
	?>
	</select>
	
</div>
</td>

</tr>
<?php } ?>
<tr><td style="vertical-align:top;"><b>Manager Remarks </b></td><td colspan="3" style=" vertical-align:top;">

<textarea name="condition" id="condition" style="font-family: arial;font-size: 13px;padding:7px;margin:0px;border: 1px solid #cecece;" cols="48" ></textarea>

</td>

</tr>

<script>
jQuery(document).ready(function(){
	
	jQuery("#mtransfer").hide();
    jQuery("#mchange").hide();
    jQuery('#transfer').click(function() {
	 
     if( jQuery(this).is(':checked')) {
		
        jQuery("#mtransfer").show();
        jQuery("#mapp").hide();
        jQuery("#mchange").show();
     } else {
        jQuery("#mtransfer").hide();
		jQuery("#mapp").show();
        jQuery("#mchange").hide();
     }
    });
  });
</script>

<?php if($empid==$manager_id){?>
<tr>
 <td>&nbsp;</td><td>&nbsp;</td>
<td colspan="2">

<div id="mapp" style="width:373px;text-align:left;">
<input type="submit"  name="approve"  id="approved" value="Approved"> 
<input type="submit"  name="reject"  value="Rejected" id="Rejected" >


</div>
<div id="mchange">
<input type="submit"  name="Submit"  id="Submit" value="Submit" >
</div>
</td>


</tr>
<?php }?>

<?php } ?>


<?php if(!empty($row['manager_remarks']) && $row['manager_remarks'] !='NULL') {?>

<tr><td style="vertical-align:top;"><b>Manager Remarks</b></td><td colspan="3" style=" vertical-align:top;border: 0;"><textarea name="remarks" style="font-family: arial;font-size: 13px;padding:7px;margin:0px 0px 0px -2px;border: 1px solid #cecece;"  readOnly  cols="48" ><?php echo $row['manager_remarks'];?></textarea>	
</td></tr>

<?php } ?>
  

</form>
<table>
</div>
<div class="ui-widget" title="Message" id="manager_remarks" style="display:none;font-size: 14px;margin-top:20px;">Please enter your comments in Manager Remarks.</div>
<div class="ui-widget" title="Message" id="hr_remarks" style="display:none;font-size: 14px;margin-top:20px;">Please enter your comments in HR Remarks.</div>
</div></div></div></div>  </div>
</body>
</html>
<!-- Displaying of leave records of particular associate according to application id -->
