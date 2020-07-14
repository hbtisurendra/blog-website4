
<?php session_start();?>
<html>
<head>
<title>Leave Management System</title>





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
	
	
$(function() {
		var t = new Date();
		var tm = parseInt(t.getMonth())+1;	
		$( "#datepicker2" ).datepicker({
				
			changeMonth: true,
			changeYear: true,
			minDate: new Date(),
			//maxDate : new Date(t.getFullYear(),11,31),
			//minDate: new Date(t.getFullYear()+","+tm+","+1),
			dateFormat:"dd/mm/yy",
		

		});

	});	
</script>	
	
<style>
body{ margin:10px; padding:0px;background:url('images/background.png');font: 62.5%/1.4 Arial,Helvetica,Verdana,sans-serif;}
input[type="submit"], input[type="button"], input[type="reset"], button {
background: #d4d4d4 url(images/header_bg.png) repeat-x 0 0;
border: 1px solid;
border-color: #c8c9ca #9e9e9e #9e9e9e #c8c9ca;
color: #34404f;
cursor: pointer;
font-weight: bold;
overflow: visible;
line-height: 21px;
margin-top:0px;
text-shadow: 1px 1px #FFF;    padding-right: 8px;
width: auto;
height:auto;
}

.clr{ clear:both;}
.middleroung{ width:80%;height: auto; margin:0 auto; background:#f7f5ee url(images/backbg.png) no-repeat right;  -webkit-box-shadow: 0 11px 6px -6px #434343;
    -moz-box-shadow: 0 10px 6px -6px #434343;
    /* box-shadow: 0 10px 6px -6px #777; */ border-radius:5px 5px 0 0; padding:10px; padding-bottom:21px;margin-top:24px;}

.middleroung h1{font-family: Arial, Helvetica, sans-serif;font-size: 15px;color: #191970;
    text-decoration: none;
    padding: 0 0 6px 0;}

.fright{ float:right; margin-right:20px;}
.rightsection{ float:left;}
.rightsection ul{ margin:0px; padding:0px;}
.rightsection ul li{ float:left; list-style:none;padding: 0 9px;}
.rightsection ul li:hover{opacity: 0.75; cursor:pointer;}
.fright1{ float:right;margin-top:20px;margin-bottom: 20px;}
.rightsection1{ }
.rightsection1 ul{ margin:0px; padding:0px;}
.rightsection1 ul li{ float:left; list-style:none;padding: 0 26px;}
.rightsection1 ul li:hover{opacity: 0.75; cursor:pointer;}


.mainsearch{ clear: both;text-align: center;}
.leftsearch{width: 24%;float: left;margin-left: 253px;}
.rightsearch{float: left;}
.input5 {
    border: 1px solid #ccc;
    height: 26px;
 
    font-family: arial;
    box-shadow: 0 0 10px #ccc inset;
    border-radius: 5px;
    color: #666;padding-left: 5px;
}
.input5:focus{ outline:none;}

.input2{border: 1px solid #ccc;height: 26px;width: 168px;font-family: arial;box-shadow: 0 0 10px #ccc;}

.middletable{ width:860px; margin:0 auto;    clear: both;}
	.demo {border-collapse:collapse;border: 1px solid #fff;
    box-shadow: 0 0 4px #ccc;
    padding: 6px;
		
	}
	.demo th {     padding-top: 10px;    border-bottom: 1px solid #fff;
    font-family: arial;
    font-size: 12px;
    text-align: left;
    padding-left: 15px;
    padding-bottom: 11px; font-family:Arial, Helvetica, sans-serif;
		
		
	}
	.demo td {     line-height: 20px;
    padding-left:15px;
    font-size: 12px;
    font-weight: normal;
	
	}

.datagrid table {
    border-collapse: collapse;
    text-align: left;
    width: 100%;
}
.datagrid {
    font: normal 12px/150% Arial, Helvetica, sans-serif;
    background: #fff;
    

}
.datagrid table td,
.datagrid table th {
    padding: 3px 10px;
}
.datagrid table thead th {    border: 1px solid #ccc;    white-space: nowrap;
    background: #ffffff;
    background: -moz-linear-gradient(top, #ffffff 0%, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(50%,#f1f1f1), color-stop(51%,#e1e1e1), color-stop(100%,#f6f6f6));
    background: -webkit-linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
    background: -o-linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
    background: -ms-linear-gradient(top, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
    background: linear-gradient(to bottom, #ffffff 0%,#f1f1f1 50%,#e1e1e1 51%,#f6f6f6 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0 );
    /* border: 1px solid #ccc; */
    color: #000;
    /* font-size: 15px; */
    font-weight: bold;
    /* border-left: 1px solid #0070A8; */
    /* line-height: 27px; */
    text-transform: uppercase;
    line-height: 28px;

}
.datagrid table thead th:first-child {
  
}
.datagrid table tbody td {
    color: #000;
    /* border-left: 1px solid #E1EEF4; */
    font-size: 12px;
    font-weight: normal;
    background: 0;
    border: 1px solid;
    border-color: #ccc;
    padding: 8px 10px;
}
.datagrid table tbody .alt td {
    background: #f9f9f9;
    color: #000;
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


.maintable5{ width:100%; margin:0 auto; clear:both;}
.selectbox{width: 85%;height: 21px;margin-top: 5px;margin-bottom: 5px;}
.input3,.date_a,.date_b{width: 83%;height:25px;margin-top: 5px;margin-bottom: 8px;}

.input6{    border: 1px solid #cecece; padding-left: 8px;
    padding: 5px;
    border-radius: 3px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    width:79%;
    max-width: 240px;
    margin: 0;
    outline: 0;
    background: #FFF;    margin-bottom: 9px;
    color: #333;
    font-family: Arial;}
	
	
	
	.input7{    border: 1px solid #cecece; padding-left: 8px;
    padding: 5px;
    border-radius: 3px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 92%;
    max-width: 240px;
    margin: 0;
    outline: 0;
    background: #FFF;    margin-bottom: 9px;
    color: #333;
    font-family: Arial;}
	
	
	
	.selectbox6{    border: 1px solid #cecece;
    padding: 5px;
    border-radius: 3px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 92%;
    max-width: 240px;padding-left:2px;
    margin: 0;
    outline: 0;
    background: #FFF;    margin-bottom: 9px;
    color: #333;
    font-family: Arial;}
	
	
		.selectbox7{    border: 1px solid #cecece;
    padding: 5px;
    border-radius: 3px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    width:107%;
    max-width: 240px;padding-left:2px;
    margin: 0;
    outline: 0;
    background: #FFF;    margin-bottom: 9px;
    color: #333;
    font-family: Arial;}
	
	
	
	.area8{    border: 1px solid #cecece;
    padding: 5px;
    border-radius: 3px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 97%;
    /* max-width: 240px; */
    margin: 0;
    outline: 0;
    /* background: #FFF; */
    margin-top: 5px;
    color: #333;
    font-family: Arial;
    }
	

.left_move {margin-top: 2px;width: 62%;float: left;}

a {
    color: #5b677d;
    text-decoration: underline;
}

a:hover{ color:#428bca}


.title {
    padding-bottom: 5px;    margin-left:8px;
    border-bottom: 1px solid #191970;
    color: #191970!important;
    font-weight: bold;
    font-size: medium;
    text-align: left;
    font-size: 15px!important;
}


.managersubmit{margin-top: 12px!important;
    border-radius: 5px!important;}


.leftsection{width: 19%;
    margin-left: 9px;
    float: left;
    background: #cedef0;
    border: 1px solid #fff;
    box-shadow: 0 0 2px;
    padding: 9px;



}

.heading{     background: #0061a9;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    text-decoration: none;
    color: #fff;
    padding: 6px;
    border-radius: 5px 5px 0 0;
    padding-left: 13px;
    border: 1px solid #fff;
    box-shadow: 0 0 7px #ccc inset;
    text-transform: uppercase;}
	
.leftpart{ width:auto; float:left;}	
.leftpart ul{ margin:0px; padding:0px;}
.leftpart ul li{ float:left; list-style:none; display:block; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000; text-decoration:none; clear:both;line-height: 21px;}
	

.rightsection{width: 74%;
    float: right;
    border: 1px solid red;
    margin-right: 36px;}
	




.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#f9f9f9;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}	

.headingbottom{ background:#e4e5e6;color:#000;
   }

</style>

</head>
<body>
<?php include("conn.php");
$id=$_GET['id'];
?>
<div class="middleroung">
<div class="left_move">

<span class="title">Manager Permissions</span></div>



<input type="hidden" name="leave" id="leave" value="<?php echo $leave_balance;?>">

<div class="fright1">
<div class="rightsection1">
<ul>

<li><a href="part1.php?id=<?php echo $id;?>"><img src="images/leavedetailicon.jpg" width="64" height="58" title="Go Back" /></a></li>
</ul>

</div>


</div>

<div class="clr"></div>
<div class="middletable">
<div style="color:red;font-weight:bold;text-align:center;font-size:18px;">

</div>
<div class="datagrid">


</div>
<?php if(isset($_SESSION['message']))
{
	
	echo "<span style='color:green;font-size: 17px;;'>".$_SESSION['message']."</span>";
	unset($_SESSION['message']);
}	
?>
<form name="form1" action="<?php echo $base_url;?>permissions_insert.php" method="POST" onSubmit="return validate();">





<table width="850" cellpadding="2" class="demo back" style="margin-top:15px;border-radius:6px;">
	
	
	</tr>
	</thead>
	<tbody>
<input type="hidden" name='id2' value="<?php echo $id;?>">
	<tr><th>Manager Name</th><th>Month</th><th>Year</th><th>Date</th><th>Time</th><th>Action</th></tr>
	<tr>
	<td>
	<select name="manager_name" class="selectbox7">
	<?php $query="SELECT DISTINCT manager_name,manager FROM user_directory WHERE empid!='000001' ";
	$res=mysql_query($query);
	while($val=mysql_fetch_array($res))
	{
		$manager_id=$val[1];
		$name=$val[0];
		echo "<option value='$manager_id'>$name($manager_id)</option>";
	}
	?>
	
	</select>
	</td>
	
	<td><select name="month" class="selectbox7">
	<?php $month=date('F');
	$year=date('Y');
	?>
	<option value="01" <?php if($month=='January') echo 'selected=selected;'?>>January</option>
	<option value="02" <?php if($month=='February') echo 'selected=selected;'?> >February</option>
	<option value="03" <?php if($month=='March') echo 'selected=selected;'?> >March</option>
	<option value="04" <?php if($month=='April') echo 'selected=selected;'?>>April</option>
	<option value="05"  <?php if($month=='May') echo 'selected=selected;'?>>May</option>
	<option value="06"  <?php if($month=='June') echo 'selected=selected;'?>>June</option>
	<option value="07" <?php if($month=='July') echo 'selected=selected;'?> >July</option>
	<option value="08" <?php if($month=='August') echo 'selected=selected;'?> >August</option>
	<option value="09"  <?php if($month=='September') echo 'selected=selected;'?>>September</option>
	<option value="10" <?php if($month=='October') echo 'selected=selected;'?> >October</option>
	<option value="11" <?php if($month=='November') echo 'selected=selected;'?> >November</option>
	<option value="12" <?php if($month=='December') echo 'selected=selected;'?> >December</option>
	</select></td>
	<td><select name="year" class="selectbox7">
	<option value='2015' <?php if ($year=='2015') echo 'selected=selected;'?>>2015</option>
	<option value='2016' <?php if ($year=='2016') echo 'selected=selected;'?>>2016</option>
	<option value='2017' <?php if ($year=='2017') echo 'selected=selected;'?>>2017</option>
	<option value='2018' <?php if ($year=='2018') echo 'selected=selected;'?>>2018</option>
	</select></td>
	<td><input type="date" name="date" class="input7" required></td>
	<td><input type="time" name="time" class="input7" required></td>
	<td><input type="submit" value="Save" class="input7"></td>
	</tr>
	</tbody>
</table>

</form>


</div>



</div></div>
</body>

</html>
<!-- Leave Application Form To Be Filled By Employee-->