<?php
require 'connection.php';
$idSchedule = $_GET['idSchedule'];
$sql = "DELETE FROM schedule WHERE idSchedule=$idSchedule";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../ADMIN/Trainer_schedule.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>