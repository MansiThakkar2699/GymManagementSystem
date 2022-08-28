<?php
session_start();
require 'connection.php';
$email=$_SESSION['email'];
$sql="select * from user_master where Email_id='$email'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['idUser_master'];
if(!empty($_POST))
{
    $discription = $_POST['discription'];
	$qry = "INSERT INTO feedback (discription,idUser_master) VALUES ('$discription','$id')";
    if ($conn->query($qry) == TRUE) 
	{
		header("Location:../frontend/index.php");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
