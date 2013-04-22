<?php

$location = $_REQUEST['l'];

include 'opendb.php';

$sql = "SELECT * FROM gen_branchdata WHERE schema_name = '".$location."';";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());

$row = mysql_fetch_assoc($result);

$redpill = '<div style="float:left;width:280px;">';
$redpill .= '<address>';
$redpill .= '<img src="/images/'.$location.'/name.png" class="png" alt="Jani-King of '.ucwords($location).'"/><br />';
// get director's name
$sql = "SELECT concat_ws(' ',FirstName,LastName) AS name, email_address FROM gen_employee WHERE ulink='".$row['RegionalDirector_fk']."'";
$result = mysql_query($sql) or die('Query failed: '.mysql_error());
$director = mysql_fetch_assoc($result);

$redpill .= $director['name'].'<br />';
$redpill .= '<a href="mailto:'.$row['email_address'].'">'.$row['email_address'].'</a><br />';
$redpill .= '<a href=\'http://maps.google.com/maps?q=%22'.$row['AddressLine1'].', '.$row['AddressCity'].', '.$row['AddressState'].'%22\'>'.$row['AddressLine1'].'<br />';
if ($row['AddressLine2'] != "") {
	$redpill .= $row['AddressLine2'].'<br/>';
}
$redpill .= $row['AddressCity'].', '.$row['AddressState'].'  '.$row['AddressZip'].'</a><br />';
$redpill .= 'Phone: '.$row['PhoneNumber'].'<br />';
$redpill .= 'Fax: '.$row['fax_number'];
$redpill .= '<br /><img src="/images/'.$location.'/site.jpg" alt="'.$location.'"/>';
$redpill .= '</address>';
$redpill .= '</div>';

$bluepill = '<div style="float:left;width:280px;text-align:center;">';
$bluepill .= '<img src="/images/'.$location.'/director.jpg" alt="'.$row['director'].', Regional Director" />';
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