 <?php
        include "includes/connection.php";
        $query = "SELECT * FROM `product`";
        $query_run = mysqli_query($con,$query);
        $row = array();
        while($product = mysqli_fetch_assoc($query_run)){ 
            $row[] = $product;
        }
        
        print json_encode($row);
 ?> 