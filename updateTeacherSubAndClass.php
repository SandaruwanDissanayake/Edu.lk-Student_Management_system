<?php


//****************update teacher subject and class process***********///

require "connection.php";

$tid = $_POST["id"];
$tsubject = $_POST["tSubject"];
$tclass = $_POST["tClass"];



Database::iud("UPDATE `teacher` SET `class_id`='" . $tclass . "',`subject_id`='" . $tsubject . "' WHERE `id`='" . $tid . "'");

echo ("Update Sucsess");

?>