<?php
require 'connection.php';
$idOffer = $_GET['idOffer'];
$sql = "DELETE FROM offer WHERE idOffer=$idOffer";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../ADMIN/admin_offers.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>