<?php

//***********update lesson process from teacher */

require "connection.php";


if(isset($_POST["lesson_name"])){
    if(isset($_FILES["pdf"])){
        $note = $_FILES["pdf"];
        $lesson_name = $_POST["lesson_name"];
$t_id = $_POST["t_id"];

// echo ($t_id);




        $file_name = "resouses/lesson_note/" . $lesson_name ."_".uniqid().".pdf";
        move_uploaded_file($note["tmp_name"], $file_name);

        echo ("done");

        $user_rs=Database::search("SELECT * FROM `teacher` WHERE `id`='".$t_id."'");
        $user_data=$user_rs->fetch_assoc();
        // $user_data["class_id"]=$tv_id;
        echo ($user_data["class_id"]); 
        Database::iud("INSERT INTO `lesson_note` (`lesson_name`,`teacher_id`,`class_id`,`pdf_path`,`subject_id`) 
        VALUES ('".$lesson_name."','".$t_id."','".$user_data["class_id"]."','".$file_name."','".$user_data["subject_id"]."') ");

        echo("Done Upload");
        
     
       
    }else{
        echo ("Pleace Enter Lesson Note");
    }  
}else{
    echo ("Pleace enter Lesson Name");
}




?>