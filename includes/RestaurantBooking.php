<?php

session_start();

if ($_SESSION['isloggedin']!= 1 ) {
    header("Location:../login.php");
} else {
    
    require_once 'connection.php';
    
    $user = $_SESSION['user'];
    
    if (
            isset($_POST['resvname']) && ($_POST['resvname']!="") &&
            isset($_POST['phone']) && ($_POST['phone']!="") &&
            isset($_POST['date']) && ($_POST['date']!="") &&
            isset($_POST['time']) && ($_POST['time']!="") &&
            isset($_POST['type']) && ($_POST['type']!="") &&
            isset($_POST['people']) && ($_POST['people']!="")
   
    ) {
        
        $query1 = "Select user_id from users where username='$user'";
        $res1 = mysqli_query($con, $query1);
        $nbr1 = mysqli_num_rows($res1);
        
        if ($nbr1 > 0 ) {
            $row1 = mysqli_fetch_assoc($res1);
            $uid = $row1['user_id'];
        }
        
        $name = $_POST['resvname'];
        $phone = $_POST['phone'];
        $noguests = $_POST['people'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $type = $_POST['type'];
        $note = $_POST['message'];
        
        $query3 = "INSERT INTO restaurant_reservation (user_id, reservation_name, number, restaurant_id, no_of_guests, date, time, notes) VALUES ('$uid', '$name', '$phone', '$type', '$noguests', '$date', '$time', '$note')";
        $result = mysqli_query($con, $query3);
        
        if(!$result) {
            echo "error".mysqli_error($con);
        } else {
            echo "good";
        }
    }
}
