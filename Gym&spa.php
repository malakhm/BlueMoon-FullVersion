<!DOCTYPE html>
<html lang="en">
<head>
<title>Blue Moon-Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Major - 5* Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles\Gym&Spa.css">

<!-- Header -->
<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    require_once 'indexHeader.html';
} else {

    require_once 'homeHeader.html';}
?>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url(images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			 <ul class="menu_nav_list text-center">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="#"><select onChange="window.location.href=this.value" style="background-color: transparent;border:0px;color:white;font-size:large;background-color: #00000098;
					border:none;" >
					<option >Services</option>
					<option value="Restaurants&Bars.html">Dining</option>
					<option>Gym&Spa</option>
					<option>Packages</option>
				</select></a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul> 
			<div class="menu_review"><a href="rooms.html">Book Now</a></div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll"data-speed="0.8"></div>
		<section class="section main-banner" id="top" data-section="section1">
			<video autoplay muted loop id="bg-video">
				<source src="images\gymvideo.mp4" type="video/mp4" />
			</video>
		</div>
		</section>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><h1>Work Harder, Get Stronger</h1></div>
							<div class="home_text">Blue Moon Hotel's state-of-the-art gym offers guests a comprehensive fitness experience, equipped with cutting-edge exercise facilities and personalized training options, ensuring an unforgettable workout during their stay.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div class="about-us" id="features">
		<h1 >About Us</h1>
		<div class="about-form">
		  <div class="about-text" style="float:right;">
			<p>
			  Blue Moon Gym is your new home in boutique wellness. <br>We join the dependable standards of Pilates
			  with forefront <br>development to give you the most out of each exercise.<br>
	
			  Our specialists are very prepared and fit the bill to furnish<br> you with shape-centered alterations<br>
			  that will push you as far as possible without bargaining your security.<br>
	
			  Expect high-vitality quick-paced exercises that leave each muscle shaking.<br> Blue Moon Gym was
			  established in 2012 by Jeanette and Ryan.<br>
	
			  The Blue Moon Gym Former was structured solely for our gym<br> to consolidate two of the best bits of Pilates<br>
			  hardware, the reformer, and the Pilates seat.<br>
			  Co-structured with the Villency Design Group, <br>the Blue Moon Gym Former displays an extraordinary crossbreed<br> of
			  seat and reformer Pilates techniques,<br> mixing quality preparing and cardio for a full-body exercise.
			</p>
		  </div>
		</br></br>
		  <div class="about-img">
			<img src="images/gym8.jpeg" width="350px" height="250px"/>>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/gym9.jpeg" width="350px" height="250px"/>>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/gym3.jpeg" width="350px" height="250px"/>>&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="images/gym10.jpeg" width="350px" height="250px"/>
		  </div><br/>
		</div>
	  </div>
	

	   <!-- ***** Spa Start ***** -->

  <div class="spa-header">
    <h1>Spa</h1>
    <div class="spa-text">
      <p style="margin-left: 38%;"><em>Enjoy a Blissful Escape: Free Spa Session with Every Booking!</em></p>
      <p>Treat youself to an unforgettable getaway at our exquisite hotel, where we're delighted to offer you an
        exclusive deal. For a limited time, when you book a room with us, we'll treat you to a complimentary spa
        session, ensuring your stay is truly extraordinary.</p>
    </div>
  </div>
 <div class="spa-gallery">
	<img src="images/spa1.jpeg" width="350px" height="250px"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/spa2.jpeg" width="350px" height="250px"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/spa3.jpeg" width="350px" height="250px"/><br/></br>
	<img src="images/spa4.jpeg" width="350px" height="250px"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/spa5.jpeg" width="350px" height="250px"/>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/spa6.jpeg" width="350px" height="250px"/>
 </div>

 <div class="spa-text">
<p>Indulge in a blissful escape at the serene spa of Blue Moon Hotel.
	Unwind with luxurious treatments, ranging from soothing massages to rejuvenating facials, all designed to pamper your senses and promote ultimate relaxation.
	Experience tranquility amidst a refined ambiance, leaving you refreshed and rejuvenated during your stay.</p>
 </div>
  

  <!-- ***** SPa End ***** -->

	


<!-- Remove the container if you want to extend the Footer to full width. -->

	<!-- Footer -->
	<footer
			class="text-center text-lg-start text-white"
			style="background-color: #45526e"
			>
	  <!-- Grid container -->
	  <div class="container p-4 pb-0">
		<!-- Section: Links -->
		<section class="">
		  <!--Grid row-->
		  <div class="row">
			<!-- Grid column -->
			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
				<div class="footer_logo">
					<div class="logo">
						<a href="#">
							<div><img src="images\Logo_Blue_Moon.png" width="250px" style="display:grid;place-items:center;margin-left:-60px"/></div>
							<div></div>
						</a>
					</div>
				</div>
			  
			</div>
			<!-- Grid column -->
  
			<hr class="w-100 clearfix d-md-none" />
  
			<!-- Grid column -->
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
			  <h6  style="color: white;" class="text-uppercase mb-4 font-weight-bold">Reservation</h6>
			  <p>
				<a class="text-white" href="rooms.html">Rooms</a>
			  </p>
			  <p>
				<a class="text-white" href="Restaurants&Bars.html">Resto-Bar</a>
			  </p>
			 
			</div>
			<!-- Grid column -->
  
			<hr class="w-100 clearfix d-md-none" />
  
			<!-- Grid column -->
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
			  <h6  style="color: white;" class="text-uppercase mb-4 font-weight-bold">
				Useful links
			  </h6>
			  <p>
				<a class="text-white" href="Profile.html">Your Account</a>
			  </p>
			  <p>
				<a class="text-white" href="about.html">About Us</a>
			  </p>
			  <p>
				<a class="text-white" href="contact.html">Contact Us</a>
			  </p>
			  
			</div>
  
			<!-- Grid column -->
			<hr class="w-100 clearfix d-md-none" />
  
			<!-- Grid column -->
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" >
			  <h6  style="color: white;" class="text-uppercase mb-4 font-weight-bold">Contact</h6>
			  <p style="color: white;"> Al Akhtal Al Saghir, Beirut 0011 7791</p>
			  <p  style="color: white;"></i> contact@bluemoonhotel.com</p>
			  <p  style="color: white;">01 220 230</p>
			</div>
			<!-- Grid column -->
		  </div>
		  <!--Grid row-->
		</section>
		<!-- Section: Links -->
  
		<hr class="my-3">
  
		<!-- Section: Copyright -->
		<section class="p-3 pt-0">
		  <div class="row d-flex align-items-center">
			<!-- Grid column -->
			<div class="col-md-7 col-lg-8 text-center text-md-start">
			  <!-- Copyright -->
			  <div class="p-3">
				
			  </div>
			  <!-- Copyright -->
			</div>
			<!-- Grid column -->
  
			<!-- Grid column -->
			
			</div>
			<!-- Grid column -->
		  </div>
		</section>
		<!-- Section: Copyright -->
	  </div>
	  <!-- Grid container -->
	</footer>
	<!-- Footer -->

  <!-- End of .container -->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/custom.js"></script>
</body>
</html>