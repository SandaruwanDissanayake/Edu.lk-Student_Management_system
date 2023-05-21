<?php
//************add teacher and send verification code */


require "connection.php";
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$subject = $_POST["subject"];
$index_num = $_POST["index_num"];
$email = $_POST["email"];
$password = $_POST["password"];
$class = $_POST["Tclass"];



if ($subject == 0) {
    echo ("Pleace Select Teacher's Subject");
} else if (empty($index_num)) {
    echo ("Pleace Enter Teacher's Index Number");
} else if (empty($email)) {
    echo ("Pleace Enater Teacher's Email Address");
} else if (empty($password)) {
    echo ("Pleace Enter teacher's Password");
} else if ($class == 0) {
    echo ("Pleace Select Teacher Class");
} else {
    $chekUser_rs = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "' OR `id`='" . $index_num . "'");

    $chekUser_num = $chekUser_rs->num_rows;

    if ($chekUser_num == 0) {

        $code = uniqid();

        Database::iud("INSERT INTO `teacher` (`id`,`email`,`password`,`subject_id`,`class_id`,`verification_code`,`statas_id`) 
        VALUES ('" . $index_num . "','" . $email . "','" . $password . "','" . $subject . "','" . $class . "','" . $code . "','1')");

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
        $mail->Subject = ' Teacher Rejistration';
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
        echo ("Alrady rejisted user");
    }
}
