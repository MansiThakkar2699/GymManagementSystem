<?php
    if(!empty($_POST))
    {
        require 'connection.php';
        $id = $_POST['id'];
        $Company_name = $_POST['Company_name'];
        $Owner_name = $_POST['Owner_name'];
        $Address=$_POST['Address'];
        $Email_id=$_POST['Email_id'];
        $Contact_no=$_POST['Contact_no'];
        if(!empty($_FILES['img']['tmp_name']))
        {
            $file_name = time().'.png';
            $target_file = "../ADMIN/profile/".$file_name;
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) 
            {
                    $sql = "UPDATE company SET  img='$file_name',
                                               Company_name = '$Company_name',
                                               Owner_name = '$Owner_name',
                                               Address = '$Address',
                                               Email_id = '$Email_id', 
                                               Contact_no = '$Contact_no'
                                                WHERE idCompany='$id'";
            }
        }
        else
        {
                    $sql = "UPDATE company SET Company_name = '$Company_name',
                                               Owner_name = '$Owner_name',
                                               Address = '$Address',
                                               Email_id = '$Email_id', 
                                               Contact_no = '$Contact_no'
                                                WHERE idCompany='$id'";
        }
        

        if($conn->query($sql))
        {
            header("Location: ../ADMIN/company_profile.php");
        }
        else
        {
            echo "failed";
        }
    }
?>