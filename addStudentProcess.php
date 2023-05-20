<?php

//************add student and send verification code */

require "connection.php";
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(empty($_POST["email"])){
    echo ("Pleace enter email address");
}else if(empty($_POST["index_Num"])){
    echo ("Pleace enter Index Number");
}else if(empty($_POST["password"])){
    echo ("Pleace Enter Password");
}else if(empty($_POST["b_day"])){
    echo ("pleace enter Birth Day");
}else if(empty($_POST["sclass"])){
    echo ("Pleace Select Class");
}else if(empty($_POST["gender"])){
    echo ("Pleace Select gender");
} else {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $nic = $_POST["nic"];
    $index_num = $_POST["index_Num"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $b_day = $_POST["b_day"];
    $sclass = $_POST["sclass"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];


    $check_rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "' OR `id`='" . $index_num . "' OR `nic`='" . $nic . "'");
    $check_num = $check_rs->num_rows;

    if ($check_num == 0) {

        $code = uniqid();

        Database::iud("INSERT INTO `student` (`id`,`fname`,`lname`,`nic`,`email`,`password`,`gender_id`,`b_day`,`class_id`,`address_line_1`,`address_line_2`,`verification_code`) 
        VALUES ('" . $index_num . "','" . $fname . "','" . $lname . "','" . $nic . "','" . $email . "','" . $password . "','" . $gender . "','" . $b_day . "','" . $sclass . "','" . $address1 . "','" . $address2 . "','" . $code . "')");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sandaruwandissanayake9@gmail.com';
        $mail->Password = 'vsdsbxtfntbksiva';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('sandaruwandissanayake9@gmail.com', 'EDU.LK');
        $mail->addReplyTo('sandaruwandissanayake9@gmail.com', 'EDU.LK');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = ' Student Rejistration';
        $bodyContent = '<h3 style="color:black"> Your Verification code is : ' . $code . '</h3> <br/> 
    <h3 style="color:black"> Your Password is : ' . $password . '</h3> <br/> 
    
    <button <a href="http://localhost/edu.lk/adminPanel.php">Go to EDU.lk</a></button>';
        $mail->Body = $bodyContent;
        if (!$mail->send()) {
            echo 'verification code sending failed';
        } else {


            echo 'success';
        }

    }
}
