<?php 
	require 'connection.php';
	
	$sql = "SELECT batch.*,user_master.First_name,user_master.Last_name from batch inner join user_master where batch.idUser_master=user_master.idUser_master";
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