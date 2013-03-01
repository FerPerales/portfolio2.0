<?php
	$hit_count = @file_get_contents('count.txt');
	$hit_count++;
	@file_put_contents('count.txt', $hit_count);
	header('Content-disposition: attachment; filename=CV Fernando Perales_en.pdf');
	header('Content-type: application/pdf');
	readfile('docs/CV Fernando Perales_en.pdf');
?>