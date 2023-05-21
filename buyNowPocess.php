<?php

//***********payement process */

session_start();
require "connection.php";
if (isset($_SESSION["su"])) {

    $pid = $_GET["id"];
    
    $umail = $_SESSION["su"]["email"]; 
    $sid = $_SESSION["su"]["id"]; 




    $array;
    
    $order_id = uniqid();

        $fname = $_SESSION["su"]["fname"];
        $lname = $_SESSION["su"]["lname"];
        $mobile = $_SESSION["su"]["mobile"];

        $array["id"] = $order_id;
        $array["amount"] = '30000';
        $array["fname"] = $fname;
        $array["lname"] = $lname;
        $array["mobile"] = $mobile;
        // $array["address"] = $user_address;
        // $array["city"] = $city;
        $array["mail"] = $umail;
        $array["sid"] = $sid;


        echo json_encode($array);
   
} else {
    echo ("1");
}
