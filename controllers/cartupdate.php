<?php
	session_start();
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}
  	require_once($_SERVER['DOCUMENT_ROOT'].'/project/cfg/sql.php');
	$myid = $_GET['productID'];
	$quan = $_GET['quantity'];
	
	$mysql_str = "UPDATE cart SET quantity='".$quan."' WHERE username='".$_SESSION['ses_username']."' AND productID='$myid'";
	if (!mysqli_query($mydb, $mysql_str)) {
	 	echo (mysqli_error());
		die;
	}


	header("Location:http://localhost:81/project/views/cart.php");


?>