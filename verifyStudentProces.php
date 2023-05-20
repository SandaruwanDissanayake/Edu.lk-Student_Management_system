<?php

//*************verify student process */

require "connection.php";

$sid = $_GET["sid"];

$student_rs=Database::search("SELECT * FROM `student` WHERE `id`='".$sid."'");
$student_data = $student_rs->fetch_assoc();

$st_statas = $student_data["states"];

if($st_statas=="1"){
    Database::iud("UPDATE `student` SET `states`='2' WHERE `id`='" . $sid . "'");
    echo ("done");
}else if($st_statas=="2"){
    Database::iud("UPDATE `student` SET `states`='1' WHERE `id`='" . $sid . "'");
    echo ("done");
}

?>