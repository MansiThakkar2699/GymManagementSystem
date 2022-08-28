<?php
require 'connection.php';
if(!empty($_POST))
{
    //print_r($_POST);
    //die;
    $Name = $_POST['Name'];
    $Duration = $_POST['Duration'];
    $details = $_POST['details'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $amount=$_POST['amount'];

    $qry="select * from package WHERE Name='$Name'";
    $res = $conn->query($qry);
    if(mysqli_num_rows($res)>0)
    {
        echo "Same package name already exist";
    }
    else
    {

                $sql = "INSERT INTO package (Name,Duration,details,start_date,end_date,amount) VALUES ('$Name','$Duration','$details','$start_date','$end_date','$amount')";
                //echo $sql;
                //die;
                if ($conn->query($sql) == TRUE) 
                {
                    header("Location:../ADMIN/admin_packages.php");
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
    }
else
{
    echo "please fill all information";
    header("Location:add_package.php");
}

?>

