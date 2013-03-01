<?php
	
	$hit_count = @file_get_contents('count.txt');
	echo '<h1>File has been downloaded '.$hit_count.' times</h1>';
?>