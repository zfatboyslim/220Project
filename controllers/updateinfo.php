<?php
  session_start();
  if(isset($_SESSION['ses_userid'])){
  $ses_userid = $_SESSION['ses_userid'];
  }
  else{
    $ses_userid = null;
  }
  if(isset($_SESSION['ses_username'])){
  $ses_user = $_SESSION['ses_username'];
  }

	require_once($_SERVER['DOCUMENT_ROOT'].'/project/cfg/sql.php');

	$email = $_POST["email"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	echo $ses_user;

	$mysql_str = "UPDATE users SET email='$email', firstname='$firstname', lastname='$lastname', phone='$phone', address='$address' WHERE username='" . $ses_user ."'";

   if (!mysqli_query($mydb,$mysql_str))
    {
    die('Error: ' . mysqli_error($mydb));
    }
    mysqli_close($mydb);


	header('Location: http://localhost:81/project/views/account.php');

?>