<?php
session_start();
$id = $_POST['custid'];
$name = $_POST['name'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$postcode = $_POST['postcode'];
$city = $_POST['city'];
$state = $_POST['state'];
$contact = $_POST['contact'];


$dbc=mysqli_connect("localhost","root","","telekungsystem");
if (mysqli_connect_error())
{
	echo "Failed to connect to MYSQL".mysqli_connect_error();

}

$sql="INSERT INTO `customer` (`custid`,`name`, `add1`, `add2`, `postcode`, `city`, `state`, `contact`)\n"
. "VALUES ('$id',UPPER('$name'), UPPER('$add1'), UPPER('$add2'), '$postcode', UPPER('$city'), '$state', UPPER('$contact'))";

$results= mysqli_query($dbc,$sql); //to keep results query into $result
$sql="INSERT INTO `new_add` (`custid`,`add1`, `add2`, `postcode`, `city`, `state`)\n"
. "VALUES ('$id','', '', '', '', '')";

$results= mysqli_query($dbc,$sql); //to keep results query into $result
//$count=mysqli_num_rows($result); //to keep nos of rows in $count
//echo $sql;
if ($results)
{
	print '<script>alert("One Record Has Been Added");</script>';
	//header("location: menu.php");//go to home.page
	print '<script>window.location.assign("cust-record.php");</script>';
	
}
else
 {

 	mysqli_rollback($dbc);
	print '<script>alert("Invalid Data! No Record Been Added.");</script>'; //display message box
	print '<script>window.location.assign("cust-new.php");</script>';
	}	
	
?>