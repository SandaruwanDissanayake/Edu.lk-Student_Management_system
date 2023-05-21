<?php

require "connection.php";

$id = $_GET["id"];
Database::iud("UPDATE `student` SET `verification_code`='' WHERE `id`='" . $id . "'");
echo ("done");


?>