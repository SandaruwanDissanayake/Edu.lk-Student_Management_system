<?php

//***********Acadomic officer Panel */

require "connection.php";
session_start();
if (isset($_SESSION["aou"])) {
    $user = $_SESSION["aou"];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EDU.LK | Academic Officer Panel</title>
        <link rel="icon" href="resouses/bacground_image/abota__1_-removebg-preview.png">
    </head>

    <body style="background-color: #eee;">
        <div class="container-fluid">
            <div class="row">
                <?php require "header.php"; ?>

                <div class="col-12 mt-5 ">
                    <div class="row">

                        <div class="col-2 d-lg-block d-none  shadow-lg p-3 mb-5 bg-body ">
                            <div class="row admin-button" onclick="aodashbord();">
                                <h5><i class="bi bi-speedometer2"></i> &nbsp;Dashbord</h5>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="aoAddstudent();">
                                <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Add Student</p>
                                <hr>
                            </div>

                            <div class="col-12 admin-button rounded" onclick="aoresults();">
                                <p><i class="bi bi-list-check m-2"></i>&nbsp;&nbsp;Release Assignment Marks</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="aoUpdateProfile();">
                                <p><i class="bi bi-gear m-2"></i>&nbsp;&nbsp;Update Profile</p>
                                <hr>
                            </div>
                        </div>
                        <div class="col-lg-10 col-12  shadow-lg p-3 mb-5 bg-body ">

                            <div class="row" style="background-color: #ccc;">
                                <div class="col-2 d-lg-none d-block">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu</button>
                                </div>
                                <div class="col-lg-12 col-10">
                                    <h3>Academic Officer</h3>
                                    <h6><?php echo $user["fname"] . " " . $user["lname"]; ?></h6>
                                </div>
                                <hr>
                            </div>


                            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                <div class="offcanvas-header">
                                    <img src="resouses/bacground_image/abota__1_-removebg-preview.png" style="width: 100px;" alt="">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                <div class="col-12   shadow-lg p-3 mb-5 bg-body ">
                            <div class="row admin-button" onclick="aodashbord();">
                                <h5><i class="bi bi-speedometer2"></i> &nbsp;Dashbord</h5>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="aoAddstudent();">
                                <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Add Student</p>
                                <hr>
                            </div>

                            <div class="col-12 admin-button rounded" onclick="aoresults();">
                                <p><i class="bi bi-list-check m-2"></i>&nbsp;&nbsp;Release Assignment Marks</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="aoUpdateProfile();">
                                <p><i class="bi bi-gear m-2"></i>&nbsp;&nbsp;Update Profile</p>
                                <hr>
                            </div>
                        </div>
                                </div>
                            </div>

                            <!-- dashbord -->

                            <div class="row d-block" id="aodashbord">
                                <div class="col-11 m-5">
                                    <div class="row justify-content-center">

                                        <!-- teacher -->


                                        <div class="col-lg-5 col-10  mx-4 mt-3" style=" background-color: #82949a;">

                                            <div class="row justify-content-center mt-2" style="background-color: #ccc;">
                                                <div class="col-12">
                                                    <h5 class="text-center"><i class="bi bi-person-fill"></i> Verifid Student</h5>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 overflow-scroll rounded m-2" style="height: 300px;">
                                                    <?php

                                                    $student_rs1 = Database::search("SELECT * FROM `student` WHERE `states`='1'");
                                                    $student_num1 = $student_rs1->num_rows;
                                                    for ($z = 0; $z < $student_num1; $z++) {
                                                        $student_data1 = $student_rs1->fetch_assoc();
                                                    ?>
                                                        <div class="row">

                                                            <div class="col-4 border-end" style="background-color: #eee;">
                                                                <h6><?php echo $student_data1["id"]; ?></h6>
                                                            </div>
                                                            <div class="col-5" style="background-color: #eee;">
                                                                <h6 style="font-size: 12px;"><?php echo $student_data1["fname"] . " " . $student_data1["fname"]; ?></h6>
                                                            </div>
                                                            <div class="col-3" style="background-color: #eee;">
                                                                <button style="font-size: 12px;" class="btn btn-success" onclick="veridyStudent('<?php echo $student_data1['id']; ?>');">Unverifid</button>
                                                            </div>


                                                        </div>
                                                    <?php
                                                    }


                                                    ?>

                                                </div>
                                            </div>

                                        </div>

                                        <!-- teacher -->


                                        <!-- Academic -->

                                        <div class="col-lg-5 col-10  mx-4 mt-3" style=" background-color: #82949a;">


                                            <div class="row justify-content-center mt-2" style="background-color: #ccc;">
                                                <div class="col-12">
                                                    <h5 class="text-center"><i class="bi bi-person-fill"></i> Unverifid Student</h5>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 overflow-scroll rounded m-2" style="height: 300px;">
                                                    <?php

                                                    $student_rs1 = Database::search("SELECT * FROM `student` WHERE `states`='2'");
                                                    $student_num1 = $student_rs1->num_rows;
                                                    for ($c = 0; $c < $student_num1; $c++) {
                                                        $student_data1 = $student_rs1->fetch_assoc();
                                                    ?>
                                                        <div class="row">

                                                            <div class="col-4 border-end" style="background-color: #eee;">
                                                                <h6><?php echo $student_data1["id"]; ?></h6>
                                                            </div>
                                                            <div class="col-5" style="background-color: #eee;">
                                                                <h6 style="font-size: 12px;"><?php echo $student_data1["fname"] . " " . $student_data1["fname"]; ?></h6>
                                                            </div>
                                                            <div class="col-3" style="background-color: #eee;">
                                                                <button style="font-size: 12px;" class="btn btn-success" onclick="veridyStudent('<?php echo $student_data1['id']; ?>');">Verify</button>
                                                            </div>


                                                        </div>
                                                    <?php
                                                    }


                                                    ?>

                                                </div>
                                            </div>

                                        </div>

                                        <!-- Academic -->





                                    </div>
                                </div>
                            </div>

                            <!-- dashbord -->

                            <!-- add teacher -->


                            <div class="col-12 d-none" id="aoAddstudent">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">Add Student</h4>

                                    <div class="col-10  shadow-lg rounded" style="background-color:#ccc ;">
                                        <div class="row">
                                            <div class="col-lg-6 col-12 mt-5">
                                                <div class="row">
                                                    <p class="col-12">*Student Frist Name</p>



                                                    <div class="col-12">
                                                        <input type="text" class="form-control" Id="fname">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-12">*Student Last Name</p>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control" id="lname">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-12">*NIC</p>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control" id="NIC">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-12">*Student Index Number</p>
                                                    <div class="col-12">
                                                        <input class="col-8 form-control" type="text" id="index_num">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-12">*Student Email Address</p>
                                                    <div class="col-12">
                                                        <input class="col-8 form-control" type="email" id="email">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-12">*student Password</p>
                                                    <div class="col-12">
                                                        <input class="col-8 form-control" type="password" id="password">
                                                    </div>

                                                </div>



                                            </div>
                                            <div class="col-lg-6 col-12 mt-5">
                                                <div class="row">
                                                    <p class="col-12">*Gender</p>



                                                    <div class="col-12">
                                                        <select class="form-select" name="" id="gender">
                                                            <option value="0">--Select Gender--</option>

                                                            <?php

                                                            $gender_rs = Database::search("SELECT * FROM `gender`");
                                                            $gender_num = $gender_rs->num_rows;
                                                            for ($x = 0; $x < $gender_num; $x++) {
                                                                $gender_data = $gender_rs->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo $gender_data["id"]; ?>"><?php echo $gender_data["gender_name"]; ?></option>

                                                            <?php
                                                            }

                                                            ?>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-12">*Birth day</p>
                                                    <div class="col-12">
                                                        <input class="col-8 form-control" type="date" id="b_day">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-12">*Class</p>



                                                    <div class="col-12">
                                                        <select class="form-select" name="" id="sclass">
                                                            <option value="0">--Select Gender--</option>

                                                            <?php

                                                            $class_rs = Database::search("SELECT * FROM `class`");
                                                            $class_num = $class_rs->num_rows;
                                                            for ($x = 0; $x < $class_num; $x++) {
                                                                $class_data = $class_rs->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo $class_data["id"]; ?>">Grade :<?php echo $class_data["class_name"]; ?></option>

                                                            <?php
                                                            }

                                                            ?>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-12">*Address Line 1</p>
                                                    <div class="col-12">
                                                        <input class="col-8 form-control" type="text" id="address_line_1">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-12">*Address Line 2</p>
                                                    <div class="col-12">
                                                        <input class="col-8 form-control" type="text" id="address_line_2">
                                                    </div>

                                                </div>

                                                <div class="row mt-5 mb-5">
                                                    <p class="col-9">Send verifivation code and password for tihs email address</p>
                                                    <div class="col-3">
                                                        <div class="row justify-content-end ">
                                                            <button class="btn btn-success" onclick="addstudent();">Send </button>

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- add Student -->

                            <!-- Results-->


                            <div class="col-12 d-none" id="aoresults">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4"> Release Assignment Marks</h4>

                                    <!-- student search -->

                                    <div class="col-12" style="background-color: #82949a;">
                                        <div class="row mt-4 mb-4">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-lg-2 col-3">
                                                        <input type="text" class=" form-control" placeholder="Student Index Number">
                                                    </div>
                                                    <div class="col-lg-8 col-4">
                                                        <input type="text" class="form-control" placeholder="Student's Name">
                                                    </div>

                                                    <div class="col-2">
                                                        <select name="" id="" class="form-control">
                                                            <option value="">--Select Class--</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-lg-2 col-3">
                                                        <select name="" id="" class="form-select">
                                                            <option value="">--Select Subject--</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 col-3">
                                                        <select name="" id="" class="form-select">
                                                            <option value="">--Select Term--</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 col-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Results Low To Heigh
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Heigh To Low
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <button class="btn btn-success d-grid">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--student search -->



                                    <div class="col-12 mt-2 shadow-lg rounded overflow-scroll" style="background-color:#ccc ; height: 300px;">
                                        <div class="row">


                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Student Index Number</p>
                                                    </div>
                                                    <div class="col-3" style="background-color: #82949a;">
                                                        <p>Student Name</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Class</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #82949a;">
                                                        <p> Assignment Id</p>
                                                    </div>

                                                    <div class="col-1" style="background-color: #eee;">
                                                        <p>Mark</p>
                                                    </div>



                                                    <div class="col-2" style="background-color: #82949a;">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-4">
                                                <div class="row">

                                                    <?php

                                                    $mark_rs = Database::search("SELECT * FROM `mark_recode`");
                                                    $mark_num = $mark_rs->num_rows;

                                                    for ($x = 0; $x < $mark_num; $x++) {
                                                        $mark_data = $mark_rs->fetch_assoc();



                                                    ?>

                                                        <div class="col-2 mb-1" style="background-color: #eee;">
                                                            <p><?php echo $mark_data["student_id"]; ?></p>
                                                        </div>

                                                        <?php

                                                        $student_rs = Database::search("SELECT * FROM `student` WHERE `id`='" . $mark_data["student_id"] . "'");
                                                        $student_data = $student_rs->fetch_assoc();


                                                        ?>

                                                        <div class="col-3 mb-1" style="background-color: #82949a;">
                                                            <p><?php echo $student_data["fname"] . " " . $student_data["lname"]; ?></p>
                                                        </div>

                                                        <?php

                                                        $class_rs = Database::search("SELECT * FROM `class` WHERE `id`='" . $student_data["class_id"] . "'");
                                                        $class_data = $class_rs->fetch_assoc();

                                                        ?>

                                                        <div class="col-2 mb-1" style="background-color: #eee;">
                                                            <p> Grade : <?php echo $class_data["class_name"]; ?></p>
                                                        </div>
                                                        <div class="col-2 mb-1" style="background-color: #82949a;">
                                                            <p><?php echo $mark_data["assignment_id"]; ?></p>
                                                        </div>



                                                        <div class="col-1 mb-1" style="background-color: #eee;">
                                                            <p><?php echo $mark_data["mark"]; ?></p>
                                                        </div>
                                                        <?php
                                                        $mrk_status = $mark_data["statas"];

                                                        if ($mrk_status == "2") {
                                                        ?>

                                                            <div class="col-2 mb-1" style="background-color: #82949a;">
                                                                <button class="btn btn-success mt-2 d-grid" onclick="releaseMark('<?php echo $mark_data['id']; ?>');">Release Mark</button>
                                                            </div>
                                                        <?php
                                                        } else if ($mrk_status == "1") {
                                                        ?>


                                                            <div class="col-2 mb-1" style="background-color: #82949a;">
                                                                <button class="btn btn-danger mt-2 d-grid" onclick="releaseMark('<?php echo $mark_data['id']; ?>');">Release Mark</button>
                                                            </div>

                                                        <?php
                                                        }

                                                        ?>


                                                    <?php

                                                    }

                                                    ?>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Results -->


                            <!-- Update Profile-->


                            <div class="col-12 d-none" id="aoupdateProfile">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4"> Update Profile</h4>
                                    <hr>
                                    <!-- Update area-->

                                    <div class="col-12" style="background-color: #82949a;">
                                        <div class="row mt-4 mb-4 justify-content-center">
                                            <div class="col-lg-8 col-10 shadow-lg p-3 mb-5 bg-body rounded">
                                                <div class="row justify-content-center" style="background-color: #ccc;">
                                                    <div class="col-12">
                                                        <div class="row justify-content-center">
                                                            <img class="col-12" src="resouses/bacground_image/R (3).png" style="width: 200px;" alt="">
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <button class="btn btn-success col-3">Update Profile Image</button>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <div class="row">
                                                            <p class="col-3">Frist Name</p>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <div class="row">
                                                            <p class="col-3">Last Name</p>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <div class="row">
                                                            <p class="col-3">Email</p>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <div class="row">
                                                            <p class="col-3">Phone Number</p>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <div class="row">
                                                            <p class="col-3">Password</p>
                                                            <div class="col-6">
                                                                <input type="text" class="form-control">

                                                            </div>
                                                            <div class="col-3">
                                                                <button class="btn btn-success">Change Password</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <div class="row justify-content-center">
                                                            <button class="btn btn-success col-4">Update Profile</button>

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



                </div>







            </div>







        </div>








        </div>
        </div>
        </div>

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