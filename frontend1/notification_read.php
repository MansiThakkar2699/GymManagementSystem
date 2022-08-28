<?php
session_start();
require '../services/connection.php';
$email=$_SESSION['email'];
//echo $email;die;
$sql="select * from user_master where Email_id='$email'";
//echo $sql;die;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['idUser_master'];
//echo $id;die;
$qry="Update attendance set notify = 1 where idUser_master='$id'";
//echo $qry;die;
if($conn->query($qry))
{
    header("Location:attendance.php");
}
else
{
    echo "failed";
}
?>