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
	<form action="php_mysql_validate.php" method="POST" >
	
		<div>
			<span>Потребителско Име:</span>
			<input type="text" name="username" />
		</div>
		
		<div>
			<span>Парола:</span>
			<input type="password" name="password" />
		</div>
		
		<div>
			<span>Повтори паролата:</span>
			<input type="password" name="repassword" />
		</div>
		
		<div>
			<span>Имейл:</span>
			<input type="text" name="email" />
		</div>
		
		<div>
			<span>Име:</span>
			<input type="text" name="name" />
		</div>
		
		<div>
			<span>Фамилия:</span>
			<input type="text" name="surname" />
		</div>
		
		<div>
			<span>Таен въпрос:</span>
			<input type="text" name="secretquestion" />
		</div>
		
		<div>
			<span>Таен отговор:</span>
			<input type="text" name="secretanswer" />
		</div>
		
		<div>
			<input type="hidden" name="check" value="1" />
			<input type="submit" value="Влез" />
		</div>
	</form>	
?>

</body>
</html>
