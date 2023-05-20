<?php

// ********** acadomic officer block and unblock process*********//

require "connection.php";

$aid = $_GET["id"];

$ao_rs = Database::search("SELECT * FROM `academic_officers` WHERE `id`='".$aid."'");
$ao_data = $ao_rs->fetch_assoc();

$ao_states = $ao_data["statas_id"];



if($ao_states=='1'){
    Database::iud("UPDATE `academic_officers` SET `statas_id`='2' WHERE `id`='" . $aid . "'");
    echo ("2");
}else if($ao_states=='2'){
    Database::iud("UPDATE `academic_officers` SET `statas_id`='3' WHERE `id`='" . $aid . "'");
    echo ("3");
}else if ($ao_states=='3'){
    
    Database::iud("UPDATE `academic_officers` SET `statas_id`='4' WHERE `id`='" . $aid . "'");
    echo ("4");

}else if ($ao_states=='4'){

    Database::iud("UPDATE `academic_officers` SET `statas_id`='2' WHERE `id`='" . $aid . "'");
    echo ("2");

}



?>