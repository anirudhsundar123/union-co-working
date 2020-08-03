<?php 
	include("sql.php");
	if(isset($_POST['contactus'])){
		$name = $_POST['feedback_name'];
		$emailid = $_POST['email'];
		$feed = $_POST['feedback'];
		insertFeedback($name,$emailid,$feed);
	}
	
?>