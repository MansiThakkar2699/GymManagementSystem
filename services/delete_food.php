<?php
require 'connection.php';
$idAttribute = $_GET['idAttribute'];
$sql = "DELETE FROM attribute WHERE idAttribute=$idAttribute";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../NUTRITIONIST/Food.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>