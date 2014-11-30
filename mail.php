<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>mail</title>
</head>
<body>
<table>
	<?php

    $user = array(
        'name' => 'Владимир Путин',
        'username' => 'володя',
        'email' => 'put_in@theworldismine.com',
        'enter' => '1000000',
        'friends' => '1 - Медведев'
    );
	echo '<tr></tr>';
	echo "<td> Име: </td>";
    echo "<td>" . $user['name'] . " </td>";
    echo '<tr></tr>';
    echo "<td>Потребителско име: </td>";
    echo "<td>" . $user['username'] . " </td>";
    echo '<tr></tr>';
    echo "<td> Мейл: </td>";
    echo "<td>" . $user ['email'] . " </td>";
    echo '<tr></tr>';
    echo "<td> Брой влизания: </td>";
    echo "<td>" . $user ['enter'] . " </td>";
    echo '<tr></tr>';
    echo "<td> Приятели: </td>";
    echo "<td>" . $user ['friends'] . " </td>";
    
	?>
</table>
</body>
</html>
