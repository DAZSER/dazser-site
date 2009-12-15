<?php
session_start();

//Who get's the email on DAZSER's side
switch ($location){
	case "Tampa":
		$to = 'network.admin@dazser.com';
		break;
	case "Baltimore":
		$to = 'network.admin@dazser.com';
		break;
	case "Birmingham":
		$to = 'network.admin@dazser.com';
		break;
	case "Charlotte":
		$to = 'network.admin@dazser.com';
		break;
	case "Orlando":
		$to = 'network.admin@dazser.com';
		break;
	default:
		$to = 'network.admin@dazser.com';
		break;
}

$subject = 'Jani-King - Web Site Contact Form';
$headers = '';
if( isset($_REQUEST['Name']) && $_REQUEST['Name'] !== '' )
	$from = stripslashes($_REQUEST['Name']);
else die("No Name");

if( isset($_REQUEST['Company']) )
	$comp = stripslashes($_REQUEST['Company']);

if( isset($_REQUEST['Telephone']) )
	$tele = stripslashes($_REQUEST['Telephone']);

if( isset($_REQUEST['Email']) ){
	$email = stripslashes($_REQUEST['Email']);
	$headers = "Reply-To: $email\r\n";
}

$msg = "Message from: $from\nCompany: $comp\n\nTelephone Number: $tele\n";
$msg .= "Email: $email\n";

if( strcmp($_REQUEST['franchise'], 'undefined') )
	$msg .= "I would like information about acquiring a franchise.\n";

if( strcmp($_REQUEST['new'], 'undefined') )
	$msg .= "I am a business owner that would like information about your services.\n";

if( isset($_REQUEST['comments']) )
	$msg .= "Additional comments:\n".stripslashes($_REQUEST['comments']);

//if ( mail( $to, $subject, $msg, $headers ) )
	echo nl2br("$msg");
//else
//	echo "Your message failed to send. Please contact Jani-King dircectly at (727) 797-7744";
?>