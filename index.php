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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

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
				<li><a href="#"><select onChange="window.location.href=this.value" style="background-color: transparent;border:0px;color:white;font-size:large;background-color: #00000098;
					border:none;" >
					<option >Services</option>
					<option value="Restaurants&Bars.php">Dining</option>
					<option>Gym&Spa</option>
					<option>Packages</option>
				</select></a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul> 
			<div class="menu_review"><a href="rooms.php">Book Now</a></div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll"data-speed="0.8"></div>
		<section class="section main-banner" id="top" data-section="section1">
			<video autoplay muted loop id="bg-video">
				<source src="images\homevideo.mp4" type="video/mp4" />
			</video>
		</div>
		</section>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><h1>Luxury & Comfort</h1></div>
							<div class="home_text">Experience a world of luxury at Blue Moon Hotel, with stunning rooms, exceptional service, and indulgent amenities like our spa and fine dining restaurant. We're dedicated to providing personalized comfort that exceeds your expectations, and ensures your stay is truly unforgettable.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title"><h1>Blue Moon Hotel- More than a stay</h1></div>
						<div class="section_text">we go above and beyond to make sure that your time with us is nothing short of exceptional.</div>
					</div>
				</div>
			</div>
			<div class="row intro_row">
				
				<!-- Intro Image -->
				<div class="col-lg-6">
					<div class="intro_image"><img src="images/intro.jpg" alt="https://unsplash.com/@papao03"></div>
				</div>

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col">
					<div class="intro_content">
						<div class="quote"><img src="images/quote.png" alt=""></div>
						<div class="intro_text">
							<p>My stay at the Blue Moon Hotel was exceptional. The staff provided personalized service that made me feel like a VIP throughout my stay. The room was stunning and the spa and wellness center were top-notch. The food at the restaurant was simply amazing, with great variety and flavors. Overall, I highly recommend this hotel for an unforgettable experience.</p>
						</div>
						<div class="intro_author d-flex flex-row align-items-center justify-content-start">
							<div class="author_image"><img src="images/author_1.jpg" alt="https://unsplash.com/@onurozkardes"></div>
							<div class="intro_author_content">
								<div class="intro_author_name">Michael Williams</div>
								<div class="intro_author_title">client</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Room -->

	<div class="room d-flex flex-lg-row flex-column align-items-start justify-content-start">
		<div class="room_content">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="room_title">
							<div class="section_title_container_2">
								<div class="section_title"><h1>Premium Package</h1></div>
							</div>
							<div class="room_price">For only <span>$200</span></div>
						</div>
						<div class="room_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Grand Family room:</div></div>
									<div>2 nights stay</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Spa and Gym Sessions:</div></div>
									<div>2 sessions</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>breakfast set menu:</div></div>
									<div>for 2 days</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>drinks on the bar:</div></div>
									<div>open premium bar</div>
								</li>
								
							</ul>
						</div>
						<div class="button room_button trans_200"><a href="Book_a_Room_Form.html">book now</a></div>
					</div>
				</div>
			</div>		
		</div>
		<div class="room_image">
			<div class="background_image" style="background-image:url(images/room_1.jpg)"></div>
		</div>
	</div>

	<!-- Facilities -->

	<div class="facilities">
		<div class="container">
			<div class="row icon_box_row">

				<!-- Icon Box -->
				<div class="col-lg-4">
					<div class="icon_box text-center">
						<div class="icon_box_icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/monkik"></div>
						
						
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4">
					<div class="icon_box text-center">
						<div class="icon_box_icon"><img src="images\stars.png" alt="https://www.flaticon.com/authors/monkik"></div>
						
						
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4">
					<div class="icon_box text-center">
						<div class="icon_box_icon"><img src="images\yoga-pose.png" alt="https://www.flaticon.com/authors/monkik"></div>
						
						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">

			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_1.jpg">
						<div class="background_image" style="background-image:url(images/gallery_1.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
				</div>

				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_2.jpg">
						<div class="background_image" style="background-image:url(images/gallery_2.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
				</div>

				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_3.jpg">
						<div class="background_image" style="background-image:url(images/gallery_3.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
				</div>

				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_4.jpg">
						<div class="background_image" style="background-image:url(images/gallery_4.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
				</div>

				<!-- Slide -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_5.jpg">
						<div class="background_image" style="background-image:url(images/gallery_5.jpg)"></div>
					</a>
					<div class="gallery_overlay trans_200 d-flex flex-column align-items-center justify-content-center"><div>+</div></div>
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
  
			<hr class="w-100 clearfix d-md-none"/>
  
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
				© 2023 Copyright:
				
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