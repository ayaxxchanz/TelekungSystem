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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Details</title>

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
	tr:hover td {background:#eee}
	.footer {
		background:#000;
		padding: 20px 20px 20px 20px;
		color: #fff;
      }
	  .thnew {
		background:#f2c700;
      }
	  
		
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="home.php"><img src="\TelekungSystem\img\logoheader.png" width="100" height="60">Record System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cust-record.php">Customer</a>
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
	<?php
     $id = $_GET['id'];
	 
     $dbc = mysqli_connect ("localhost","root","","telekungsystem");
     if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      }

  	 // $sql = "select * from `group` where `grpno` = 3";
	 $sql = "select * from customer where custid like '%$id%'\n";
	 
     $result = mysqli_query($dbc,$sql);

// to display the details error
  	  
      if (false === $result) 
      {
         echo mysql_error();
	    }
	  
    $row = mysqli_fetch_assoc($result)
	?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Edit Details</h1>
          <br><br><br>
		    <div class="form-group">
	<fieldset disabled>
    <label for="custid">Customer ID</label>
    <input type="text" class="form-control"  name="custid" value="<?=$row['custid'];?>" style="text-align:center">
  </div>
        </div>
		<div class="col-sm">
		<p class="lead" >Main Details</p>
		<form name="update" method="post" action="process-updatecust.php?id=<?php echo $id;?>">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" style="text-transform:uppercase" value="<?=$row['name'];?>" required>
  </div>
    <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" name="contact" value="<?=$row['contact'];?>"  style="text-transform:uppercase" required>
  </div>
		</div>
		<div class="col-sm">
<p class="lead" >Main Address</p>
<div class="form-group">
    <label for="add1">Address 1</label>
    <input type="text" class="form-control" name="add1" style="text-transform:uppercase" value="<?=$row['add1'];?>" required>
  </div>
<div class="form-group">
    <label for="add2">Address 2</label>
    <input type="text" class="form-control" name="add2" style="text-transform:uppercase" value="<?=$row['add2'];?>">
  </div>
<div class="form-group">
    <label for="postcode">Postcode</label>
    <input type="text" class="form-control" name="postcode" value="<?=$row['postcode'];?>" required>
  </div>
 <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" style="text-transform:uppercase" value="<?=$row['city'];?>" required>
  </div>
 <div class="form-group">
    <label for="state">State</label>
    <select name="state" class="custom-select" required>
      <option value="<?=$row['state'];?>"><?=$row['state'];?></option>
	  <option value="JOHOR">JOHOR</option>
      <option value="KEDAH">KEDAH</option>
      <option value="KELANTAN">KELANTAN</option>
      <option value="MELAKA">MELAKA</option>
      <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
      <option value="PAHANG">PAHANG</option>
      <option value="PERAK">PERAK</option>
      <option value="PERLIS">PERLIS</option>
      <option value="PULAU PINANG">PULAU PINANG</option>
      <option value="SELANGOR">SELANGOR</option>
      <option value="TERENGGANU">TERENGGANU</option>
      <option value="KUALA LUMPUR">KUALA LUMPUR</option>
      <option value="PUTRAJAYA">PUTRAJAYA</option>
      <option value="SARAWAK">SARAWAK</option>
      <option value="SABAH">SABAH</option>
      <option value="LABUAN">LABUAN</option>
    </select>
  </div>
		</div>
<?php
     $id = $_GET['id'];
	 
     $dbc = mysqli_connect ("localhost","root","","telekungsystem");
     if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      }

  	 // $sql = "select * from `group` where `grpno` = 3";
	 $sql = "select * from new_add where custid like '%$id%'\n";
	 
     $result = mysqli_query($dbc,$sql);

// to display the details error
  	  
      if (false === $result) 
      {
         echo mysql_error();
	    }
	  
    $row = mysqli_fetch_assoc($result)
	?>
	<div class="col-sm">
	<p class="lead" >Other Address</p>
<div class="form-group">
    <label for="newadd1">Address 1</label>
    <input type="text" class="form-control" name="newadd1" style="text-transform:uppercase" value="<?=$row['add1'];?>">
  </div>
<div class="form-group">
    <label for="newadd2">Address 2</label>
    <input type="text" class="form-control" name="newadd2" style="text-transform:uppercase" value="<?=$row['add2'];?>">
  </div>
<div class="form-group">
    <label for="newpostcode">Postcode</label>
    <input type="text" class="form-control" name="newpostcode" value="<?=$row['postcode'];?>">
  </div>
 <div class="form-group">
    <label for="newcity">City</label>
    <input type="text" class="form-control" name="newcity" style="text-transform:uppercase" value="<?=$row['city'];?>">
  </div>
 <div class="form-group">
    <label for="newstate">State</label>
    <select name="newstate" class="custom-select">
      <option value="<?=$row['state'];?>"><?=$row['state'];?></option>
	  <option value="JOHOR">JOHOR</option>
      <option value="KEDAH">KEDAH</option>
      <option value="KELANTAN">KELANTAN</option>
      <option value="MELAKA">MELAKA</option>
      <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
      <option value="PAHANG">PAHANG</option>
      <option value="PERAK">PERAK</option>
      <option value="PERLIS">PERLIS</option>
      <option value="PULAU PINANG">PULAU PINANG</option>
      <option value="SELANGOR">SELANGOR</option>
      <option value="TERENGGANU">TERENGGANU</option>
      <option value="KUALA LUMPUR">KUALA LUMPUR</option>
      <option value="PUTRAJAYA">PUTRAJAYA</option>
      <option value="SARAWAK">SARAWAK</option>
      <option value="SABAH">SABAH</option>
      <option value="LABUAN">LABUAN</option>
    </select>
  </div>
  <p align="right"><a href="/telekungsystem/cust-moredetails.php?id=<?=$id;?>"  class="btn btn-danger btn-lg" >Cancel</a>
  <input type="submit" class="btn btn-info btn-lg" name="save" value="Save"></p>
  </form>
	</div>
      </div>
    </div>
	
<br><br><br><div class="footer">
            <center>© 2018 developed  by <a href="https://aliya-hudi.blogspot.com/">Aliya Hudi</a> (UiTM Melaka Kampus Jasin)</center>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>
