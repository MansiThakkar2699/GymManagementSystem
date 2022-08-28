<?php
require 'connection.php';
$idPackage = $_GET['idPackage'];
$sql = "DELETE FROM package WHERE idPackage=$idPackage";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../ADMIN/admin_packages.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>