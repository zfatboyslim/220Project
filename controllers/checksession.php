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
	
	if($ses_userid != null){
			if($ses_userid == session_id() && $ses_user != ""){
				echo "Logged in as: ".$_SESSION['ses_username'];
				echo "<form action='controllers/logout.php' action='post'><center><button type='submit'>LOGOUT</button></center></form>";
			}else{
				require("/../views/loginreg.html");
			}
	}else{
		require("/../views/loginreg.html");
	}
?>