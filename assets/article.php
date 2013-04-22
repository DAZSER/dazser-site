<?php
include 'opendb.php';
$sql = "SELECT * FROM gen_news WHERE id='".$_REQUEST['var']."'";
$result = mysql_query($sql) or die('Query failed: '.mysql_error()); 
$row = mysql_fetch_array($result, MYSQL_ASSOC);

if( isset($row['related']) ) echo '<p>Related Links:<br /><a href="'.$row['related'].'">'.$row['related'].'</a></p>';
echo '<p>'.$row['content'].'</p>';
if( isset($row['pic']) && $row['pic'] != NULL) echo '<img src="http://www.dazser.com/'.$row['pic'].'" alt="" />';

include 'closedb.php';
?>