<?php

// relese mark from officer process******

require "connection.php";

$mid = $_GET["mid"];

$mark_rs=Database::search("SELECT * FROM `mark_recode` WHERE `id`='" . $mid . "'");
$mark_data = $mark_rs->fetch_assoc();

$mrk_status = $mark_data["statas"];

if($mrk_status=="1"){
    Database::iud("UPDATE `mark_recode` SET `statas`='2' WHERE `id`='".$mid."'");
    echo ("done");
}else if($mrk_status=="2"){
    Database::iud("UPDATE `mark_recode` SET `statas`='1' WHERE `id`='".$mid."'");
    echo ("done");
}






?>