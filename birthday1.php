<!DOCTYPE html>
<html>
	<head>
		<title>Age</title>
		<meta charset="utf-8">
	</head>
	
	<body>
	<?php

		function age()
				{
					$year = $_GET["year"];
					$today = date("Y");
					$age = $today - $year;
					echo "Ти си на ".$age." години!";	
						
				}
			
			age ();
	?>
</html>
