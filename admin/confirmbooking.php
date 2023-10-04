<?php

require_once 'connection.php';
$bid = $_GET['booking_id'];
$query = "Update room_reservation set status='confirmed' where booking_id='$bid'";
$result = mysqli_query($con, $query);
header("Location:index.php");

