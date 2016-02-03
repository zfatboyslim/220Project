<?php
		$hostname= "irexjr.ddns.net:3306";
		$username = "rexjr";
		$password = "abc";
		$dbname = "cartweb";

		$mydb = mysqli_connect($hostname,$username,$password,$dbname) or die("There is Database connection error");
?>