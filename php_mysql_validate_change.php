<?php

	function isValid($username, $password)
		{
			if(mb_strlen($username, "UTF-8") > 3 && mb_strlen($username, "UTF-8") <= 10 && mb_strlen($password, "UTF-8") > 3 && mb_strlen($password, "UTF-8") <= 10 && $newpassword = $repassword)
				{
					echo $password = $newpassword;				}
		
				return false
		}
	
	$isValid = isValid()
	
	if($isValid){
		
			$connection = new mysqli($servername, $sqlUsername, $pass, $dbname);
			
			if ($connection->connect_error) {
				die("Невъзможно свързване със сървър: " . $connection->connect_error);
			} 
			
			$connection->set_charset("utf8");
			
			$passwordHash = md5($password);
			
			$sql = "SELECT COUNT(*) AS UsersCount FROM users ".
				   "WHERE Username='$username' AND Password='$passwordHash'";
				   
			$queryReselt = $connection->query($sql);
			
			$row = $queryReselt->fetch_assoc();
			
			if($row["UsersCount"] == 1)
				{
					echo "<strong> Добре дошли! Променихте успешно паролата си! </strong>";
				}
			else
				{
					echo "<strong> Грешно потребителско име, парола или имейл </strong>";
				}
			
			 $connection->close();
		} 
		
		else
			{
			   echo "<div><strong> Невалидна информация! Моля, опитайте пак </strong></div>";
			}
?>
