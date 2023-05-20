<?php

//**********Teacher update profile for 1st time log in */

require "connection.php";
session_start();


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$password = $_POST["password"];


if(empty($fname)){
    echo ("pleace Enter Your Frist Name");
}else if (empty($lname)){
    echo ("Plece Enter Your Last Name");

}else{
    Database::iud("UPDATE `teacher` SET `fname`='" . $fname . "',`lname`='" . $lname . "',`mobile`='" . $mobile . "',`verification_code`='',`statas_id`='3' WHERE `email`='" . $email . "'");
   
    $user_rs=Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "' AND `password`='" . $password . "'");
    $user_data = $user_rs->fetch_assoc();

    $_SESSION["tu"] = $user_data;
    echo ("done");
    
}
