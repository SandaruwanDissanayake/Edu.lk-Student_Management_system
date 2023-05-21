<?php


//*****************trail payement process */

require "connection.php";

$sid = $_GET["sid"];

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");


$newDate = date('Y-m-d', strtotime($date. ' + 1 months'));

// echo ($date);
// echo ($newDate);
$student_rs=Database::search("SELECT * FROM `payement` WHERE `student_id`='" . $sid . "' AND `payment_type_id`='1'");
$student_num = $student_rs->num_rows;

if($student_num==0){
    Database::iud("INSERT INTO `payement` 
    (`student_id`,`payment_type_id`,`paid_day`,`end_day`,`amount`) 
    VALUES ('" . $sid . "','1','" . $date . "','" . $newDate . "','0') ");
    
    echo ("done");
}else{
    echo ("Sorry. You Cant't use trail version . you are 1 time used it. Pleace paid log in");
}




?>