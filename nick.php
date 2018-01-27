<?php
include("dbconnect.php");
include("fun.php");
session_start();

if(isset($_SESSION['username']))
{


if(isset($_POST['Nick']))
{
	
	$nick = filter($_POST['Nick']);
	$uid = uid();
	setcookie("user",$uid,time()+24*3600);
	date_default_timezone_set('Asia/Kolkata');
	$ftime = date("Y/m/d H:i:s");
	$ip = $_SERVER['REMOTE_ADDR'];
	$update = mysql_query("UPDATE use_reco SET nick='$nick', uid='$uid', ip='$ip', lvl=1, ftime='$ftime', lastclear='$ftime' WHERE emailhash='$_SESSION[username]'");
	
	header("Location:level1.php");

}



	$checkarray = check($_SESSION['username']);
	
	if($checkarray['nick'] == NULL)
	{
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nick Name</title>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<link href="main.css" type="text/css" rel="stylesheet" />
</head>
<body>
<form action="nick.php" method="post" onsubmit="MM_validateForm('uname','','R');return document.MM_returnValue">
<div id="nick">
<div id="nick2">
<table>

<td  align="center">Nick Name</td>
<td><input name="Nick" type="text" id="uname" /></td><tr>

</table>
</div>
</div>
<div id="prizes" align="center">
Prizes worth 10k to be WON!!!<br />
Presented By
</div>

</form>
<div id="nimb">
<img src="images/nimbuzzsmall.png" />
</div>
</body>
<?php 
}
else
{
$lvl = $checkarray['lvl'];

header("Location:level".$lvl.".php");


}


}

else
{
	header("Location:logout.php");
	}


?>
</html>