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
<link rel="stylesheet" type="text/css" href="styles/restauants&bars.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

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
					<source src="images\diningvideo.mp4" type="video/mp4" />
				</video>
			
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="home_content text-center">
							<div class="home_title"><h1>A Heaven For Food Lovers.</h1></div>
							<div class="home_text"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	


	<!-- About Section -->
	<h1>About Our Resto-Bar</h1>
	<hr>
	<div>
		<div style="width:200px;height:800px; display:inline-block;vertical-align:top;"><img src="images\restaurantc.jpg" /></div>
		<div id="restDesc"><ul>
			<li><p>All of our menu items are inspired by japanese cuisine <br>and have been created by our head chef,<br> after studying authentic Contamperory Japanese cuisine in Japan.<br> Not only do we have fresh flown-in seafood from the northeast, <br>but we also have a variety of handcrafted cocktails,<br> wine, and beer to choose from.</p></li>
			<br>
			</ul>
			<ul><li>Capacity:<p> 120 Pax</p></li>

				<li>Opening Hours:
						<p>Mon: 9am-22pm</p><br>
						<p>Tue: 9am-22pm</p><br>
						<p>Wed: 9am-22pm</p><br>
						<p>Thu: 9am-22pm</p><br>
						<p>Fri: 9am-00am</p><br>
						<p>Sat: 9am-00am</p><br>
						<p>Sun: 9am-00am</p><br>
				</li>
				<li>Age Restriction:
						<em><p style="margin-left: 35px;">21+</p></em>
				</li>

				<li style="width:50px; height:50px" >Rate:
					<em><p style="margin-left: 35px;">4.5 </p></em>
					

			</li>
			</ul>
		</div>
		
	</div>






<h1 id="categories">Categories</h1>
	<hr>
<!-- Categories -->
<section class="cards">
	<article class="card card--1">
	  <div class="card__info-hover">
		<svg class="card__like"  viewBox="0 0 24 24">
		<path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
	</svg>
		  <div class="card__clock-info">
			<svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
			</svg>
		  </div>
		
	  </div>
	  <div class="card__img"></div>
	  <a href="#" class="card_link">
		 <div class="card__img--hover"></div>
	   </a>
	  <div class="card__info">
		<span class="card__category"> Main Dishes</span>
		<h3 class="card__title">Try Our best main dishes in town!</h3>
		<span class="card__by">by <a href="#" class="card__author" title="author">Blue Moon Restaurant</a></span>
	  </div>
	</article>
	  
	  
	<article class="card card--3">
	  <div class="card__info-hover">
		<svg class="card__like"  viewBox="0 0 24 24">
		<path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
	</svg>
		  <div class="card__clock-info">
			<svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
			</svg>
		  </div>
		
	  </div>
	  <div class="card__img"></div>
	  <a href="#" class="card_link">
		 <div class="card__img--hover"></div>
	   </a>
	  <div class="card__info">
		<span class="card__category">Desserts</span>
		<h3 class="card__title">Award wining recipes</h3>
		<span class="card__by">by <a href="#" class="card__author" title="author">Blue Moon Restaurant</a></span>
	  </div>
	</article>  



	<article class="card card--2">
		<div class="card__info-hover">
		  <svg class="card__like"  viewBox="0 0 24 24">
		  <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
	  </svg>
			<div class="card__clock-info">
			  <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
			  </svg>
			</div>
		  
		</div>
		<div class="card__img"></div>
		<a href="#" class="card_link">
		   <div class="card__img--hover"></div>
		 </a>
		<div class="card__info">
		  <span class="card__category">Cocktails and Drinks</span>
		  <h3 class="card__title">More than 20 signature drinks at Blue Moon Bar</h3>
		  <span class="card__by">by <a href="#" class="card__author" title="author">Blue Moon Bar</a></span>
		</div>
	  </article>  





	  
	  
	  
	  
	  </section>
	<h1>Reserve a table:</h1>
	<hr>

	  <!-- Table Reservation Form -->
	  <section id="book-a-table" class="book-a-table">
       

            <form action="includes\RestaurantBooking.php" method="post" role="form">

			<div class="col-lg-4 col-md-6 form-group">
                    Name<input class="form-control" name="resvname" placeholder="Full Reservation Name" >
              </div>

			  <div class="col-lg-4 col-md-6 form-group">
                    Phone number<input type="text" name="phone" class="form-control"placeholder="+ddd dd-dddddd" id="phone" required placeholder="Date">
                </div>
             
                <div class="col-lg-4 col-md-6 form-group">
                    Date<input type="date" name="date" class="form-control" id="date" required placeholder="Date">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    Time<input type="time" class="form-control" name="time" id="time" required placeholder="Time">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="number" class="form-control" name="people" id="people" required placeholder="No. of people">
					<div class="col-lg-4 col-md-6 form-group">
					Type:
				<select name="type">
					<option value="resto">Restaurant</option>
					<option value="bar">Bar</option>

				</select>
			  </div>
                </div>
				<div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Notes..." ></textarea>
              </div>

			  
              </div>
              
              <button type="submit" class="button1" style="margin-bottom:50px;border-style:none;color:white;background-color:#637496;width: 186px;
	height: 63px;text-align:center;">Book a Table</button>
            </form>
        </div>
    </section>
    <!-- End Table Reservation Form -->



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
<script src="js/custom.js"></script>
</body>
</html>