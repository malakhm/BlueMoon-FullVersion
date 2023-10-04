<?php

require_once 'connection.php';

if ( isset($_POST['username']) && ($_POST['username']!="")
        && isset($_POST['password']) && ($_POST['password']!="")
        && isset($_POST['passwordConfirm']) && ($_POST['passwordConfirm']!="")
) {
    
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
   
    $query = "Select * from admin where username='$user' and password='$pass'";
    $res1 = mysqli_query($con, $query);
    $nbr1 = mysqli_num_rows($res1);
    if ($nbr1 != 0 ) {
        
        
        
        echo "<script>alert('user already exists!!Please Login'); window.location.href = 'adminlogin.php?successInsert=1';</script>";
        exit;

    }
    else {
         $query2 = "INSERT INTO admin (username, password) VALUES ('$user', '$pass')";
         $res2 = mysqli_query($con, $query2);
         if (!$res2) {
             
            echo"failed to create account";
            header("Location: adminregister.php");
         } else {
             header("Location:adminlogin.php");
         }
         
    }
          
}

