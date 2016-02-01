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
  
  require_once('/../cfg/sql.php');

  $result = $mydb->query("SELECT COUNT(*) FROM `cart` WHERE username='" . $_SESSION['ses_username'] ."'") 
  or die("Error: ".mysqli_error($mydb));
  $row = $result->fetch_row();

  if($ses_userid != null){
      if($ses_userid == session_id() && $ses_user != ""){
        echo "<li class='last'><a><span>";
        echo "<form action='controllers/logout.php' action='post'><button type='submit'>LOGOUT</button></form>";
        echo "</span></a></li>";
        echo "<li class='last'><a><span>";
        echo "Cart:<font color='#808080'> ".$row[0]."</font>";
        echo "</span></a></li>";
        echo "<li class='last'><a><span>";
        echo "<center><font size='3' color='#808080'> Hello, ".$_SESSION['ses_username']."</font><br>Your Account</center>";
        echo "</span></a></li>";
      }else{
        require("/../views/loginreg.html");
      }
  }else{
    require("/../views/loginreg.html");
  }
?>