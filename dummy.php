<?php
include('dbconnect.php');
include('fun.php');



$query = mysql_query("SELECT * FROM users");
	$s=1;
while($qarray = mysql_fetch_array($query))
{
	
	$email2 = $qarray['email'];
	$nick2 = $qarray['nick'];
	$lvl2 = 1;
	$phnum="904532";
	$ip2 = $_SERVER['REMOTE_ADDR'];
	date_default_timezone_set('Asia/Kolkata');
		$time2 = date("Y/m/d H:i:s");
		$emailh = hasher($email2);
		$passh = hasher("neyamma");


	$uid2 =uid();

mysql_query("INSERT INTO use_reco SET emailhash='$emailh', passhash='$passh', name='$email2', phno='$phnum',college='iitr', email='$email2', nick='$nick2', lvl=$lvl2, ip='$ip2', uid='$uid2', ftime='$time2', lastclear='$time2'");
	$s++;
	if($s == 1100)
	{break;}
}

if(isset($_POST['submit']))
{

$email = $_POST['email'];
$nick = $_POST['nick'];
$lvl = rand(1,5);
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Kolkata');
		$time = date("d/m/Y H:i:s");
if($lvl == 2 || $lvl == 4)
{
	$uid = uid();
	
}
else
{
	$uid = "LoggedOut";
}
mysql_query("INSERT INTO illushun SET email='$email', nick='$nick', lvl=$lvl, ip='$ip', uid='$uid', ftime='$time', lclear='$time'");
}
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="dummy.php" method="post">
Email :<input type="text" name="email" /><br />
Nick :<input type="text" name="nick" /><br />
<input type="submit" name="submit"  />




</form>

</body>
</html>