<?php
session_start();
//Cookie is set, set session
if( isset($_COOKIE['location']))
	$_SESSION['location'] = $_COOKIE['location'];

if( isset($_SESSION['location']) )
	//Session is set, check url var
	if( isset($_REQUEST['location']) )
		//url var is set, check to see if they are the same
		if( strcmp($_SESSION['location'], $_REQUEST['location']) )
			//They are different
			//This is 1% of the time
			$location = $_REQUEST['location'];
		else 
			//They are the same
			//99% of the time this branch will hit
			$location = $_SESSION['location'];
	else
		//Local var is not set
		//should NEVER hit this branch
		$location = $_SESSION['location'];
else
	//Session is not set
	if( isset($_REQUEST['location']) )
		//url var is set, set the local var
		$location = $_REQUEST['location'];
	else
		//Session, Cookie, and Request are not set, forward to map
		header("Location: map.php");

//request the page name
if( isset($_REQUEST['page']) )
	$page = $_REQUEST['page'];
else
	$page = 'home';

//if there is a var, set it
if( isset($_REQUEST['var']) )
	$var = $_REQUEST['var'];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="DAZSER is a Master Franchise of Jani-King Cleaning Corporation.">
<meta name="keywords" content="cleaning, company, janitor, janitorial, franchise, commercial">
<meta name="copyright" content="DAZSER Management - <?php echo date("Y"); ?>">
<meta name="author" content="DAZSER">
<meta name="email" content="network.admin@dazser.com">
<meta name="Charset" content="UTF-8">
<meta name="Distribution" content="Global">
<meta name="Rating" content="General">
<meta name="Robots" content="INDEX,FOLLOW">
<meta name="Revisit-after" content="31 Days">
<title><?php echo ucfirst($page); ?> - Jani-King</title>
<link href="favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
<!--[if lt IE 8]>
  <link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection">
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen, projection">
<!--[if lt IE 8]>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection">
<![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<!--[if IE 6]>
<style type="text/css">
html #footer{
    background: none; /* Hide the current background image so you can replace it with the filter*/
    width: 870px; /* Must specify width */
    height: 50px; /* Must specify height */
    filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=crop, src='images/footerBg.png');
}
</style>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection">
<![endif]-->
</head>

<body>
<div id="container">

	<div id="header">
		<ul id="nav" class="clearfix"><li><a id="home" href="?location=<?php echo $location; ?>&amp;page=home">Home</a></li><li><a id="news" href="?location=<?php echo $location; ?>&amp;page=news">News</a></li><li><a id="services" href="?location=<?php echo $location; ?>&amp;page=services">Services</a></li><li><a id="offices" href="?location=<?php echo $location; ?>&amp;page=offices">Offices</a></li><li><a id="franchises" href="?location=<?php echo $location; ?>&amp;page=franchises">Franchises</a></li><li class="last-child"><a id="contact" href="?location=<?php echo $location; ?>&amp;page=contact">Contact</a></li></ul>
		<div id="logo" class="logo"><a href="http://www.dazser.com"><img src="images/jklogo.png" alt="JK Logo" /></a></div>
	</div>
    <div id="body" class="clearfix">
		<div id="bodyHeader">
        	<!--<img src="images/<?= $location; ?>/name1.png" alt="Jani-King of <?= $location; ?>">-->
        </div>
        
        <div id="bodyContent">
			<?php include $page.'.php' ?>
        </div>
    </div>
	<div id="footer" class="footer">
		<p>&copy; <?php echo date('Y'); ?> <acronym>DAZSER</acronym> Management</p>
        <h5 class="fancy"><a href="index.php?location=Baltimore">Baltimore</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?location=Birmingham">Birmingham</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?location=Charlotte">Charlotte</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?location=Orlando">Orlando</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?location=Tampa">Tampa</a></h5>
	</div>	
</div>
<!--[if IE 6]>
<script type="text/javascript" src="js/jquery.pngFix.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#logo').pngFix();
	$('#bodyHeader').pngFix();
    $('#badge').pngFix();
    $('.png').pngFix();
});
</script>
<![endif]-->
</body>
</html>