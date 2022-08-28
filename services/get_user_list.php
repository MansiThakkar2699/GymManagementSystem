<?php 
	require 'connection.php';

	$sql="select * from user_master WHERE role_idRole=5";

	$result = $conn->query($sql);
	$row = array();
	
	while($r = $result->fetch_assoc())
	{
		$row[] = $r;
	}

	echo json_encode($row);
?>