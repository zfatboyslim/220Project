<?php
	session_start();
	require_once("session.php");
	$_SESSION['ses_userid'] = "";
	$_SESSION['ses_username'] = "";
	
	session_destroy();
	header('Location: http://localhost:81/project/home3.php');
?>