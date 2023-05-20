<?php

// student update profile design

require "connection.php";
session_start();
if (isset($_SESSION["su"])) {
    $user = $_SESSION["su"];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Update Profile</title>
    <link rel="icon" href="resouses/bacground_image/abota__1_-removebg-preview.png">

    </head>

    <body style="background-color: #eee;">
        <div class="container-fluid">
            <div class="row">
                <?php require "header.php"; ?>

                <!-- Update Profile-->





                <div class="col-12 " id="supdateProfile">
                    <div class="row justify-content-center">
                        <h4 class="text-center mt-4"> Update Profile</h4>
                        <hr>
                        <!-- Update area-->

                        <div class="col-12" style="background-color: #82949a;">
                            <div class="row mt-4 mb-4 justify-content-center">
                                <div class="col-lg-12 col-10 shadow-lg p-3 mb-5 bg-body rounded">


                                    <div class="row justify-content-center" style="background-color: #ccc;">
                                        <div class="col-lg-4 col-12">


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
                                                    <img class="col-12 rounded-5" src="<?php echo $profile_img_data["path"]; ?>" style="width: 200px; " alt="" id="viweImage">
                                                </div>

                                            <?php
                                            }

                                            ?>


                                            <div class="row justify-content-center">
                                                <input type="file" class="d-none" id="profileimg" iaccept="image/*">
                                                <label for="profileimg" class="btn btn-primary mt-5 col-6" onclick="changeImage();">Update Profile Image</label>

                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-12">

                                            <?php

                                            $usr_rs = Database::search("SELECT * FROM `student` WHERE `id`='" . $user["id"] . "'");
                                            $user_data1 = $usr_rs->fetch_assoc();

                                            ?>

                                            <div class="row">
                                                <div class="col-12 col-lg-6 mt-3">
                                                    <div class="row">
                                                        <p class="col-12">Frist Name</p>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" value="<?php echo $user_data1["fname"]; ?>" id="fname">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 mt-3">
                                                    <div class="row">
                                                        <p class="col-12">Last Name</p>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" value="<?php echo $user["lname"]; ?>" id="lname">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 mt-3">
                                                    <div class="row">
                                                        <p class="col-12">Student ID</p>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" value="<?php echo $user["id"]; ?>" disabled id="id">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 mt-3">
                                                    <div class="row">
                                                        <p class="col-12">NIC</p>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" value="<?php echo $user["nic"]; ?>" disabled>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <div class="row">
                                                        <p class="col-12">Email</p>
                                                        <div class="col-12">
                                                            <input type="email" class="form-control" value="<?php echo $user["email"]; ?>" disabled>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <div class="row">
                                                        <p class="col-12">Phone Number</p>
                                                        <div class="col-12">
                                                            <input type="text" class="form-control" value="<?php echo $user["mobile"]; ?>" id="mobile">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-3">
                                                    <div class="row justify-content-end">
                                                        <button class="btn btn-success col-4 m-3" onclick="updateMyProfile();">Update Profile</button>

                                                    </div>
                                                </div>
                                                <h5 class="mt-4">Security Settings</h5>
                                                <div class="row">
                                                    <div class="d-block" id="changePassword">
                                                        <div class="row mb-3">
                                                            <div class="col-lg-6 col-12">
                                                                <div class="row">
                                                                    <div class="col-12 mt-3">
                                                                        <div class="row">
                                                                            <p class="col-12">Password</p>
                                                                            <div class="col-12">
                                                                                <input type="password" class="form-control" value="<?php echo $user["password"]; ?>">

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mt-5">
                                                                <div class="row justify-content-end">
                                                                    <button class="btn btn-success mt-2" onclick="schangepassword('<?php echo $user['id']; ?>');">Change Password</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- verification code -->

                                                    <div class="d-none" id="verification">
                                                        <div class="row mb-3">
                                                            <div class="col-lg-6 col-12">
                                                                <div class="row">
                                                                    <div class="col-12 mt-3">
                                                                        <div class="row">
                                                                            <p class="col-12">Verification code</p>
                                                                            <div class="col-12">
                                                                                <input type="text" class="form-control" id="Change_verification">

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mt-5">
                                                                <div class="row justify-content-end">
                                                                    <button class="btn btn-success mt-2" onclick="changeVerification('<?php echo $user['id']; ?>')">Submit verification code</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- verification code -->

                                                    <!-- Re new password -->

                                                    <div class="d-none" id="newpw">
                                                        <div class="row mb-3">
                                                            <div class="col-lg-6 col-12">
                                                                <div class="row">
                                                                    <div class="col-12 mt-3">
                                                                        <div class="row">
                                                                            <p class="col-12">New password</p>
                                                                            <div class="col-12">
                                                                                <input type="password" class="form-control" id="nwPw">

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 ">
                                                                <div class="row justify-content-end">
                                                                    <div class="col-12 mt-3">
                                                                        <div class="row">
                                                                            <p class="col-12">Re New password</p>
                                                                            <div class="col-12">
                                                                                <input type="password" class="form-control" id="renwPw">

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <button class="btn btn-success m-2 col-6" onclick="ChangePw('<?php echo $user['id']; ?>');">Change</button>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- Re new password -->

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!--Update area -->




                </div>
            </div>
            <!-- Update Profile -->


        </div>
        </div>

    </body>

    </html>

<?php
} else {
?>
    <h1>Pleace Log in frist</h1>
<?php
}


?>