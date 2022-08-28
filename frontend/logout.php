<?php
    //session_unset();

    session_start();
    unset($_SESSION['NAME']);
    unset($_SESSION['ID']);
    unset($_SESSION['email']);
	session_destroy();

    header("Location: index.php");
?>