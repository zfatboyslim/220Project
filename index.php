
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
    <input type="text" name="username" placeholder="Username" id="dinput"/>
    <input type="password" name="password" placeholder=" Password" id="dinput"/>
    <button type="submit" name="submit-login" class="dbutton">Login</button>
    <button type="reset" name="reset" class="dbutton" onclick="clearDialog()">Cancel</button>
  </form>
</div>

<div id="signup-dialog" class="dialog">
  <form class="dialog-form" action="controllers/signup.php" method="post">
    <h1 style="color: black">SIGN UP</h1>
    <input type="text" name="username" placeholder="Username" id="dinput" />
    <input type="text" name="password" placeholder="Password" id="dinput"/>
    <input type="text" name="email" placeholder="Email" id="dinput"/>
    <input type="text" name="firstname" placeholder="First Name" id="dinput"/>
    <input type="text" name="lastname" placeholder="Last Name" id="dinput"/>
    <input type="text" name="phone" placeholder="Phone Number" id="dinput"/>
    <input type="text" name="address" placeholder="Address" id="dinput"/>
    <button type="submit" name="submit-signup" class="dbutton">Agree</button>
    <button type="reset" name="reset" onclick="clearDialog()" class="dbutton">Cancel</button>
  </form>
</div>


<script type="text/javascript" src="js/jsjs/foundation.js"></script>
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
    document.location.href = 'home3.php';
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
