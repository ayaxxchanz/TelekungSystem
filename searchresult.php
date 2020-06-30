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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search Result</title>

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
		background:#333;
		padding: 20px 20px 20px 20px;
		color: #fff;
      }
	  .thnew {
		background:#f2c700;
      }
	  
		
    </style>
<script type="text/javascript">
function delete_id(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='process-deletecust.php?delete_id='+id;
     }
}
</script>
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
            <li class="nav-item active">
              <a class="nav-link" href="#">Customer</a>
                <span class="sr-only">(current)</span>
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
	$search = $_GET['search'];
	include("connect.php");
	
	$result = mysql_query("select count(1) FROM customer where custid='%$search%'\n"
			. "or `name` like '%$search%'\n"
			. "or `add1` like '%$search%'\n"
			. "or `add2` like '%$search%'\n"
			. "or `postcode` like '%$search%'\n"
			. "or `city` like '%$search%'\n"
			. "or `state` like '%$search%'\n"
			. "or `contact` like '%$search%' order by custid DESC");
	$row = mysql_fetch_array($result);

	$total = $row[0];
	?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Customer Record & Details</h1>
		  <p class="lead"><?php echo "Displaying " . $total . " result(s).";?></p>
          <p class="lead" align="right"><a href="/telekungsystem/cust-new.php" class="btn btn-light" ><i class="fa fa-plus-circle"></i> Add New Customer</a></p>
          <p align="right"><form action="searchresult.php" method="get" ><span>Search: </span>
<input name="search" type="text" value="<?php echo $search;?>" required> 
<input name="btnsearch" type="submit" value="GO">
</form></p>

		  <table  class="table table-bordered">
		  <thead class="thnew">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">ADDRESS 1</th>
        <th scope="col">ADDRESS 2</th>
        <th scope="col">POSTCODE</th>
        <th scope="col">CITY</th>
        <th scope="col">STATE</th>
        <th scope="col">CONTACT</th>
        <th scope="col">MANAGE</th>
               
      </tr></thead>
    <?php
            $sql = "select * from `customer` where `custid` like '%$search%'\n"
			. "or `name` like '%$search%'\n"
			. "or `add1` like '%$search%'\n"
			. "or `add2` like '%$search%'\n"
			. "or `postcode` like '%$search%'\n"
			. "or `city` like '%$search%'\n"
			. "or `state` like '%$search%'\n"
			. "or `contact` like '%$search%' order by custid DESC";
            $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
	{
        Print '<tr>
                  <td>'.$row['custid'].'</td>
                  <td>'.$row['name'].'</td>
                  <td>'.$row['add1'].'</td>
                  <td>'.$row['add2'].'</td>
                  <td>'.$row['postcode'].'</td>
				  <td>'.$row['city'].'</td>
				  <td>'.$row['state'].'</td>
				  <td>'.$row['contact'].'</td>
				  <td>
                   <center><a href="cust-moredetails.php?id='.$row['custid'].'" class="btn btn-info btn-sm" >More...</a>
				  <p><p>
				  <a href="cust-edit.php?id='.$row['custid'].'" class="btn btn-success btn-sm" ><i class="fa fa-pencil"></i></a>
				  <a href="javascript:delete_id('.$row['custid'].')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </center></td>
                </tr>';
      }
	 if($total == 0){
		 Print '<tr>
                  <td colspan=9>No record found.</td>
                </tr>';
	 }
	mysql_close($con);
    ?>
    </table>
	
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
