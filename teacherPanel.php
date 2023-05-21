<?php
require "connection.php";
session_start();

///********************************
//************************Teacher panel */ */

if (isset($_SESSION["tu"])) {
    $user = $_SESSION["tu"];
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EDU.LK | Teacher Panel</title>
        <link rel="icon" href="resouses/bacground_image/abota__1_-removebg-preview.png">

    </head>

    <body style="background-color: #eee;">
        <div class="container-fluid">
            <div class="row">
                <?php require "header.php"; ?>

                <div class="col-12 mt-5 ">
                    <div class="row">

                        <div class="col-2 d-lg-block d-none  shadow-lg p-3 mb-5 bg-body ">
                            <div class="row admin-button" onclick="dashbord();">
                                <h5><i class="bi bi-speedometer2"></i> &nbsp;Dashbord</h5>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="Addteacher();">
                                <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp; Add lesson notes</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="add_Academic_officer();">
                                <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp; Add new assignments</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="ManageTeacher();">
                                <p> <i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp; View submitted answer sheets</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="Manage_Academic_officer();">
                                <p><i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp;Add assignment marks</p>
                                <hr>
                            </div>

                            <div class="col-12 admin-button rounded" onclick="tupdateProfile();">
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
                                    <h3>Teacher</h3>
                                    <h6><?php echo $user["fname"] . " " . $user["lname"]; ?></h6>
                                    <label for=""><?php echo $user["id"]; ?></label>
                                </div>
                                <hr>
                            </div>


                            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                <div class="offcanvas-header">
                                    <img src="resouses/bacground_image/abota__1_-removebg-preview.png" style="width: 100px;" alt="">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="col-12 
                              shadow-lg p-3 mb-5 bg-body ">
                                        <div class="row admin-button" onclick="dashbord();">
                                            <h5><i class="bi bi-speedometer2"></i> &nbsp;Dashbord</h5>
                                        </div>
                                        <div>
                                            <hr>
                                        </div>
                                        <div class="col-12 admin-button rounded" onclick="Addteacher();">
                                            <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp; Add lesson notes</p>
                                            <hr>
                                        </div>
                                        <div class="col-12 admin-button rounded" onclick="add_Academic_officer();">
                                            <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp; Add new assignments</p>
                                            <hr>
                                        </div>
                                        <div class="col-12 admin-button rounded" onclick="ManageTeacher();">
                                            <p> <i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp; View submitted answer sheets</p>
                                            <hr>
                                        </div>
                                        <div class="col-12 admin-button rounded" onclick="Manage_Academic_officer();">
                                            <p><i class="bi bi-sliders2-vertical m-2"></i>&nbsp;&nbsp;Add assignment marks</p>
                                            <hr>
                                        </div>

                                        <div class="col-12 admin-button rounded" onclick="tupdateProfile();">
                                            <p><i class="bi bi-gear m-2"></i>&nbsp;&nbsp;Update Profile</p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- dashbord -->

                            <div class="row d-block" id="dashbord">
                                <div class="col-11 m-5">
                                    <div class="row justify-content-center">

                                        <!-- teacher -->

                                        <div class="col-lg-10 col-10  mx-4 mt-3" style="height: 200px; background-color: #82949a;">

                                            <div class="row justify-content-center mt-2" style="background-color: #ccc;">
                                                <div class="col-10">
                                                    <h5 class="text-center"><i class="bi bi-person-fill"></i> My Class Student Details</h5>
                                                    <hr>
                                                </div>

                                            </div>
                                            <?php

                                            $student_rs = Database::search("SELECT * FROM `student` WHERE `class_id`='" . $user["class_id"] . "'");
                                            $student_num = $student_rs->num_rows;

                                            ?>
                                            <h1>student : <?php echo $student_num ?></h1>
                                            <?php
                                            // for($z=0; $z<$student_num; $Z++){

                                            // }

                                            ?>
                                            <div class="row justify-content-center"> 
                                                <div class="col-3  d-grid">
                                                    <button class="btn btn-success" >View</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- teacher -->






                                    </div>
                                </div>
                            </div>

                            <!-- dashbord -->

                            <!-- Add lesson notes -->


                            <div class="col-12 d-none" id="add_teacher">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">Add lesson notes</h4>

                                    <div class="col-10  shadow-lg rounded" style="background-color:#ccc ;">
                                        <div class="row">
                                            <div class="col-12 mt-5">
                                                <div class="row">
                                                    <p class="col-3">* Subject</p>



                                                    <div class="col-9">
                                                        <?php

                                                        $subject_rs = Database::search("SELECT * FROM `subject` WHERE `id`='" . $user["subject_id"] . "'");
                                                        $subject_data = $subject_rs->fetch_assoc();

                                                        ?>
                                                        <input class="col-8 form-control" type="text" id="lnsubject" value="<?php echo $subject_data["subject_name"]; ?>" disabled>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Class</p>



                                                    <div class="col-9">
                                                        <?php

                                                        $class_rs = Database::search("SELECT * FROM `class` WHERE `id`='" . $user["class_id"] . "'");
                                                        $class_data = $class_rs->fetch_assoc();

                                                        ?>
                                                        <input class="col-8 form-control" type="text" id="lnclass" value="Grade : <?php echo $class_data["class_name"]; ?>" disabled>
                                                    </div>


                                                </div>

                                                <div class="row">
                                                    <p class="col-3">*Lesson Name</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="text" id="lesson_name">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Lesson Note (PDF)</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="file" id="pdf">
                                                    </div>

                                                </div>

                                                <div class="row mt-5 mb-5">
                                                    <p class="col-9">upload pdf file</p>
                                                    <div class="col-3">
                                                        <div class="row justify-content-end ">
                                                            <button class="btn btn-success" onclick="add_lesson_note('<?php echo $user['id']; ?>');">Upload</button>

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Add lesson notes -->

                            <!-- Add new assignments -->


                            <div class="col-12 d-none" id="Academic_officer">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">Add new assignments</h4>

                                    <div class="col-10  shadow-lg rounded" style="background-color:#ccc ;">
                                        <div class="row">
                                            <div class="col-12 mt-5">
                                                <div class="row">
                                                    <p class="col-3">* Subject</p>



                                                    <div class="col-9">
                                                        <?php

                                                        $subject_rs = Database::search("SELECT * FROM `subject` WHERE `id`='" . $user["subject_id"] . "'");
                                                        $subject_data = $subject_rs->fetch_assoc();

                                                        ?>
                                                        <input class="col-8 form-control" type="text" id="subject" value="<?php echo $subject_data["subject_name"]; ?>" disabled>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Class</p>



                                                    <div class="col-9">
                                                        <?php

                                                        $class_rs = Database::search("SELECT * FROM `class` WHERE `id`='" . $user["class_id"] . "'");
                                                        $class_data = $class_rs->fetch_assoc();

                                                        ?>
                                                        <input class="col-8 form-control" type="text" id="subject" value="Grade : <?php echo $class_data["class_name"]; ?>" disabled>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Assignment Id</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="text" id="Assignment_id">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Assignment Name</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="text" id="Assignment_name">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*Assignment (PDF)</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="file" id="Assignment_file">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <p class="col-3">*End Date</p>
                                                    <div class="col-9">
                                                        <input class="col-8 form-control" type="date" id="end_date">
                                                    </div>

                                                </div>
                                                <div class="row mt-5 mb-5">
                                                    <p class="col-9">Upload Assignment (PDF)</p>
                                                    <div class="col-3">
                                                        <div class="row justify-content-end ">
                                                            <button class="btn btn-success" onclick="addAssignment('<?php echo $user['id']; ?>');">Upload Assignment</button>

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- aAdd new assignments -->

                            <!-- View submitted answer sheets-->


                            <div class="col-12 d-none" id="Manage_Teacher">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">View submitted answer sheets</h4>

                                    <!-- teacher search -->

                                    <div class="col-12" style="background-color: #82949a;">
                                        <div class="row mt-4 mb-4">

                                            <div class="col-lg-4 col-3">
                                                <input type="text" class="form-control" placeholder="Student's Name">
                                            </div>
                                            <div class="col-3">
                                                <select name="" id="" class="form-select">
                                                    <option value="">--Assignment Name--</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <select name="" id="" class="form-select">
                                                    <option value="">--Assignment Id--</option>
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
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Assignment Id</p>
                                                    </div>
                                                    <div class="col-3" style="background-color: #82949a;">
                                                        <p>Assignment Name</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Student Id</p>
                                                    </div>
                                                    <div class="col-3" style="background-color: #82949a;">
                                                        <p>Student Name</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-4">

                                                <?php
                                                $assignment_rs = Database::search("SELECT * FROM `assignment` WHERE `teacher_id`='" . $user["id"] . "'");
                                                $assignment_data = $assignment_rs->fetch_assoc();

                                                $submit_as_rs = Database::search("SELECT * FROM `student_has_assignment` WHERE `assignment_id`='" . $assignment_data["assignment_id"] . "'");
                                                $submit_as_num = $submit_as_rs->num_rows;

                                                for ($x = 0; $x < $submit_as_num; $x++) {
                                                    $submit_as_data = $submit_as_rs->fetch_assoc();

                                                ?>
                                                    <div class="row">
                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p><?php echo $submit_as_data["assignment_id"]; ?></p>
                                                        </div>

                                                        <?php

                                                        $assignment_rs1 = Database::search("SELECT * FROM `assignment` WHERE `assignment_id`='" . $submit_as_data["assignment_id"] . "'");
                                                        $assignment_data1 = $assignment_rs1->fetch_assoc();

                                                        ?>

                                                        <div class="col-3" style="background-color: #82949a;">
                                                            <p><?php echo $assignment_data1["assignment_name"]; ?></p>
                                                        </div>
                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p><?php echo $submit_as_data["student_id"]; ?></p>

                                                        </div>

                                                        <?php

                                                        $student_rs = Database::search("SELECT * FROM `student` WHERE `id`='" . $submit_as_data["student_id"] . "'");
                                                        $student_data = $student_rs->fetch_assoc();

                                                        ?>

                                                        <div class="col-3" style="background-color: #82949a;">
                                                            <p><?php echo $student_data["fname"] . " " . $student_data["lname"]; ?></p>
                                                        </div>
                                                        <div class="col-2" style="background-color: #eee;">

                                                            <a href="<?php echo $submit_as_data["path"]; ?>" class="btn btn-success">View Sheet</a>
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

                            <!-- View submitted answer sheets -->


                            <!-- Add assignment marks-->


                            <div class="col-12 d-none" id="Manage_Academic_officer">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">Add assignment marks</h4>

                                    <!-- teacher search -->

                                    <div class="col-12" style="background-color: #82949a;">
                                        <div class="row mt-4 mb-4">
                                            <div class="col-lg-2 col-3">
                                                <input type="text" class=" form-control" placeholder="Student Index Number">
                                            </div>
                                            <div class="col-lg-8 col-4">
                                                <input type="text" class="form-control" placeholder="student's Name">
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
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Index Number</p>
                                                    </div>
                                                    <div class="col-4" style="background-color: #82949a;">
                                                        <p>Student Name</p>
                                                    </div>
                                                    <div class="col-2" style="background-color: #eee;">
                                                        <p>Assigment Id</p>
                                                    </div>

                                                    <div class="col-3" style="background-color: #82949a;">
                                                        <p>Mark</p>
                                                    </div>



                                                    <div class="col-1" style="background-color: #eee;">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-4">
                                                <div class="row">

                                                    <?php

                                                    $student_rs = Database::search("SELECT * FROM `student` WHERE `class_id`='" . $user["class_id"] . "'");
                                                    $student_num = $student_rs->num_rows;

                                                    for ($y = 0; $y < $student_num; $y++) {
                                                        $student_data = $student_rs->fetch_assoc();

                                                    ?>

                                                        <div class="col-2" style="background-color: #eee;">
                                                            <p></p>
                                                            <input type="text" value="<?php echo $student_data["id"]; ?>" disabled class="form-control" id="sid">
                                                        </div>
                                                        <div class="col-4" style="background-color: #82949a;">
                                                            <p><?php echo $student_data["fname"] . " " . $student_data["lname"]; ?></p>
                                                        </div>

                                                        <?php



                                                        ?>

                                                        <div class="col-2" style="background-color: #eee;">

                                                            <input class="form-control" type="text" value="<?php echo $submit_as_data["assignment_id"]; ?>" disabled id="assigmentId">
                                                        </div>

                                                        <?php
                                                        $mark_rs = Database::search("SELECT * FROM `mark_recode` WHERE `student_id`='" . $student_data["id"] . "' AND `assignment_id`='" . $submit_as_data["assignment_id"] . "' ");
                                                        $mark_data = $mark_rs->fetch_assoc();
                                                        ?>

                                                        <div class="col-3" style="background-color: #82949a;">
                                                            <input type="text" class="form-control mt-1" id="mark" value="<?php echo $mark_data["mark"]; ?>">
                                                        </div>




                                                        <div class="col-1 " style="background-color: #82949a;">


                                                            <button class="btn btn-success mt-2 d-grid" id="btn" onclick="uploadMark();">Upload</button>
                                                        </div>

                                                    <?php
                                                    }


                                                    ?>


                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Add assignment marks -->




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
    <h1>pleace log in 1st</h1>
<?php
}
?>