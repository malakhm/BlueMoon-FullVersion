<?php

require_once 'connection.php';
$rid = $_GET['reservation_id'];
$query = "Delete from restaurant_reservation where reservation_id='$rid'";
$result = mysqli_query($con, $query);
header("Location:viewTables.php");