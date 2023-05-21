<?php

//////student update profuile for 1st time log in

require "connection.php";
session_start();


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$password = $_POST["password"];
$nic = $_POST["nic"];
$b_day = $_POST["b_day"];


if(empty($fname)){
    echo ("pleace Enter Your Frist Name");
}else if (empty($lname)){
    echo ("Plece Enter Your Last Name");

}else{
    Database::iud("UPDATE `student` SET `fname`='" . $fname . "',`lname`='" . $lname . "',`mobile`='" . $mobile . "',`verification_code`='',`states`='1',`b_day`='".$b_day."',`nic`='".$nic."' WHERE `email`='" . $email . "'");
   
    $user_rs=Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "' AND `password`='" . $password . "'");
    $user_data = $user_rs->fetch_assoc();

    $_SESSION["su"] = $user_data;
    echo ("done");
    
}
