<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/project/cfg/sql.php');
	session_start();
	if(isset($_SESSION['ses_username'])){
	$ses_user = $_SESSION['ses_username'];
	}
	$result = mysqli_query($mydb,"SELECT * FROM users WHERE username='" . $ses_user ."'") 
	or die("Error: ".mysqli_error($mydb));

	while($row = mysqli_fetch_array($result)) {
	$data = $row;
	}
	$result = $mydb->query("SELECT * FROM cart WHERE username='".$_SESSION['ses_username']."'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
	}
	$result = $mydb->query("SELECT COUNT(*) FROM cart WHERE username='" . $_SESSION['ses_username'] ."'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$countdata[$i++] = $row;
	}
	$totalrecord = $countdata[0][0];
	$jsondata = "";


	if($totalrecord > 0){
		for($myrow=0; $myrow <$totalrecord; $myrow++) {  
			$result = $mydb->query("SELECT * FROM product WHERE productID='".$data[$myrow]['productID']."'")  or die("There is SQL Statement error");
			while($row = mysqli_fetch_array($result)) {
				$prod = $row;
			}
			$jsondata .= $prod['productID'].', ';
		}
	}
	$today = date("Y-m-d H:i:s"); 
	$mysql_str = "INSERT INTO `orders`(`username`, `products`, `total`, `address`, `status`, `date`) VALUES ('$ses_user','$jsondata','50','".$data['address']."','1', '$today')";
   if (!mysqli_query($mydb,$mysql_str))
    {
    die('Error: ' . mysqli_error($mydb));
    }

	$mysql_str = "DELETE FROM cart WHERE username='".$_SESSION['ses_username']."'";
   if (!mysqli_query($mydb,$mysql_str))
    {
    die('Error: ' . mysqli_error($mydb));
    }


    mysqli_close($mydb);



    header('Location: http://localhost:81/project/views/account.php');

?>