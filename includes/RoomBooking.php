<?php

session_start();
if ($_SESSION['isloggedin'] != 1) {
    header("Location:../login.php");
} else {
    require_once 'connection.php';
    $user = $_SESSION['user'];

    if (
            isset($_POST['name']) && ($_POST['name'] != "") &&
           
            isset($_POST['phone']) && ($_POST['phone'] != "") &&
            isset($_POST['roomtype']) && ($_POST['roomtype'] != "") &&
            isset($_POST['people']) && ($_POST['people'] != "") &&
            isset($_POST['date1']) && ($_POST['date1'] != "") &&
            isset($_POST['date2']) && ($_POST['date2'] != "")&&
            isset($_POST['message']) && ($_POST['message'] != "")
    ) {
        
        $query1 = "Select user_id from users where username='$user'";
        $res1 = mysqli_query($con, $query1);
        $nbr1 = mysqli_num_rows($res1);
        
        if ($nbr1 > 0 ) {
            $row1 = mysqli_fetch_assoc($res1);
            $uid = $row1['user_id'];
        }
        
        $name = $_POST['name'];
     
        $number = $_POST['phone'];
        $type = $_POST['roomtype'];
        $noguests = $_POST['people'];
        $checkin = $_POST['date1'];
        $checkout = $_POST['date2'];
        $notes = $_POST['message'];
        
        $query2 = "Select room_id from rooms where type='$type'";
        $res2 = mysqli_query($con, $query2);
        $nbr2 = mysqli_num_rows($res2);
        
        if ($nbr2 > 0 ) {
            $row2 = mysqli_fetch_assoc($res2);
            $rid = $row2['room_id'];
        }
        
        $query3 = "INSERT INTO `room_reservation` (`user_id`, `full_name`, `email`, `number`, `room_id`, `room_type`, `checkin`, `checkout`, `no_of_guests`, `notes`) VALUES ('$uid', '$name', '$email', '$number', '$rid', '$type', '$checkin', '$checkout', '$noguests', '$notes')";
        $res3 = mysqli_query($con, $query3);
        if(!$res3) {
            echo "error".mysqli_error($con);
        } else {
            echo "good";
        }
        
    }
}

