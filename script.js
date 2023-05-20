//***********Admin sign in******** */

function adminSignIn() {

    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var remember_Me = document.getElementById("r");

    var f = new FormData();

    f.append("email", email.value);
    f.append("password", password.value);


    f.append("remember_Me", remember_Me.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "sucsess") {
                window.location = "adminPanel.php"
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "adminSignInProcess.php", true);
    r.send(f);

}

//***********Admin sign in******** */


// window change *******************************
//******************************//

function dashbord() {
    var dashbord = document.getElementById("dashbord");
    var add_teacher = document.getElementById("add_teacher");
    var Academic_officer = document.getElementById("Academic_officer");
    var Manage_Teacher = document.getElementById("Manage_Teacher");
    var Manage_Academic_officer = document.getElementById("Manage_Academic_officer");
    var Manage_student = document.getElementById("Manage_student");
    var results = document.getElementById("results");
    var updateProfile = document.getElementById("updateProfile");





    Manage_Academic_officer.classList = "d-none";
    dashbord.classList = "d-block";
    add_teacher.classList = "d-none"
    Academic_officer.classList = "d-none";
    Manage_Teacher.classList = "d-none";
    Manage_student.classList = "d-none";
    results.classList = "d-none";
    updateProfile.classList = "d-none";
}

function Addteacher() {
    var dashbord = document.getElementById("dashbord");
    var Academic_officer = document.getElementById("Academic_officer");
    var add_teacher = document.getElementById("add_teacher");
    var Manage_Teacher = document.getElementById("Manage_Teacher");
    var Manage_Academic_officer = document.getElementById("Manage_Academic_officer");
    var Manage_student = document.getElementById("Manage_student");
    var results = document.getElementById("results");
    var updateProfile = document.getElementById("updateProfile");






    add_teacher.classList = "d-block"
    dashbord.classList = "d-none";
    Manage_Academic_officer.classList = "d-none";
    Academic_officer.classList = "d-none";
    Manage_Teacher.classList = "d-none";
    Manage_student.classList = "d-none";
    results.classList = "d-none";
    updateProfile.classList = "d-none";




}

function add_Academic_officer() {
    var dashbord = document.getElementById("dashbord");
    var Academic_officer = document.getElementById("Academic_officer");
    var add_teacher = document.getElementById("add_teacher");
    var Manage_Teacher = document.getElementById("Manage_Teacher");
    var Manage_Academic_officer = document.getElementById("Manage_Academic_officer");
    var Manage_student = document.getElementById("Manage_student");
    var results = document.getElementById("results");
    var updateProfile = document.getElementById("updateProfile");






    add_teacher.classList = "d-none";
    dashbord.classList = "d-none";
    Manage_Teacher.classList = "d-none";
    Manage_Academic_officer.classList = "d-none";
    Academic_officer.classList = "d-block";
    Manage_student.classList = "d-none";
    results.classList = "d-none";
    updateProfile.classList = "d-none";



}

function ManageTeacher() {

    var dashbord = document.getElementById("dashbord");
    var Academic_officer = document.getElementById("Academic_officer");
    var add_teacher = document.getElementById("add_teacher");
    var Manage_Teacher = document.getElementById("Manage_Teacher");
    var Manage_Academic_officer = document.getElementById("Manage_Academic_officer");
    var Manage_student = document.getElementById("Manage_student");
    var results = document.getElementById("results");
    var updateProfile = document.getElementById("updateProfile");






    add_teacher.classList = "d-none";
    dashbord.classList = "d-none";
    Academic_officer.classList = "d-none";
    Manage_Academic_officer.classList = "d-none";
    Manage_Teacher.classList = "d-block";
    Manage_student.classList = "d-none";
    results.classList = "d-none";
    updateProfile.classList = "d-none";


}

function Manage_Academic_officer() {
    var Manage_Academic_officer = document.getElementById("Manage_Academic_officer");
    var dashbord = document.getElementById("dashbord");
    var Academic_officer = document.getElementById("Academic_officer");
    var add_teacher = document.getElementById("add_teacher");
    var Manage_Teacher = document.getElementById("Manage_Teacher");
    var Manage_student = document.getElementById("Manage_student");
    var results = document.getElementById("results");
    var updateProfile = document.getElementById("updateProfile");




    add_teacher.classList = "d-none";
    dashbord.classList = "d-none";
    Academic_officer.classList = "d-none";
    Manage_Teacher.classList = "d-none";
    Manage_Academic_officer.classList = "d-block";
    Manage_student.classList = "d-none";
    results.classList = "d-none";
    updateProfile.classList = "d-none";



}

function Manage_student() {
    var Manage_student = document.getElementById("Manage_student");
    var Manage_Academic_officer = document.getElementById("Manage_Academic_officer");
    var dashbord = document.getElementById("dashbord");
    var Academic_officer = document.getElementById("Academic_officer");
    var add_teacher = document.getElementById("add_teacher");
    var Manage_Teacher = document.getElementById("Manage_Teacher");
    var results = document.getElementById("results");
    var updateProfile = document.getElementById("updateProfile");



    add_teacher.classList = "d-none";
    dashbord.classList = "d-none";
    Academic_officer.classList = "d-none";
    Manage_Teacher.classList = "d-none";
    Manage_Academic_officer.classList = "d-none";
    Manage_student.classList = "d-block";
    results.classList = "d-none";
    updateProfile.classList = "d-none";


}

function results() {

    var results = document.getElementById("results");
    var Manage_student = document.getElementById("Manage_student");
    var Manage_Academic_officer = document.getElementById("Manage_Academic_officer");
    var dashbord = document.getElementById("dashbord");
    var Academic_officer = document.getElementById("Academic_officer");
    var add_teacher = document.getElementById("add_teacher");
    var Manage_Teacher = document.getElementById("Manage_Teacher");
    var updateProfile = document.getElementById("updateProfile");


    results.classList = "d-block";
    add_teacher.classList = "d-none";
    dashbord.classList = "d-none";
    Academic_officer.classList = "d-none";
    Manage_Teacher.classList = "d-none";
    Manage_Academic_officer.classList = "d-none";
    Manage_student.classList = "d-none";
    updateProfile.classList = "d-none";

}

function updateProfile() {
    var updateProfile = document.getElementById("updateProfile");
    var results = document.getElementById("results");
    var Manage_student = document.getElementById("Manage_student");
    var Manage_Academic_officer = document.getElementById("Manage_Academic_officer");
    var dashbord = document.getElementById("dashbord");
    var Academic_officer = document.getElementById("Academic_officer");
    var add_teacher = document.getElementById("add_teacher");
    var Manage_Teacher = document.getElementById("Manage_Teacher");

    results.classList = "d-none";
    add_teacher.classList = "d-none";
    dashbord.classList = "d-none";
    Academic_officer.classList = "d-none";
    Manage_Teacher.classList = "d-none";
    Manage_Academic_officer.classList = "d-none";
    Manage_student.classList = "d-none";
    updateProfile.classList = "d-block";

}


// window change *******************************
//******************************//


///*********************add teacher from admin************* */

function addTeacher() {

    var subject = document.getElementById("subject");
    var index_num = document.getElementById("index_num");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var Tclass = document.getElementById("Tclass");

    var f = new FormData;

    f.append("subject", subject.value);
    f.append("index_num", index_num.value);
    f.append("email", email.value);
    f.append("password", password.value);
    f.append("Tclass", Tclass.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.reload();
                alert("verifivation code sending sucsessfully");
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "addTeacherProcess.php", true);
    r.send(f);
}
///*********************add teacher from admin************* */



//****************add academic officer from admin */
function acedemicOfisserRejistation() {
    var indexNum = document.getElementById("AoIndexNum");
    var email = document.getElementById("AoEmail");
    var password = document.getElementById("AoPassword");

    var f = new FormData();

    f.append("index_Num", indexNum.value);
    f.append("email", email.value);
    f.append("password", password.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t = 'success') {
                window.location.reload();
                alert("verification code sending sucsesfully")
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "addacademicOfficerProcess.php", true);
    r.send(f);
}
//****************add academic officer from admin */



//*********************teacher sign in*************** */
function TeacherSignIn() {

    var email = document.getElementById("Temail");
    var password = document.getElementById("Tpassword");
    var remember_Me = document.getElementById("Tr");

    var f = new FormData();

    f.append("email", email.value);
    f.append("password", password.value);


    f.append("remember_Me", remember_Me.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "done") {
                window.location = "teacherPanel.php"
            } else if (t == "1") {
                var l = document.getElementById("teacher_login");
                var v = document.getElementById("Tverification");

                l.classList = "d-none";
                v.classList = "d-block";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "teacherSignInProcess.php", true);
    r.send(f);

}
//*********************teacher sign in*************** */


/////***************teacher veirification  *************/
function TeacherVerification() {

    var Tsverfication = document.getElementById("verfication");
    var email = document.getElementById("Temail");
    var password = document.getElementById("Tpassword");





    var f = new FormData();

    f.append("verfication", Tsverfication.value);
    f.append("email", email.value);
    f.append("password", password.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == 2) {
                window.location = "teacherPanel.php";
            } else if (t == 1) {
                var li = document.getElementById("teacher_login");
                var v = document.getElementById("Tverification");
                var s = document.getElementById("teacherDetails");

                li.classList = "d-none";
                v.classList = "d-none";
                s.classList = "d-block";



            }
        }
    }

    r.open("POST", "teacherVerficationProcess.php", true);
    r.send(f);

}
/////***************teacher veirification  *************/




//******************teacher profile update in to the log in process */
function TlogInUpdate() {
    var fname = document.getElementById("Tlogfname");
    var lname = document.getElementById("Tloglname");
    var mobile = document.getElementById("Tlogmobile");
    var Tuemail = document.getElementById("Tlogemail");
    var Tpassword = document.getElementById("Tpassword");



    var f = new FormData();

    f.append("fname", fname.value);
    f.append("lname", lname.value);
    f.append("mobile", mobile.value);
    f.append("email", Tuemail.value);
    f.append("password", Tpassword.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                window.location = "teacherPanel.php";

            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "teacherLoginUpdateDataProcess.php", true);
    r.send(f);


}
//******************teacher profile update in to the log in process */



//**************add lesson note from teacher***************** */
function add_lesson_note(t_id) {

    var pdf = document.getElementById("pdf");
    var lesson_name = document.getElementById("lesson_name");


    var f = new FormData();
    f.append("t_id", t_id);
    f.append("pdf", pdf.files[0]);
    f.append("lesson_name", lesson_name.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("POST", "upadatelessonProcess.php", true);
    r.send(f);

}
//**************add lesson note from teacher***************** */



//**************add assignment from teacher***************** */

function addAssignment(id) {
    alert("ok");
    var Assignment_name = document.getElementById("Assignment_name");
    var pdf = document.getElementById("Assignment_file");
    var end_date = document.getElementById("end_date");
    var Assignment_id = document.getElementById("Assignment_id");

    var f = new FormData();

    f.append("tid", id);
    f.append("pdf", pdf.files[0]);
    f.append("A_name", Assignment_name.value);
    f.append("end_date", end_date.value);
    f.append("Assignment_id", Assignment_id.value);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("POST", "addAssesmetProcess.php", true);
    r.send(f);
}
//**************add assignment from teacher***************** */



//********************Academic_Officer_SignIn************************* */
function Academic_Officer_SignIn() {

    var email = document.getElementById("Aoemail");
    var password = document.getElementById("Aopassword");
    var remember_Me = document.getElementById("Aor");



    var f = new FormData();

    f.append("email", email.value);
    f.append("password", password.value);


    f.append("remember_Me", remember_Me.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "done") {
                window.location = "academic_officer_panel.php"
            } else if (t == "1") {
                var l = document.getElementById("teacher_login");
                var v = document.getElementById("Tverification");

                l.classList = "d-none";
                v.classList = "d-block";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "AcademicOfficerSignInProcess.php", true);
    r.send(f);
}
//********************Academic_Officer_SignIn************************* */


//********************Academic_Officer_verification ************************* */


function Academic_Officer_Verification() {
    var Aoverfication = document.getElementById("Aoverfication");
    var email = document.getElementById("Aoemail");
    var password = document.getElementById("Aopassword");





    var f = new FormData();

    f.append("verfication", Aoverfication.value);
    f.append("email", email.value);
    f.append("password", password.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == 2) {
                window.location = "academic_officer_panel.php";
            } else if (t == 1) {
                var li = document.getElementById("teacher_login");
                var v = document.getElementById("Tverification");
                var s = document.getElementById("teacherDetails");

                li.classList = "d-none";
                v.classList = "d-none";
                s.classList = "d-block";



            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "AcademicOfficerVerficationProcess.php", true);
    r.send(f);
}
//********************Academic_Officer_verification ************************* */


//********************Academic_Officer update profile in to the log in ************************* */

function AologInUpdate() {

    var fname = document.getElementById("Aologfname");
    var lname = document.getElementById("Aologlname");
    var mobile = document.getElementById("Aologmobile");
    var Aoemail = document.getElementById("Aologemail");
    var Aopassword = document.getElementById("Aopassword");
    var Aoaddress_line_1 = document.getElementById("Aoaddress_line_1");
    var Aoaddress_line_2 = document.getElementById("Aoaddress_line_2");




    var f = new FormData();

    f.append("fname", fname.value);
    f.append("lname", lname.value);
    f.append("mobile", mobile.value);
    f.append("email", Aoemail.value);
    f.append("password", Aopassword.value);
    f.append("Aoaddress_line_1", Aoaddress_line_1.value);
    f.append("Aoaddress_line_2", Aoaddress_line_2.value);



    alert(Aoaddress_line_1.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                window.location = "academic_officer_panel.php";

            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "AcademicOfficerLoginUpdateDataProcess.php", true);
    r.send(f);
}
//********************Academic_Officer update profile in to the log in ************************* */



// **************change window officer*****************///
function aodashbord() {
    var aodashbord = document.getElementById("aodashbord");
    var aoAddstudent = document.getElementById("aoAddstudent");
    var aoresults = document.getElementById("aoresults");
    var aoupdateProfile = document.getElementById("aoupdateProfile");

    aodashbord.classList = "d-block";
    aoAddstudent.classList = "d-none";
    aoresults.classList = "d-none";
    aoupdateProfile.classList = "d-none";
}

function aoAddstudent() {
    var aodashbord = document.getElementById("aodashbord");
    var aoAddstudent = document.getElementById("aoAddstudent");
    var aoresults = document.getElementById("aoresults");
    var aoupdateProfile = document.getElementById("aoupdateProfile");

    aodashbord.classList = "d-none";
    aoAddstudent.classList = "d-block";
    aoresults.classList = "d-none";
    aoupdateProfile.classList = "d-none";
}

function aoresults() {
    var aodashbord = document.getElementById("aodashbord");
    var aoAddstudent = document.getElementById("aoAddstudent");
    var aoresults = document.getElementById("aoresults");
    var aoupdateProfile = document.getElementById("aoupdateProfile");

    aodashbord.classList = "d-none";
    aoAddstudent.classList = "d-none";
    aoresults.classList = "d-block";
    aoupdateProfile.classList = "d-none";
}

function aoupdateProfile() {
    var aodashbord = document.getElementById("aodashbord");
    var aoAddstudent = document.getElementById("aoAddstudent");
    var aoresults = document.getElementById("aoresults");
    var aoupdateProfile = document.getElementById("aoupdateProfile");

    aodashbord.classList = "d-none";
    aoAddstudent.classList = "d-none";
    aoresults.classList = "d-none";
    aoupdateProfile.classList = "d-block";
}

// **************change window officer*****************///


//****************add student from officer */

function addstudent() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var nic = document.getElementById("NIC");
    var index_num = document.getElementById("index_num");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var gender = document.getElementById("gender");
    var b_day = document.getElementById("b_day");
    var sclass = document.getElementById("sclass");
    var address1 = document.getElementById("address_line_1");
    var address2 = document.getElementById("address_line_2");




    var f = new FormData();

    f.append("fname", fname.value);
    f.append("lname", lname.value);
    f.append("nic", nic.value);
    f.append("index_Num", index_num.value);
    f.append("email", email.value);
    f.append("password", password.value);
    f.append("gender", gender.value);
    f.append("b_day", b_day.value);
    f.append("sclass", sclass.value);
    f.append("address1", address1.value);
    f.append("address2", address2.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("POST", "addStudentProcess.php", true);
    r.send(f);

}
//****************add student from officer */




//*****************student sign in************ */
function sSignIn() {

    var email = document.getElementById("semail");
    var password = document.getElementById("spassword");
    var remember_Me = document.getElementById("sr");





    var f = new FormData();

    f.append("email", email.value);
    f.append("password", password.value);


    f.append("remember_Me", remember_Me.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "done") {
                window.location = "studentPanal.php"
            } else if (t == "done_sign_in") {
                var l = document.getElementById("student_login");
                var v = document.getElementById("Sverification");

                l.classList = "d-none";
                v.classList = "d-block";
            } else if (t == "go_payment_page") {
                window.location = "payment.php";
            } else {

                alert(t);
            }
        }
    }

    r.open("POST", "studentSignInProcess.php", true);
    r.send(f);
}
//*****************student sign in************ */



//*****************student sign in verification************ */

function studentVerification() {
    var sverfication = document.getElementById("sverfication");
    var email = document.getElementById("semail");
    var password = document.getElementById("spassword");





    var f = new FormData();

    f.append("verfication", sverfication.value);
    f.append("email", email.value);
    f.append("password", password.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == 2) {
                window.location = "payment.php";
            } else if (t == 1) {
                var li = document.getElementById("student_login");
                var v = document.getElementById("Sverification");
                var s = document.getElementById("studentDetails");

                li.classList = "d-none";
                v.classList = "d-none";
                s.classList = "d-block";



            } else if (t == "3") {
                window.location = "studentPanal.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "studentVerficationProcess.php", true);
    r.send(f);

}
//*****************student sign in verification************ */


//*****************student sign in skip process not update profile************ */

function sSkip(id) {
    alert(id);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                window.location = "payment.php";

            } else {
                alert(t);
            }
        }
    }

    r.open("GET", "studentSkipLoginProcess.php?id=" + id, true);
    r.send();
}
//*****************student sign in skip process not update profile************ */


//*****************student sign in  update profile************ */

function slogInUpdate() {
    var fname = document.getElementById("slogfname");
    var lname = document.getElementById("sloglname");
    var mobile = document.getElementById("slogmobile");
    var suemail = document.getElementById("slogemail");
    var spassword = document.getElementById("spassword");
    var nic = document.getElementById("nic");
    var b_day = document.getElementById("b_day");





    var f = new FormData();

    f.append("fname", fname.value);
    f.append("lname", lname.value);
    f.append("mobile", mobile.value);
    f.append("email", suemail.value);
    f.append("password", spassword.value);
    f.append("nic", nic.value);
    f.append("b_day", b_day.value);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                window.location = "studentPanal.php";

            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "studentLoginUpdateDataProcess.php", true);
    r.send(f);


}
//*****************student sign in  update profile************ */


//********************student change window */
function sdashbord() {
    var a = document.getElementById("sdashbord");
    var b = document.getElementById("sassignment");
    var c = document.getElementById("slessonnote");
    var d = document.getElementById("supdateProfile");

    a.classList = "d-block";
    b.classList = "d-none";
    c.classList = "d-none";
    d.classList = "d-none";


}

function sassignment() {
    var a = document.getElementById("sdashbord");
    var b = document.getElementById("sassignment");
    var c = document.getElementById("slessonnote");
    var d = document.getElementById("supdateProfile");


    a.classList = "d-none";
    b.classList = "d-block";
    c.classList = "d-none";
    d.classList = "d-none";


}

function slessonnote() {
    var a = document.getElementById("sdashbord");
    var b = document.getElementById("sassignment");
    var c = document.getElementById("slessonnote");
    var d = document.getElementById("supdateProfile");


    a.classList = "d-none";
    b.classList = "d-none";
    c.classList = "d-block";
    d.classList = "d-none";


}

function stupdateProfile() {
    window.location = "supadateProfile.php";

}

function aupdateProfile() {
    window.location = "adminUpadateProfile.php";

}

function tupdateProfile() {
    window.location = "teacherUpdateProfile.php";

}

function aoUpdateProfile() {
    window.location = "academicOfficerUpdateProfile.php";

}
//********************student change window */



//************change image************* */
function changeImage() {
    var view = document.getElementById("viweImage");
    var file = document.getElementById("profileimg");

    file.onchange = function() {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        view.src = url;
    }

}
//************change image************* */


//update profile//

function updateMyProfile() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var mobile = document.getElementById("mobile");
    var image = document.getElementById("profileimg");
    var id = document.getElementById("id");

    var f = new FormData();
    f.append("fn", fname.value);
    f.append("ln", lname.value);
    f.append("mb", mobile.value);
    f.append("id", id.value);


    if (image.files.length == 0) {
        var confriamation = confirm("Are you sure don't want to update profle image?");

        if (confriamation) {
            alert("you have not select any image");
        }
    } else {
        f.append("image", image.files[0]);
    }


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "sucsess") {
                window.location.reload();
                alert(t);
            } else {
                alert(t);
            }


        }
    }

    r.open("POST", "updateProfileProcess.php", true);
    r.send(f);

}

//update profile//


//**********student Change password********** */

function schangepassword() {


    var id = document.getElementById("id");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                alert("verification code has sent to your email. please check your inbox");
                var a = document.getElementById("changePassword");
                var b = document.getElementById("verification");

                a.classList = "d-none";
                b.classList = "d-block";
            } else {
                alert(t);
            }
        }
    }
    r.open("GET", "sChangePasswordProcess.php?id=" + id.value, true);
    r.send();

}

//**********student Change password********** */


//********student password change verification******** */

function changeVerification(id) {
    var v = document.getElementById("Change_verification");

    var f = new FormData();

    f.append("v", v.value);
    f.append("id", id);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                var c = document.getElementById("newpw");

                var a = document.getElementById("changePassword");
                var b = document.getElementById("verification");

                a.classList = "d-none";
                b.classList = "d-none";

                c.classList = "d-block";
            }
        }
    }

    r.open("POST", "sChangeVerificationProcess.php", true);
    r.send(f);
}
//********student password change verification******** */


//**********change password */
function ChangePw(id) {
    var nP = document.getElementById("nwPw");
    var rnP = document.getElementById("renwPw");



    var f = new FormData();

    f.append("np", nP.value);
    f.append("rnp", rnP.value);
    f.append("id", id);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.response;
            if (t == "success") {
                alert("Pasword Changed");
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "schangePassword.php", true);
    r.send(f);
}
//**********change password */



//*********admin update profile */
function aupdateMyProfile() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var mobile = document.getElementById("mobile");
    var image = document.getElementById("profileimg");
    var id = document.getElementById("id");

    var f = new FormData();
    f.append("fn", fname.value);
    f.append("ln", lname.value);
    f.append("mb", mobile.value);
    f.append("id", id.value);


    if (image.files.length == 0) {
        var confriamation = confirm("Are you sure don't want to update profle image?");

        if (confriamation) {
            alert("you have not select any image");
        }
    } else {
        f.append("image", image.files[0]);
    }


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "sucsess") {
                window.location.reload();
                alert(t);
            } else {
                alert(t);
            }


        }
    }

    r.open("POST", "aupdateProfileProcess.php", true);
    r.send(f);

}
//*********admin update profile */




//******************admin change password */
function achangepassword() {


    var id = document.getElementById("id");


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                alert("verification code has sent to your email. please check your inbox");
                var a = document.getElementById("changePassword");
                var b = document.getElementById("verification");

                a.classList = "d-none";
                b.classList = "d-block";
            } else {
                alert(t);
            }
        }
    }
    r.open("GET", "aChangePasswordProcess.php?id=" + id.value, true);
    r.send();

}
//******************admin change password */


//******************admin change password verification */


function achangeVerification(id) {
    var v = document.getElementById("Change_verification");
    alert("ok");
    var f = new FormData();

    f.append("v", v.value);
    f.append("id", id);
    alert("ok");


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                var c = document.getElementById("newpw");

                var a = document.getElementById("changePassword");
                var b = document.getElementById("verification");

                a.classList = "d-none";
                b.classList = "d-none";

                c.classList = "d-block";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "adminChangeVerificationProcess.php", true);
    r.send(f);
}
//******************admin change password verification */




//******************admin change password  */

function aChangePw(id) {
    var nP = document.getElementById("nwPw");
    var rnP = document.getElementById("renwPw");



    var f = new FormData();

    f.append("np", nP.value);
    f.append("rnp", rnP.value);
    f.append("id", id);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.response;
            if (t == "success") {
                alert("Pasword Changed");
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "adminchangePassword.php", true);
    r.send(f);
}
//******************admin change password  */


//***********teacher update profile****** */
function teacherupdateMyProfile() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var mobile = document.getElementById("mobile");
    var image = document.getElementById("profileimg");
    var id = document.getElementById("id");

    var f = new FormData();
    f.append("fn", fname.value);
    f.append("ln", lname.value);
    f.append("mb", mobile.value);
    f.append("id", id.value);


    if (image.files.length == 0) {
        var confriamation = confirm("Are you sure don't want to update profle image?");

        if (confriamation) {
            alert("you have not select any image");
        }
    } else {
        f.append("image", image.files[0]);
    }


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "sucsess") {
                window.location.reload();
                alert(t);
            } else {
                alert(t);
            }


        }
    }

    r.open("POST", "teacherUpdateProfileProcess.php", true);
    r.send(f);

}
//***********teacher update profile****** */



//******************teacher change password******** */
function teacherchangepassword() {


    var id = document.getElementById("id");


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                alert("verification code has sent to your email. please check your inbox");
                var a = document.getElementById("changePassword");
                var b = document.getElementById("verification");

                a.classList = "d-none";
                b.classList = "d-block";
            } else {
                alert(t);
            }
        }
    }
    r.open("GET", "teacherChangePasswordProcess.php?id=" + id.value, true);
    r.send();

}
//******************teacher change password******** */


//******************teacher change password verification******** */


function teacherchangeVerification(id) {
    var v = document.getElementById("Change_verification");
    alert("ok");
    var f = new FormData();

    f.append("v", v.value);
    f.append("id", id);
    alert("ok");


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                var c = document.getElementById("newpw");

                var a = document.getElementById("changePassword");
                var b = document.getElementById("verification");

                a.classList = "d-none";
                b.classList = "d-none";

                c.classList = "d-block";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "teacherChangeVerificationProcess.php", true);
    r.send(f);
}

//******************teacher change password verification******** */



//************teacher change password******** */

function teacherChangePw(id) {
    var nP = document.getElementById("nwPw");
    var rnP = document.getElementById("renwPw");



    var f = new FormData();

    f.append("np", nP.value);
    f.append("rnp", rnP.value);
    f.append("id", id);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.response;
            if (t == "success") {
                alert("Pasword Changed");
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "teacherchangePassword.php", true);
    r.send(f);
}
//************teacher change password******** */




//**********officer update profile****** */


function aoupdateMyProfile() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var mobile = document.getElementById("mobile");
    var image = document.getElementById("profileimg");
    var id = document.getElementById("id");

    var f = new FormData();
    f.append("fn", fname.value);
    f.append("ln", lname.value);
    f.append("mb", mobile.value);
    f.append("id", id.value);


    if (image.files.length == 0) {
        var confriamation = confirm("Are you sure don't want to update profle image?");

        if (confriamation) {
            alert("you have not select any image");
        }
    } else {
        f.append("image", image.files[0]);
    }


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "sucsess") {
                window.location.reload();
                alert(t);
            } else {
                alert(t);
            }


        }
    }

    r.open("POST", "aoUpdateProfileProcess.php", true);
    r.send(f);

}
//**********officer update profile****** */



//**********officer change password****** */

function aochangepassword() {


    var id = document.getElementById("id");


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                alert("verification code has sent to your email. please check your inbox");
                var a = document.getElementById("changePassword");
                var b = document.getElementById("verification");

                a.classList = "d-none";
                b.classList = "d-block";
            } else {
                alert(t);
            }
        }
    }
    r.open("GET", "academicChangePasswordProcess.php?id=" + id.value, true);
    r.send();

}
//**********officer change password****** */


//*******officer veification ******* */


function aochangeVerification(id) {
    var v = document.getElementById("Change_verification");

    var f = new FormData();

    f.append("v", v.value);
    f.append("id", id);
    // alert("ok");


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                var c = document.getElementById("newpw");

                var a = document.getElementById("changePassword");
                var b = document.getElementById("verification");

                a.classList = "d-none";
                b.classList = "d-none";

                c.classList = "d-block";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "academicChangeVerificationProcess.php", true);
    r.send(f);
}
//*******officer veification ******* */

//Change password officer***********///

function aoChangePw(id) {
    var nP = document.getElementById("nwPw");
    var rnP = document.getElementById("renwPw");



    var f = new FormData();

    f.append("np", nP.value);
    f.append("rnp", rnP.value);
    f.append("id", id);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.response;
            if (t == "success") {
                alert("Pasword Changed");
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "academicChangePassword.php", true);
    r.send(f);
}
//Change password officer***********///



//*************Upload assignment fron teacher*********** */

function uploadAssigment(aid) {
    var pdf = document.getElementById("assigmentPdf");

    var f = new FormData();

    f.append("pdf", pdf.files[0]);
    f.append("aid", aid);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
            if (t == "upload done") {

                var a = document.getElementById("uploadbtn");
                a.innerHTML = "SUBMITED";
                a.style = "font-size: 12px";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "uploadAssigment.php", true);
    r.send(f);

}

//*************Upload assignment fron teacher*********** */


//************upload Mark from teacher */
function uploadMark() {
    var mark = document.getElementById("mark");
    var aid = document.getElementById("assigmentId");
    var sid = document.getElementById("sid");

    var f = new FormData();

    f.append("mark", mark.value);
    f.append("sid", sid.value);
    f.append("aid", aid.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
            if (t == "done") {
                var a = document.getElementById("btn");


                a.classList = "btn btn-danger";
                a.innerHTML = "uploaded";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "uploadMarkProcess.php", true);
    r.send(f);
}

//************upload Mark from teacher */


//*********relese student mark form academic officer */

function releaseMark(mid) {


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("GET", "releceMarkProces.php?mid=" + mid, true);
    r.send();

}

//*********relese student mark form academic officer */



//************Student Verification******* */

function veridyStudent(sid) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "done") {
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }

    r.open("GET", "verifyStudentProces.php?sid=" + sid, true);
    r.send();


}

//************Student Verification******* */


//************Sign Out  ***********/


function signOut() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.reload();
            } else {
                alert(t);
            }


        }
    }
    r.open("GET", "signoutProcess.php", true);
    r.send();
}

//************Sign Out  ***********/


///**************trail Payement********** */


function trailPayement(sid) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "done") {
                // window.location.reload();
                window.location = "studentPanal.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("GET", "trailPayement.php?sid=" + sid, true);
    r.send();

}

///**************trail Payement********** */


// *********real Payement **********///

function payNow(id) {

    // alert("ok");
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            var obj = JSON.parse(t);
            var mail = obj["mail"];
            var amount = obj["amount"];
            // alert(mail);
            // alert(t);
            if (t == "1") {
                alert("Pleace log in or sign up");
                // window.location = "index.php";
            } else if (t == 2) {
                alert("Pleace Update your profile");
                window.location = "updateProduct.php";

            } else {
                // Payment completed. It can be a successful failure.
                payhere.onCompleted = function onCompleted(orderId) {

                    window.location = "studentPanal.php";
                    console.log("Payment completed. OrderID:" + orderId);
                    saveInvoice(id, amount);

                    // saveInvoice(orderId, id, mail, amount, sid);
                    // Note: validate the payment and show success or failure page to the customer
                    // alert("done");

                };

                // Payment window closed
                payhere.onDismissed = function onDismissed() {
                    // Note: Prompt user to pay again or show an error page
                    console.log("Payment dismissed");
                };

                // Error occurred
                payhere.onError = function onError(error) {
                    // Note: show an error page
                    // alert("ok");

                    console.log("Error:" + error);
                };

                // Put the payment variables here
                var payment = {
                    "sandbox": true,
                    "merchant_id": "1221376", // Replace your Merchant ID
                    "return_url": "http://localhost/eshopf/singelProductViwe.php?id" + id, // Important
                    "cancel_url": "http://localhost/eshopf/singelProductViwe.php?id" + id, // Important
                    "notify_url": "http://sample.com/notify",
                    "order_id": "ItemNo12345",
                    "items": "",
                    "amount": amount,
                    "currency": "LKR",
                    "first_name": obj["fname"],
                    "last_name": obj["lname"],
                    "email": mail,
                    "phone": obj["mobile"],
                    "address": "",
                    "city": "",
                    "country": "Sri Lanka",
                    "delivery_address": "",
                    "delivery_city": "",
                    "delivery_country": "Sri Lanka",
                    "custom_1": "",
                    "custom_2": ""
                };

                // Show the payhere.js popup, when "PayHere Pay" is clicked
                // document.getElementById('payhere-payment').onclick = function(e) {
                payhere.startPayment(payment);
                // };
            }
        }
    }

    r.open("GET", "buyNowPocess.php?id=" + id, true);
    r.send();
}


// *********real Payement **********///


function saveInvoice(id) {


    // alert("ok");

    // alert(orderId);
    // alert(id);
    // alert(mail);
    // alert(amount);
    // alert(sid);

    var f = new FormData();

    f.append("o", orderId);
    f.append("i", id);
    f.append("m", mail);
    f.append("a", amount);
    f.append("q", sid);



    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "1") {
                // window.location = "invoice.php?id=" + orderId;
                window.location = "studentPanal.php";
            } else {
                alert(t);
            }


        }
    }

    r.open("POST", "saveInvoice.php", true);
    r.send(f);
}


///*******Save Payement and change payement type */

function saveInvoice(id, amount) {

    var f = new FormData();

    f.append("sid", id);
    f.append("amount", amount);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
        }
    }
    r.open("POST", "savePayement.php", true);
    r.send(f);
}

///*******Save Payement and change payement type */



//******* Accadomic officer block and unblock  ******/

function aostateChange(id) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == '2') {
                var btn = document.getElementById("aostatebtn");
                btn.classList = "btn btn-dark";
                btn.innerHTML = "Rejisted";
            } else if (t == '3') {
                var btn = document.getElementById("aostatebtn");
                btn.classList = "btn btn-success";
                btn.innerHTML = "Rejisted";
            } else if (t == '4') {
                var btn = document.getElementById("aostatebtn");
                btn.classList = "btn btn-danger";
                btn.innerHTML = "Bock";
            } else {
                alert(t);
            }
        }
    }

    r.open("GET", "aoSaateChange.php?id=" + id, true);
    r.send();

}
//******* Accadomic officer block and unblock  ******/



//***** upadate teacher class and subject *******///

function updateTeacherSubAndClass(id) {

    var tclass = document.getElementById("TuClass");
    var tsubject = document.getElementById("TuSubject");


    var f = new FormData();
    f.append("id", id);
    f.append("tSubject", tsubject.value);
    f.append("tClass", tclass.value);




    var r = new XMLHttpRequest();


    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("POST", "updateTeacherSubAndClass.php", true);
    r.send(f);
}

//***** upadate teacher class and subject *******///


//**********teacher Block And Unblock *******/
function teacherBlockAndUnblock(id) {

    var r = new XMLHttpRequest();


    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == 'unbloked') {
                var btn = document.getElementById("tbANDu");
                btn.classList = "btn  btn-success";
                btn.innerHTML = "Unblocked";
            } else if (t == 'bloked') {
                var btn = document.getElementById("tbANDu");
                btn.classList = "btn btn-danger";
                btn.innerHTML = "Blocked";
            } else {
                alert(t);
            }
        }
    }

    r.open("GET", "teacherBlockAndUnblocProcess.php?id=" + id, true);
    r.send();

}

//**********teacher Block And Unblock *******/