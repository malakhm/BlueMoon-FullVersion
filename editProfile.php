<?php
require_once 'includes\connection.php';
session_start();
$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM users where user_id =$user_id";
$result = mysqli_query($con, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    ?>
   
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">   

    <!-- Common -->
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



          <!-- /# column -->
      
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div  class="user-profile">
                    <?php
                    $query = "SELECT * FROM users WHERE user_id ='$user_id'";
                    $result = mysqli_query($con,$query);
                    $nbr1 = mysqli_num_rows($result);   
                    $row1 = mysqli_fetch_assoc($result);                 ?>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="user-photo m-b-30">
                          <img class="img-fluid" src="images/user-profile.jpg" alt="" />
                        </div>
                        <form action="includes\editProfile1.php" method="POST">
                        
                        <div class="user-work">
                        <div class="user-profile-name">username: <input type="text" name="username" size="20"/>  </div><br>
                        
                        <div class="user-Location">
                          <i></i></div><br>
                        <div class="user-job-title"></div><br><hr>
                          <div class="work-content">
                           
                          </div>
                          <div class="work-content">
                            
                          </div>
                        </div>
                        <div class="user-skill">
                          
                        </div>
                      </div>
                      <div class="col-lg-8">
                      <div style="float:right;">
                <a href="index.php"> <img width="32px" height="32px" src="images/home.png"/></a>
            </div>
            <div class="user-profile-name"></div>
                        <div class="user-Location">
                         </div>
                        <div class="user-job-title"></div>
                        <div class="ratings">
                          <h4></h4>
                          <div class="rating-star">
                            <span></span>
                            
                          </div>
                        </div>
                        
                        <div style="margin-top:80px;" class="custom-tab user-profile-tab">
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                              <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="1">
                              <div class="contact-information">
                                <h4>Contact information</h4>
                                <div class="phone-content">
                                  <span class="contact-title">first name</span>
                                  <span class="phone-number"><input type="text" name="fname" size="20"/></span>
                                </div>

                                <div class="phone-content">
                                  <span class="contact-title">last name</span>
                                  <span class="phone-number"><input type="text" name="lname" size="20"/></span>
                                </div>
                                <div class="phone-content">
                                  <span class="contact-title">Phone:</span>
                                  <span class="phone-number"><input type="number" name="number" size="20"/></span>
                                </div>
                                <div class="address-content">
                                  <span class="contact-title">Address:</span>
                                  <span class="mail-address"><input type="text" name="address" size="20"/></span>
                                </div>
                                <div class="email-content">
                                  <span class="contact-title">Email:</span>
                                  <span class="contact-email"><input type="email" name="email" size="50"/></span>
                                </div>
                                <div class="website-content">
                                  <span class="contact-title">number of visits</span>
                                  <span class="contact-website"></span>
                                </div>
                                
                              </div>
                              <div class="basic-information">
                                <h4>Basic information</h4>
                                <div class="birthday-content">
                                  <span class="contact-title">Birthday:</span>
                                  <span class="birth-date"><input type="date" name="dob" size="20"/></span>
                                </div>
                                <div class="gender-content">
                                  <span class="contact-title">Gender:</span>
                                  <span class="gender"><select name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                  </select></span>
                                  
                                </div>
                              </div>
                            </div>
                            <button style="margin-bottom:50px;border-style:none;color:white;background-color:#637496;width: 186px;
	height: 63px;text-align:center;" type="submit" value="Update">Update</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</form>
          <!-- /# row -->
     







    <!-- Common -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



</body>

</html>
    <?php
}

