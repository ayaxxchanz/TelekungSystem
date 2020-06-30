<?php
	$id = $_GET['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	
	$dbc = mysqli_connect ("localhost", "root", "","telekungsystem");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	$result = mysqli_query($dbc, "UPDATE `product` SET `name`=UPPER('$name'),\n"
	. "`price`='$price' where `productcode`='$id'");
	
	if (false === $result) 
      {
         echo mysql_error();
	    }
		
	if($result) //success  
	{
			mysqli_commit($dbc);
			Print '<script>alert("Product is successfully updated.");</script>'; 
			Print '<script>window.location.assign("product-details.php?id='.$id.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("Failed to update.");</script>'; 
			Print '<script>window.location.assign("cust-edit.php?id='.$id.'");</script>'; 		
	}
?>
