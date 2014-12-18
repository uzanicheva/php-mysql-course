<!DOCTYPE html>
<html>
<head>
	
    <meta charset="UTF-8">
    
    <title> Login </title>

</head>

<style>

	form
		{
			font-size: 22px;
			border: 1px solid green;
			padding: 10px;
			margin: 10px;
		}
	
	form > div
		{
			margin-bottom: 12px;
		}

</style>

<body>

<?php
	<form action="php_mysql_validate_change.php" method="POST" >
	
		<div>
			<span>Потребителско Име:</span>
			<input type="text" name="username" />
		</div>
		
		<div>
			<span>Парола:</span>
			<input type="password" name="password" />
		</div>
		
		<div>
			<span>Нова парола:</span>
			<input type="password" name="newpassword" />
		</div>
		
		<div>
			<span>Повтори новата парола:</span>
			<input type="password" name="renewpassword" />
		</div>
				
		<div>
			<input type="hidden" name="check" value="1" />
			<input type="submit" value="Влез" />
		</div>
	</form>	
?>

</body>
</html>
