<?php 
include "includes/connection.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="main.js"></script>
        <style type="text/css" src="css/bootstrap.min.css"></style>
        <script type="text/javascript" src="js/angular/angular.min.js"></script>
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
		

	</head>
	<body>
		<div class="header">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>Dashboard</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-tachometer"></i>
				<span>Dashboard</span>
			</div>
			<nav>
				<ul>
					<li>
						<a href="#">
							<span><i class="fa fa-user"></i></span>
							<span>Users</span>
						</a>
					</li>
                    <li>
						<a href="addProduct.php">
							<span><i class="fa fa-user"></i></span>
							<span>Add Product</span>
						</a>
					</li>
					<li>
						<a href="viewproducts.php">

							<span><i class="fa fa-envelope"></i></span>
							<span>View Products</span>
						</a>
					</li>
					<li class="active">
						<a href="#">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Analytics</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Payments</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title">
				Analytics
			</div>
			
			<div class="main">
				<div ng-view></div>
                <!--<div class="widget">
					<div class="title">Number of views</div>
					<div class="chart"></div>
				</div>
				<div class="widget">
					<div class="title">Number of likes</div>
					<div class="chart"></div>
				</div>
				<div class="widget">
					<div class="title">Number of comments</div>
					<div class="chart"></div>
				</div>-->
			</div>
		</div>
	</body>
</html>