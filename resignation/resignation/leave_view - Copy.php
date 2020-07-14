<?php include("conn.php");?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
	

</script>	
<script>
function con()
{
	
	var main_id=document.getElementById('main_id').value;
	var condition=document.getElementById('condition').value;
	if(condition=='')
	{
		alert("Please fill up the Approval condition");
		return false;
	}
	$.ajax({
	
            url: "<?php echo $base_url;?>manager_condition.php",
			type:"POST",
            data: {id:main_id,cond:condition},
            
            success: function(response) {
				
				window.location.href = window.location.href;
            },
            error: function() {
                alert('Ajax error: Edit the path in cart.js to fix.');
            }
        });
}
</script>
<style>
body{ margin:10px; padding:0px;background:url('http://portal.progressive.in/html/icons/background.png');font: 62.5%/1.4 Arial,Helvetica,Verdana,sans-serif;overflow-x:hidden;}
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
.middleroung{ width:80%;height: auto; margin:0 auto; background:#f7f5ee url(images/backbg.png) no-repeat right; border-radius:5px 5px 0 0; padding:10px; padding-bottom:21px;margin-top:24px;  -webkit-box-shadow: 0 11px 6px -6px #434343;
    -moz-box-shadow: 0 10px 6px -6px #434343;
    /* box-shadow: 0 10px 6px -6px #777; */}

.middleroung h1{font-family: Arial, Helvetica, sans-serif;font-size: 15px;color: #191970;
    text-decoration: none;
    padding: 0 0 6px 0;}
.shadow{ background:url(images/shadow.png) no-repeat; width:911px; height:58px; margin:0 auto; clear:both; display:none;}
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
    padding: 5px 10px;
    font-family: Arial, Helvetica, sans-serif;
    border-bottom: 1px solid #ccc;
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
td{width:100%;}
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
 ?>
<body style="background:url('http://portal.progressive.in/html/icons/background.png');">
<div class="middleroung">
<div class="left_move">
<span class="title">Resignation Details View</span></div>






<a href="part1.php?id=<?php echo $empid;?>"><img style="width:50px;height:50px;float:right;margin-top: 15px;" src="images/leavedetailicon.jpg"></a>

<div class="datagrid" style="margin:0 auto; width:70%; margin-top:85px;">
<table width="70%" height="520px">
	<tr>
		<td><b>Employee Code:</b>
		</td><td width="30%"> <?php echo $row['empid'];?></td>
		<td><b>Employee Name: </b></td>
		<td> <?php echo $row['name'];?></td>
	</tr>
	<tr>
		<td><b>Department:</b></td>
		<td><?php echo $row['department'];?></td>
		<td><b>Designation:</b></td>
		<td> <?php echo $row['department'];?></td>
	</tr>
	<tr>
		<td><b>Date Of Application:</b></td>
		<td> <?php echo $row['req_date'];?></td>
		<td><b>Reporting Manager:</b></td>
		<td><?php echo $row['manager'];?></td>
	</tr>
	<tr>
		<td><b>Requested Relieving Date:</b></td>
		<td><?php echo $row2['location'];?></td>
		<td><b>Reason :</b></td>
		<td> <?php echo $row['reason'];?></td>
	</tr>
	<tr>
		<td><b>Remarks:</b></td>
		<td><?php echo $row['remarks'];?></td>
		<td><b>Resignation Status:</b></td>
		<td> <?php echo $row['reg_status'];?></td>
	</tr>
	<tr> 
		<td colspan="4" style="text-align:center; background:#fff;"> <b> Manager Responce  </b>
		</td>
	</tr>
	<tr>
		<td style="border:0px;" ><b>Relieving Date by Manager:</b></td>
		<td colspan="3" style="border:0px;">
		<input type="text" class=" input6 date_a" name="from_date" readOnly id="datepicker" onBlur="Requested_Delay();" value="<?php echo date("d/m/Y"); ?>" required />

		<input type="hidden" name="main_id" id="main_id" value="<?php echo $row['id'];?>">
		<input type="hidden" name="manager_id" id="manager_id" value="<?php echo $row['manager_id'];?>">
		</td>
	</tr>

<?php if($row['manager_remarks']=='NULL' && $leave_status=='Pending') {?>

	<tr>
		<td style="vertical-align:top; border: 0;"><b>Manager Remarks</b></td>
		<td colspan="3" style=" vertical-align:top;border: 0;">
		<textarea name="condition" id="condition" style="padding-left:6px;"  cols="30" rows="4" ></textarea>
		</td>

	</tr>
<?php if($empid==$manager_id){?>
	<tr>
		<td><input type="button" value="Approve" name="button" onclick="con()">	</td>
		<td  style=""><input type="button" value="Reject" name="button" onclick="con()">	
		</td>
	</tr>
<?php }?>
<?php } ?>


<?php if($row['manager_remarks']!='NULL') {?>

	<tr>
		<td style="vertical-align:top; border: 0;"><b>Manager Remarks</b></td>
		<td colspan="3" style=" vertical-align:top;border: 0;">

		<textarea name="remarks" style="padding-left:6px;" readOnly  cols="30" rows="4" ><?php echo $row['manager_remarks'];?>
		</textarea>	
		</td>
	</tr>

<?php } ?>
				</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
