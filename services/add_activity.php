<?php
require 'connection.php';
if(!empty($_POST))
{
    $Activity_name  = $_POST['Activity_name'];
    $Day=$_POST['Day'];
    $Time=$_POST['Time'];
    $idUser_master = $_POST['idUser_master'];
    $sql = "INSERT INTO activity (Activity_name,Day,Time,idUser_master) VALUES ('$Activity_name','$Day','$Time','$idUser_master')";
    //echo $sql;die;
        if ($conn->query($sql) == TRUE) 
        {
            header("Location: ../ADMIN/admin_activity.php");
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
?>