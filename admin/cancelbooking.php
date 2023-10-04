<?php

require_once 'connection.php';
$bid = $_GET['booking_id'];
$query = "Delete from room_reservation where booking_id='$bid'";
$result = mysqli_query($con, $query);
header("Location:index.php");
