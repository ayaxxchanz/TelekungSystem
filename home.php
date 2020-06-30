<?php
	session_start();
	if($_SESSION['sid']!=session_id())
	{
		header("location:error.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
	.footer {
		background:#333;
		padding: 20px 20px 20px 20px;
		color: #fff;
      }
	  .thnew {
		background:#f2c700;
      }
    </style>
	<script src="https://code.highcharts.com/highcharts.js"></script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="\TelekungSystem\img\logoheader.png" width="100" height="60">Record System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/telekungsystem/cust-record.php">Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product-details.php">Product</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="order-record.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
			<br><br>
		  <img src="\TelekungSystem\img\avatar.png" width="150" height="150">
          <h1 class="mt-5">Hi, admin!</h1>
		 </div>
		  <div class="col" align="right">
			<?php
			require 'connect.php';
			
			$sql = "select count(*) custid FROM customer";
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);
			?>
			<p class="lead"><b>Total customer:</b> <?php echo $row['custid'];?></p>
			<?php
			require 'connect.php';
			
			$sql = "select count(*) productcode FROM product";
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);
			?>
			<p class="lead"><b>Total types of product:</b> <?php echo $row['productcode'];?></p>
		  </div>
		  <div class="col">
		  
			<?php
			require 'connect.php';
			
			$sql = "select count(*) orderid FROM custorder";
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);
			?>
			<p class="lead"><b>Total order (since Mac 18'):</b> <?php echo $row['orderid'];?></p>
			<?php
			require 'connect.php';
			
			$sql = "select SUM(totalprice) FROM custorder";
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);
			?>
			<p class="lead"><b>Total sales:</b> RM <?php echo $row['SUM(totalprice)'];?></p>
		  </div>
		  <div class="col-lg-12 text-center" id="container">
		  
		  </div>
      </div>
    </div><br><br><br><br><br><br><div class="footer">
            <center>© 2018 developed  by <a href="https://aliya-hudi.blogspot.com/">Aliya Hudi</a> (UiTM Melaka Kampus Jasin)</center>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
