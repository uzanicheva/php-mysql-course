<!DOCTYPE html>
<html>
	<head>
	<title>selfie</title>
	</head>
	<body>
		<table>
<?php
$selfie = array (
 'fav_color' => 'Yellow',
 'fav_film' => 'Avatar',
 'fav_song' => 'Avant qu\'elle parte',
 'astral_sign' => 'Leo'
);

ksort($selfie);

echo '<tr></tr>';
echo '<td>Favourite color: </td>';
echo '<td>'.$selfie['fav_color'].'</td>';
echo '<tr></tr>';
echo '<td>Favourite film: </td>';
echo '<td>'.$selfie['fav_film'].'</td>';
echo '<tr></tr>';
echo '<td>Favourite song: </td>';
echo '<td>'.$selfie['fav_song'].'</td>';
echo '<tr></tr>';
echo '<td>Astral sign: </td>';
echo '<td>'.$selfie['astral_sign'].'</td>';

?>
		</table>
	</body>
</html>
