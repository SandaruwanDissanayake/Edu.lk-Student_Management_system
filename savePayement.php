<?php

/// save real payemnt//////////

require "connection.php";

$sid = $_POST["sid"];
$amouunt = $_POST["amount"];

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

$newDate = date('Y-m-d', strtotime($date. ' + 12 months'));


// echo ($date);
// echo ($newDate);

Database::iud("INSERT INTO `payement` 
(`student_id`,`payment_type_id`,`paid_day`,`end_day`,`amount`) 
VALUES ('" . $sid . "','2','" . $date . "','" . $newDate . "','".$amouunt."') ");

echo ("done");

?>