<?php
require 'connection.php';
$idUser_master = $_GET['idUser_master'];
$sql = "DELETE FROM user_master WHERE idUser_master=$idUser_master";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../ADMIN/admin_userlist.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>