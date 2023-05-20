<?php


///**************Teacher Sign In procss***** */

require "connection.php";

session_start();

$email = $_POST["email"];
$password = $_POST["password"];
$remember_me = $_POST["remember_Me"];

if(empty($email)){
    echo ("Pleace Enter Your Email");
}else if (empty($password)){
    echo ("Pleace Enter Your Password");
}else{
    $user_rs=Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "' AND `password`='" . $password . "'");
    $user_num = $user_rs->num_rows;

   

    if($user_num==1){
        $user_data = $user_rs->fetch_assoc();

        $user_states = $user_data["statas_id"];

        if($user_states=='4'){
            echo ("You Are Block . Pleace Contact Admin");
        } else {

            if (empty($user_data["verification_code"])) {
                $_SESSION["tu"] = $user_data;
                echo ("done");
            } else {
                $_SESSION["tu"] = $user_data;

                echo ("1");
            }
        }
    }else{
        echo ("Pleace Check Your Email And Password");
    }

}

?>