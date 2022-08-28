<?php
    if(!empty($_POST))
    {
        require 'connection.php';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $Day=$_POST['Day'];
        $detail=$_POST['detail'];
        $type = $_POST['type'];
        $sql = "UPDATE exercise SET name = '$name' ,
                                    Day  = '$Day',
                                    detail = '$detail',
                                    type = '$type'
                                    WHERE idExercise='$id'";

        if($conn->query($sql))
        {
            header("Location: ../TRAINER/T_Excercise.php");
        }
        else
        {
            echo "failed";
        }
    }
?>