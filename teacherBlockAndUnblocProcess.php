<?php

/// *********** teacher block and unblock process***********///

require "connection.php";

$tid = $_GET["id"];

$teache_rs=Database::search("SELECT * FROM `teacher` WHERE `id`='".$tid."'");
$teache_data = $teache_rs->fetch_assoc();

$teache_stats = $teache_data["statas_id"];

if($teache_stats=='4'){
    Database::iud("UPDATE `teacher` SET `statas_id`='2' WHERE `id`='" . $tid . "'");
    echo ("unbloked");
}else if($teache_stats=='2'){
    Database::iud("UPDATE `teacher` SET `statas_id`='4' WHERE `id`='" . $tid . "'");
    echo ("bloked");
}

?>