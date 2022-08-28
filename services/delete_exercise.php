<?php
require 'connection.php';
$idExercise = $_GET['idExercise'];
$sql = "DELETE FROM exercise WHERE idExercise=$idExercise";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../TRAINER/T_Excercise.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>