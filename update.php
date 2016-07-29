<?php 
    include "includes/connection.php";
            $data = json_decode(file_get_contents("php://input"));
            $index = $data->id;
			$productname = $data->pname;
			$company = $data->company;
			$price = $data->price;
			$quantity = $data->quantity;
			if(isset($productname) && !empty($productname) && isset($company) && !empty($company) && isset($price) && !empty($price) && isset($quantity) && !empty($quantity)){
				$query = "UPDATE `product` SET `id`='$index',`name`='$productname',`company`='$company',`price`='$price',`quantity`='$quantity' WHERE id='$index'";
				if(mysqli_query($con, $query)) {
				  return true;
				} else {
				  echo "Error: " . $sql . "<br />" . mysqli_error($con);
				}
			}	
?> 