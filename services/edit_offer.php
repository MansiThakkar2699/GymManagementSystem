<?php
    if(!empty($_POST))
    {
        require 'connection.php';
        
        //$img = $_POST['img'];
        $id = $_POST['id'];
        $start_date=$_POST['start_date'];
        $end_date=$_POST['end_date'];
        $Discount=$_POST['Discount'];
        $details = $_POST['details'];
        $sql = "UPDATE offer SET  start_date = '$start_date',
                                    end_date = '$end_date',
                                    Discount = '$Discount',
                                    details = '$details'
                                    WHERE idOffer = '$id'";

        //echo $sql;
        //die;
        if($conn->query($sql))
        {
            header("Location: ../ADMIN/admin_offers.php");
        }
        else
        {
            echo "failed";
        }
    }
?>