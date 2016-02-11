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

	$result = $mydb->query("SELECT * FROM cart WHERE username='".$_SESSION['ses_username']."'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$data[$i++] = $row;
	}

	
	$result = $mydb->query("SELECT COUNT(*) FROM cart WHERE username='" . $_SESSION['ses_username'] ."'")  or die("There is SQL Statement error");
	$i =0;
	while($row = mysqli_fetch_array($result)){
		$countdata[$i++] = $row;
	}

		$totalrecord = $countdata[0][0];
?>
<html>
<!DOCTYPE html>
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
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
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
                <a class="navbar-brand" href="#"><img class="logo-custom" src="../img/logo.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="../home3.php">HOME</a></li>
                     <li><a href="../products.php">PRODUCTS</a></li>
                     <li><a href="../home3.php#contact-sec">CONTACT</a></li>
					<?php require("../controllers/checksession.php") ?>
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" >WELCOME TO STAMFORD MAGAZINES </h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
	<div id="promotions" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">PRODUCTS</h1>
                 </div>

             </div>
<div class="products">
	<center>
	<table>
		<?php if($totalrecord > 0){
            echo "<tr>";
            echo "<td>Product Name</td>";
            echo "<td>Image</td>";
            echo "<td>Description</td>";
            echo "<td>Price</td>";
            echo "<td>Quanitity</td>";
            echo "<td></td>";
            echo "</tr>";
			for($myrow=0; $myrow <$totalrecord; $myrow++) {  

			$result = $mydb->query("SELECT * FROM product WHERE productID='".$data[$myrow]['productID']."'")  or die("There is SQL Statement error");
			while($row = mysqli_fetch_array($result)) {
			$prod = $row;
			}
			echo "<tr><form action='../controllers/cartupdate.php?productID=".$data[$myrow]['productID']." method='POST'>";
			echo "<input type='hidden' name='productID' value='".$data[$myrow]['productID']."'>";
			echo "<td>".$prod['productName']."</td>";
			echo "<td><img src='/project/images/mags/".$prod['image']."'></td>";
			echo "<td>".$prod['description']."</td>";
			echo "<td>$".$prod['price']."</td>";
			echo "<td>";
			echo "<input type='text' name='quantity' maxlength='2' size='1' onchange='this.form.submit()' value='".$data[$myrow]['quantity']."'/>";
			echo "</td>";
			echo "<td><a href='../controllers/cartdelete.php?productID=".$data[$myrow]['productID']."'>Delete</a></td>";
			echo "</form></tr>";
            }
            echo "<input type='text' placeholder='Credit Card Number'>";
            echo "<input type='text' placeholder='Card Holder'>";
            echo "<input type='text' placeholder='CVV code'>";
            echo "<input type='text' placeholder='Expiration Date'>";
            echo "<a href='../controllers/checkout.php'>CheckOut</a>";

        }
        else{
            echo "No Products in Cart";
        }
		?>	
	</table>

	</center>

	<hr>
</div> </div> <!-- COURSES SECTION END-->
 <div class="container set-pad">


     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>                  
     
              
              
                
  </div>

     <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Our Location </strong></h2>
        <hr />
                    <div>
                        <h4>234/80 -UFG , New Street,</h4>
                        <h4>Switzerland.</h4>
                        <h4><strong>Call:</strong>  + 67-098-907-1269 / 70 / 71 </h4>
                        <h4><strong>Email: </strong>info@yourdomain.com</h4>
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Social Conectivity </strong></h2>
        <hr />
                    <div >
                        <a href="http://www.facebook.com">  <img src="../assets/img/Social/facebook.png" alt="" /> </a>
                     <a href="http://www.plus.google.com"> <img src="../assets/img/Social/google-plus.png" alt="" /></a>
                     <a href="http://twitter.com/share"> <img src="../assets/img/Social/twitter.png" alt="" /></a>
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
	</script>
<!--		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
<script src="../js/flip.js"></script>
<!--	<script type="text/javascript" src="js/jsjs/jquery.min.js"></script>-->
	<script type="text/javascript" src="../js/jsjs/foundation.js"></script>
	<script type="text/javascript" src="../js/jsjs/jquery.flip.js"></script>

	<script type="text/javascript" src="../js/jsjs/app.js"></script>
<script type="text/javascript">
		  	var cart = document.getElementById('cart'),
		  		logout = document.getElementById('logout'),
		  		myaccount = document.getElementById('myaccount');
 			 cart.addEventListener('click', function() {
    			document.location.href = '../views/cart.php';
 			})
 			 myaccount.addEventListener('click', function() {
    			document.location.href = '../views/account.php';
 			})
  			 logout.addEventListener('click', function() {
    			document.location.href = '../controllers/logout.php';
 			})
		</script>
	
</body>

<html>

