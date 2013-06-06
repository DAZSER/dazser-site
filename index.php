<?php
//Cookie is set, set session
$location = "";

if( isset($_COOKIE['location']))
	$location = $_COOKIE['location'];
else {
	if( isset($_REQUEST['location']) )
		$location = $_REQUEST['location'];
	else 
		header("Location: map.php");//forward to map.php
}
	
//request the page name
if( isset($_REQUEST['page']) )
	$page = $_REQUEST['page'];
else
	$page = 'home';

//if there is a var, set it
if( isset($_REQUEST['var']) )
	$var = $_REQUEST['var'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="DAZSER is a Master Franchise of Jani-King Cleaning Corporation." />
<meta name="keywords" content="cleaning, company, janitor, janitorial, franchise, commercial, clearwater fl, custodian, maid, evs, coverall, jan-pro, cleannet, anago, vanguard, bonus, janitize, stratus" />
<meta name="copyright" content="DAZSER Management - <?php echo date("Y"); ?>" />
<meta name="author" content="DAZSER" />
<meta name="email" content="network.admin@dazser.com" />
<meta name="Charset" content="UTF-8" />
<meta name="Distribution" content="Global" />
<meta name="Rating" content="General" />
<meta name="Robots" content="INDEX,FOLLOW" />
<meta name="Revisit-after" content="31 Days" />
<title><?php echo ucfirst($page); ?> - Jani-King</title>
<link href="/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="/css/blueprint/screen.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="/css/blueprint/print.css" type="text/css" media="print" />
<!--[if lt IE 8]>
  <link rel="stylesheet" href="/css/blueprint/ie.css" type="text/css" media="screen, projection" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen, projection" />
<!--[if lt IE 8]>
  <link rel="stylesheet" href="/css/ie.css" type="text/css" media="screen, projection" />
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
<link rel="stylesheet" href="/css/ie.css" type="text/css" media="screen, projection" />
<![endif]-->
<link href="http://vjs.zencdn.net/4.0/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.0/video.js"></script>
</head>

<body>
<div id="container">

	<div id="header">
		<ul id="nav" class="clearfix">
			<li><a id="home" href="/<?= $location; ?>/home">Home</a></li><li><a id="news" href="/<?php echo $location; ?>/news">News</a></li><li><a id="services" href="/<?php echo $location; ?>/services">Services</a></li><li><a id="offices" href="/<?php echo $location; ?>/offices">Offices</a></li><li><a id="franchises" href="/<?php echo $location; ?>/franchises">Franchises</a></li><li class="last-child"><a id="contact" href="/<?php echo $location; ?>/contact">Contact</a></li></ul>
		<div id="logo" class="logo"><a href="http://www.dazser.com"><img src="/images/jklogo.png" alt="JK Logo" /></a></div>
	</div>
    <div id="body" class="clearfix">
		<div id="bodyHeader">
        	<!--<img src="http://www.dazser.com/images/<?= $location; ?>/name1.png" alt="Jani-King of <?= $location; ?>">-->
        </div>
        
        <div id="bodyContent">
			<?php include $page.'.php' ?>
        </div>
    </div>
	<div id="footer" class="footer">
		<p>&copy; <?php echo date('Y'); ?> <acronym>DAZSER</acronym> Management</p>
        <h5 class="fancy"><a href="/baltimore">Baltimore</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/birmingham">Birmingham</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/charlotte">Charlotte</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/orlando">Orlando</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/tampa">Tampa</a></h5>
	</div>	
</div>
<!--[if IE 6]>
<script type="text/javascript" src="/js/jquery.pngFix.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#logo').pngFix();
	$('#bodyHeader').pngFix();
    $('#badge').pngFix();
    $('.png').pngFix();
});
</script>
<![endif]-->
<!-- mathiasbynens.be/notes/async-analytics-snippet -->
<script>
var _gaq=[['_setAccount','UA-8299399-2'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>