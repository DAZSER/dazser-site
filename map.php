<?php
//Search engine bots get their location as Tampa.
if (preg_match("#(google|slurp@inktomi|yahoo! slurp|msnbot)#si", $_SERVER['HTTP_USER_AGENT'])) {
	$location = 'tampa';
	header("Location: http://www.dazser.com/".strtolower($location)."/home");
}

//check to see if $_COOKIE['location'] is set;
	//if it is set
		//forward to index.php?l=$_;
if(isset($_COOKIE['location'])){
	header("Location: http://www.dazser.com/".strtolower($_COOKIE['location'])."/home");
}

//check to see if ['location'] is set
//if it is set
if(isset($_REQUEST['location']) && $_REQUEST['location'] != "-1"){
	//check to see if remember is checked
	if(isset($_REQUEST['remember'])){
		//set cookie & session
		setcookie("location", $_REQUEST['location'], time()+60*60*24*30);
		$location = $_COOKIE['location'];
	} else {
		//just set the session
		$location = $_REQUEST['location'];
	}
	header("Location: http://www.dazser.com/".strtolower($location)."/home");//forward to index.php
}
	//else display map page;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="DAZSER is a Master Franchise of Jani-King Cleaning Corporation.">
	<meta name="keywords" content="cleaning, company, janitor, janitorial, franchise, commercial, clearwater fl, custodian, maid, evs, coverall, jan-pro, cleannet, anago, vanguard, bonus, janitize, stratus">
	<meta name="copyright" content="DAZSER Management - <?php echo date("Y"); ?>">
	<meta name="author" content="DAZSER">
	<meta name="email" content="network.admin@dazser.com">
	<meta name="Distribution" content="Global">
	<meta name="Rating" content="General">
	<meta name="Robots" content="INDEX,FOLLOW">
	<meta name="Revisit-after" content="31 Days">
	<link href="/favicon.ico" rel="shortcut icon">
	<title>Jani-King - Please select your location</title>
<style type="text/css">
#container{
	width:649px;
	height: 700px;
	margin: 0 auto;
	background-image:url(images/map.png);
	background-repeat: no-repeat;
}
body{background: #94c7dc;font-family:Verdana, Geneva, sans-serif;}
#form{
	width: 266px;
	height: 224px;
	position: relative;
	left: 150px;
	top: 225px;
}
#menu a {
	position: relative;
	display: block;
	text-decoration: none;
	height: 29px;
}
#menu a i {visibility: hidden;}
a#Baltimore{left: 485px; top: 165px; width: 113px;}
a#Birmingham{left: 300px; top: 230px;  width: 170px;}
a#Charlotte{left: 500px; top: 175px;  width: 140px;}
a#Orlando{left: 513px; top: 215px;  width: 105px;}
a#Tampa{left: 420px; top: 223px;  width: 95px}

<?php if($_POST['location'] == "-1") echo "h4{color: red;};"; ?>
</style>
<!--[if lt IE 8]>
<style type="text/css">
h4{margin-top:20px;}
</style>
<![endif]-->
</head>

<body>
<div id="container">
	<div id="menu">
		<a href="baltimore" id="Baltimore"><i>Baltimore</i></a>
		<a href="birmingham" id="Birmingham"><i>Birmingham</i></a>
		<a href="charlotte" id="Charlotte"><i>Charlotte</i></a>
		<a href="orlando" id="Orlando"><i>Orlando</i></a>
		<a href="tampa" id="Tampa"><i>Tampa</i></a>
	</div>
	<div id="form">
		<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
		<h4>Please select your location</h4>
		<select name="location" style="width: 200px;">
			<option value="-1">Select your location</option>
			<option value="baltimore">Baltimore</option>
			<option value="birmingham">Birmingham</option>
			<option value="charlotte">Charlotte</option>
			<option value="orlando">Orlando</option>
			<option value="tampa">Tampa</option>
		</select>
			<input name="submit" type="submit" value="Go" />
			<br /><br />
			<input name="remember" type="checkbox" id="remember" value="remember" />
			<label for="remember" style="font-size: small;">Remember your location</label>
		</form>
</div>
</div>
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-8299399-2');ga('send','pageview');
</script>
</body>
</html>