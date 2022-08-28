<?php
	require 'connection.php';
	if(!empty($_POST))
	{
		$idUser_master = $_POST['idUser_master'];
		$select_wo = $_POST['select_wo'];
		$sel_excer = $_POST['sel_excer'];
		$sel_act = $_POST['sel_act'];
		$timing = $_POST['timing'];
		$day_sel = $_POST['day_sel'];
		if($select_wo == 1)
		{
			$wotype = $sel_excer;
		}
		else
		{
			$wotype = $sel_act;
		}

	    $timing=$_POST['timing'];

	    $sql = "INSERT INTO schedule (user_type,user_id,workout_type,sub_workout_type,timing,day) VALUES (2,$idUser_master,$select_wo,$wotype,'$timing','$day_sel')";
		//echo $sql; die;
		if ($conn->query($sql) == TRUE) 
		{
			echo 200;
		} 
		else 
		{
		    echo 400;
        }
	}
?>