<?php
require 'connection.php';
$idFeedback = $_GET['idFeedback'];
$sql = "DELETE FROM feedback WHERE idFeedback=$idFeedback";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../ADMIN/feedback.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>