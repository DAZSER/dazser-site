<?php

$location = $_REQUEST['l'];

include 'opendb.php';

$sql = "SELECT * FROM jk_locations WHERE location = '".$location."'";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());

$row = mysql_fetch_assoc($result);

$redpill = '<div style="float:left;width:280px;">';
$redpill .= '<address>';
$redpill .= '<img src="http://www.dazser.com/images/'.$location.'/name.png" class="png" alt="Jani-King of '.$location.'"/><br />';
$redpill .= $row['director'].'<br />';
$redpill .= '<a href="mailto:'.$row['email'].'">'.$row['email'].'</a><br />';
$redpill .= '<a href=\'http://maps.google.com/maps?q=%22'.$row['address'].', '.$row['city'].', '.$row['state'].'%22\'>'.$row['address'].'<br />';
$redpill .= $row['city'].', '.$row['state'].'  '.$row['zip'].'</a><br />';
$redpill .= 'Phone: '.formatPhone($row['phone']).'<br />';
$redpill .= 'Fax: '.formatPhone($row['fax']);
$redpill .= '<br /><img src="http://www.dazser.com/images/'.$location.'/site.jpg" alt="'.$location.'"/>';
$redpill .= '</address>';
$redpill .= '</div>';

$bluepill = '<div style="float:left;width:280px;text-align:center;">';
$bluepill .= '<img src="http://www.dazser.com/images/'.$location.'/director.jpg" alt="'.$row['director'].', Regional Director" />';
$bluepill .= '</div>';

include 'closedb.php';

echo $redpill . $bluepill;

function formatPhone($phone){
	// Perform phone number formatting here
	if (strlen($phone) == 7) {
		return preg_replace("/([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "$1-$2", $phone);
	} elseif (strlen($phone) == 10) {
		return preg_replace("/([0-9a-zA-Z]{3})([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "($1) $2-$3", $phone);
	} elseif (strlen($phone) == 11) {
		return preg_replace("/([0-9a-zA-Z]{1})([0-9a-zA-Z]{3})([0-9a-zA-Z]{3})([0-9a-zA-Z]{4})/", "$1($2) $3-$4", $phone);
	}
	// Return original phone if not 7, 10 or 11 digits long
	return $phone;
}
?>