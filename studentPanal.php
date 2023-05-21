<?php


// student panel***********


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
        <title>Student Panel</title>
        <link rel="icon" href="resouses/bacground_image/abota__1_-removebg-preview.png">

    </head>

    <body style="background-color: #eee;">
        <div class="container-fluid">
            <div class="row">
                <?php require "header.php"; ?>

                <div class="col-12 mt-5 ">
                    <div class="row">

                        <div class="col-2 d-lg-block d-none  shadow-lg p-3 mb-5 bg-body ">
                            <div class="row admin-button" onclick="sdashbord();">
                                <h5><i class="bi bi-speedometer2"></i> &nbsp;Dashbord</h5>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick="sassignment();">
                                <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Assignment</p>
                                <hr>
                            </div>
                            <div class="col-12 admin-button rounded" onclick=" slessonnote();">
                                <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Lesson Note</p>
                                <hr>
                            </div>

                            <div class="col-12 admin-button rounded" onclick="stupdateProfile();">
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
                                    <h3>Student</h3>
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
                                        <div class="row admin-button" onclick="sdashbord();">
                                            <h5><i class="bi bi-speedometer2"></i> &nbsp;Dashbord</h5>
                                        </div>
                                        <div>
                                            <hr>
                                        </div>
                                        <div class="col-12 admin-button rounded" onclick="sassignment();">
                                            <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Assignment</p>
                                            <hr>
                                        </div>
                                        <div class="col-12 admin-button rounded" onclick=" slessonnote();">
                                            <p><i class="bi bi-person-add m-2"></i>&nbsp;&nbsp;Lesson Note</p>
                                            <hr>
                                        </div>

                                        <div class="col-12 admin-button rounded" onclick="stupdateProfile();">
                                            <p><i class="bi bi-gear m-2"></i>&nbsp;&nbsp;Update Profile</p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- dashbord -->

                            <div class="row d-block" id="sdashbord">
                                <div class="col-11 m-5">
                                    <div class="row justify-content-center">

                                        <!-- Asigment -->

                                        <div class="col-lg-5 col-10  mx-4 mt-3" style="height: 200px; background-color: #82949a;">

                                            <div class="row justify-content-center mt-2" style="background-color: #ccc;">
                                                <div class="col-10">
                                                    <h5 class="text-center"><i class="bi bi-person-fill"></i> Assigment Deatils</h5>
                                                    <hr>
                                                </div>
                                            </div>
                                            <?php

                                            $assigment_rs1 = Database::search("SELECT * FROM `assignment` WHERE `class_id`='" . $user["class_id"] . "'");
                                            $assigment_num1 = $assigment_rs1->num_rows;

                                            ?>
                                            <h1>Lesson Note : <?php echo $assigment_num1 ?></h1>

                                            <div class="row justify-content-center">
                                                <div class="col-3 d-grid">
                                                    <button class="btn btn-success" onclick=" slessonnote();">View</button>
                                                </div>
                                            </div>

                                            <?php

                                            ?>

                                        </div>

                                        <!-- Asigment -->


                                        <!-- Lesson-->

                                        <div class="col-lg-5 col-10  mx-4 mt-3" style="height: 200px; background-color: #82949a;">


                                            <div class="row justify-content-center mt-2" style="background-color: #ccc;">
                                                <div class="col-10">
                                                    <h5 class="text-center"><i class="bi bi-person-fill"></i>Lesson Deatils</h5>
                                                    <hr>
                                                </div>


                                            </div>

                                            <?php

                                            $lesson_note_rs1 = Database::search("SELECT * FROM `lesson_note` WHERE `class_id`='" . $user["class_id"] . "'");
                                            $lesson_note_num1 = $lesson_note_rs1->num_rows;

                                            ?>
                                            <h1>Assignment : <?php echo $lesson_note_num1 ?></h1>

                                            <div class="row justify-content-center">
                                                <div class="col-3 d-grid">
                                                    <button class="btn btn-success" onclick="sassignment();">View</button>
                                                </div>
                                            </div>

                                            <?php

                                            ?>


                                        </div>

                                        <!-- Lesson -->





                                    </div>
                                </div>
                            </div>

                            <!-- dashbord -->

                            <!-- Assignment And Results -->


                            <div class="col-12 d-none" id="sassignment">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">Assignment And Results</h4>

                                    <div class="col-12  shadow-lg rounded" style="background-color:#ccc ;">
                                        <div class="row">
                                            <div class="col-12 mt-5">
                                                <div class="row">




                                                    <div class="col-12">

                                                        <?php

                                                        $subject = Database::search("SELECT * FROM `subject`");
                                                        $subject_num = $subject->num_rows;
                                                        for ($x = 0; $x < $subject_num; $x++) {
                                                            $subject_data = $subject->fetch_assoc();
                                                        ?>
                                                            <div class="row">
                                                                <div class="col-12 mt-2 rounded shadow-lg " style="background-color: #4B77BE; cursor: pointer;">
                                                                    <h4 class="" style="color: #eee;"><?php echo $subject_data["subject_name"]; ?></h4>
                                                                </div>
                                                            </div>
                                                            <div class="row" id="view">
                                                                <div class="col-12 bg-secondary overflow-scroll" style="background-color: red; max-height: 300px;">

                                                                    <div class="row">
                                                                        <?php

                                                                        $assignment_rs = Database::search("SELECT * FROM `assignment` WHERE `subject_id`='" . $subject_data["id"] . "' AND `class_id`='" . $user["class_id"] . "' ");
                                                                        $assignment_num = $assignment_rs->num_rows;

                                                                        for ($z = 0; $z < $assignment_num; $z++) {
                                                                            $assignment_data = $assignment_rs->fetch_assoc();

                                                                        ?>

                                                                            <div class="col-12">
                                                                                <div class=" mt-2 row" role="alert">
                                                                                    <div class="col-12">
                                                                                        <h6 style="color: white;"><?php echo $assignment_data["assignment_name"]; ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="row">
                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6>Assignment ID</h6>
                                                                                            </div>
                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6>Assignment Name</h6>
                                                                                            </div>
                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6>Start Date</h6>
                                                                                            </div>
                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6>End Date</h6>
                                                                                            </div>
                                                                                            <div class="col-1 border-end" style="background-color: #ccc;">
                                                                                                <h6>Download</h6>

                                                                                            </div>
                                                                                            <div class="col-1 border-end" style="background-color: #ccc;">
                                                                                                <h6>Upload</h6>

                                                                                            </div>
                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6>Mark</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row mt-2">
                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6 id="aid"><?php echo $assignment_data["assignment_id"]; ?></h6>
                                                                                            </div>
                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6><?php echo $assignment_data["assignment_name"]; ?></h6>
                                                                                            </div>
                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6><?php echo $assignment_data["start_date"]; ?></h6>
                                                                                            </div>
                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6><?php echo $assignment_data["end_date"]; ?></h6>
                                                                                            </div>
                                                                                            <div class="col-1 border-end" style="background-color: #ccc;">
                                                                                                <div class="row justify-content-center">
                                                                                                    <!-- <button class="btn btn-success" style="font-size: 12px;">Download</button> -->
                                                                                                    <a href="<?php echo $assignment_data["assignment_path"] ?>" download="<?php echo $assignment_data["assignment_name"]; ?>" class="btn btn-success" style="font-size: 12px;">Download</a>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-1 border-end" style="background-color: #ccc;">
                                                                                                <div class="row justify-content-center">
                                                                                                    <button class="btn btn-warning" id="uploadbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="font-size: 12px;">Upload</button>

                                                                                                </div>

                                                                                            </div>

                                                                                            <!-- upload model -->
                                                                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                                                <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Assignment Upload</h1>
                                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <h6> Assignment Name : <?php echo $assignment_data["assignment_name"]; ?></h6>
                                                                                                            <h6> Assignment ID : <?php echo $assignment_data["assignment_id"]; ?></h6>
                                                                                                            <h6>Student Name : <?php echo $user["fname"] . " " . $user["lname"]; ?></h6>
                                                                                                            <h6>Student ID : <?php echo  $user["id"]; ?></h6>

                                                                                                            <input type="file" class="col-12 form-control" id="assigmentPdf">

                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                                            <button type="button" class="btn btn-primary" onclick="uploadAssigment('<?php echo $assignment_data['assignment_id']; ?>')">Upload</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- upload model -->

                                                                                            <div class="col-2 border-end" style="background-color: #ccc;">
                                                                                                <h6>Mark</h6>
                                                                                            </div>
                                                                                            <hr>
                                                                                        </div>



                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                        }

                                                                        ?>

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
                                    </div>
                                </div>
                            </div>


                            <!-- Assignment And Results -->

                            <!-- Lesson Note -->


                            <div class="col-12 d-none" id="slessonnote">
                                <div class="row justify-content-center">
                                    <h4 class="text-center mt-4">Lesson Note</h4>

                                    <div class="col-12  shadow-lg rounded" style="background-color:#ccc ;">
                                        <div class="row">
                                            <div class="col-12 mt-5">

                                                <div class="row">




                                                    <div class="col-12">

                                                        <?php

                                                        $subject = Database::search("SELECT * FROM `subject`");
                                                        $subject_num = $subject->num_rows;
                                                        for ($x = 0; $x < $subject_num; $x++) {
                                                            $subject_data = $subject->fetch_assoc();
                                                        ?>
                                                            <div class="row">
                                                                <div class="col-12 mt-2 rounded shadow-lg " style="background-color: #4B77BE; cursor: pointer;">
                                                                    <h4 class="" style="color: #eee;"><?php echo $subject_data["subject_name"]; ?></h4>
                                                                </div>
                                                            </div>
                                                            <div class="row" id="view">
                                                                <div class="col-12 bg-secondary overflow-scroll" style="background-color: red; max-height: 200px;">

                                                                    <div class="row">
                                                                        <div class="col-12">

                                                                            <?php

                                                                            $lesson_note_rs = Database::search("SELECT * FROM `lesson_note` WHERE `subject_id`='" . $subject_data["id"] . "'");
                                                                            $lesson_note_num = $lesson_note_rs->num_rows;
                                                                            for ($y = 0; $y < $lesson_note_num; $y++) {
                                                                                $lesson_note_data = $lesson_note_rs->fetch_assoc();
                                                                            ?>

                                                                                <div class="alert alert-warning  mt-2 row" role="alert">
                                                                                    <div class="col-12">
                                                                                        <h6><?php echo $lesson_note_data["lesson_name"]; ?></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="row">
                                                                                            <div class="col-3 border-end" style="background-color: #ccc;">
                                                                                                <h6>Lesson No</h6>
                                                                                            </div>
                                                                                            <div class="col-3 border-end" style="background-color: #ccc;">
                                                                                                <h6>Lesson Name</h6>
                                                                                            </div>

                                                                                            <div class="col-3 border-end" style="background-color: #ccc;">
                                                                                                <h6>Download</h6>

                                                                                            </div>
                                                                                            <div class="col-3 border-end" style="background-color: #ccc;">
                                                                                                <h6>View</h6>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row mt-2">
                                                                                            <div class="col-3 border-end" style="background-color: #ccc;">
                                                                                                <h6><?php echo $lesson_note_data["lesson_id"]; ?></h6>
                                                                                            </div>
                                                                                            <div class="col-3 border-end" style="background-color: #ccc;">
                                                                                                <h6><?php echo $lesson_note_data["lesson_name"]; ?></h6>
                                                                                            </div>

                                                                                            <div class="col-3 border-end" style="background-color: #ccc;">

                                                                                                <div class="row justify-content-center">
                                                                                                    <!-- <button class="btn btn-success" style="font-size: 12px;">Download</button> -->
                                                                                                    <!-- <a class="btn btn-success" style="font-size: 12px;" href="teacherPanel.php"> Download</a> -->
                                                                                                    <a href="<?php echo $lesson_note_data["pdf_path"]; ?>" class="btn btn-success" style="font-size: 12px;" download="<?php echo $lesson_note_data["lesson_name"]; ?>">Download</a>


                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="col-3 border-end" style="background-color: #ccc;">
                                                                                                <div class="row justify-content-center">
                                                                                                    <!-- <button class="btn btn-warning"  style="font-size: 12px;"> <a ></a> View</button> -->
                                                                                                    <a class="btn btn-warning" style="font-size: 12px;" href="<?php echo $lesson_note_data["pdf_path"]; ?>"> View</a>

                                                                                                </div>

                                                                                            </div>
                                                                                            <hr>
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







                            <!-- Lesson Note-->









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