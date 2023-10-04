<?php

session_start();
if ($_SESSION['isloggedin']!= 1 ) {
    header("Location:adminlogin.php");
} else {
    require_once 'connection.php';
    $query = "Select * from mail";
    $result = mysqli_query($con,$query);
    $nbr = mysqli_num_rows($result);
    ?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Inbox</title>
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


    <!-- /# sidebar -->
<div class="responsive-table">

    <table border="border" class="table" style="margin: 0 auto;">
        <caption>View Mail</caption>
        <tr>
            <th>User ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php 
        for ($i=0; $i<$nbr; $i++){
            $row = mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td>$row[user_id]</td>";
            echo "<td>$row[full_name]</td>";
            echo "<td>$row[email]</td>";
            echo "<td>$row[message]</td>";
            echo "</tr>";
        }
    echo "</table>";
    }?></div>


    
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