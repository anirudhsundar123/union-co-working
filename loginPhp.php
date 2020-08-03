<?php 
	include("sql.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST["email"];
		$pass = $_POST["pass"];
		$error="";
		if(Authentication($name,md5($pass)) == 0){
			$error = "Invalid prn and password";
		}
		else{
			//session_destroy();
			session_start();
			$_SESSION["suname"] = $name;
			header('Location: index.php');
		}
	}
?>