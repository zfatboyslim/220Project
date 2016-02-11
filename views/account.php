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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Stam Mags</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="../css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/custom.css" />
	   <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
     <link href="../assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../css/index.csss" rel="stylesheet"/>
    <link href="../css/myaccount.css" rel="stylesheet" />
    <!-- Google	Fonts -->
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
     <!--Google Font for Montserrat -->
     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body >

 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../project/home3.php"><img class="logo-custom" src="../img/logo.png" alt=""  /></a>
    </div>
    <div class="navbar-collapse collapse move-me">
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="../home3.php">HOME</a></li>
        <li><a href="../products.php">PRODUCTS</a></li>
        <li><a href="#contact-sec">CONTACT</a></li>
					<?php require("../controllers/checksession.php") ?>
      </ul>
    </div>
  </div>
</div>
<!--NAVBAR SECTION END-->

<!--Hidden Sign up Dialog-->
<div id="signup-dialog" class="dialog">
  <form class="dialog-form" action="controllers/signup.php" method="post">
    <center><h1 style="color: black">SIGN UP</h1>
    <input type="text" class="dinput" id="usernameform" name="username" placeholder="Username" required />
    <input type="text" class="dinput" id="passwordform" name="password" placeholder="Password" minlength="6" required  />
    <input type="text" class="dinput" id="emailform" name="email" placeholder="Email" required />
    <input type="text" class="dinput" id="fnameform" name="firstname" placeholder="First Name" required />
    <input type="text" class="dinput" id="lnameform" name="lastname" placeholder="Last Name" required />
    <input type="text" class="dinput" id="phoneform" name="phone" placeholder="Phone Number" maxlength="10" required />
    <input type="text" class="dinput" name="address" placeholder="Address" required />
    <button type="submit" class="dbutton" name="submit-signup">Agree</button>
    <button type="reset" class="dbutton" name="reset" onclick="clearDialog()">Cancel</button>
    </center>
  </form>
</div>

<!--container-->
<!--contact us-->
<div id="myaccount-sec">
  <div class="overlay">
    <div class="container set-pad">
      <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
        	<br>
          <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" > My Account  </h1>
            <p data-scroll-reveal="enter from the bottom after 0.3s">
               Your First Name : <?php echo $data['firstname']; ?>
            </p>
            <p data-scroll-reveal="enter from the bottom after 0.3s">
              Your Last Name : <?php echo $data['lastname']; ?>
            </p>
            <p data-scroll-reveal="enter from the bottom after 0.3s">
              E-mail : <?php echo $data['email']; ?>
            </p>
            <p data-scroll-reveal="enter from the bottom after 0.3s">
              Phone : <?php echo $data['phone']; ?>
            </p>
            <p data-scroll-reveal="enter from the bottom after 0.3s">
              Address : <?php echo $data['address']; ?>
            </p>
            <div class="form-group">
              <button type="button" class="btn btn-info btn-block btn-lg" id="btnedit">EDIT</button>
            </div>
        </div>
      </div>
      <!--/.HEADER LINE END-->
<div>
  <center>
    <h1>Order History</h1>

<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/project/cfg/sql.php');

  $result = $mydb->query("SELECT * FROM orders WHERE username='".$_SESSION['ses_username']."'")  or die("There is SQL Statement error");
  $i =0;
  while($row = mysqli_fetch_array($result)){
    $data[$i++] = $row;
  }

  
  $result = $mydb->query("SELECT COUNT(*) FROM orders WHERE username='" . $_SESSION['ses_username'] ."'")  or die("There is SQL Statement error");
  $i =0;
  while($row = mysqli_fetch_array($result)){
    $countdata[$i++] = $row;
  }

    $totalrecord = $countdata[0][0];


?>
  <table>
    <tr>
      <td>Date</td>
      <td>Products</td>
      <td>Total</td>
      <td>Address</td>
      <td>Status</td>
      <td></td>
    </tr>
    <?php if($totalrecord > 0){
      for($myrow=0; $myrow <$totalrecord; $myrow++) {
        if ($data[$myrow]['status'] == 1){
          $status = "<font color='red'>Pending</font>";
        }
        else {
          $status = 'Sent';
        }
      echo "<tr>";
      echo "<td>".$data[$myrow]['date']."</td>";
      echo "<td>".$data[$myrow]['products']."</td>";
      echo "<td>$".$data[$myrow]['total']."</td>";
      echo "<td>".$data[$myrow]['address']."</td>";
      echo "<td>".$status."</td>";
      echo "</tr>";
      }
    }
    ?>  
  </table>
  </center>
</div>
      <div id="edit-dialog" >
      <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
          <form action="../controllers/updateinfo.php" method="POST">
            <div class="form-group">
              <?php echo "<input type='text' class='form-control' name='firstname' value='".$data['firstname']."' />";?>
            </div>
            <div class="form-group">
              <?php echo "<input type='text' class='form-control' name='lastname' value='".$data['lastname']."' />";?>
            </div>
            <div class="form-group">
              <?php echo "<input type='text' class='form-control' name='email' value='".$data['email']."' />";?>
            </div>
            <div class="form-group">
              <?php echo "<input type='text' class='form-control' name='phone' value='".$data['phone']."' />";?>
            </div>
            <div class="form-group">
              <?php echo "<input type='text' class='form-control' name='address' value='".$data['address']."' />";?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT</button>
            </div>
            <div class="form-group">
              <button type="reset" class="btn btn-info btn-block btn-lg" id="btncan" onclick="clearDialog()">CANCEL</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div><!--container set-pad end-->

  </div>
</div><!--contact-sec end-->
<!--containter myaccount SECTION END-->



<!--contact us-->
<div id="contact-sec">
  <div class="overlay">
    <div class="container set-pad">
      <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
          <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >CONTACT US  </h1>
            <p data-scroll-reveal="enter from the bottom after 0.3s">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
              Aenean commodo.
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
              Aenean commodo.
            </p>
        </div>
      </div>
      <!--/.HEADER LINE END-->

      <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
          <form>
            <div class="form-group">
              <input type="text" class="form-control "  required="required" placeholder="Your Name" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control " required="required"  placeholder="Your Email" />
            </div>
            <div class="form-group">
              <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
            </div>
          </form>
        </div>
      </div>
    </div><!--container set-pad end-->
  </div>
</div><!--contact-sec end-->

<div class="container">
  <div class="row set-row-pad">
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">
      <h2 ><strong>Our Location </strong></h2>
      <hr/>
        <div>
          <h4>234/80 -UFG , New Street,</h4>
          <h4>Switzerland.</h4>
          <h4><strong>Call:</strong>  + 67-098-907-1269 / 70 / 71 </h4>
          <h4><strong>Email: </strong>info@yourdomain.com</h4>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">
      <h2 ><strong>Social Conectivity </strong></h2>
      <hr/>
        <div>
          <a href="http://www.facebook.com">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
          <a href="http://www.plus.google.com"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
          <a href="http://twitter.com/share"> <img src="assets/img/Social/twitter.png" alt="" /></a>
        </div>
    </div>
  </div>
</div>
<!-- CONTACT SECTION END-->

<div id="footer">

</div>
<!-- FOOTER SECTION END-->

<!--  Jquery Core Script -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="../assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts -->
    <script src="../assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="../assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts -->
    <script src="../assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts -->
    <script src="../assets/js/custom.js"></script>
    <!-- Thumbnail Flip JS-->
    <script src="../js/flip.js"></script>
    <!-- Foundation JS Framework-->
	  <script type="text/javascript" src="../js/jsjs/foundation.js"></script>
    <!-- Flip Image Script-->
    <script type="text/javascript" src="../js/jsjs/jquery.flip.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../js/editdialog.js"></script>
    <!-- <script type="text/javascript">
      var signup = document.getElementById('signup'),
      signupDialog = document.getElementById('signup-dialog')

      signup.addEventListener('click', function() {
      signupDialog.className = 'dialog visible'
      })
      function clearDialog() {
      signupDialog.className = 'dialog'
      }
    </script> -->
    <script type="text/javascript">
        var cart = document.getElementById('cart'),
            logout = document.getElementById('logout'),
            myaccount = document.getElementById('myaccount');
       cart.addEventListener('click', function() {
          document.location.href = 'cart.php';
      })
       myaccount.addEventListener('click', function() {
          document.location.href = 'account.php';
      })
         logout.addEventListener('click', function() {
          document.location.href = '../controllers/logout.php';
      })
		</script>
</body>
</html>