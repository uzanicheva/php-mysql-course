<!DOCTYPE html>
<html>
	<head>
		<style>
		table {
			width:400px;
			height:1300px;
			border:1px solid black;				
			}
		
		tr {
			width:398px;
			height:100px;
			border:1px solid black;
			}
			
		
		</style>
	</head>
<body>
<table>
	<?php
	for ($row = 1 ; $row <= 13 ; $row++)
		{
		$type = "" ;
		if ($row == 0)
			{
			$type = "A";
			}
		else if ($row == 11)
			{
			$type = "J";
			}
		else if ($row == 12)
			{
			$type = "Q";	
			}
		else if ($row == 13)
			{
			$type = "K";
			}
		echo '<tr>';
		echo '</tr>';
		}
		
	for ($col = 0 ; $col < 4 ; $col++)
		{
		if ($col == 1)
			{
			$color = "U+2660";	
			}
		else if ($col == 2)
			{
			$color = "U+2665";
			}
		else if ($col == 3)
			{
			$color = "U+2666";	
			}
		else if ($col == 4)
			{
			$color = "U+2663";
			}
		echo '<td>';
		echo '</td>';
		}
	?>
</table>
</body>
</html>
