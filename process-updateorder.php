<?php
	$id = $_GET['id'];
	$custid = $_POST['custid'];
	$productcode = $_POST['productcode'];
	$totalprice = $_POST['totalprice'];
	$notes = $_POST['notes'];
	
	$dbc = mysqli_connect ("localhost", "root", "","telekungsystem");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	$result = mysqli_query($dbc, "UPDATE `custorder` SET `custid`=UPPER('$custid'),`productcode`=UPPER('$productcode'),\n"
	. "`totalprice`='$totalprice',`notes`=UPPER('$notes') where `orderid`='$id'");
	
	if (false === $result) 
      {
         echo mysql_error();
	    }
		
	if($result) //success  
	{
			mysqli_commit($dbc);
			Print '<script>alert("Product is successfully updated.");</script>'; 
			Print '<script>window.location.assign("order-record.php?id='.$id.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("Failed to update.");</script>'; 
			Print '<script>window.location.assign("order-edit.php?id='.$id.'");</script>'; 		
	}
?>
