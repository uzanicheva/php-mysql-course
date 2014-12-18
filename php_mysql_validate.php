<?php

	function isValid($username, $password, $email){
		if(mb_strlen($username, "UTF-8") > 3 && mb_strlen($username, "UTF-8") <= 10 && mb_strlen($password, "UTF-8") > 3 && mb_strlen($password, "UTF-8") <= 10 && mb_strlen($email, "UTF-8") <= 20){
			return true;
		}
		return false;
	}

	if(isset($_POST["check"]) && $_POST["check"] == "1"){
	
		$username = $_POST["username"];
		$password = $_POST["password"];
		$repassword = $password;
		$email = $_Post["email"];
		
		$isValid = isValid($username, $pass, $email);
		
		if($isValid){
		
			$servername = "localhost";
			$sqlUsername = "sqluser";
			$pass = "123456";
			$dbname = "login";
			
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
					echo "<strong> Добре дошли! </strong>";
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
