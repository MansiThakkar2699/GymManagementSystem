<?php
require 'connection.php';
if(!empty($_POST))
{
    //print_r($_POST);
    //die;
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $Discount=$_POST['Discount'];
    $details = $_POST['details'];
    //$start_date = date('Y-m-d H:i:s');
    //$end_date = date('Y-m-d H:i:s');
    $qry="select * from offer WHERE details='$details' ;";
    $res = $conn->query($qry);
    if(mysqli_num_rows($res)>0)
    {
        echo "Same offer name already exist";
    }
    else
    {
        $sql = "INSERT INTO offer (start_date,end_date,Discount,details) VALUES ('$start_date','$end_date','$Discount','$details')";
        //echo $sql;
        //die;
            if ($conn->query($sql) == TRUE) 
            {
                header("Location:../ADMIN/admin_offers.php");
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }
}
?>