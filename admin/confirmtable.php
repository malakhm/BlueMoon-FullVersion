<?php

require_once 'connection.php';
$rid = $_GET['reservation_id'];
$query = "Update restaurant_reservation set status='confirmed' where reservation_id='$rid'";
$result = mysqli_query($con, $query);
header("Location:viewTables.php");



