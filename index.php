<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/home.css">
<!--	BREAKBREAKBREAK-->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/foundation.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/custom.css" />
	<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
	<script type="text/javascript" src="js/dialog.js"></script>
	<noscript>
		<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
	</noscript>
<!--	BREAKBREAKBREAK-->
	<title>index page</title>
</head>
<body>
	<div id="navbar">
		<ul>
			<li class='active'><a href='#'><span>About</span></a></li>
			<li><a href='#'><span>Promotion</span></a></li>
			<li><a href='#'><span>Magazines</span></a></li>
			<li><a href='#'><span>Contact Us</span></a></li>
			<li><a href='#'><span>Your Cart</span></a></li>
<!--<?php
	//Do not delete
	//require("controllers/checksession.php");
?>-->
			<li class='last' id="login"><a href='#'><span>login / register</span></a></li>
			<hr>
		</ul>
	</div>

	<!--this is a hidden dialog for registration-->
	<div id="login-dialog" class="dialog">
		<form class="dialog-form" action="index.php" method="post">
	    <input type="text" name="email" placeholder="Your e-mail" />
	    <input type="text" name="username" placeholder="Username" />
	    <input type="password" name="password" placeholder="Password"/>
	    <input type="password" name="confirm-password" placeholder="Confirm Password"/>
	    <button type="submit" name="submit-signup">Agree</button>
	    <button type="reset" name="reset" onclick="clearDialog()">Cancel</button>
	  </form>
	</div>
	<!--end of the hidden dialog div-->

	<!--BREAKBREAKBREAKBREAK-->
	<div class="container demo-2">
			<div id="slider" class="sl-slider-wrapper">
				<div class="sl-slider">
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
								<h2>A bene placito.</h2>
								<blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>
							</div>
				</div>

					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
							<h2>Regula aurea.</h2>
							<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
							<h2>Dum spiro, spero.</h2>
							<blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-4"></div>
							<h2>Donna nobis pacem.</h2>
							<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-5"></div>
							<h2>Acta Non Verba.</h2>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
	</div>
<!--BREAKBREAKBREAKBREAK-->

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

<!--
	<script>
  var k = 0;

  function flip() {
	  var j = document.getElementsByClassName("thumbnail");
//	  var j = document.getElementById("toflip1");
    k += 180;
    j.style.transform = "rotatey(" + k + "deg)";
    j.style.transitionDuration = "0.5s"
  }
</script>
-->
	<div class="row medium-up-3 large-up-4">
		<!-- flip div -->
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="images/category/health.png">
				</div>
				<div>
					<img class="thumbnail" src="images/category/healthflip.png">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="images/category/fashion.png">
				</div>
				<div>
					<img class="thumbnail" src="images/category/fashionflip.png">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="images/category/food.png">
				</div>
				<div>
					<img class="thumbnail" src="images/category/foodflip.png">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
				</div>
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
				</div>
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
				</div>
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
				</div>
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
				</div>
			</div>
			<div class="column image-flip">
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
				</div>
				<div>
					<img class="thumbnail" src="http://placehold.it/300x300">
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
			$(function() {

				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();

						},
						initEvents = function() {

							$nav.each( function( i ) {

								$( this ).on( 'click', function( event ) {

									var $dot = $( this );

									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );

									}

									slitslider.jump( i + 1 );
									return false;

								} );

							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes:
				 *
				 * example how to add items:
				 */

				/*

				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');

				// call the plugin's add method
				ss.add($items);

				*/

			});
		</script>
	<script type="text/javascript" src="js/jsjs/app.js"></script>
	<script type="text/javascript">
	  var login = document.getElementById('login'),
	      loginDialog = document.getElementById('login-dialog')

	  login.addEventListener('click', function() {
	    loginDialog.className = 'dialog visible'
	  })
	  function clearDialog() {
	    loginDialog.className = 'dialog'
	  }
	</script>
	</body>
</html>
