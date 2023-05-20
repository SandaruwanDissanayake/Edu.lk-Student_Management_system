<?php
require "connection.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDU.LK | Academic Officer SignIn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="resouses/bacground_image/abota__1_-removebg-preview.png">

</head>

<body class="body" style="background-color: #ccc;">
    <div class="container-fluid">
        <div class="row">
            <!-- Academic_Officer_log_in_feild -->
            <div class="col-12 d-block" id="teacher_login">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <img src="resouses/bacground_image/abota__1_-removebg-preview.png" style="height: 200px; margin-left: 25px;">

                        <div class="row">

                            <div class="col-1 "></div>
                            <div class="col-10">
                                <label class=" fw-bold" style="font-size: 30px;" for="">EDU.LK Academic_Officer Log In</label>
                                <p class="mt-5 p">
                                    The Java Institute for Advanced Technology zealously engages in discovering new knowledge, utilising existing knowledge, and disseminating this knowledge in order to usher an innovative new era for the nation and the entire global society by empowering and nurturing its students intellectually, physically, emotionally, and socially at the Java Institute and its community through a viable research-based education to produce skilled professionals and intellects who will vehemently make the world a better place for all mankind while achieving sustainable global development.
                                </p>
                                <div class="col-12 mt-5">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="col-lg-6 col-12 form-control" placeholder="Email Address" id="Aoemail">
                                        </div>
                                        <div class="col-6">
                                            <input type="password" class="col-lg-6 col-12 form-control" placeholder="Password" id="Aopassword">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mt-4">
                                            <div class="row jus">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="Aor">
                                                    <label class="form-check-label" for="Aor">
                                                        Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 mt-4">
                                            <div class="row justify-content-lg-end justify-content-start">
                                                <a class="col-7 " href="">Frogot Password</a>
                                                <button class="btn btn-success col-5 d-grid" onclick="Academic_Officer_SignIn();">Sign In</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-1 "></div>

                        </div>
                    </div>

                    <!-- Academic_Officer_log_in_feild -->


                    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                        <div class="row">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="resouses/bacground_image/R (1).jpeg" class="d-block" style="width: 100%; height: 100vh;" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resouses/bacground_image/1556095694.jpg" class="d-block" style="width: 100%; height: 100vh;" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="resouses/bacground_image/R (2).jpeg" class="d-block" style="width: 100%; height: 100vh;" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- verification -->
    <div class="col-12 d-none" style="background-color: #ccc; height: 100vh;" id="Tverification">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-8  shadow-lg p-3 mb-5 bg-body rounded" style="margin-top: 15%;">
                <div class="row">
                    <div class="col-12">
                        <h3>Pleace Enter Your Verification Code</h3>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="Aoverfication" placeholder="Verification Code">
                        <label for="verfication">Verification Code</label>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row justify-content-end">
                            <button class="btn btn-success col-2" onclick="Academic_Officer_Verification();">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- verification -->

    <!-- Academic_Officer Detals -->

    <div class="col-12 d-none" style="background-color: #ccc; height: 100vh;" id="teacherDetails">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-8 shadow-lg p-3 mb-5 bg-body rounded">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-12">
                        <img src="resouses/bacground_image/R (3).png" style="width: 200px;">
                    </div>
                    <div class="col-10">
                        <hr>
                    </div>

                    <?php

                    $academic_officers = $_SESSION["aou"];

                    $details_rs = Database::search("SELECT * FROM `academic_officers` 
                    WHERE `email`='" . $academic_officers["email"] . "'");
                    $details_data = $details_rs->fetch_assoc();
                    ?>

                    <div class="col-lg-6 col-12 ">
                        <label class="form-label">Frist name</label>
                        <input class="form-control" value="<?php echo ($details_data["fname"]); ?>" id="Aologfname" type="text">
                    </div>

                    <div class="col-lg-6 col-12">
                        <label class="form-label">Last name</label>
                        <input class="form-control" value="<?php echo ($details_data["lname"]); ?>" id="Aologlname" type="text">
                    </div>

                    <div class="col-12 mt-2">
                        <label class="form-label">Mobile</label>
                        <input class="form-control" value="<?php echo ($details_data["mobile"]); ?>" id="Aologmobile" type="text">
                    </div>

                    <div class="col-12 mt-2">
                        <label class="form-label">Email</label>
                        <input class="form-control" value="<?php echo ($details_data["email"]); ?>" type="email" id="Aologemail" disabled>
                    </div>



                    <div class="col-12 mt-2">
                        <label class="form-label">Address line 1</label>
                        <input class="form-control" value="<?php echo ($details_data["address_line_1"]); ?>" type="text" id="Aoaddress_line_1">
                    </div>

                    <div class="col-12 mt-2">
                        <label class="form-label">Address line 2</label>
                        <input class="form-control" value="<?php echo ($details_data["address_line_2"]); ?>" type="text" id="Aoaddress_line_2">
                    </div>
                    <div class="co-12 mt-2">
                        <div class="row justify-content-end">
                            <button class="btn btn-success col-3" onclick="AologInUpdate();">Update And Login</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col-12 mt-4 text-center">
            <p class="text-black-50">2022 &copy; <a href="" class="text-black-50"> ONE CLICK Software Solutions (Pvt) Ltd</a></p>
        </div>

    </div>

    <script src="bootstrap.js"></script>
    <script src="script.js"></script>
</body>

</html>