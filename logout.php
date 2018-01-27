<?php
include("dbconnect.php");
include("fun.php");
session_start();
mysql_query("UPDATE use_reco SET uid='LoggedOut' WHERE emailhash='$_SESSION[username]'");
setcookie("user","Nomore",time()-24*3600);
session_destroy();

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
<style type="text/css">
body
{
	background-image:url(images/crystalback.jpg);
	background-repeat:no-repeat;
	color:#FFF;
}
#logout
{
	position:absolute;
	top:330px;
	left:530px;
	font-size:16px;
	background:#000;
	opacity:0.8;
	border-radius:15px;
	-moz-border-radius:15px;
	
}
#matter{
	margin:30px 30px 30px 30px;}
</style>
</head>





<body>

<div id="logout">
<div id="matter">
You were Loggedout Sucessfully!!!<br />
<a href="index.php">Click Here</a> to Login again!!
</div>
</div>
</body>
</html>