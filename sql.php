<?php 
	function DatabaseConnection()
	{
		$servername = "localhost";
		$db_username = "root";
		$db_password = "";
		$dbname = "project2";	
		try{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		}
		catch(PDOException $error){
			echo "Error".$error->getMessage();
			die();
		}
	}

	function insertData($name, $email, $pass, $date){
		try
		{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("insert into signup (name,email,password,dob) VALUES (:name,:email,:password,:date)");
			$statement->bindParam(":name", $name);
			$statement->bindParam(":email",$email);
			$statement->bindParam(":password",$pass);
			$statement->bindParam(":date",$date);
			$statement->execute();
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function checkEmailName($email,$name){
		try
		{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("select email,name from signup where email=:email or name=:name");
			$statement->bindParam(":email",$email);
			$statement->bindParam(":name",$name);
			$statement->execute();
			$count = $statement->rowCount();
			if($count > 0){
				return 1;
			}
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function Authentication($email,$pass){
		try
		{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("select email,password from signup where email = :email and password = :password");
			$statement->bindParam(":email",$email);
			$statement->bindParam(":password",$pass);
			$statement->execute();
			$count = $statement->rowCount();
			if($count > 0){
				return 1;
			}
			else{
				return 0;
			}
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function insertItem($itemName, $desc, $cost, $image , $location){
		try
		{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("insert into item (itemName, description, cost, image, location) VALUES (:iname,:desc,:cost,:image, :location)");
			$statement->bindParam(":iname", $itemName);
			$statement->bindParam(":desc",$desc);
			$statement->bindParam(":cost",$cost);
			$statement->bindParam(":image",$image);
			$statement->bindParam(":location",$location);
			
			$statement->execute();
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function checkDetails($itemName){
		try{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("select itemName from item where itemName = :itemName");
			$statement->bindParam(":itemName",$itemName);
			$statement->execute();
			$count = $statement->rowCount();
			if($count > 0){
				return 1;
			}
			else{
				return 0;
			}
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function updateDetails($item,$desc,$cost,$image,$loc){
		try{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("update item set description = :desc, cost = :cost, image = :image, location = :location where itemName = :item");
			$statement->bindParam(":desc", $desc);
			$statement->bindParam(":cost", $cost);
			$statement->bindParam(":image", $image);
			$statement->bindParam(":location", $loc);
			$statement->bindParam(":item", $item);
			$statement->execute();
			return 0;
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function addToCart($id, $uname)	{
		try
		{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("insert into cart (iid,uname) VALUES (:id,:uname)");
			$statement->bindParam(":id", $id);
			$statement->bindParam(":uname",$uname);
			
			$statement->execute();
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function checkCart($id,$name){
		try{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("select iid from cart where iid = :id and uname = :name");
			$statement->bindParam(":id",$id);
			$statement->bindParam(":name",$name);
			$statement->execute();
			$count = $statement->rowCount();
			if($count > 0){
				return 1;
			}
			else{
				return 0;
			}
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function deleteCart($cid){
		try{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("delete from cart where cart_id = :cid");
			$statement->bindParam(":cid",$cid);
			$statement->execute();
			return 0;
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function checkCartCheckout($uname){
		try{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("select * from cart where uname = :name");
			$statement->bindParam(":name",$uname);
			$statement->execute();
			$count = $statement->rowCount();
			if($count > 0){
				return 1;
			}
			else{
				return 0;
			}
			return 0;
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function totalCost($uname){
		try{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("select SUM(cost) from cart,item where item.iid = cart.iid and uname = :name");
			$statement->bindParam(":name",$uname);
			$statement->execute();
			$count = $statement->rowCount();
			if($count > 0){
				
			}
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function records($phone, $addr, $tcost, $name, $pay){
		try
		{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("insert into records (phone, address, tcost, name, pay) VALUES (:phone,:addr,:tcost,:name,:pay)");
			$statement->bindParam(":phone", $phone);
			$statement->bindParam(":addr",$addr);
			$statement->bindParam(":tcost",$tcost);
			$statement->bindParam(":name",$name);
			$statement->bindParam(":pay",$pay);
			$statement->execute();
			return 0;
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}
	function deleteCheckoutCart($name){
		try{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("delete from cart where uname = :name");
			$statement->bindParam(":name",$name);
			$statement->execute();
			return 0;
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}


	function deleteItem($name){
		try{
			$conn = DatabaseConnection();
			$statement = $conn->prepare("delete from cart where uname = :name");
			$statement->bindParam(":name",$name);
			$statement->execute();
			return 0;
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

	function insertFeedback($name, $email, $feed){
		try
		{
			$conn = DatabaseConnectionection();
			$statement = $conn->prepare("insert into feedback (name,email,feedback) VALUES (:name,:email,:feed)");
			$statement->bindParam(":name", $name);
			$statement->bindParam(":email",$email);
			$statement->bindParam(":feed",$feed);
			$statement->execute();
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}

?>