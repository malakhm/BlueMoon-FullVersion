<?php 
require_once 'connection.php';
session_start();

$user_id = $_SESSION['user_id'];

if(isset($_POST['username']) && $_POST['username'] !=''
&& isset($_POST['fname']) && $_POST['fname'] !=''
&& isset($_POST['lname']) && $_POST['lname'] != ''
&& isset($_POST['number']) && $_POST['number'] != ''
&& isset($_POST['address']) && $_POST['address'] != ''
&& isset($_POST['email']) && $_POST['email'] != ''
&& isset($_POST['dob']) && $_POST['dob'] != ''
&& isset($_POST['gender']) && $_POST['gender'] != ''){

    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $query="UPDATE users set username='$username', first_name='$fname', last_name='$lname', number='$number', address='$address',
    email='$email', dob='$dob', gender='$gender' where user_id ='$user_id'";
    $result= mysqli_query($con, $query);
    if($result)
    {
        header("location:../profile.php");
    }
    else
    {
        header("location:../editProfile.php?user_id=$user_id");
    }


}
