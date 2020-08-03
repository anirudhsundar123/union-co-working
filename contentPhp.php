<?php 
	include("sql.php");
	function displayItems(){
		try{
			$connection = DatabaseConnection();
			$stmt = $connection->prepare("Select * from item");
			$stmt->execute();
			$count = $stmt->rowCount();
			if($count > 0){
				while($row = $stmt->fetch()){
					$item = $row["itemName"];
					$desc = $row["description"];
					$cost = $row["cost"];
					$img = $row['image'];
					$location = $row['location'];
					$paid = $row['paid'];
					$id = $row['iid'];
					echo '<div class="col-md-4">
                    <div class="card" style="margin-bottom:50px;">
                        <div class="card-body" style="padding-right: 0px;padding-top: 0px;padding-left: 0px;"><img class="place-image" style="width: 348px;height: 200px;" src="/project2/content/'.$img.'">
               <h5 class="place-name" style="margin-top: 15px;margin-left: 10px; margin-bottom:10px;"><strong>'.$item.'</strong></h5><a class="card-link" href="details.php?id='.$id.'" style="color: red;font-weight: 800;margin-left: 10px;">VISIT CENTER &gt;&gt;</a>
                            <hr style="width: 300PX;">
                            
                                <p style="margin-left: 10px;font-size: 12px;margin-bottom: 0px;">From</p>
                                <div>
                                    <div class="form-group d-inline">
                                        <p class="d-inline-block pace-cost" style="margin-left: 10px;"><strong>Rs.'.$cost.' /-</strong></p>
                                    </div>
                                    <p class="d-inline-block" style="margin-left: 5px;font-size: 12px;">per day</p>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';
					
				}
			}
			
		}
		catch(PDOException $exception_error)
		{
			echo "Error".$exception_error->getMessage();
		}
	}
?>