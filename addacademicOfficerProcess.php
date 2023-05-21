<?php
//***************add officer and send code */

require "connection.php";
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$index_num = $_POST["index_Num"];
$email = $_POST["email"];
$password = $_POST["password"];

if (empty($index_num)) {
    echo ("Pleace Enter Index Number");
} else if (empty($email)) {
    echo ("pleace Enter Email");
} else if (empty($password)) {
    echo ("Pleace Enter Password");
} else {
    $chekUser_rs = Database::search("SELECT * FROM `academic_officers` WHERE `email`='" . $email . "' OR `email`='" . $index_num . "'");

    $chekUser_num = $chekUser_rs->num_rows;

    if ($chekUser_num == 0) {

        $code = uniqid();

        Database::iud("INSERT INTO `academic_officers` (`id`,`email`,`verification_code`,`password`,`statas_id`) 
        VALUES ('" . $index_num . "','" . $email . "','" . $code . "','" . $password . "','1')  ");

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
        $mail->Subject = ' academic officers Rejistration';
        $bodyContent = '<h3 style="color:black"> Your Verification code is : ' . $code . '</h3> <br/> 
        <h3 style="color:black"> Your Password is : ' . $password . '</h3> <br/> 

        <button <a href="http://localhost/edu.lk/adminPanel.php">Go to EDU.lk</a></button>';
        $mail->Body    = $bodyContent;
        if (!$mail->send()) {
            echo 'verification code sending failed';
        } else {


            echo 'success';
        }
    } else {
        echo ("Alredy Rejisted User");
    }
}
