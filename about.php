
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
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images\pexels-sonny-sixteen-15011124.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><h1>About us</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-end justify-content-start">
						<div class="milestone_icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="23" data-sign-after="k">0</div>
							<div class="milestone_text">Clients since opening</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-end justify-content-start">
						<div class="milestone_icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="120">0</div>
							<div class="milestone_text">Hotel rooms</div>
						</div>
					</div>
				</div>
				

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-end justify-content-start">
						<div class="milestone_icon"><img src="images/icon_5.svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="7">0</div>
							<div class="milestone_text">One day cruises</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-end justify-content-start">
						<div class="milestone_icon"><img src="images/icon_6.svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="36">0</div>
							<div class="milestone_text">Signature Cocktails</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- Intro Right -->

	<div class="intro_right intro">
		<div class="container">
			<div class="row row-xl-eq-height">
				
				<!-- Intro Image -->
				<div class="col-xl-6">
					<div class="intro_image">
						<div class="background_image intro_image_background" style="background-image:url(images/intro_1.jpg)"></div>
					</div>
				</div>

				<!-- Intro Right Content -->
				<div class="col-xl-6 intro_right_col">
					<div class="intro_right_content">
						<div class="section_title_container text-center">
							<div class="section_title"><h1>Blue Moon Hotel- More than a stay</h1></div>
							<div class="section_text">Welcome to the Blue Moon Hotel, where every stay is more than just a stay. From our luxurious amenities to our personalized service, we go above and beyond to make sure that your time with us is nothing short of exceptional.</div>
						</div>
						<div class="intro_right_text text-center">From the moment you arrive, our team of dedicated staff are committed to providing you with a personalized and unforgettable experience. Our stunning rooms offer the perfect blend of style and comfort, while our exceptional amenities, including our spa, fitness center, and fine dining restaurant, ensure that every moment of your stay is truly indulgent. Whether you're here for business or pleasure, we're dedicated to making your time with us exceptional, and we look forward to welcoming you to our hotel.</div>
						<div class="sig text-center">
							<img src="images/sig.png" alt="">
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Intro Left -->

	<div class="intro_left intro">
		<div class="container">
			<div class="row">
				
				<!-- Intro Left Content -->
				<div class="col-xl-6 order-xl-1 order-2">
					<div class="intro_left_content">
						<div class="section_title_container text-center">
							<div class="section_title"><h1>Amazing Facilities</h1></div>
							<div class="section_text">Experience the ultimate in luxury and comfort at Blue Moon Hotel, with a range of amazing facilities designed to help you unwind, stay active, and make the most of your stay.</div>
						</div>
						<div class="row icon_box_row">

							<!-- Icon Box -->
							<div class="col-lg-4">
								<div class="icon_box text-center">
									<div class="icon_box_icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/monkik"></div>
									<div class="icon_box_title"><h3>Beautiful Rooms</h3></div>
									<div class="icon_box_text">
										<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum.</p>
									</div>
								</div>
							</div>

							<!-- Icon Box -->
							<div class="col-lg-4">
								<div class="icon_box text-center">
									<div class="icon_box_icon"><img src="images\stars.png" alt="https://www.flaticon.com/authors/monkik"></div>
									<div class="icon_box_title"><h3>Delicious </br>Food</h3></div>
									<div class="icon_box_text">
										<p>Maecenas sollicitudin est in libero pretium interdum.In vitae nisi.</p>
									</div>
								</div>
							</div>

							<!-- Icon Box -->
							<div class="col-lg-4">
								<div class="icon_box text-center">
									<div class="icon_box_icon"><img src="images\yoga-pose.png" alt="https://www.flaticon.com/authors/monkik"></div>
									<div class="icon_box_title"><h3>Gym</br>&Spa</h3></div>
									<div class="icon_box_text">
										<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-xl-6 order-xl-2 order-1">
					<div class="intro_image">
						<div class="background_image intro_image_background" style="background-image:url(images/intro_2.jpg)"></div>
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
<script src="js/about.js"></script>
</body>
</html>