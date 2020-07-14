
// Full java script file of leave application project


function Requested_Session(x){
	var sd_val = $.trim($(".date_a").val());
	var ed_val = $.trim($(".date_b").val());
	
	if(sd_val==ed_val){
		
		var from_session = $('#from_session');
		var to_session = $('#to_session');
		
		if($(x).attr("id")=="from_session"){
			to_session.val(from_session.val()).prop("selected", "selected");
		}
		else{
			from_session.val(to_session.val()).prop("selected", "selected");
		}

		var fs=$.trim($("#from_session").val());
		var sd = $(".date_a").val().split("/");
		var ed = $(".date_b").val().split("/");
		var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
		var firstDate = new Date(sd[2]+"/"+sd[1]+"/"+sd[0]);
		var secondDate = new Date(ed[2]+"/"+ed[1]+"/"+ed[0]);
		
		var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime()) / (oneDay)))+1;
		
		if(fs != 'W'){
			diffDays=diffDays-0.5;
		}
		document.getElementById('req_leave').value = diffDays;
		document.getElementById('leave_req').value = diffDays;	

	}

	if(sd_val != ed_val){

		var fs=$.trim($("#from_session").val());
		var ts=$.trim($("#to_session").val());
		var sd = $(".date_a").val().split("/");
		var ed = $(".date_b").val().split("/");
		var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
		var firstDate = new Date(sd[2]+"/"+sd[1]+"/"+sd[0]);
		var secondDate = new Date(ed[2]+"/"+ed[1]+"/"+ed[0]);
		var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime()) / (oneDay)))+1;

		if(fs != 'W'){
			diffDays=diffDays-0.5;
		}
		if(ts != 'W'){
			diffDays=diffDays-0.5;
		}
		document.getElementById('req_leave').value = diffDays;
		document.getElementById('leave_req').value = diffDays;	
	}
	
}

$("input[name='leaveType']").click(function(){
	
	thisID = $(this).attr("id");
	if(thisID=="AR"){
		$("#approve").show();
		$("#transfer").hide();
	}
	else{
		$("#approve").hide();
		$("#transfer").show();		
	}
});






function Requested_Delay(){
var str;
/*Last date for submission in month*/
var date1=document.getElementById("datepicker").value;	
var date2=document.getElementById("datepicker2").value;	
var date_split1=date1.split("/");
var fdate1=date_split1[0];
var fdate2=date_split1[1];
var fdate3=date_split1[2];
var date_format1=fdate3.concat("-").concat(fdate2).concat("-").concat(fdate1);
var date_split2=date2.split("/");
var ffdate1=date_split2[0];
var ffdate2=date_split2[1];
var ffdate3=date_split2[2];
var date_format2=ffdate3.concat("-").concat(ffdate2).concat("-").concat(ffdate1);
var d = new Date();
var month = new Array();
month[0] = "01";
month[1] = "02";
month[2] = "03";
month[3] = "04";
month[4] = "05";
month[5] = "06";
month[6] = "07";
month[7] = "08";
month[8] = "09";
month[9] = "10";
month[10] = "11";
month[11] = "12";

var current_date=d.getDate();

if(current_date<10)
{
   current_date='0'+current_date;
} 

var current_year = d.getFullYear();
var current_month= month[d.getMonth()];
var current_hours=d.getHours();
var current_sec=d.getSeconds();
var lastDay = new Date(current_year, current_month, 0);
var flastday=lastDay.getDate();
var flastday=10;

if(flastday==current_date && current_month==fdate2 && current_year==fdate3 && current_hours>=11 && current_sec>0 )
{
document.getElementById("CL").disabled = true;
document.getElementById("PL").disabled = true;
	
}
else
{
document.getElementById("CL").disabled = false;
document.getElementById("PL").disabled = false;	
	
}
/*Last date for submission in month*/







str = setTimeout(getRequested_leave, 500);

}

function daysInMonth(month,year) {
    return new Date(year, month, 0).getDate();
}

function day_check(date_val)
{

    var d = new Date(date_val);
    var n = d.getDay();
	var prev = d.getDate()-2;
	
	return n;
 
}






function getRequested_leave()
{

	var sdate = $(".date_a").val();
	var edate = $(".date_b").val();

	if(sdate != edate){
		$("#from_session option[value='F']").prop("disabled","disabled");
		$("#to_session option[value='S']").prop("disabled","disabled");
		$('#from_session, #to_session').find('option:first').prop('selected', 'selected');
	}
	else{
		$("#from_session option[value='F']").removeAttr("disabled");
		$("#to_session option[value='S']").removeAttr("disabled");
		$("#to_session option[value='W']").removeAttr("disabled");
	}

	var sd = $(".date_a").val().split("/");
	var ed = $(".date_b").val().split("/");
	var fs=$.trim($("#from_session").val());
	var ts=$.trim($("#to_session").val());
	var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds

	var firstDate = new Date(sd[2]+"/"+sd[1]+"/"+sd[0]);
	var secondDate = new Date(ed[2]+"/"+ed[1]+"/"+ed[0]);
	var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime()) / (oneDay)))+1;

	if(fs != 'W'){
		diffDays=diffDays-0.5;
	}
	if(ts != 'W'){
		diffDays=diffDays-0.5;
	}

	document.getElementById('req_leave').value = diffDays;
	document.getElementById('leave_req').value = diffDays;
	Requested_Session();
}



function validate()
{
	
var date1=document.getElementById("datepicker").value;	
var date2=document.getElementById("datepicker2").value;	
var date_split1=date1.split("/");
var fdate1=date_split1[0];
var fdate2=date_split1[1];
var fdate3=date_split1[2];
var date_format1=fdate3.concat("-").concat(fdate2).concat("-").concat(fdate1);
var date_split2=date2.split("/");
var ffdate1=date_split2[0];
var ffdate2=date_split2[1];
var ffdate3=date_split2[2];
var date_format2=ffdate3.concat("-").concat(ffdate2).concat("-").concat(ffdate1);	
var leave=parseFloat(document.getElementById("req_leave").value);
var des_value=document.getElementById("emp_designation").value;
var pl_leave_balance=parseFloat(document.getElementById("emp_pl_leave").value);
var cl_leave_balance=parseFloat(document.getElementById("emp_cl_leave").value);


/*Associate can submit leave of current month till last date of month upto 2.00 p.m*/

/*Associate can submit leave of current month till last date of month upto 2.00 p.m*/



/*PL not more than balance*/
if(leave>pl_leave_balance && document.getElementById('PL').checked)
{
	
	alert("You can not take leave more than your balance.");
	return false;
}


/*PL not more than balance*/



/*PL Not more than 15 at a time*/
if(document.getElementById('PL').checked && leave>15)
{
alert("PL can not be taken more than 15 at a time.");
return false;	
}
/*PL Not more than 15 at a time*/







/*If Monday, Check for saturday if saturday is on leave then alert for sunday*/
if(day_check(date_format1)==1)
{
document.getElementById('employee').value=1;
}
if(day_check(date_format1)==6)
{

document.getElementById('employee2').value=6;
}
if(day_check(date_format2)==6)
{

document.getElementById('employee2_sat').value=6;
}
if(day_check(date_format2)!=6)
{

document.getElementById('employee2_sat').value=0;
}

if(day_check(date_format1)!=6)
{

document.getElementById('employee2').value=0;
}
if(day_check(date_format1)!=1)
{
document.getElementById('employee').value=0;	
	
}

/*If Monday, Check for saturday if saturday is on leave then alert for sunday*/



//return true;
}



var myDate = new Date();
mydate = myDate.getDate();
mymonth = myDate.getMonth()+1;

if(mydate.toString().length==1){mydate = "0"+mydate.toString(); }
if(mymonth.toString().length==1){mymonth = "0"+mymonth.toString();}

var prettyDate = mydate + '/' + mymonth + '/' + myDate.getFullYear();
var mindate = '01/' + mymonth + '/' + myDate.getFullYear();        
$(".date_a, .date_b").val(prettyDate);


$(".date_a").datepicker({dateFormat: 'dd/mm/yy', minDate:mindate,
  onClose: function( selectedDate ) {
	$( ".date_b" ).datepicker( "option", "minDate", selectedDate );
  }	
});
$(".date_b").datepicker({minDate: new Date(), dateFormat: 'dd/mm/yy'});
//$(".date_a").datepicker({ dateFormat:'dd/mm/yy',minDate:mindate});


// Full java script file of leave application project


function onloadCheckSession(){
var sessionFrom = $("#from_session").val();
var sessionTo = $("#to_session").val();
var req_leave = $("#req_leave").val();
getRequested_leave();


var sdate = $(".date_a").val();
	var edate = $(".date_b").val();

	if(sdate != edate){
		$("#from_session option[value='F']").prop("disabled","disabled");
		$("#to_session option[value='S']").prop("disabled","disabled");
		$('#from_session, #to_session').find('option:first').prop('selected', 'selected');
	


if(sessionFrom=="S"){
	$("#from_session option[value='F']").attr("disabled","disabled");
}
if(sessionFrom=="F"){
	$("#from_session option[value='S']").attr("disabled","disabled");	
}

if(sessionTo=="S"){
	$("#to_session option[value='F']").attr("disabled","disabled");
}
if(sessionTo=="F"){
	$("#to_session option[value='S']").attr("disabled","disabled");	
}
	
	$("#from_session option[value='"+sessionFrom+"']").prop("selected","selected");
	$("#to_session option[value='"+sessionTo+"']").prop("selected","selected");	
	
	}
	else{

		$("#from_session option[value='F']").removeAttr("disabled");
		$("#to_session option[value='S']").removeAttr("disabled");
		$("#to_session option[value='W']").removeAttr("disabled");
	}

$("#req_leave").val(req_leave);

    		var new_mindate = $('#datepicker').datepicker('getDate', '+1d');
			new_mindate.setDate(new_mindate.getDate()); 
			$( "#datepicker2" ).datepicker("option", "minDate", new_mindate );
	}