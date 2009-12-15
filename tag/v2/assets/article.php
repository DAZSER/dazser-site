<?php
include 'opendb.php';
$sql = "SELECT * FROM jk_news WHERE pid='".$_REQUEST['var']."'";
$result = mysql_query($sql) or die('Query failed: '.mysql_error()); 
$row = mysql_fetch_array($result, MYSQL_ASSOC);

echo '<p>'.$row['content'].'</p>';
if( isset($row['pic']) ) echo '<img src="'.$row['pic'].'" alt="" />';

include 'closedb.php';
?>