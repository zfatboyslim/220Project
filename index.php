<?php
  require_once('controllers/alreadylog.php');
?>
<html>
<head>
    <title>Welcome to 'Just For You Health Magazine'</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="jfu">
    <img id="jfu" src="images/home/JustForYou.png"/>
    <div class="btn btn-label" id="login">LOG IN</div>
    <div class="btn btn-label" id="guest">Continue as guest</div>
    <div class="btn"><span id="signup">Sign up for member</span></div>
    <?php 
     if(isset($_GET['q'])){
        $error = $_GET['q'];
        $success = $_GET['q'];
       if($error == "error"){
        echo 'Invalid Username or Password';
       }
       if($success == "success"){
        echo 'Registration Complete';
       }
      }
    ?>
</div>

<div id="login-dialog" class="dialog">
  <form class="dialog-form" action="controllers/validate.php" method="post">
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder=" Password"/>
    <button type="submit" name="submit-login">Login</button>
    <button type="reset" name="reset" onclick="clearDialog()">Cancel</button>
  </form>
</div>

<div id="signup-dialog" class="dialog">
  <form class="dialog-form" action="controllers/signup.php" method="post">
    <input type="text" id="usernameform" name="username" placeholder="Username" required />
   

    <input type="text" id="passwordform" name="password" placeholder="Password" minlength="6" required  />
 

    <input type="text" id="emailform" name="email" placeholder="Email" required />


    <input type="text" id="fnameform" name="firstname" placeholder="First Name" required />
  

    <input type="text" id="lnameform" name="lastname" placeholder="Last Name" required />
 

    <input type="text" id="phoneform" name="phone" placeholder="Phone Number" maxlength="10" required />


    <input type="text" name="address" placeholder="Address" required />
  

    <button type="submit" name="submit-signup">Agree</button>
    <button type="reset" name="reset" onclick="clearDialog()">Cancel</button>
  </form>
</div>
   <script src="js/app.js"></script>
</div>

<script type="text/javascript">
  var login = document.getElementById('login'),
      guest = document.getElementById('guest'),
      signup = document.getElementById('signup'),
      signupDialog = document.getElementById('signup-dialog'),
      loginDialog = document.getElementById('login-dialog')

  login.addEventListener('click', function() {
    loginDialog.className = 'dialog visible'
  })
  guest.addEventListener('click', function() {
    // TODO: redirect to home use window.location = url
    //console.log('go to ' + window.location.href + '/index')
    document.location.href = 'home.php';
  })
  signup.addEventListener('click', function() {
    signupDialog.className = 'dialog visible'
  })
  function clearDialog() {
    loginDialog.className = 'dialog'
    signupDialog.className = 'dialog'
  }


</script>
</body>
</html>
