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

	$result = mysqli_query($mydb,"SELECT * FROM users WHERE username='" . $_SESSION['ses_username'] ."'") 
	or die("Error: ".mysqli_error($mydb));

	
	while($row = mysqli_fetch_array($result)) {
	$data = $row;
	}

?>
<html>
	<center>
		<?php
			echo "First Name: ".$data['firstname']."<br>";
			echo "Last Name: ".$data['lastname']."<br>";
			echo "Email: ".$data['email']."<br>";
			echo "Phone: ".$data['phone']."<br>";
			echo "Address: ".$data['address']."<br>";
		?>
		<input type="button" value="Change User Details">
		<br>
		<a href="../home.php">Home</a>
	</center>
</html>