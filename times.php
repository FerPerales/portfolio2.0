<?php
	
	$hit_count = @file_get_contents('count.txt');
	echo 'File has been downloaded '.$hit_count.' times';

?>