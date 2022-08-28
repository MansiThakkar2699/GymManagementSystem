<?php
require 'connection.php';
$idCompany = $_GET['idCompany'];
$sql = "DELETE FROM company WHERE idCompany=$idCompany";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../ADMIN/company_profile.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>