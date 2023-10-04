<?php
session_start();
if ($_SESSION['isloggedin']!= 1 ) {
    header("Location:Login.html");
} else {
    $user = $_SESSION['user_id'];
require_once 'connection.php';

if (
        isset($_POST['fname']) && ($_POST['fname']!="") &&
        isset($_POST['email']) && ($_POST['email']!="") &&
        isset($_POST['message']) && ($_POST['message']!="") 
) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $query = "Insert into mail (user_id, full_name, email, message) values ('$user', '$fname', '$email', '$message')";
    $result = mysqli_query($con,$query);
    if ($result) {
        echo "good";
    } else {
        echo mysqli_error($con);
    }
}
}
