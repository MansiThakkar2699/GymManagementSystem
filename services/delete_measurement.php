<?php
require 'connection.php';
$idMeasurment = $_GET['idMeasurment'];
$sql = "DELETE FROM measurment WHERE idMeasurment=$idMeasurment";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../TRAINER/measurement_list.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>