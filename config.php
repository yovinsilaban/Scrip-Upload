<?php
$dbhost	= 'localhost';
$dbusn	= 'root';
$dbpass	= 'kutukupret';
$dbname	= 'tutorial';
$dbconn	= mysql_connect($host,$dbusn,$dbpass);
$dbopen	= mysql_select_db($dbname,$dbconn);
?>