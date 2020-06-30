<?php
session_start();
$code = $_POST['code'];
$name = $_POST['name'];
$price = $_POST['price'];


$dbc=mysqli_connect("localhost","root","","telekungsystem");
if (mysqli_connect_error())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();

}

$sql="INSERT INTO `product` (`productcode`,`name`,`price`)\n"
. " VALUES ('$code',UPPER('$name'),'$price')";

$results= mysqli_query($dbc,$sql); //to keep results query into $result
//$count=mysqli_num_rows($result); //to keep nos of rows in $count
//echo $sql;
if ($results)
{
	mysqli_commit($dbc);
	print '<script>alert("One Record Has Been Added");</script>';
	print '<script>window.location.assign("product-details.php");</script>';
	
}
else
 {

 	mysqli_rollback($dbc);
	print '<script>alert("Invalid Data! No Record Been Added.");</script>'; //display message box
	print '<script>window.location.assign("product-new.php");</script>';
	}	
	
?>