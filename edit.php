<?php
	include "includes/connection.php";
	$data = json_decode(file_get_contents("php://input")); 
	$index = $data->prod_index; 
	$qry = mysqli_query($con,'SELECT * from product WHERE id='.$index);
	$data = array();
		while($rows = mysqli_fetch_array($qry))
		{
			$data[] = array(
			"id" => $rows['id'],
			"prod_name" => $rows['prod_name'],
			"prod_desc" => $rows['prod_desc'],
			"prod_price" => $rows['prod_price'],
			"prod_quantity" => $rows['prod_quantity']
			);
		}
	print_r(json_encode($data));
?>