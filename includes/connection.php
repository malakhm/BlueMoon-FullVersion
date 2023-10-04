<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$db_hostname = 'localhost';
$db_database = 'blue_moon_hotel';
$db_username = 'root';
$db_password = '';

$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to mySQL ".mysqli_connect_error();
}
?>