<?php
	include("sql.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST["uname"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$repass = $_POST["repass"];
		$date = $_POST["date"];
		if( empty($name) or empty($email) or empty($pass) or empty($repass) or empty($date))
			$error = "Please give all details";
		if(strlen($name) < 3)
			$errorName = "Username Should be more than 3 character";
		if(!filter_var($email, FILTER_VALIDATE_EMAIL) )
			$errorEmail = "Invalid Email Id";
		if(strlen($pass) < 8){	
			$errorPass = "Password Should be of 8 characters";
			if(strcmp($pass,$repass) != 0)
				$errorRepass = "Password Doesnt Match";
		}
		if(checkEmailName($email,$name) == 1)
			$errorE = "Username or Email Id already exists.";
		
		if($error == "" and $errorName == "" and $errorEmail == "" and $errorPass == "" and $errorRepass == "" and $errorE == ""){
			insertData($name,$email,md5($pass),$date);
			session_destroy();
			session_start();
			$_SESSION['suname'] = $name;
			$suname = $_SESSION["uname"];
			header("Location: index.php");
		}
		
	}
?>