<?php

///teacher change password check verification processs

require "connection.php";

if(!empty($_POST["v"])){

    $v = $_POST["v"];
    $id = $_POST["id"];

    $user_rs = Database::search("SELECT * FROM `teacher` WHERE `id`='" . $id . "' AND `verification_code`='" . $v . "'");
    $user_num = $user_rs->num_rows;

    if($user_num==1){
        echo ("done");
    }else{
        echo ("invalid verificaton code");
    }



}else{
    echo ("Pleace Enter Your Verification Code");
}

?>