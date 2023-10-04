<?php

require_once 'connection.php';

if (
        isset($_POST['fname']) && ($_POST['fname']!="")
        && isset($_POST['lname']) && ($_POST['lname']!="")
        && isset($_POST['dob']) && ($_POST['dob']!="")
        && isset($_POST['gender']) && ($_POST['gender']!="")
        && isset($_POST['number']) && ($_POST['number']!="")
        && isset($_POST['email']) && ($_POST['email']!="")
        && isset($_POST['username']) && ($_POST['username']!="")
        && isset($_POST['password']) && ($_POST['password']!="")
        && isset($_POST['passwordConfirm']) && ($_POST['passwordConfirm']!="")
) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
   
    $query1 = "Select * from users where username='$username' and password='$password'";
    $res1 = mysqli_query($con, $query1);
    $nbr1 = mysqli_num_rows($res1);
    if ($nbr1 != 0 ) {
        
        
        
        echo "<script>alert('user already exists!!Please Login'); window.location.href = '../login.php?successInsert=1';</script>";
        exit;

    }
    else {
         $query2 = "INSERT INTO users (first_name, last_name, dob,gender,number,email, username, password, isAdmin) VALUES ('$fname', '$lname', '$dob', '$gender', '$number', '$email', '$username', '$password', 'Null')";
         $res2 = mysqli_query($con, $query2);
         if (!$res2) {
             
            echo"failed to create account";
            header("Location:../register.php");
         } else {
             header("Location:../index.php");
         }
         
    }
          
}

