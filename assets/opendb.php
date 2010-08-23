<?php
$dbhost = 'mysql1.myregisteredsite.com';
$dbuser = '41389_jkdblogin';
$dbpass = 'd@zser99';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
$dbname = '41389_janiking';
mysql_select_db($dbname) or die('Error connecting to db');
?>