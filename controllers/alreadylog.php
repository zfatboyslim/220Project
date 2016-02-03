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
        header('Location: http://localhost:81/project/home.php');
      }else{
      }
  }else{
  }
?>