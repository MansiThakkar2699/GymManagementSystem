<?php 
	session_start();
	$id=$_SESSION['ID'];
	require 'connection.php';
	$sql = "SELECT exercise.*,user_master.First_name,user_master.Last_name from exercise inner join user_master where exercise.idUser_master=user_master.idUser_master";
	$result = $conn->query($sql);
	$row = array();
	$main_arr = array();

	while($r = $result->fetch_assoc())
	{
		$row[] = $r;
	}

	// print_r($main_arr);
	echo json_encode($row);
?>