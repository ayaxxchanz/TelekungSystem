<?php
session_start();
$orderid = $_POST['orderid'];
$custid = $_POST['custid'];
$product = $_POST['product'];
$price = $_POST['price'];
$notes = $_POST['notes'];

require "connect.php";
$sql="INSERT INTO `custorder` (`orderid`,`custid`,`productcode`,`totalprice`,`notes`)\n"
. " VALUES ('$orderid','$custid',UPPER('$product'),'$price',UPPER('$notes'))";

$results= mysql_query($sql);
if ($results)
{
	print '<script>alert("One Record Has Been Added");</script>';
	//header("location: order-record.php");//go to home.page
	print '<script>window.location.assign("order-record.php");</script>';
	
}
else
 {
	print '<script>alert("Invalid Data! No Record Been Added.");</script>'; //display message box
	print '<script>window.location.assign("order-new.php");</script>';
	}	
	
?>