<?php
	$id = $_GET['id'];
	$name = $_POST['name'];
	$add1 = $_POST['add1'];
	$add2 = $_POST['add2'];
	$postcode = $_POST['postcode'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$contact = $_POST['contact'];
	$newadd1 = $_POST['newadd1'];
	$newadd2 = $_POST['newadd2'];
	$newpostcode = $_POST['newpostcode'];
	$newcity = $_POST['newcity'];
	$newstate = $_POST['newstate'];
	
	$dbc = mysqli_connect ("localhost", "root", "","telekungsystem");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	$result = mysqli_query($dbc, "UPDATE `customer`,`new_add` SET `customer`.`name`=UPPER('$name'), `customer`.`add1`=UPPER('$add1'), `customer`.`add2`=UPPER('$add2'),\n"
	. "`customer`.`postcode`='$postcode',`customer`.`city`=UPPER('$city'), `customer`.`state`=UPPER('$state'),\n"
	. "`customer`.`contact`=UPPER('$contact'),\n"
	. "`new_add`.`add1`=UPPER('$newadd1'), `new_add`.`add2`=UPPER('$newadd2'),`new_add`.`postcode`='$newpostcode',\n"
	. "`new_add`.`city`=UPPER('$newcity'), `new_add`.`state`=UPPER('$newstate')\n"
	. "where `customer`.`custid`='$id' AND `new_add`.`custid`='$id'");
	if (false === $result) 
      {
         echo mysql_error();
	    }
		
	if($result) //success  
	{
			mysqli_commit($dbc);
			Print '<script>alert("Record is successfully updated.");</script>'; 
			Print '<script>window.location.assign("cust-moredetails.php?id='.$id.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("Record is failed to update.");</script>'; 
			Print '<script>window.location.assign("cust-edit.php?id='.$id.'");</script>'; 		
	}
?>
