<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
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
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

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
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="rooms.php">Rooms</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<div class="menu_review"><a href="rooms.php">Book Now</a></div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images\pexels-mikhail-nilov-7820308.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><h1>Contact</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Map -->
				<div class="col-xl-6">
					<div class="contact_map_container">
						
						<!-- Contact Map -->
						<div class="contact_map">

							<!-- Google Map -->
							<div class="map">
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>
							</div>

						</div>

						<!-- Contact Info Box -->
						<div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
							<ul class="contact_info_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div class="contact_info_icon d-flex flex-column align-items-center justify-content-center"><img src="images/placeholder.png" alt=""></div></div>
									<div class="contact_info_text">1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div><div class="contact_info_icon d-flex flex-column align-items-center justify-content-center"><img src="images/smartphone.png" alt=""></div></div>
									<div class="contact_info_text">+53 345 7953 32453</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div><div class="contact_info_icon d-flex flex-column align-items-center justify-content-center"><img src="images/mail.png" alt=""></div></div>
									<div class="contact_info_text">yourmail@gmail.com</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
				
				<!-- Contact Form -->
								<!-- Contact Form -->
								<div class="col-xl-6 contact_col">
					<div class="contact_form_container">
						<div class="section_title_container_2">
							<div class="section_title"><h1>Contact Info</h1></div>
							<div class="section_text">Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum.</div>
						</div>
						<form action="includes\contact2.php" method="post" class="contact_form" id="contact_form">
							<div class="row contact_row">
								<div class="col-md-6"><input type="text" name="fname" class="contact_input" placeholder="Name" required="required"></div>
								<div class="col-md-6"><input type="email" name="email" class="contact_input" placeholder="E-mail" required="required"></div>
							</div>
							<div><textarea class="contact_input contact_textarea" name="message" placeholder="Message" required="required"></textarea></div>
							<input type="submit" class="contact_button" value="send"/>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
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
				  <a class="text-white" href="rooms.php">Rooms</a>
				</p>
				<p>
				  <a class="text-white" href="Restaurants&Bars.php">Resto-Bar</a>
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
				  <a class="text-white" href="#">Your Account</a>
				</p>
				<p>
				  <a class="text-white" href="about.php">About Us</a>
				</p>
				<p>
				  <a class="text-white" href="contact.php">Contact Us</a>
				</p>
				
			  </div>
	
			  <!-- Grid column -->
			<hr class="w-100 clearfix d-md-none" />
  
			<!-- Grid column -->
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" >
			  <h6  style="color: white;" class="text-uppercase mb-4 font-weight-bold">Contact</h6>
			  <p style="color: white;"> New York, NY 10012, US</p>
			  <p  style="color: white;"></i> info@gmail.com</p>
			  <p  style="color: white;">+ 01 234 567 88</p>
			  <p  style="color: white;"> + 01 234 567 89</p>
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
				© 2020 Copyright:
				
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
<script src="js/contact.js"></script>
</body>
</html>