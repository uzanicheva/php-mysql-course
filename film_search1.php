<!DOCTYPE html>
<html>
	<head>
		<title>film search</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		
	<?php
	
		$film_name = $_GET["film_name"];
		$actor = $_GET["actor"];
		$genre = $_GET["genre"];
		
		if (isset($film_name , $actor , $genre))
			{
				echo $film_name." е ".$genre." с участието на ".$actor;
			}
					
		?>
	
	</body>
</html>
