<?php
$username = ""; //mysql username
$password = ""; //mysql password
$hostname = ""; //hostname
$databasename = ""; //databasename

$useDB = mysql_connect($hostname, $username, $password)or die('could not connect to database');
mysql_select_db($databasename,$useDB);
?>