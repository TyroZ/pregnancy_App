<?php
    session_start();
    session_destroy();
    unset($_SESSION['dr_id']);
    $_SESSION['message'] = "You have logged out";
    header("location: ../../login.php");
?>