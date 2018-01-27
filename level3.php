<?php
include("dbconnect.php");
include("fun.php");
session_start();
if(isset($_SESSION['username']))
{
	$uid = $_COOKIE['user'];
	
	$checkarray = check($_SESSION['username']);
	if($uid == $checkarray['uid'])
	{
	$lvl = $checkarray['lvl'];
	
	
	if(isset($_POST['ans']))
	{
		$ans = anscheck($_POST['ans']);
		if($ans == '4a1216d2283ba71d6fe2996192460c2c')
		{
			
			date_default_timezone_set('Asia/Kolkata');
			$clear = date("Y/m/d H:i:s");
			if($lvl == 3)
			{
			$lvlupdate = mysql_query("UPDATE use_reco SET lvl=4, lvl3='$clear', lastclear='$clear' WHERE uid='$_COOKIE[user]'");
			
			
			
			}
			header("Location:level4.php");
			}
		
		
		
	}
	

	
	if($lvl >= 3)
	{
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Level-3</title>
<link href="level.css" type="text/css" rel="stylesheet" />
<style type="text/css">
#ques
{
	position:absolute;
	top:50px;
	left:90px;
	
}
#answ
{
	position:absolute;
	left:290px;
	bottom:50px;
	
	
}
</style>
</head>

<img src="images/crystal.png" id="crystal" />
<map name="tar">
  <area shape="rect" coords="0,60,310,400" alt="Sun" href="http://www.nimbuzz.com/en/" target="_blank" />
</map>
<img src="images/level.png" id="tarang" usemap="#tar" />

<div id="list">
<?php 
include("left.php");
?>

</div>
<div id="fb">
Hints :
<a href="https://www.facebook.com/pages/Tarang-Spring-Fest-IIT-R/131680013556278" target="_blank">
<img src="near/fb.png" width="35" height="35" /></a>
</div>
<div id="quesbox">
<div id="ques">
<img src="near/yummy.jpg" width="270" height="270" /><img src="near/minusun.jpg" width="270" height="270"  />
</div>
<div id="answ">
<form action="level3.php" method="post">
<input type="text" name="ans" />
</form>
</div>
</div>
<div id="board">
<?php include('boardmin.php');?>
</div>

</body>
<?php
	}
	else
	{
		include("notfound.php");
		
		
		
	}
	}
	else{header("Location:wrong.php");}
	}
else {header("Location:wrong.php");}

?>
</html>