<!DOCTYPE html>
<html>
	<head>
		<title>замунда менте</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		
	<?
		function isValid($check_search_span, $buttons_down_span)
		{
			if ($check_search_span == "check_search_span" || $buttons_down_span == "buttons_down_span")
				{
				return true;
				}
			else
				{
				return false;	
				}
		}

	
		$check_search_span = $_GET["check_search_span"];
		$buttons_down_span = $_GET["buttons_down_span"];
				
		$isValid = isValid($check_search_span , $buttons_down_span);
		
		if($isValid)
		{
			echo "<div><strong>Намерихме филм!</strong></div>";
		}
		else
		{
			echo "<div><strong>Няма съвпадения!</strong></div>";
		}
			
?>
	</body>
</html>
