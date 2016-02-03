<?php
<<<<<<< HEAD
	require_once($_SERVER['DOCUMENT_ROOT'].'/project/cfg/sql.php');
=======
	require_once($_SERVER['DOCUMENT_ROOT'].'project/cfg/sql.php');
>>>>>>> 478d37c2aacb4d991cd87b167df464827f9731a3

	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$request = $_GET['q'];

	$md5pass = md5($password);

	$mysql_str = "INSERT INTO users(username,password,email,firstname,lastname,phone,address) VALUES ('$username','$md5pass','$email','$firstname','$lastname','$phone','$address')";

	if(!mysqli_query($mydb, $mysql_str)){
		echo(mysqli_error());
		die;
	}

	mysqli_close($mydb);


	header('Location: http://localhost:81/project/index.php?q=success');

?>