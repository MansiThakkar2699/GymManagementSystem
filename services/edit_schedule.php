<?php
	require 'connection.php';
	
	if(!empty($_POST))
	{
        $id = $_POST['id'];
		$select_user_type = $_POST['select_user_type'];
		$select_trainer = $_POST['select_trainer'];
		$select_customer = $_POST['select_customer'];
		$select_wo = $_POST['select_wo'];
		$sel_excer = $_POST['sel_excer'];
		$sel_act = $_POST['sel_act'];
		$sel_batch = $_POST['sel_batch'];
		$timing = $_POST['timing'];
		$day_sel = $_POST['day_sel'];

		if($select_user_type == 2)
		{
			$user = $select_trainer;
		}
		else
		{
			$user = $select_customer;
		}
		if($select_wo == 1)
		{
			$wotype = $sel_excer;
		}
		else
		{
			$wotype = $sel_act;
		}

	    $timing=$_POST['timing'];

        $sql="UPDATE schedule SET user_type = '$select_user_type',
                                    user_id = '$select_trainer',
                                    workout_type = '$select_wo',
                                    sub_workout_type = '$sel_excer',
                                    idBatch = '$sel_batch',
                                    timing = '$timing',
                                    day = '$day_sel'
                                    WHERE idSchedule = '$id'";
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