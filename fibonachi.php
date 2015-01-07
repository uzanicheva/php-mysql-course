<?php
$fibonachi = array();

$itr = 0;

while ($itr < 10) {
	
	if ($itr < 2) {
		$fibonachi_element = $itr;
		}
		
		else {
			$fibonachi_element = $fibonachi[$itr-1]+$fibonachi[$itr-2];
			}	
	$fibonachi[]=$fibonachi_element;
	
	$itr++;
	
	}
	
	echo implode(",", $fibonachi);
?>
