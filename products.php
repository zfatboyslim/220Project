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
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Stam Mags</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
  <link rel="stylesheet" type="text/css" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
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
                <a class="navbar-brand" href="#"><img class="logo-custom" src="img/logo.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="../project/home3.php">HOME</a></li>
                     <li><a href="../project/products.php">PRODUCTS</a></li>
                     <li><a href="#contact-sec">CONTACT</a></li>
					<?php require("controllers/checksession.php") ?>
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <img class="sliderimg" src="images/slider1.jpg">
                            <a  href="#categories" class="btn btn-info btn-lg" >
                                Categories 
                            </a>
                             <a  href="#promotions" class="btn btn-success btn-lg" >
                                Promotions
                            </a>
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>               
							<img src="images/slider3.jpg">
                             <a  href="#categories" class="btn btn-primary btn-lg" >
                               Categories 
                            </a>
                             <a  href="#promotions" class="btn btn-danger btn-lg" >
                                Promotions
                            </a>
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <img src="images/slider2.jpg">
                             <a  href="#categories" class="btn btn-default btn-lg" >
                                Categories 
                            </a>
                             <a  href="#promotions" class="btn btn-info btn-lg" >
                                Promotions
                            </a>
                        </li>
                        <!-- End Slider 03 -->
                    </ul>
		</div>
			</div>
	    		</div>
        			</div>
        				</div>
        					</div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" >WELCOME TO STAMFORD MAGAZINES PRODUCTS PAGE </h2>
                   </div>
               </div>
             </div>
        
    </div>
	
<!--BEGINNING OF CATEGORIES-->
	<div id="promotions" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">PRODUCTS</h1>
                 </div>

             </div>
<div class="products">
	<table align="center">
		<tr><a name="men"></a>
			<td><img class="thumbnail" src="../project/images/men.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/men1.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/men2.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/men3.jpg"></td>
		</tr>
		<tr>
			<td></td>
			<td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="1"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="2"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="3"><input type="submit" value="Subscribe"></form></td>
		</tr>
		<tr><a name="fashion"></a>
			<td><img class="thumbnail" src="../project/images/fashion.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/fashion1.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/fashion2.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/fashion3.jpg"></td>
		</tr>
		<tr>
			<td></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="4"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="5"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="6"><input type="submit" value="Subscribe"></form></td>
		</tr>
		<tr><a name="news"></a>
			<td><img class="thumbnail" src="../project/images/news.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/news1.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/news2.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/news3.jpg"></td>
		</tr>
		<tr>
			<td></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="7"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="8"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="9"><input type="submit" value="Subscribe"></form></td>
		</tr>
		<tr><a name="music"></a>
			<td><img class="thumbnail" src="../project/images/music.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/music1.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/music2.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/music3.jpg"></td>
		</tr>
		<tr>
			<td></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="10"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="11"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="12"><input type="submit" value="Subscribe"></form></td>
		</tr>
		<tr><a name="teen"></a>
			<td><img class="thumbnail" src="../project/images/teen.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/teen1.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/teen2.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/teen3.jpg"></td>
		</tr>
		<tr>
			<td></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="13"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="14"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="15"><input type="submit" value="Subscribe"></form></td>
		</tr>
		<tr><a name="home"></a>
			<td><img class="thumbnail" src="../project/images/homegarden.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/home1.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/home2.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/home3.jpg"></td>
		</tr>
		<tr>
			<td></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="16"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="17"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="18"><input type="submit" value="Subscribe"></form></td>
		</tr>
		<tr><a name="sports"></a>
			<td><img class="thumbnail" src="../project/images/sports.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/sports1.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/sports2.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/sports3.jpg"></td>
		</tr>
		<tr>
			<td></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="19"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="20"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="21"><input type="submit" value="Subscribe"></form></td>
		</tr>
		<tr><a name="lifestyle"></a>
			<td><img class="thumbnail" src="../project/images/lifestyle.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/life1.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/life2.jpg"></td>
			<td><img class="thumbnail" src="../project/images/mags/life3.jpg"></td>
		</tr>
        <tr>
            <td></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="22"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="23"><input type="submit" value="Subscribe"></form></td>
            <td align="center"><form action="controllers/addcart.php" method="POST"><input type="hidden" name="prodID" value="24"><input type="submit" value="Subscribe"></form></td>
        </tr>
	</table>
	<hr>
</div> <!-- COURSES SECTION END-->
    <div id="contact-sec"   >
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
                </div>
          </div> 
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
                        <a href="http://www.facebook.com">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                     <a href="http://www.plus.google.com"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                     <a href="http://twitter.com/share"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                    </div>
                    </div>


                </div>
                 </div>
     <!-- CONTACT SECTION END-->
    <div id="footer">
          &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
	</script>
<!--		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
<script src="js/flip.js"></script>
<!--	<script type="text/javascript" src="js/jsjs/jquery.min.js"></script>-->
	<script type="text/javascript" src="js/jsjs/foundation.js"></script>
	<script type="text/javascript" src="js/jsjs/jquery.flip.js"></script>

	<script type="text/javascript" src="js/jsjs/app.js"></script>
<script type="text/javascript">
        var cart = document.getElementById('cart'),
          logout = document.getElementById('logout'),
          myaccount = document.getElementById('myaccount');
       cart.addEventListener('click', function() {
          document.location.href = 'views/cart.php';
      })
       myaccount.addEventListener('click', function() {
          document.location.href = 'views/account.php';
      })
         logout.addEventListener('click', function() {
          document.location.href = 'controllers/logout.php';
      })
		</script>
	
</body>
</html>
