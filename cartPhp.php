<?php 
	include("sql.php");
	function displayCart($name){
		try{
			$connection = DatabaseConnection();
			$stmt = $connection->prepare("Select * from cart,item where item.iid = cart.iid and uname = :name");
			$stmt->bindParam(":name",$name);
			$stmt->execute();
			$count = $stmt->rowCount();
			if($count > 0){
				while($row = $stmt->fetch()){
					$itemName = $row["itemName"];
					$cost = $row["cost"];
					$image = $row["image"];
					$id = $row['cart_id'];
				echo'	<div class="card">
            <div class="card-body cart-items">
                
                    <div class="form-group d-inline">
                        <div><img class="img-fluid d-inline-block place-image" src="/project2/content/'.$image.'" style="width: 200px;height: 200px;border-radius: 5px;">
                            <div class="form-group d-inline">
                                <div class="d-inline-block" style="position: absolute;margin-left: 15px;width: 70%;margin-top: initial;">
                                    <p class="d-block" style="vertical-align: text-top;font-size: 25px;margin-top: 20px;"><strong>'.$itemName.'</strong></p>
                                    <p class="d-inline-block">Rs.&nbsp;</p>
                                    <p class="d-inline-block pace-cost"><strong>'.$cost.'</strong></p>
                                    <p class="d-inline-block pace-cost" style="margin-left: 5px;">/- per day</p>
                                    
                                </div>
                            </div>
                            <form method="POST">
	                            <div class="form-group d-inline">
	                                <div class="d-inline-block float-right">
	                                <button class="btn btn-primary" type="submit" name="'.$id.'" style="background-color: red;border-color: rgba(0,0,0,0);"><strong><i class="fa fa-close"> </i></strong></button></div>
	                            </div>
                            </form>
                        </div>
                    </div>
                
            </div>

        </div>';
        		if(isset($_POST["$id"])){
        			deleteCart($id);
        			echo '<script>window.location.href="cart.php";</script>';
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