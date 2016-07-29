<?php 
    include "includes/connection.php";
    $data = json_decode(file_get_contents("php://input"));
    $productname = $data->pname;
    $company = $data->company;
    $price = $data->price;
    $quantity = $data->quantity;
    if(isset($productname) && !empty($productname) && isset($company) && !empty($company) && isset($price) && !empty($price) && isset($quantity) && !empty($quantity)){
        $query = "INSERT INTO `store`.`product`(`id`, `name`, `company`, `price`, `quantity`) VALUES ('','$productname','$company','$price','$quantity')";
        $query_run = mysqli_query($con,$query);
        if ($query_run == 1){
            console.log("INsert");
            $success = 'Inserted Successfully!';
        }
    }else{
        echo 'Fill all the fields please';
    }


?>
