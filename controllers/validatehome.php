<?php
  if(isset($_POST["username"]))
    {
      $var_username = $_POST["username"];
    }
  if(isset($_POST["password"]))
    {
      $var_password = $_POST["password"];
    }

  $md5pass = md5($var_password);

  $request = $_GET['q'];

  require_once($_SERVER['DOCUMENT_ROOT'].'/project/cfg/sql.php');

  $result = $mydb->query("SELECT COUNT(*) FROM users WHERE username='$var_username' AND password='$md5pass'") or die("There is SQL statement error");

  $i = 0;

  while($row = mysqli_fetch_array($result))
    {
      $data[$i++] = $row;
   }

  if($data[0][0] > 0)
    {
      session_start();
      $_SESSION['ses_userid'] = session_id();
      $_SESSION['ses_username'] = $var_username;
      header('Location: http://localhost:81/Project/home3.php');
    }
    else
    {
      header('Location: http://localhost:81/Project/home3.php?q=error');
    }

?>