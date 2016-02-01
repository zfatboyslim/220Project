<?php
	require_once('../cfg/sql.php');

	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$request = $_GET['q'];

	$mysql_str = "INSERT INTO users(username,password,email,firstname,lastname,phone,address) VALUES ('$username','$password','$email','$firstname','$lastname','$phone','$address')";

	if(!mysqli_query($mydb, $mysql_str)){
		echo(mysqli_error());
		die;
	}

	mysqli_close($mydb);


	header('Location: http://localhost:81/project/index.php?q=success');

?>