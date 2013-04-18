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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JaniKing - Please select your location</title>
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
<!--[if lt IE 7]>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<style type="text/css">
html #container{
    background: none; /* Hide the current background image so you can replace it with the filter*/
    width: 649px; /* Must specify width */
    height: 700px; /* Must specify height */
    filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=crop, src='images/map.png');
}
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
<!-- mathiasbynens.be/notes/async-analytics-snippet -->
<script>
var _gaq=[['_setAccount','UA-8299399-2'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>