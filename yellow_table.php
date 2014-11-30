<!DOCTYPE html>
<html>
	<head>
		<style>
		table {
			width:500px;
			height:500px;
			border:1px solid green;
			}
		</style>
	</head>
	<body>
		<table>
<?php

$i = 1;

	for ($i >= 1; $i <= 20; $i++) {
		echo "<tr>";
			
			 
			if ($i % 2 == 0 && $i < 12) {
				echo '<td style="background:yellow">'.$i.'</td>';
			}
			
			if ($i % 2 != 0 && $i < 12){
					echo '<td style="background:blue">'.$i.'</td>';
				}
			
			if ($i % 2 == 0 && $i >= 12) {
				echo '<td style="color:red; background:yellow">'.$i.'</td>';
			}
			
			if ($i % 2 != 0 && $i >= 12) {
					echo '<td style="color:red; background:blue">'.$i.'</td>';
				}
			
		echo "</tr>";
		}
 ?>
 
 </table>
	</body>
	</html>
