<?php

//admin change password and send verification process//

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$id = $_GET["id"];

$user_rs = Database::search("SELECT * FROM `admin` WHERE `id`='" . $id . "'");
$user_num = $user_rs->num_rows;

if($user_num==1){

    $user_data = $user_rs->fetch_assoc();

    
    $email = $user_data["email"];
    $code = uniqid();

    Database::iud("UPDATE `admin` SET `verification_code`='" . $code . "'");

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
$mail->Subject = 'EDU.LK Reset Password Verification Code';
$bodyContent = '<h1 style="color:green"> Your Verification code is '.$code.'</h1>>';
$mail->Body    = $bodyContent;


if(!$mail->send()){
    echo'verification code sending failed';
}else{
    echo'done';
}

}else{
    echo ("you are not valid user");
}
?>