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

    <title>Customer Record</title>

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
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Customer Record & Details</h1>
		  <p class="lead">Displaying 20 records per page.</p>
          <p class="lead" align="right"><a href="/telekungsystem/cust-new.php" class="btn btn-light" ><i class="fa fa-plus-circle"></i> Add New Customer</a></p>
          <p><form action="searchresult.php" method="get" ><span>Search: </span>
<input name="search" type="text" required> 
<input name="btnsearch" type="submit" value="GO">
</form></p>

		  <table  class="table table-bordered ">
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
        <th scope="col">ACTIONS</th>
               
      </tr></thead>
    <?php
	include("connect.php");
	  
	$rowperpage = 20;
	$row = 0;
	// Previous Button
            if(isset($_POST['but_prev'])){
                $row = $_POST['row'];
                $row -= $rowperpage;
                if( $row < 0 ){
                    $row = 0;
                }
            }

            // Next Button
            if(isset($_POST['but_next'])){
                $row = $_POST['row'];
                $allcount = $_POST['allcount'];

                $val = $row + $rowperpage;
                if( $val < $allcount ){
                    $row = $val;
                }
            }

    
	// count total number of rows
            $sql = "SELECT COUNT(*) AS cntrows FROM customer";
            $result = mysql_query($sql);
            $fetchresult = mysql_fetch_array($result);
            $allcount = $fetchresult['cntrows'];

            // selecting rows
            $sql = "SELECT * FROM `customer` ORDER BY `custid` DESC limit $row,".$rowperpage;
            $result = mysql_query($sql);
            $sno = $row + 1;
    $buffer=0;
    while($fetch = mysql_fetch_assoc($result))
	{
        Print '<tr>
                  <td>'.$fetch['custid'].'</td>
                  <td>'.$fetch['name'].'</td>
                  <td>'.$fetch['add1'].'</td>
                  <td>'.$fetch['add2'].'</td>
                  <td>'.$fetch['postcode'].'</td>
				  <td>'.$fetch['city'].'</td>
				  <td>'.$fetch['state'].'</td>
				  <td>'.$fetch['contact'].'</td>
				  <td>
                   <center>
				   <a href="cust-moredetails.php?id='.$fetch['custid'].'" class="btn btn-info btn-sm" >More...</a>
				  <p><p>
				  <a href="cust-edit.php?id='.$fetch['custid'].'" class="btn btn-success btn-sm" ><i class="fa fa-pencil"></i></a>
				  <a href="javascript:delete_id('.$fetch['custid'].')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
				  

                    </center></td>
                </tr>';
      }
	$sno ++;
   
    ?>
    </table>
	<form method="post" action="">
            <div id="div_pagination">
                <input type="hidden" name="row" value="<?php echo $row; ?>">
                <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
                <input type="submit" class="btn btn-warning btn-lg" name="but_prev" value="Previous">
                <input type="submit" class="btn btn-warning btn-lg" name="but_next" value="Next">
            </div>
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
