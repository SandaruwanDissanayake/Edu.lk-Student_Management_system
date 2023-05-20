<?php
///////////**************officer sign in process */
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
    $user_rs=Database::search("SELECT * FROM `academic_officers` WHERE `email`='" . $email . "' AND `password`='" . $password . "'");
    $user_num = $user_rs->num_rows;

   

    if($user_num==1){
        $user_data = $user_rs->fetch_assoc();

        $ao_states = $user_data["statas_id"];

        if($ao_states=='4'){
           
            echo ("You are vlocked Pelace Contact Admin");
        }else{
            if(empty($user_data["verification_code"])){
                $_SESSION["aou"] = $user_data;
                echo ("done");
            }else{
                $_SESSION["aou"] = $user_data;

                echo ("1");
            }  
        }

       
    }else{
        echo ("Pleace Check Your Email And Password");
    }

}

?>