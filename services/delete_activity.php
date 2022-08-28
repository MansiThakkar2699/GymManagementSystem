<?php
require 'connection.php';
$idActivity = $_GET['idActivity'];
$sql = "DELETE FROM activity WHERE idActivity=$idActivity";
//echo $sql;
//die;
if ($conn->query($sql) === TRUE)
{
    header("Location:../ADMIN/admin_activity.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

?>