<?php

// check student verification process*************

require "connection.php";
session_start();

$code = $_POST["verfication"];
$email = $_POST["email"];
$password = $_POST["password"];


if (empty($code)) {
    echo ("Pleace Enter Your Verification Code");
} else {
    $student_rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "' AND `verification_code`='" . $code . "' AND `password`='" . $password . "' ");
    $student_num = $student_rs->num_rows;

    if ($student_num == 1) {

        $student_data = $student_rs->fetch_assoc();

        $_SESSION["su"] = $student_data;


        if (empty($student_data["fname"])) {
            echo ("1");
        } else  if (empty($student_data["lname"])) {
            echo ("1");
        } else if (empty($student_data["mobile"])) {
            echo ("1");
        } else {

            
            Database::iud("UPDATE `student` SET `verification_code`='' WHERE `email`='" . $email . "' AND `password`='" . $password . "'");


            $student_rs = Database::search("SELECT * FROM `payement` WHERE `student_id`='" . $student_data["id"] . "'");
            $student_num = $student_rs->num_rows;

            if ($student_num == 0) {
                

                echo ("2");
            } else {
                echo ("3");
            }
        }
    } else {
        echo ("Check Your Verification Code");
    }
}
