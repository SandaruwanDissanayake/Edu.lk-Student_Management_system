<?php

//*********teacher check verification  code*/

require "connection.php";
session_start();

$code = $_POST["verfication"];
$email = $_POST["email"];
$password = $_POST["password"];


if(empty($code)){
    echo ("Pleace Enter Your Verification Code");
}else{
$teacher_rs=Database::search("SELECT * FROM `teacher` WHERE `email`='".$email."' AND `verification_code`='".$code."' AND `password`='".$password."' ");
    $teacher_num = $teacher_rs->num_rows;

    if($teacher_num==1){

        $teacher_data = $teacher_rs->fetch_assoc();

        $_SESSION["tu"]=$teacher_data;


        if(empty($teacher_data["fname"])){
            echo("1");
        }else  if(empty($teacher_data["lname"])){
            echo("1");
        }else if(empty($teacher_data["mobile"])){
            echo("1");
        }else{
            
            echo("2");
            Database::iud("UPDATE `teacher` SET `verification_code`='' WHERE `email`='" . $email . "' AND `password`='" . $password . "'");

        }


    }else{
        echo ("Check Your Verification Code");
    }


}
