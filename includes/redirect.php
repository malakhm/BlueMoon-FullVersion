<?php

session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:../login.php");
} else {
   header('Location:../RoomBooking.html');}