<?php

//****************Academic_Officer verificaton process**************//

require "connection.php";
session_start();

$code = $_POST["verfication"];
$email = $_POST["email"];
$password = $_POST["password"];


if(empty($code)){
    echo ("Pleace Enter Your Verification Code");
}else{
$academic_officers_rs=Database::search("SELECT * FROM `academic_officers` WHERE `email`='".$email."' AND `verification_code`='".$code."' AND `password`='".$password."' ");
    $academic_officers_num = $academic_officers_rs->num_rows;

    if($academic_officers_num==1){

        $academic_officers_data = $academic_officers_rs->fetch_assoc();

        $_SESSION["aou"]=$academic_officers_data;


        if(empty($academic_officers_data["fname"])){
            echo("1");
        }else  if(empty($academic_officers_data["lname"])){
            echo("1");
        }else if(empty($academic_officersteacher_data["mobile"])){
            echo("1");
        }else{
            
            echo("2");
            Database::iud("UPDATE `academic_officers` SET `verification_code`='' WHERE `email`='" . $email . "' AND `password`='" . $password . "'");

        }


    }else{
        echo ("Check Your Verification Code");
    }


}
