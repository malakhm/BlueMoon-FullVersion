

<?php
session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:adminlogin.php");
} else {
    require_once 'connection.php';

    $query = "Select * from room_reservation";
    $result = mysqli_query($con, $query);
    $nbr = mysqli_num_rows($result);}
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Blue-Moon Dashboard</title>
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
    <!-- Styles -->
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <!-- <img src="images/logo.png" alt="" /> --><span>Blue Moon Dashboard</span></a></div>
                    <li class="label">Main</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span
                                class="badge badge-primary">2</span> <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="index.php">Bookings</a></li>
                            <li><a href="viewTables.php">Table Reservations</a></li>
                        </ul>
                    </li>

                    <li class="label">Apps</li>
                    
                    
                    <li><a href="viewMail.php"><i class="ti-email"></i>Inbox</a></li>
                    
                    
                    <li class="label">Features</li>
                    <li><a href="viewBlog.php"><i class="ti-layout"></i> Update News</a>
                  
                    </li>
                    <li><a href="viewusers.php"><i class="ti-panel"></i>View Users</a>
                        
                    
                    </li>
                    
                    <li><a href="adminlogout.php"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

   

    <table border="border" style="display:flex; margin-left:300px">
    
    
    <tr>
        <th>Booking ID</th>
        <th>User ID</th>
        <th>Full Name</th>
   
        <th>Number</th>
        <th>Room</th>
        <th>Number of Guests</th>
        <th>Check in Date</th>
        <th>Check out Date</th>
        <th>Notes</th>
        <th>Status</th>
        <th>Confirm</th>
        <th>Cancel</th>
    </tr>
    <?php
    for ($i=0; $i<$nbr ; $i++) {
        $row = mysqli_fetch_assoc($result);
        echo "<tr>";
        echo "<td>$row[booking_id]</td>";
        echo "<td>$row[user_id]</td>";
        echo "<td>$row[full_name]</td>";
     
        echo "<td>$row[number]</td>";
        echo "<td>$row[room_type]</td>";
        echo "<td>$row[no_of_guests]</td>";
        echo "<td>$row[checkin]</td>";
        echo "<td>$row[checkout]</td>";
        echo "<td>$row[notes]</td>";
        echo "<td>$row[status]</td>";
        echo "<td><a href='confirmbooking.php?booking_id=$row[booking_id]'><button class='btn btn-success'>confirm</button></a></td>";
        echo "<td><a href='cancelbooking.php?booking_id=$row[booking_id]'><button class='btn btn-danger'>cancel</button></a></td>";
        echo "</tr>";
    }
echo "</table>";


?>



    
    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="js/lib/bootstrap.min.js"></script><script src="js/scripts.js"></script>
    <!-- scripit init-->
    <script src="js/lib/data-table/datatables.min.js"></script>
    <script src="js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="js/lib/data-table/buttons.flash.min.js"></script>
    <script src="js/lib/data-table/jszip.min.js"></script>
    <script src="js/lib/data-table/pdfmake.min.js"></script>
    <script src="js/lib/data-table/vfs_fonts.js"></script>
    <script src="js/lib/data-table/buttons.html5.min.js"></script>
    <script src="js/lib/data-table/buttons.print.min.js"></script>
    <script src="js/lib/data-table/datatables-init.js"></script>










</body>

</html>