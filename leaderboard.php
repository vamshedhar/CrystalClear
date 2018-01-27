<?php

include('dbconnect.php');
$query = mysql_query("SELECT * FROM use_reco");
$total = mysql_num_rows($query);
$a = "LoggedOut";
$query2 = mysql_query("SELECT * FROM use_reco WHERE uid!='$a'");
$playin = mysql_num_rows($query2);

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LeaderBoard</title>
<style type="text/css">

body
{
	background:#000;
	color:#FFF;
}

#crystal
{
	position:absolute;
	top:70px;
	left:550px;
}
#tarang
{
	position:absolute;
	top:10px;
	left:120px;
}

table
{

	border-color:#FFF;
	
}
#title
{
	font-size:22px;
}
#name
{
	font-size:36px;
	font-variant:small-caps;
}
#num
{
	font-size:26px;
}
#list
{
	font-size:17px;
}

</style>
</head>

<body>
<img src="images/crystal.png" id="crystal" />
<map name="tar">
  <area shape="rect" coords="0,60,310,400" alt="Sun" href="http://www.nimbuzz.com/en/" target="_blank" />
</map>
<img src="images/level.png" id="tarang" usemap="#tar" />


<br /><br /><br /><br /><br /><br /><br /><br /><br />
<table align="center" cellpadding="2" border="1" cellspacing="0" width="1200">

<tr height="50px"><td colspan="3" align="center" id="name">Leader Board</td></tr>
<tr height="50px"><td colspan="3" align="center" id="num">No. Of Users Playing : <?php echo $total;?></td></tr>
<tr align="center" id="title"><td>Rank</td><td>Nick Name</td><td>Level</td></tr>
<?php
$i = 1;
$query1 = mysql_query("SELECT * FROM use_reco ORDER BY lvl DESC , lastclear ASC");
while($qarray = mysql_fetch_array($query1))
{
?>

<tr align="center" id="list" height="30px"><td><?php echo $i;?></td><td><?php echo $qarray['nick'];?></td><td><?php echo $qarray['lvl'];?></td></tr>

<?php 

if($i == 500)
{
	break;
}
$i++;
}?>
<tr height="50px"><td colspan="3" align="center" id="num">No. Of Users Online : <?php echo $playin;?></td></tr>


</table>



</body>
</html>