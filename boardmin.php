<?php
include('dbconnect.php');
?>


<table width="200"  border="2" style="border-color:#FFF;" cellpadding="2" cellspacing="0" >
<tr><td colspan="3" id="title" align="center">LeaderBoard</td></tr>
<tr align="center"><td>Rank</td><td>Nick Name</td><td>Level</td></tr>
<?php
	$board = mysql_query("SELECT * FROM use_reco ORDER BY lvl DESC , lastclear ASC");
	$s = 1;
	while($barray = mysql_fetch_array($board))
	{
?>
<tr align="center"><td><?php echo $s;?></td><td><?php echo $barray['nick'];?></td><td><?php echo $barray['lvl'];?></td></tr>

<?php 
$s++;
if($s == 16)
{break;}
}?>
</table>
