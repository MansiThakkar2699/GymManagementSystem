<?php
    if(!empty($_POST))
    {
        require 'connection.php';
        
        //$img = $_POST['img'];
        $id = $_POST['id'];
        $Activity_name = $_POST['Activity_name'];
        $Time = $_POST['Time'];
        $Day =$_POST['Day'];
        $idUser_master=$_POST['idUser_master'];
        $sql = "UPDATE activity SET Activity_name = '$Activity_name',
                                   Time = '$Time',
                                    Day = '$Day',
                                    idUser_master = '$idUser_master'
                                    WHERE idActivity = '$id'";

        //echo $sql;
        //die;
        if($conn->query($sql))
        {
            header("Location: ../ADMIN/admin_activity.php");
        }
        else
        {
            echo "failed";
        }
    }
?>