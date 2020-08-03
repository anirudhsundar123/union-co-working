<?php 
	include("sql.php");
	function displayDetails($id){
		try{
			$connection = DatabaseConnection();
			$stmt = $connection->prepare("Select * from item where iid = :id");
			$stmt->bindParam(":id",$id);
			$stmt->execute();
			$count = $stmt->rowCount();
			if($count > 0){
				while($row = $stmt->fetch()){
					$item = $row["itemName"];
					$desc = $row["description"];
					$cost = $row["cost"];
					$img = $row['image'];
					$location = $row['location'];
					$id = $row['iid'];
					echo '<div class="container" style="min-height:80%;">
				            <div class="row">
				                <div class="col-md-6 text-center"><img style="max-width: 500px;max-height: 500px; " src="/project2/content/'.$img.'"></div>
				                <div class="col-md-6">
				                    <h3 style="font-family: Montserrat, sans-serif;"><strong>'.$item.'</strong></h3>
				                    <div>
				                        <h5>Location: '.$location.'</h5>
				                    </div>
				                    <p><br>'.$desc.'<br></p>
				                </div>
				                
				            </div>
				        </div>
				    
				    <div class="container">
				        <p style="font-size: 24px;display: inline-block;">Cost : <strong>Rs.</strong>&nbsp;</p>
				        <form class="d-inline" method="POST">
				            <div class="form-group d-inline">
				                <p style="font-size: 24px;display: inline-block;font-weight: 800;">'.$cost.'</p>
				            </div>
				            <p style="display: inline-block;font-size: 24px;"><strong>&nbsp;/-</strong></p>
				            <div class="form-group d-inline"><button class="btn btn-primary d-inline float-right" type="submit" style="width: 30%;background-color: #ff3f3f;" name="'.$id.'">Add To Cart</button></div>
				        </form>
				    </div>';
					
				}
				if(isset($_POST["$id"])){
						$iid = (int) $id;
						if(checkCart($id) == 0){
							addToCart($iid ,$_SESSION['suname']);
							echo '<script>alert("Your item has been added to cart")</script>';
						}
						else{
							echo '<script>alert("Your item has been already been added to cart")</script>';
						}
					}
			}
			
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}
?>