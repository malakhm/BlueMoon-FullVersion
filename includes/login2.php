<?php

require_once 'connection.php';

if (
        isset($_POST['username']) && ($_POST['username'] != "") &&
        isset($_POST['password']) && ($_POST['password'] != "")
) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "Select * from users where username='$username' and password='$password'";
    $res = mysqli_query($con,$query);
    $nbr = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);
    
    if($nbr==0) {
        echo "<script>alert('Please sign up'); window.location.href = '../register.php?successInsert=1';</script>";
        exit;
    } else if ($nbr==1) {
        session_start();
        $_SESSION['isloggedin'] = 1 ;
        $_SESSION['user'] = $username ;
        $_SESSION['user_id'] = $row['user_id'];
        header("Location:../index.php");
    }
}
?>