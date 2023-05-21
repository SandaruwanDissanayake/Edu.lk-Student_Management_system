<?php

//******************upload mark process from teacher */

require "connection.php";
session_start();

if(!empty($_POST["mark"])){

    $mark = $_POST["mark"];
    $sid = $_POST["sid"];
    $aid = $_POST["aid"];

    Database::iud("INSERT INTO `mark_recode` (`student_id`,`assignment_id`,`mark`,`statas`) 
    VALUES ('".$sid."','".$aid."','".$mark."','1') ");

    echo ("done");

}else{
    echo ("Pleace Enter student Mark");
}


?>