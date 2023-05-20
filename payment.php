<?php

//payment design//////////

require "connection.php";

session_start();

$user=$_SESSION["su"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body style="background-color:#74EBD5; background-image: linear-gradient(90deg,#74EBD5 25%,#9FACE6 75% ) ;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="height: 170px;"></div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <h3 class="text-center">Redey To Start?</h3>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-6 bg-white m-5 rounded" style="height: 250px;">

                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <h2 class="text-center mt-2">1 Month Trial</h2>
                                <hr>
                                <h6 class="mt-3 text-center"> the students have free access only for one month and they have to pay for it
                                    after the trial period.</h6>

                                <button class="btn btn-warning mt-3 mb-3 col-6" onclick="trailPayement('<?php echo $user['id']; ?>')">Free Trail</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6  bg-white m-5 rounded" style="height: 250px;">

                    <div class="row">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <h2 class="text-center mt-2">Pay For 1 Year</h2>
                                <hr>
                                <h6 class="mt-3 text-center text-decoration-line-through opacity-50 fw-bold">LKR : 30 000 /=</h6>
                                <h2 class="mt-3 text-center  fw-bold">LKR : 30 000 /=</h2>


                                <button class="btn btn-warning mt-3 mb-3 col-6"  type="submit" id="payhere-payment"  onclick="payNow('<?php echo $user['id']; ?>');" >Pay Now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

</body>

</html>