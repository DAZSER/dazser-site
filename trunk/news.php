<script type="text/javascript">
$(document).ready(function(){
	$('a.story').toggle(
		function(event){
			var x = $(this).attr('name');
			$('.'+x).load( $(this).attr('href') ).slideDown('fast');
			event.preventDefault();
	},
		function(event){
			var x = $(this).attr('name');
			$('.'+x).slideUp('fast');
			event.preventDefault();
	});
});
</script>
<?php
include 'assets/opendb.php';

$sql = "SELECT * FROM jk_news ORDER BY date DESC";

$result = mysql_query($sql) or die('Query failed: '.mysql_error()); 

while($row = mysql_fetch_array($result, MYSQL_ASSOC)){

		echo '<h3>'.$row['from'].' Update:</h3>';

		echo '<div>';
			echo '<h6><a href="http://www.dazser.com/assets/article.php?var='.$row['pid'].'" class="story" name="story-'.$row['pid'].'">'.$row['title'].'</a></h6>';
			echo '<h4>'.$row['date'].'</h4>';
			echo '<div class="story-'.$row['pid'].'"></div>';
		echo '</div>';
		echo '<hr />';
}


include 'assets/closedb.php';
?>