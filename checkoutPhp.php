<?php 
	include("sql.php");
	function checkout($uname){
		try{
			$connection = DatabaseConnection();
			$stmt = $connection->prepare("select SUM(cost) from cart,item where item.iid = cart.iid and uname = :name");
			$stmt->bindParam(":name",$uname);
			$stmt->execute();
			$count = $stmt->rowCount();
			if($count > 0){
				while($row = $stmt->fetch()){
					$cost = $row["SUM(cost)"];
					echo '<div class="container">
            <form method="POST">
                
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col col-md-4">
                            <p class="float-right" style="height: 30px;font-size: 20px;font-family: "Titillium Web", sans-serif;vertical-align: middle;">Phone Number</p>
                        </div>
                        <div class="col col-md-8"><input class="form-control shadow" type="text" name="number" style="margin-left: 14px;width: 60%;border-radius: 5px;height: 40px;border-top: none;border-right: none;border-left: none;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col col-md-4">
                            <p class="float-right" style="height: 30px;font-size: 20px;font-family: "Titillium Web", sans-serif;vertical-align: middle;">Billing Address</p>
                        </div>
                        <div class="col col-md-8"><textarea class="form-control shadow" name="addr" style="margin-left: 14px;width: 60%;border-radius: 5px;height: 100px;border-top: none;border-right: none;border-left: none;"></textarea></div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col col-md-4">
                            <p class="float-right" style="height: 30px;font-size: 20px;font-family: "Titillium Web", sans-serif;vertical-align: middle;">Payment Option</p>
                        </div>
                        <div class="col col-md-8 radio-inline">
                            <input type="radio" class=" shadow" name="payment" value="Google Pay" style="margin-left: 10px; margin-top:10px; border-top: none;border-right: none;border-left: none;"> Google Pay
                        
                            <input type="radio" class=" shadow" name="payment" value="Debit Card" style="margin-left: 10px; margin-top:10px; border-top: none;border-right: none;border-left: none;"> Debit Card                        

                            <input type="radio" class=" shadow" name="payment" value="Google Pay" style="margin-left: 10px; margin-top:10px; border-top: none;border-right: none;border-left: none;"> Credit Card
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col col-md-4">
                            <p class="float-right" style="height: 30px;font-size: 20px;font-family: "Titillium Web", sans-serif;vertical-align: middle;">Total cost :<b>'.$cost.'</b>/-</p>
                        </div>
                </div>
                
                <div class="form-group">
                    <div class="form-row" style="margin-bottom: 20px;">
                        <div class="col text-center"><button class="btn btn-primary" type="submit" name= "buy" style="width: 30%;background-color: red;margin-top: 30px;"><strong>Buy Now</strong></button></div>
                    </div>
                </div>
            </form>
        </div>';
				}
                if($cost == " ")){
                    echo '<script> window.location.href = cart.php </script>';
                }
				if(isset($_POST['buy'])){
					$phone = $_POST['number'];
					$addr = $_POST['addr'];
                    $pay = $_POST['payment'];
                    if(records($phone,$addr,$cost,$_SESSION['suname'],$pay) == 0){
						deleteCheckoutCart($_SESSION['suname']);
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