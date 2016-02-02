<?php
  if($ses_userid != null){
      if($ses_userid == session_id() && $ses_user != ""){
        require_once('/../cfg/sql.php');
        $result = $mydb->query("SELECT COUNT(*) FROM `cart` WHERE username='" . $_SESSION['ses_username'] ."'") 
        or die("Error: ".mysqli_error($mydb));
        $row = $result->fetch_row();

        echo "<li class='last'><a><span>";
        echo "<form action='controllers/logout.php' action='post'><button type='submit'>LOGOUT</button></form>";
        echo "</span></a></li>";
        echo "<li class='last'><a><span>";
        echo "<div id='cart'>Cart:<font color='#808080'> ".$row[0]."</font></div>";
        echo "</span></a></li>";
        echo "<li class='last'><a><span>";
        echo "<center><font size='3' color='#808080'> Hello, ".$_SESSION['ses_username']."</font><br><div id='myaccount'>Your Account</div></center>";
        echo "</span></a></li>";
      }else{
        require("/../views/loginreg.html");
      }
  }else{
    require("/../views/loginreg.html");
  }
?>