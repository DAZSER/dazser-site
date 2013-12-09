<?php
$dbhost = 'localhost';
$dbuser = 'root';
include 'dbpass.php';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
$dbname = 'global';
mysql_select_db($dbname) or die('Error connecting to db');
?>
