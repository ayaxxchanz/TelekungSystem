<?php
if(isset($_GET['delete_id']))
{
	require('connect.php');
     $sql_query="DELETE FROM customer WHERE customer.custid=".$_GET['delete_id'];
     mysql_query($sql_query);
     header("Location: cust-record.php");
}
?>
