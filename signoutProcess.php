<?php
/////////////**********sign out process */
session_start();

if(isset($_SESSION["u"])){

    $_SESSION["u"]=null;

    session_destroy();

    echo("success");
}else if(isset($_SESSION["tu"])){

    $_SESSION["tu"]=null;

    session_destroy();

    echo("success");
}else if(isset($_SESSION["aou"])){

    $_SESSION["aou"]=null;

    session_destroy();

    echo("success");
}else if(isset($_SESSION["su"])){

    $_SESSION["su"]=null;

    session_destroy();

    echo("success");
}

?>