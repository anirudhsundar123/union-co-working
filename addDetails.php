<?php 
	include("sql.php");
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$item = $_POST['itemName'];
		$desc = $_POST['desc'];
		$cost = $_POST['cost'];
		$location = $_POST['location'];
		$image = $_FILES['itemImage']['name'];
		if(empty($item) or empty($desc) or empty($cost) or empty($image))
			$error = "Please enter all the details";

		$contentDir = "/var/www/html/project2/content/";
		$target_file = $contentDir . basename($_FILES["itemImage"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if(checkDetails($item) == 0){
			if(move_uploaded_file($_FILES['itemImage']['tmp_name'], $target_file)){
				insertItem($item, $desc, $cost, $image, $location);
				echo '<script>alert("Details has been uploaded")</script>';
			}
		}
		else{
			echo "<script>alert('Item already exists');</script>";
		}
	}
?>