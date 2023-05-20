<?php

require "connection.php";
session_start();
if (isset($_SESSION["u"])) {
    $user = $_SESSION["u"];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="icon" href="resouses/bacground_image/abota__1_-removebg-preview.png">

    </head>



    <!--//////////// Admin Panel/////////////// -->


    <body style="background-color: #eee;">
        <div class="container-fluid">
            <div class="row">
                <?php require "header.php"; ?>


                <div class="col-12 mt-5 ">
                    <div class="row">


                        <!-- //////// admin col-lg contral panel//////// -->


                        <div class="col-2 d-lg-block d-none  shadow-lg p-3 mb-5 bg-body ">
                            <div class="row admin-button" onclick="dashbord();">
                                <h5><i class="bi bi-speedometer2"></i> &nbsp;Dashbord</h5>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="Addteacher();">
                                <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Add Teacher</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="add_Academic_officer();">
                                <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Add Academic officer</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="ManageTeacher();">
                                <p> <i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp; Manage Teacher</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="Manage_Academic_officer();">
                                <p><i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp;Manage Academic officer</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="Manage_student();">
                                <p><i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp;Manage Student</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="results();">
                                <p><i class="bi bi-list-check m-2"></i>&nbsp;&nbsp;Check Results</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="aupdateProfile();">
                                <p><i class="bi bi-gear m-2"></i>&nbsp;&nbsp;Update Profile</p>
                                <hr>
                            </div>
                        </div>




                        <!-- //////// admin col-lg contral panel//////// -->




                        <!-- //////// admin col-md contral panel//////// -->



                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <img src="resouses/bacground_image/abota__1_-removebg-preview.png" style="width: 100px;" alt="" srcset="">

                                <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                            </div>

                            <div class="col-12  shadow-lg p-3 mb-5 bg-body ">
                                <div class="row admin-button" onclick="dashbord();">
                                    <h5><i class="bi bi-speedometer2"></i> &nbsp;Dashbord</h5>
                                </div>
                                <div>
                                    <hr>
                                </div>
                                <div class="col-12 admin-button rounded" onclick="Addteacher();">
                                    <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Add Teacher</p>
                                    <hr>
                                </div>
                                <div class="col-12 admin-button rounded" onclick="add_Academic_officer();">
                                    <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Add Academic officer</p>
                                    <hr>
                                </div>
                                <div class="col-12 admin-button rounded" onclick="ManageTeacher();">
                                    <p> <i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp; Manage Teacher</p>
                                    <hr>
                                </div>
                                <div class="col-12 admin-button rounded" onclick="Manage_Academic_officer();">
                                    <p><i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp;Manage Academic officer</p>
                                    <hr>
                                </div>
                                <div class="col-12 admin-button rounded" onclick="Manage_student();">
                                    <p><i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp;Manage Student</p>
                                    <hr>
                                </div>
                                <div class="col-12 admin-button rounded" onclick="results();">
                                    <p><i class="bi bi-list-check m-2"></i>&nbsp;&nbsp;Check Results</p>
                                    <hr>
                                </div>
                                <div class="col-12 admin-button rounded" onclick="aupdateProfile();">
                                    <p><i class="bi bi-gear m-2"></i>&nbsp;&nbsp;Update Profile</p>
                                    <hr>
                                </div>
                            </div>

                        </div>


                        <!-- //////// admin col-md contral panel//////// -->





                        <div class="col-lg-10 col-12  shadow-lg p-3 mb-5 bg-body ">

                            <div class="row" style="background-color: #ccc;">
                                <div class="col-2 d-lg-none d-block">
                                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        Menu
                                    </button>
                                </div>
                                <div class="col-lg-12 col-10">
                                    <h3>Admin</h3>
                                    <h6><?php echo $user["fname"] . " " . $user["lname"]; ?></h6>
                                </div>
                                <hr>
                            </div>

                            <!-- dashbord -->

                            <div class="row d-block" id="dashbord">
                                <div class="col-11 m-5">
                                    <div class="row justify-content-center">

                                        <!-- teacher -->

                                        <div class="col-lg-5 col-10  mx-4 mt-3" style="height: 200px; background-color: #82949a; cursor: pointer;">

                                            <div class="row justify-content-center mt-2" style="background-color: #ccc;">
                                                <div class="col-10">
                                                    <h5 class="text-center"><i class="bi bi-person-fill"></i> Teacher Deatils</h5>
                                                    <hr>
                                                </div>

                                                <?php

                                                $teache_rs = Database::search("SELECT * FROM `teacher`");
                                                $teache_num = $teache_rs->num_rows;
                                                ?>

                                            </div>

                                            <h4 class="mt-4 ">Edu.lk have : <?php echo $teache_num ?> teachers</h4>
                                            <?php

                                            ?>


                                        </div>

                                        <!-- teacher -->


                                        <!-- Academic -->

                                        <div class="col-lg-5 col-10  mx-4 mt-3" style="height: 200px; background-color: #82949a;">


                                            <div class="row justify-content-center mt-2" style="background-color: #ccc;">
                                                <div class="col-10">
                                                    <h5 class="text-center"><i class="bi bi-person-fill"></i> Academic Officer Deatils</h5>
                                                    <hr>
                                                </div>
                                            </div>
                                            <?php
                                            $acaoff_rs = Database::search("SELECT * FROM `academic_officers`");
                                            $acaoff_num = $acaoff_rs->num_rows;
                                            ?>
                                            <h4 class="mt-4 ">Edu.lk have : <?php echo $acaoff_num ?> Academic Officers</h4>
                                            <?php
                                            ?>

                                        </div>

                                        <!-- Academic -->

                                        <!-- Student -->

                                        <div class="col-lg-5 col-10  mx-4 mt-3" style="height: 200px; background-color: #82949a;">

                                            <div class="row justify-content-center mt-2" style="background-color: #ccc;">
                                                <div class="col-10">
                                                    <h5 class="text-center"><i class="bi bi-person-fill"></i> Students Deatils</h5>
                                                    <hr>
                                                </div>
                                            </div>

                                            <?php
                                            $stud_rs = Database::search("SELECT * FROM `student`");
                                            $stud_num = $stud_rs->num_rows;
                                            ?>
                                            <h4 class="mt-4 ">Edu.lk have : <?php echo $stud_num ?> Students</h4>
                                            <?php
                                            ?>

                                        </div>

                                        <!-- Student -->






                                    </div>
                                </div>
                            </div>

                            <!-- dashbord -->

                            <!-- add teacher -->


                            <div class="col-12 d-none" id="add_teacher">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">Add Teacher</h4>

                                    <div class="col-10  shadow-lg rounded" style="background-color:#ccc ;">
                                        <div class="row">
                                            <div class="col-12 mt-5">
                                                <div class="row">
                                                    <p class="col-3">*Teacher Subject</p>



                                                    <div class="col-9">
                                                        <select class="form-select" name="" id="subject">
                                                            <option value="0">--Select Subject--</option>

                                                            <?php

                                                            $subject = Database::search("SELECT * FROM `subject`");
                                                            $subject_num = $subject->num_rows;
                                                            for ($x = 0; $x < $subject_num; $x++) {
                                                                $subject_data = $subject->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo $subject_data["id"]; ?>"><?php echo $subject_data["subject_name"]; ?></option>

                                                            <?php
                                                            }

                                                            ?>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Teacher Subject</p>



                                                    <div class="col-9">
                                                        <select class="form-select" name="" id="Tclass">
                                                            <option value="0">--Select Class--</option>

                                                            <?php

                                                            $class = Database::search("SELECT * FROM `class`");
                                                            $class_num = $class->num_rows;
                                                            for ($y = 0; $y < $subject_num; $y++) {
                                                                $class_data = $class->fetch_assoc();
                                                            ?>
                                                                <option value="<?php echo $class_data["id"]; ?>">Grade : <?php echo $class_data["class_name"]; ?></option>

                                                            <?php
                                                            }

                                                            ?>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Teacher Index Number</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="email" id="index_num">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Teacher Email Address</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="text" id="email">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Teacher Password</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="text" id="password">
                                                    </div>

                                                </div>
                                                <div class="row mt-5 mb-5">
                                                    <p class="col-9">Send verifivation code and password for tihs email address</p>
                                                    <div class="col-3">
                                                        <div class="row justify-content-end ">
                                                            <button class="btn btn-success" onclick="addTeacher();">Send </button>

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- add teacher -->

                            <!-- add Academic officer -->


                            <div class="col-12 d-none" id="Academic_officer">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">Add Academic officer</h4>

                                    <div class="col-10  shadow-lg rounded" style="background-color:#ccc ;">
                                        <div class="row">
                                            <div class="col-12 mt-5">

                                                <div class="row">
                                                    <p class="col-3">*Academic officer Index Number</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="email" id="AoIndexNum">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Academic officer Email Address</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="text" id="AoEmail">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Academic officer Password</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="text" id="AoPassword">
                                                    </div>

                                                </div>
                                                <div class="row mt-5 mb-5">
                                                    <p class="col-9">Send verifivation code and password for tihs email address</p>
                                                    <div class="col-3">
                                                        <div class="row justify-content-end ">
                                                            <button class="btn btn-success" onclick="acedemicOfisserRejistation();">Send </button>

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- add Academic officer -->

                            <!-- Manage Teacher-->


                            <div class="col-12 d-none" id="Manage_Teacher">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">Manage Teacher</h4>

                                    <!-- teacher search -->

                                    <div class="col-12" style="background-color: #82949a;">
                                        <div class="row mt-4 mb-4">
                                            <div class="col-lg-2 col-3">
                                                <input type="text" class=" form-control" placeholder="Index Number">
                                            </div>
                                            <div class="col-lg-5 col-4">
                                                <input type="text" class="form-control" placeholder="Teacher's Name">
                                            </div>
                                            <div class="col-3">
                                                <select name="" id="" class="form-select">
                                                    <option value="">--Select subject--</option>
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button class="d-grid btn btn-success">Search</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- teacher search -->



                                    <div class="col-12 mt-2 shadow-lg rounded overflow-scroll" style="background-color:#ccc ; height: 300px;">
                                        <div class="row">


                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-1" style="background-color: #eee;">
                                                        <p>Index Number</p>
                                                    </div>
                                                    <div class="col-1" style="background-color: #82949a;">
                                                        <p>Profile Image</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Name</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #82949a;">
                                                        <p>Email</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Phone Number</p>
                                                    </div>
                                                    <div class="col-1" style="background-color: #82949a;">
                                                        <p>Calss</p>
                                                    </div>

                                                    <div class="col-1" style="background-color: #eee;">
                                                        <p>Subject</p>
                                                    </div>


                                                    <div class="col-1" style="background-color: #82949a;">

                                                    </div>
                                                    <div class="col-1" style="background-color: #eee;">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-4">

                                                <?php

                                                for ($c = 0; $c < $teache_num; $c++) {
                                                    $teache_data = $teache_rs->fetch_assoc();

                                                ?>
                                                    <div class="row">
                                                        <div class="col-1" style="background-color: #eee;">
                                                            <p><?php echo $teache_data["id"]; ?></p>
                                                        </div>
                                                        <div class="col-1" style="background-color: #82949a;">
                                                            <h1><i class="bi bi-person-circle"></i></h1>

                                                        </div>
                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p><?php echo $teache_data["fname"] . " " . $teache_data["lname"]; ?></p>
                                                        </div>
                                                        <div class="col-2" style="background-color: #82949a;">
                                                            <p><?php echo $teache_data["email"]; ?></p>
                                                        </div>
                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p><?php echo $teache_data["mobile"]; ?></p>
                                                        </div>




                                                        <div class="col-1" style="background-color: #82949a;">
                                                            <select name="" id="TuClass" class="form-select mt-2">
                                                                <?php


                                                                $t_class_rs = Database::search("SELECT * FROM `class` WHERE `id`='" . $teache_data["class_id"] . "'");
                                                                $t_class_data = $t_class_rs->fetch_assoc();

                                                                ?>
                                                                <option value="" selected>Grade : <?php echo $t_class_data["class_name"]; ?></option>
                                                                <?php
                                                                $class_rs = Database::search("SELECT * FROM `class`");
                                                                $class_num = $class_rs->num_rows;

                                                                for ($v = 0; $v < $class_num; $v++) {
                                                                    $class_data = $class_rs->fetch_assoc();

                                                                ?>

                                                                    <option value="<?php echo $class_data["id"]; ?>">Grade :<?php echo $class_data["class_name"]; ?></option>


                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                        <?php



                                                        ?>
                                                        <div class="col-1" style="background-color: #eee;">
                                                            <select name="" id="TuSubject" class="form-select mt-2">
                                                                <?php


                                                                $t_subject_rs = Database::search("SELECT * FROM `subject` WHERE `id`='" . $teache_data["subject_id"] . "'");
                                                                $t_subject_data = $t_subject_rs->fetch_assoc();

                                                                ?>
                                                                <option value="" selected><?php echo $t_subject_data["subject_name"]; ?></option>
                                                                <?php
                                                                $subject_rs = Database::search("SELECT * FROM `subject`");
                                                                $subject_num =   $subject_rs->num_rows;

                                                                for ($v = 0; $v < $subject_num; $v++) {
                                                                    $subject_data =  $subject_rs->fetch_assoc();

                                                                ?>

                                                                    <option value="<?php echo $subject_data["id"]; ?>"><?php echo $subject_data["subject_name"]; ?></option>


                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>


                                                        <div class="col-1 " style="background-color: #82949a;">
                                                            <button class="mt-2 btn btn-success d-grid" onclick="updateTeacherSubAndClass('<?php echo $teache_data['id']; ?>');">Save</button>
                                                        </div>
                                                        <div class="col-1 " style="background-color: #eee;">
                                                            <?php

                                                            $teache_stats = $teache_data["statas_id"];
                                                            if ($teache_stats == '4') {

                                                            ?>
                                                                <button id="tbANDu" class="btn btn-danger mt-2 d-grid" onclick="teacherBlockAndUnblock('<?php echo $teache_data['id']; ?>');">Bolck</button>

                                                            <?php

                                                            } else if ($teache_stats == '2') {
                                                            ?>
                                                                <button id="tbANDu" class="btn btn-success mt-2 d-grid" onclick="teacherBlockAndUnblock('<?php echo $teache_data['id']; ?>');">Unblock</button>

                                                            <?php
                                                            } else {
                                                            ?>
                                                                <button id="tbANDu" class="btn btn-success mt-2 d-grid" onclick="teacherBlockAndUnblock('<?php echo $teache_data['id']; ?>');">Unblock / Bolck</button>

                                                            <?php
                                                            }

                                                            ?>
                                                        </div>
                                                    </div>

                                                <?php
                                                }

                                                ?>




                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Manage Teacher -->


                            <!-- Manage Academic officer-->


                            <div class="col-12 d-none" id="Manage_Academic_officer">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4"> Manage Academic officer</h4>

                                    <!-- teacher search -->

                                    <div class="col-12" style="background-color: #82949a;">
                                        <div class="row mt-4 mb-4">
                                            <div class="col-lg-2 col-3">
                                                <input type="text" class=" form-control" placeholder="Index Number">
                                            </div>
                                            <div class="col-lg-8 col-4">
                                                <input type="text" class="form-control" placeholder="Academic officer's Name">
                                            </div>

                                            <div class="col-2">
                                                <button class="d-grid btn btn-success">Search</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- teacher search -->


                                    <!-- Manage Academic officer -->
                                    <div class="col-12 mt-2 shadow-lg rounded overflow-scroll" style="background-color:#ccc ; height: 300px;">
                                        <div class="row">


                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Index Number</p>
                                                    </div>
                                                    <div class="col-1" style="background-color: #82949a;">
                                                        <p>Profile Image</p>
                                                    </div>
                                                    <div class="col-3" style="background-color: #eee;">
                                                        <p>Name</p>
                                                    </div>
                                                    <div class="col-3" style="background-color: #82949a;">
                                                        <p>Email</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Phone Number</p>
                                                    </div>



                                                    <div class="col-1" style="background-color: #82949a;">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-4 mb-4">
                                                <div class="row">
                                                    <?php

                                                    for ($z = 0; $z < $acaoff_num; $z++) {
                                                        $acaoff_data = $acaoff_rs->fetch_assoc();
                                                    ?>
                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p><?php echo $acaoff_data["id"]; ?></p>
                                                        </div>
                                                        <div class="col-1" style="background-color: #82949a;">
                                                            <h1><i class="bi bi-person-circle"></i></h1>
                                                        </div>
                                                        <div class="col-3" style="background-color: #eee;">
                                                            <p><?php echo $acaoff_data["fname"] . " " . $acaoff_data["lname"]; ?></p>
                                                        </div>
                                                        <div class="col-3" style="background-color: #82949a;">
                                                            <p><?php echo $acaoff_data["email"]; ?></p>
                                                        </div>
                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p><?php echo $acaoff_data["mobile"]; ?></p>
                                                        </div>

                                                        <div class="col-1 " style="background-color: #82949a;">

                                                            <?php

                                                            $aco_states = $acaoff_data["statas_id"];

                                                            if ($aco_states == '1') {
                                                            ?>
                                                                <button class="btn btn-secondary mt-2 d-grid" id="aostatebtn" onclick="aostateChange('<?php echo $acaoff_data['id']; ?>');">Send Verification</button>

                                                            <?php
                                                            }
                                                            if ($aco_states == '2') {
                                                            ?>
                                                                <button class="btn btn-dark mt-2 d-grid" id="aostatebtn" onclick="aostateChange('<?php echo $acaoff_data['id']; ?>');">Rejisted</button>

                                                            <?php
                                                            }
                                                            if ($aco_states == '3') {
                                                            ?>
                                                                <button class="btn btn-success mt-2 d-grid" id="aostatebtn" onclick="aostateChange('<?php echo $acaoff_data['id']; ?>');">Verified</button>

                                                            <?php
                                                            }
                                                            if ($aco_states == '4') {
                                                            ?>
                                                                <button class="btn btn-danger mt-2 d-grid" id="aostatebtn" onclick="aostateChange('<?php echo $acaoff_data['id']; ?>');">Block</button>

                                                            <?php
                                                            }
                                                            ?>

                                                        </div>
                                                        <hr>

                                                    <?php
                                                    }


                                                    ?>

                                                </div>



                                            </div>
                                            <hr>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Manage Academic officer -->
                            <!-- Manage Student-->


                            <div class="col-12 d-none" id="Manage_student">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4"> Manage Student</h4>

                                    <!-- student search -->

                                    <div class="col-12" style="background-color: #82949a;">
                                        <div class="row mt-4 mb-4">
                                            <div class="col-lg-2 col-3">
                                                <input type="text" class=" form-control" placeholder="Index Number">
                                            </div>
                                            <div class="col-lg-8 col-4">
                                                <input type="text" class="form-control" placeholder="Student's Name">
                                            </div>

                                            <div class="col-2">
                                                <button class="d-grid btn btn-success">Search</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--student search -->



                                    <div class="col-12 mt-2 shadow-lg rounded overflow-scroll" style="background-color:#ccc ; height: 300px;">
                                        <div class="row">


                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-1" style="background-color: #eee;">
                                                        <p>Index Number</p>
                                                    </div>
                                                    <div class="col-1" style="background-color: #82949a;">
                                                        <p>Profile Image</p>
                                                    </div>
                                                    <div class="col-3" style="background-color: #eee;">
                                                        <p>Name</p>
                                                    </div>
                                                    <div class="col-3" style="background-color: #82949a;">
                                                        <p>Email</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Phone Number</p>
                                                    </div>



                                                    <div class="col-2" style="background-color: #82949a;">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-4">

                                                <?php
                                                $student_rs2 = Database::search("SELECT * FROM `student`");
                                                $student_num2 = $student_rs2->num_rows;

                                                for ($b = 0; $b < $student_num2; $b++) {
                                                    $student_data2 = $student_rs2->fetch_assoc();
                                                ?>
                                                    <div class="row">
                                                        <div class="col-1" style="background-color: #eee;">
                                                            <p><?php echo $student_data2["id"]; ?></p>
                                                        </div>
                                                        <div class="col-1" style="background-color: #82949a;">
                                                            <h1><i class="bi bi-person-circle"></i></h1>
                                                        </div>
                                                        <div class="col-3" style="background-color: #eee;">
                                                            <p><?php echo $student_data2["fname"] . " " . $student_data2["lname"]; ?></p>
                                                        </div>
                                                        <div class="col-3" style="background-color: #82949a;">
                                                            <p><?php echo $student_data2["email"]; ?></p>
                                                        </div>
                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p><?php echo $student_data2["mobile"]; ?></p>
                                                        </div>

                                                        <div class="col-2 " style="background-color: #82949a;">
                                                            <button class="btn btn-success mt-2 d-grid">View details</button>
                                                        </div>
                                                    </div>
                                                <?php
                                                }

                                                ?>




                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Manage Student -->

                            <!-- Results-->


                            <div class="col-12 d-none" id="results">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4"> Student Results</h4>

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
                                                    <div class="col-1" style="background-color: #eee;">
                                                        <p>Student Index Number</p>
                                                    </div>
                                                    <div class="col-3" style="background-color: #82949a;">
                                                        <p>Student Name</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Class</p>
                                                    </div>

                                                    <div class="col-2" style="background-color: #82949a;">
                                                        <p>Assignmnt ID</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Mark</p>
                                                    </div>



                                                    <div class="col-2" style="background-color: #82949a;">

                                                    </div>
                                                </div>
                                            </div>

                                            <?php

                                            $student_rs1 = Database::search("SELECT * FROM `student`");
                                            $student_num1 = $student_rs1->num_rows;

                                            for ($s = 0; $s < $student_num1; $s++) {
                                                $student_data = $stud_rs->fetch_assoc();

                                            ?>
                                                <div class="col-12 mt-4">
                                                    <div class="row">
                                                        <div class="col-1" style="background-color: #eee;">
                                                            <p><?php echo $student_data["id"]; ?></p>
                                                        </div>
                                                        <div class="col-3" style="background-color: #82949a;">
                                                            <p><?php echo $student_data["fname"] . " " . $student_data["lname"]; ?></p>
                                                        </div>
                                                        <?php
                                                        $class_rs = Database::search("SELECT * FROM `class` WHERE `id`='" . $student_data["class_id"] . "'");
                                                        $class_data = $class_rs->fetch_assoc();
                                                        ?>
                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p>Grade : <?php echo $class_data["class_name"]; ?></p>
                                                        </div>
                                                        <?php
                                                        $mark_recode_rs = Database::search("SELECT * FROM `mark_recode` WHERE `student_id`='" . $student_data["id"] . "'");
                                                        $mark_recode_data = $mark_recode_rs->fetch_assoc();
                                                        ?>
                                                        <div class="col-2" style="background-color: #82949a;">
                                                            <p><?php echo $mark_recode_data["assignment_id"]; ?></p>
                                                        </div>

                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p><?php echo $mark_recode_data["mark"]; ?></p>
                                                        </div>

                                                        <div class="col-2 " style="background-color: #82949a;">
                                                            <button class="btn btn-success mt-2 d-grid">View details</button>
                                                        </div>
                                                    </div>


                                                </div>

                                            <?php
                                            }

                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Results -->


                            <!-- Update Profile-->


                            <div class="col-12 d-none" id="updateProfile">
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