<?php
##########################################
#### PBX Trunk Control
#### Version 1.0
#### Date 22 aug 2006 chang  
#### by : Phichet Khoeiarsa
#### Email : studentaua@hotmail.com
####
####  all Function
##########################################

## Delete and write text in file
function del_write_file($filename_,$text)
{
		if (file_exists($filename_)) 
				{
					unlink($filename_);
				}
	$f=fopen($filename_, "x+");
	fputs($f, $text);
	fclose($f);
}

## db connect not available
function trunk_connect_mysql()
{
$link = mysql_connect($hostname, $username, $password);
if (!$link) {
   die('Could not connect: ' . mysql_error());
}
// End mysql Link

mysql_select_db($dbname);
}
?>
