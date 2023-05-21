<?php

/// admin change password and check new password

require "connection.php";

$id=$_POST["id"];
$np=$_POST["rnp"];
$rnp=$_POST["np"];


if(empty($id)){
    echo("ID");
}else if (empty($np)){
    echo("Please insert a New Password");
}else if(strlen($np)<5 || strlen($np)>20){
    echo("invalid your password");
}else if(empty($rnp)){
    echo("Please Re-type your New password");
}else if($np !=$rnp){
    echo("Password does not matched");
} else {
    $rs = Database::search("SELECT * FROM `admin` WHERE `id`='" . $id . "'");
    $n = $rs->num_rows;

    if ($n == 1) {
        Database::iud("UPDATE `admin` SET `password`='" . $np . "' WHERE `id`='" . $id . "'");
        echo ("success");
    } else {
        echo ("Invalid Email or Verification code");
    }
}




?>