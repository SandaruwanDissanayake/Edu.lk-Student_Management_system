<?php

//admin sign in process//
require "connection.php";
session_start();

if (!empty($_POST["email"])) {
    if (!empty($_POST["password"])) {


        $password = $_POST["password"];
        $email = $_POST["email"];
        $remember_Me = $_POST["remember_Me"];

        $user_rs = Database::search("SELECT * FROM `admin` 
        WHERE `email`='" . $email . "' AND `password`='" . $password . "'");

        $user_num = $user_rs->num_rows;
        if ($user_num == 1) {
            $user_data = $user_rs->fetch_assoc();

            

            $_SESSION["u"] = $user_data;

            if ($remember_Me == "true") {
                setcookie("email", $email, time() + (60 * 60 * 24 * 365));
                setcookie("password", $password, time() + (60 * 60 * 24 * 365));
            } else {
                setcookie("email", "", -1);
                setcookie("password", "", -1);
            }
            echo("sucsess");
        } else {
            echo ("check your email and password");
        }
    } else {
        echo ("pleace Enter Your Password");
    }
} else {
    echo ("Pleace Enter Your Email Address");
}
