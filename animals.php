<?php
	$animals = array ("cat","dog","rabbit","horse");
	
	$animals_string = implode("; ", $animals);
	
	echo '<tr>'.$animals_string'</tr>';
?>
