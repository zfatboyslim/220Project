<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/project/cfg/sql.php');
	session_start();
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}

	$test = $_POST["prodID"];
	echo $test;

  $result = $mydb->query("SELECT COUNT(*) FROM cart WHERE username='$ses_user' AND productID='$test'") or die("There is SQL statement error");

  $i = 0;

  while($row = mysqli_fetch_array($result))
    {
      $data[$i++] = $row;
   }

      $result = $mydb->query("SELECT * FROM product WHERE productID='$test'")  or die("There is SQL Statement error");
      while($row = mysqli_fetch_array($result)) {
      $prod = $row;
      }

      $price = $prod['price'];

  if($data[0][0] > 0)
    {
      header('Location: http://localhost:81/project/views/cart.php');
    }
    else
    {
	$mysql_str = "INSERT INTO `cart`(`username`, `productID`, `quantity`, `price`) VALUES ('$ses_user','$test','1','$price')";


   if (!mysqli_query($mydb,$mysql_str))
    {
    die('Error: ' . mysqli_error($mydb));
    }
    mysqli_close($mydb);
	
	
      header('Location: http://localhost:81/project/products.php');
    }


?>