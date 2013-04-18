<script type="text/javascript">

$(document).ready(function(){
	var l= '<?= $location; ?>';
	$('#address').load('/assets/offices_process.php?l='+l);

	$('.location').click(function(event){
		var l = $(this).attr('name');
		$('#address').fadeOut('fast', function(){
			$(this).load('/assets/offices_process.php?l='+l);
		});
		event.preventDefault();
	});
	
	$('#address').bind('ajaxComplete', function(){
		$(this).fadeIn('fast');
	});
});

</script>

<?php

include 'assets/opendb.php';

$sql = "SELECT * FROM jk_locations ORDER BY location ASC";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
?>
<div style="float:left;width:270px;">
<h3 style="padding-bottom: 20px;">Regional Offices</h3>
<ul>

<?php
while($row = mysql_fetch_array($result)){
	echo "<li><a href='/assets/offices_process.php?l=".$row['location']."' class='location' name='".$row['location']."'>".$row['location']."</a></li>";
}

include 'assets/closedb.php';
?>
</ul>
</div>
<div id="address" style="float:left;"></div>