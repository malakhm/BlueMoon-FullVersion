<?php

require_once 'connection.php';

if (
        isset($_POST['username']) && ($_POST['username']!="") &&
        isset($_POST['password']) && ($_POST['password']!="") 
) {
    
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    $query = "Select * from admin where username='$user' and password='$pass'";
    $res = mysqli_query($con,$query);
    $nbr = mysqli_num_rows($res);
    
    if($nbr == 0 ){
        header("Location:adminregister.php");
    } else if ($nbr==1) {
        session_start();
        $_SESSION['isloggedin'] = 1 ;
        $_SESSION['admin'] = $user;
        header("Location:index.php");
    }
}
