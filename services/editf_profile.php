<?php
    session_start();

    // print_r($_SESSION);

    $id = $_SESSION['ID'];

    if(!empty($_POST))
    {
        require 'connection.php';
        
        $First_name = $_POST['First_name'];
        $Last_name = $_POST['Last_name'];
        $Email_id = $_POST['Email_id'];
        $Contact_no = $_POST['Contact_no'];
        $DOB = $_POST['DOB'];
        $gender = $_POST['gender'];
        if($_POST['gender'] == 'Male')
        {
            $gender = 0;
        }
        else
        {
            $gender = 1;
        }

        if(!empty($_FILES['img']['tmp_name']))
        {
            $file_name = time().'.png';
            $target_file = "../ADMIN/profile/".$file_name;

            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) 
            {
                $sql = "UPDATE user_master SET img='$file_name',
                                        First_name = '$First_name',
                                        Last_name = '$Last_name',
                                        Email_id = '$Email_id',
                                        Contact_no = '$Contact_no',
                                        DOB = '$DOB',
                                        gender = '$gender',
                                        img = '$file_name'
                                        WHERE idUser_master = $id";
            } 
        }
        else
        {
            $sql = "UPDATE user_master SET User_name = '$User_name',
                                        First_name = '$First_name',
                                        Last_name = '$Last_name',
                                        Email_id = '$Email_id',
                                        Contact_no = '$Contact_no',
                                        DOB = '$DOB',
                                        gender = '$gender'
                                        WHERE idUser_master = $id";
        }
        

        // echo $sql; die;
        

        // echo $sql;
        // die;
        if($conn->query($sql))
        {
            header("Location: ../frontend/profile.php");
        }
        else
        {
            echo "failed";
        }
    }
?>