<?php

$con = mysql_connect("localhost","root","") or die('Couldnt connect to database because :' . mysql_error());
mysql_select_db("crystalclear12",$con) or die('Couldnt connect because :' . mysql_error());

?>