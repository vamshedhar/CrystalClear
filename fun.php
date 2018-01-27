<?php 

function filter($var)
{
return strip_tags(filter_var(mysql_real_escape_string($var),FILTER_SANITIZE_STRING));
}

function hasher($hash)
{
	return md5(hash(sha512,$hash));
	}
function uid()	
{
	return md5(hash(sha256,uniqid(rand(),TRUE)));
}
function check($crap)
{
	$query = mysql_query("SELECT * FROM use_reco WHERE emailhash='$crap'");
	
	return mysql_fetch_array($query);
}
	
function anscheck($answ)
{
	return hasher(filter($answ));
}
	?>