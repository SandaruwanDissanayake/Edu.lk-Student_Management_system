<!DOCTYPE html>
<html lang="en">

<!-- all pages header -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>

    <div class="container-fluid bg-white">
        <div class="row">
            <header>
                <div class="col-12">
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="row justify-content-start">
                                <div class="offset-2 col-4 " style="height: 100px;">
                                <img src="resouses/bacground_image/abota__1_-removebg-preview.png" style="height: 200px; margin-top: -70px;">

                                </div>

                            </div>

                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="row justify-content-lg-end">
                                <div class=" col-lg-4 col-6">
                                    <div class="row ">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row justify-content-end ">
                                        <div class="col-8">
                                            <p><?php echo $user["fname"] . " " . $user["lname"]; ?></p>
                                            <p><?php echo $user["id"]; ?></p>

                                        </div>
                                        <div class="col-2">
                                            <?php

                                            $profile_img_rs = Database::search("SELECT * FROM `profile_image` WHERE `user_id`='" . $user["id"] . "'");
                                            $profile_img_num = $profile_img_rs->num_rows;
                                            $profile_img_data = $profile_img_rs->fetch_assoc();

                                            if (empty($profile_img_num)) {
                                            ?>
                                                <div class="row justify-content-center">
                                                    <img class="col-12 rounded-5" src="resouses/bacground_image/R (3).png" style="width: 200px; " alt="" id="viweImage">
                                                </div>

                                            <?php
                                            } else {
                                            ?>
                                                <div class="row justify-content-center">
                                                    <img class="col-12" src="<?php echo $profile_img_data["path"]; ?>" style="width: 200px; border-radius: 50%;" alt="" id="viweImage">
                                                </div>

                                            <?php
                                            }

                                            ?>
                                        </div>
                                        <div class="col-2 ">
                                            <h3><i class="bi bi-box-arrow-right"  onclick="signOut();" style="cursor: pointer;"></i></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>
            </header>
        </div>
    </div>


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>