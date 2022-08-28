<?php
    //session_unset();

    session_start();
    //print_r($_SESSION); die;
    unset($_SESSION['NAME']);
    unset($_SESSION['ID']);
    unset($_SESSION['email']);
    session_destroy();
    //print_r($_SESSION); die;
    header("Location: index.php");
?>