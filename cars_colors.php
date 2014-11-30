<?php
	$cars = array ("Smart","Renault","Moskvich","Lada");
	
	$colors = array ("Yellow","Green","Pink","Blue");
	
	$cars_colors = array_merge($cars, $colors);
	
	echo '<pre>';
	print_r ($cars_colors);
	echo '<pre>';
?>
