<?php
    if(!empty($_POST))
    {
        require 'connection.php';
        
        //$img = $_POST['img'];
        $id = $_POST['id'];
        $Name = $_POST['Name'];
        $Duration = $_POST['Duration'];
        $details = $_POST['details'];
        $start_date=$_POST['start_date'];
        $end_date=$_POST['end_date'];
        $amount=$_POST['amount'];
        $sql = "UPDATE package SET  Name = '$Name',
                                    Duration = '$Duration',
                                    details = '$details',
                                    start_date = '$start_date',
                                    end_date = '$end_date',
                                    amount= '$amount'
                                    WHERE idPackage = '$id'";

        //echo $sql;
        //die;
        if($conn->query($sql))
        {
            header("Location: ../ADMIN/admin_packages.php");
        }
        else
        {
            echo "failed";
        }
    }
?>