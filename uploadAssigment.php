<?php

//*******************uplode assignment from teacher process */

require "connection.php";
session_start();

if(isset($_SESSION["su"])){
    if (isset($_FILES["pdf"])) {
        $pdf = $_FILES["pdf"];
        $user_data = $_SESSION["su"];
        $aid = $_POST["aid"];

        $d = new DateTime();
            $tz = new DateTimeZone("Asia/Colombo");
            $d->setTimezone($tz);
            $date = $d->format("Y-m-d H:i:s");

            $file_name = "resouses/Assignment/" . $aid . "_" . uniqid() . ".pdf";
            move_uploaded_file($pdf["tmp_name"], $file_name);

        // $a_rs = Database::search("SELECT * FROM `assignment` WHERE `assignment_id`='" . $aid . "'");
        // $a_data = $a_rs->fetch_assoc();

            Database::iud("INSERT INTO `student_has_assignment` (`student_id`,`assignment_id`,`path`) 
            VALUES ('".$user_data["id"]."''" . $aid . "','".$file_name."')");

            echo ("upload done");

    }else{
        echo ("Pleace Select Your Assigment File");
    }

}else{
    echo ("Pleace Log In 1st");
}

?>