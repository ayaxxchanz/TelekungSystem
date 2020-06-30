<?php
	session_start();
	$id = $_GET['id'];
	
	require('connect.php');
	$sql = "DELETE FROM `custorder` WHERE `orderid` = '$id'";
	$result = mysql_query($sql);
	
	if($result) //success  
	{
			Print '<script>alert("Record Successfuly Deleted.");</script>'; 
			Print '<script>window.location.assign("order-record.php");</script>'; 
		}
		else //unsuccess  
		{
			Print '<script>alert("Record is failed to be Deleted.");</script>'; 
			Print '<script>window.location.assign("order-record.php");</script>'; 		
		}
	

?>
