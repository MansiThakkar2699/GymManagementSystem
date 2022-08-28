<?php
	require 'connection.php';
	$idUser_master = $_POST['id'];
	$src = $_POST['src'];

	$filename = basename($src);

	$sql = "UPDATE user_master SET img = '' WHERE img = '$filename' AND idUser_master = $idUser_master"; 
	
	if ($conn->query($sql) === TRUE)
	{
		unlink('../ADMIN/profile/'.$src);
		echo 200;
	    //header("Location:../ADMIN/profile.php");
	} 
	else 
	{
		echo 400;
	    // echo "Error deleting record: " . $conn->error;
	}
?>