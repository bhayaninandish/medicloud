<?php
    session_start();
    unset($_SESSION["aadhar"]);
    unset($_SESSION["password"]);
    unset($_SESSION["logged_in"]);
    header("Location:login.php");
    session_destroy();
?>