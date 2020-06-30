<?php
$uid = $_POST['uid'];
$pw = $_POST['pw'];

if($uid == 'admin' and $pw == 'admin')
{	
	session_start();
	$_SESSION['sid']=session_id();
	header("location:home.php");
}
else{
	
	echo "<script>alert('User Name Or Password Invalid!');
	window.location.href='index.php';
	</script>";
}

?>