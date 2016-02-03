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
<html>
<head>
	<meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    
	<link rel="stylesheet" href="css/styles.css">
	
<!--	BREAKBREAKBREAK-->
<!--	<link rel="stylesheet" type="text/css" href="css/demo.css" />-->
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
<!--	<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>-->
<!--
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
		</noscript>
-->
<!--	BREAKBREAKBREAK-->

</head>
<!--  <?php require("controllers/checksession.php") ?>-->
	<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/logo180-50.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="#home">HOME</a></li>
                     <li><a href="#features-sec">PRODUCTS</a></li>
                     <li><a href="#course-sec">ABOUT</a></li>
                     <li><a href="#contact-sec">CONTACT</a></li>
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
                              <h3>Delivering Quality Education</h3>
                           <h1>THE UNIQUE METHOD</h1>
                            <a  href="#features-sec" class="btn btn-info btn-lg" >
                                GET AWESOME 
                            </a>
                             <a  href="#features-sec" class="btn btn-success btn-lg" >
                                FEATURE LIST
                            </a>
                        </li>
                        <!-- End Slider 01 -->
                        
                        <!-- Slider 02 -->
                        <li>
                            <h3>Delivering Quality Education</h3>
                           <h1>UNMATCHED APPROACH</h1>
                             <a  href="#features-sec" class="btn btn-primary btn-lg" >
                               GET AWESOME 
                            </a>
                             <a  href="#features-sec" class="btn btn-danger btn-lg" >
                                FEATURE LIST
                            </a>
                        </li>
                        <!-- End Slider 02 -->
                        
                        <!-- Slider 03 -->
                        <li>
                            <h3>Delivering Quality Education</h3>
                           <h1>AWESOME FACULTY PANEL</h1>
                             <a  href="#features-sec" class="btn btn-default btn-lg" >
                                GET AWESOME 
                            </a>
                             <a  href="#features-sec" class="btn btn-info btn-lg" >
                                FEATURE LIST
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
  
	
	<!--	BEGINNING OF PROMOTIONS-->
		<div class="promotions">
	<hr>
		<h2> PROMOTIONS</h2>
		<div class="paragraphs">
			<p></br></br></br></br></br> </br></br></br></br></br</p>
		</div>
<hr>
	</div>
<!--END OF PROMOTIONS-->
<!--BEGINNING OF CATEGORIES-->
<div class="categories">
	<h2>Categories</h2>
	<a name="categories"></a>

	<div class="row medium-up-3 large-up-4">
		<!-- flip div -->
			<div class="column image-flip">
				<div>
				<a href="products.php"><img class="thumbnail" src="../project/images/men.jpg"></a>
				</div>
				<div>
				<a href="products.php"><img class="thumbnail" src="../project/images/men.jpg"></a>
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="../project/images/fashion.jpg">
				</div>
				<div>
					<img class="thumbnail" src="../project/images/fashion.jpg">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="../project/images/news.jpg">
				</div>
				<div>
					<img class="thumbnail" src="../project/images/news.jpg">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="../project/images/music.jpg">
				</div>
				<div>
					<img class="thumbnail" src="../project/images/music.jpg">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="../project/images/teen.jpg">
				</div>
				<div>
					<img class="thumbnail" src="../project/images/teen.jpg">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="../project/images/homegarden.jpg">
				</div>
				<div>
					<img class="thumbnail" src="../project/images/homegarden.jpg">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="../project/images/sports.jpg">
				</div>
				<div>
					<img class="thumbnail" src="../project/images/sports.jpg">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="../project/images/lifestyle.jpg">
				</div>
				<div>
					<img class="thumbnail" src="../project/images/lifestyle.jpg">
				</div>
			</div>
	</div>
	<hr>
</div>
<footer>
	<p>Copyright © 2012 The Example Company</p>
	<p>
		<a href="about.html">About</a> -
		<a href="policy.html">Privacy Policy</a> -
		<a href="contact.html">Contact Us</a>
	</p>
</footer>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!--<script src="js/flip.js"></script>-->
	<script type="text/javascript" src="js/jsjs/jquery.min.js"></script>
	<script type="text/javascript" src="js/jsjs/foundation.js"></script>
	<script type="text/javascript" src="js/jsjs/jquery.flip.js"></script>
	
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script type="text/javascript">
		  	var cart = document.getElementById('cart'),
		  		myaccount = document.getElementById('myaccount');
 			 cart.addEventListener('click', function() {
    			document.location.href = 'views/cart.php';
 			})
 			 myaccount.addEventListener('click', function() {
    			document.location.href = 'views/account.php';
 			})
		</script>
	
	<script type="text/javascript" src="js/jsjs/app.js"></script>
	</body>
</html>