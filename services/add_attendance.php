<?php
	require 'connection.php';
	if(!empty($_POST))
	{
		$cdate = date('Y-m-d');

		$id = $_POST['id'];
		
		$sql_check = "SELECT * FROM attendance WHERE idUser_master = $id AND created_at LIKE '$cdate%'";

		$result = $conn->query($sql_check);

		if($result->num_rows > 0)
		{
			echo 401;
		}
		else
		{
			$d=date("l");
			$sql = "INSERT INTO attendance (idUser_master,day) VALUES ($id,'$d')";
			//echo $sql;die;

			if ($conn->query($sql) == TRUE) 
			{
		    	echo 200;
			}
			else 
			{
		    	echo 400;
	    	}	
		}

		
	}
?>