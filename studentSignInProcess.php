<?php


//*********student sign in processs***** */

require "connection.php";

session_start();

$email = $_POST["email"];
$password = $_POST["password"];
$remember_me = $_POST["remember_Me"];





if (empty($email)) {
    echo ("Pleace Enter Your Email");
} else if (empty($password)) {
    echo ("Pleace Enter Your Password");
} else {
    $user_rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "' AND `password`='" . $password . "'");
    $user_num = $user_rs->num_rows;



    if ($user_num == 1) {
        $user_data = $user_rs->fetch_assoc();
        if (empty($user_data["verification_code"])) {


            $student_payement_rs = Database::search("SELECT * FROM `payement` WHERE `student_id`='" . $user_data["id"] . "'");

            $student_payement_num = $student_payement_rs->num_rows;

            if ($student_payement_num == 0) {
                $_SESSION["su"] = $user_data;

                echo ("go_payment_page");
            } else {
                $student_payement_data = $student_payement_rs->fetch_assoc();

                $payment_end_date = $student_payement_data["end_day"];

                $d = new DateTime();
                $tz = new DateTimeZone("Asia/Colombo");
                $d->setTimezone($tz);
                $date = $d->format("Y-m-d");

                // echo ($date);



                if ($payment_end_date == $date) {


                    Database::iud("DELETE  FROM `payement` WHERE `student_id`='" . $user_data["id"] . "' AND `payment_type_id`='2'");

                    $payment_type = $student_payement_data["payment_type_id"];
                    if ($payment_type == '1') {
                $_SESSION["su"] = $user_data;

                        echo ("go_payment_page");
                    } else {
                        $_SESSION["su"] = $user_data;

                        echo ("go_payment_page");
                    }
                } else {

                    $_SESSION["su"] = $user_data;

                    echo ("done");
                }
            }
        } else {
            $_SESSION["su"] = $user_data;

            echo ("done_sign_in");
        }
    } else {
        echo ("Pleace Check Your Email And Password");
    }
}
