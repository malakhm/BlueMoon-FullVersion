<?php
require_once 'includes\connection.php';
?>

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
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responive.css">

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
			<div class="menu_review"><a href="#">Book Now</a></div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><h1>The News</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	  <!-- Blog -->

	  <div class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <!-- Blog Posts -->
                            <div class="blog_posts">
                                <?php
                                $query1 = "Select * from news where news_id='1'";
                                $res1 = mysqli_query($con, $query1);
                                $row1 = mysqli_fetch_assoc($res1);
                                ?>

                                <!-- Blog Post -->
                                <div class="blog_post">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-6">
                                            <div class="blog_post_image"><img src="images/<?php echo $row1['photo']; ?>" alt="https://unsplash.com/@nickkarvounis"></div>
                                        </div>
                                        <div class="col-xl-5 col-lg-6">
                                            <div class="blog_post_content">
                                                <div class="pb_title"><a href="#"><?php echo $row1['title']; ?></a></div>
                                                <div class="pb_info">
                                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                                        <li><a href="#">By Admin</a></li>
                                                    </ul>
                                                </div>
                                                <div class="pb_text">
                                                    <p> <?php echo $row1['content']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Blog Post -->
                                <div class="blog_post">
                                    <?php
                                    $query2 = "Select * from news where news_id='2'";
                                    $res2 = mysqli_query($con, $query2);
                                    $row2 = mysqli_fetch_assoc($res2);
                                    ?>
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-6">
                                            <div class="blog_post_image"><img src="images/<?php echo $row2['photo']; ?>" alt="https://unsplash.com/@ollivves"></div>
                                        </div>
                                        <div class="col-xl-5 col-lg-6">
                                            <div class="blog_post_content">
                                                <div class="pb_title"><a href="#"><?php echo $row2['title']; ?></a></div>
                                                <div class="pb_info">
                                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                                        <li><a href="#">By Admin</a></li>
                                                    </ul>
                                                </div>
                                                <div class="pb_text">
                                                    <p><?php echo $row2['content']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Blog Post -->
                                <div class="blog_post">
                                    <?php
                                    $query3 = "Select * from news where news_id='3'";
                                    $res3 = mysqli_query($con, $query3);
                                    $row3 = mysqli_fetch_assoc($res3);
                                    ?>
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-6">
                                            <div class="blog_post_image"><img src="images/<?php echo $row3['photo']; ?>" alt="https://unsplash.com/@shazmynphotos1"></div>
                                        </div>
                                        <div class="col-xl-5 col-lg-6">
                                            <div class="blog_post_content">
                                                <div class="pb_title"><a href="#"><?php echo $row3['title']; ?></a></div>
                                                <div class="pb_info">
                                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                                        <li><a href="#">By Admin</a></li>
                                                    </ul>
                                                </div>
                                                <div class="pb_text">
                                                    <p><?php echo $row3['content']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
<script src="js/blog.js"></script>
</body>
</html>