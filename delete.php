<?php 
    include "includes/connection.php";
     switch($_GET['action']) {
        case 'delete_entry' :
            $data = json_decode(file_get_contents("php://input"));
            $index = $data->id;
            $delSQL = "DELETE FROM product WHERE id = $index";
            if(mysqli_query($con, $delSQL)) {
              return true;
            } else {
              echo "Error: " . $sql . "<br />" . mysqli_error($con);
            }
            break;
      }
    
?>