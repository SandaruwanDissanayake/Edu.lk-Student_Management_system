<?php
//add assignment fronm teacher************************

require "connection.php";

if (isset($_POST["A_name"])) {
    if (isset($_FILES["pdf"])) {
        if (isset($_POST["Assignment_id"])) {

            $A_name = $_POST["A_name"];
            $pdf = $_FILES["pdf"];
            $assigment_id = $_POST["Assignment_id"];
            $t_id = $_POST["tid"];
            $end_date = $_POST["end_date"];

            $d = new DateTime();
            $tz = new DateTimeZone("Asia/Colombo");
            $d->setTimezone($tz);
            $date = $d->format("Y-m-d H:i:s");

            $file_name = "resouses/Assignment/" . $A_name . "_" . uniqid() . ".pdf";
            move_uploaded_file($pdf["tmp_name"], $file_name);

            $user_rs = Database::search("SELECT * FROM `teacher` WHERE `id`='" . $t_id . "'");
            $user_data = $user_rs->fetch_assoc();

            Database::iud("INSERT INTO `assignment` (`assignment_id`,`assignment_name`,`end_date`,`class_id`,`teacher_id`,`subject_id`,`start_date`,`assignment_path`) 
            VALUES ('" . $assigment_id . "','" . $A_name . "','" . $end_date . "','" . $user_data["class_id"] . "','" . $t_id . "','" . $user_data["subject_id"] . "','" . $date . "','".$file_name."')");

            echo ("upload done");
        } else {
            echo ("Pleace Enter Assaigment Id");
        }
    } else {
        echo ("Pleace Enter Assaigment File");
    }
} else {
    echo ("Pleace Enter Assiment Name");
}
