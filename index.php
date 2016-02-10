
<html>
<head>
    <title>Stamford Health Magazine Center</title>
    <link rel="stylesheet" href="css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="jfu">
    <div class="headContent">
      <h1>Stamford Health Magazine Center</h1>
    </div>
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
    <h1 style="color: black">LOGIN</h1>
    <input type="text" name="username" placeholder="Username" class="dinput"/>
    <input type="password" name="password" placeholder=" Password" class="dinput"/>
    <button type="submit" name="submit-login" class="dbutton">Login</button>
    <button type="reset" name="reset" class="dbutton" onclick="clearDialog()">Cancel</button>
  </form>
</div>

<div id="signup-dialog" class="dialog">
  <form class="dialog-form" action="controllers/signup.php" method="post">
    <h1 style="color: black">SIGN UP</h1>
    <input type="text" class="dinput" id="usernameform" name="username" placeholder="Username" required />
    <input type="text" class="dinput" id="passwordform" name="password" placeholder="Password" minlength="6" required  />
    <input type="text" class="dinput" id="emailform" name="email" placeholder="Email" required />
    <input type="text" class="dinput" id="fnameform" name="firstname" placeholder="First Name" required />
    <input type="text" class="dinput" id="lnameform" name="lastname" placeholder="Last Name" required />
    <input type="text" class="dinput" id="phoneform" name="phone" placeholder="Phone Number" maxlength="10" required />
    <input type="text" class="dinput" name="address" placeholder="Address" required />
    <button type="submit" class="dbutton" name="submit-signup">Agree</button>
    <button type="reset" class="dbutton" name="reset" onclick="clearDialog()">Cancel</button>
  </form>
</div>

<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript" src="js/jsjs/foundation.js"></script>
<script type="text/javascript" src="js/dialog.js"></script>

</body>
</html>
