<!DOCTYPE html>
<html>
	<head>
	<title>1000</title>
	</head>
	<body>
		<table>
<?php
	$i = 0;
	
	for ($i >= 0 ; $i <= 1000 ; $i++)
		{
			echo '<td>';
			if ($i%13 == 0 && $i >= 0 && $i <= 1000)
				{
				echo '<td style="background:green">'.$i.'</td>';
				}
				else {
					if ($i%36 == 0 && $i >= 0 && $i <= 1000)
				{
				echo '<td style="font-weight:bold">'.$i.'</td>';	
				}
			}
			echo '</td>';
	}
?>
</table>
</body>
</html>
