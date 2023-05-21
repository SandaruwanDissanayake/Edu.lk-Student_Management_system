<?php

//*&*******************officer update profile for 1st time sign in

require "connection.php";
session_start();


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$password = $_POST["password"];
$Aoaddress_line_1 = $_POST["Aoaddress_line_1"];
$Aoaddress_line_2 = $_POST["Aoaddress_line_2"];


if(empty($fname)){
    echo ("pleace Enter Your Frist Name");
}else if (empty($lname)){
    echo ("Plece Enter Your Last Name");

}else{
    Database::iud("UPDATE `academic_officers` SET `fname`='" . $fname . "',`lname`='" . $lname . "',`mobile`='" . $mobile . "',`verification_code`='',`statas_id`='3',`address_line_1`='".$Aoaddress_line_1."',`address_line_2`='".$Aoaddress_line_2."' WHERE `email`='" . $email . "'");
   
    $user_rs=Database::search("SELECT * FROM `academic_officers` WHERE `email`='" . $email . "' AND `password`='" . $password . "'");
    $user_data = $user_rs->fetch_assoc();

    $_SESSION["aou"] = $user_data;
    echo ("done");
    
}
