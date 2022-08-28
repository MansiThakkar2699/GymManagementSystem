<?php 
	require 'connection.php';

	$user_type = $_POST['user_type'];
	$day = $_POST['day'];

	$sql = "select schedule.*,user_master.First_name,user_master.Last_name FROM schedule INNER JOIN user_master WHERE schedule.user_id = user_master.idUser_master AND schedule.user_type = '$user_type' AND day = '$day'";




	$result = $conn->query($sql);
	$row = array();
	$main_arr = array();

	while($r = $result->fetch_assoc())
	{
		$workout_type = $r['workout_type'];

		$row['idSchedule'] = $r['idSchedule'];
		$row['fname'] = $r['First_name'];
		$row['lname'] = $r['Last_name'];

		$row['timing'] = $r['timing'];

		if($workout_type == 1)
		{
			$row['workout_type'] = "Exercise";
		
			$sub_wo_id = $r['sub_workout_type'];

			$sql_swt = "select exercise.*,user_master.First_name,user_master.Last_name from exercise INNER JOIN user_master WHERE (exercise.idUser_master = user_master.idUser_master) AND exercise.idExercise = $sub_wo_id";
		
			$result_swt = $conn->query($sql_swt);

			$sub_workout_type = array();

			while($r_swt = $result_swt->fetch_assoc())
			{
				$row['sub_workout_type'] = $r_swt['name'];
				$row['tfname'] = $r_swt['First_name'];
				$row['tlname'] = $r_swt['Last_name'];
			}

			// $row['stype'] = $sub_workout_type;
		}


		if($workout_type == 0)
		{
			$row['workout_type'] = "Activity";
		
			$sub_wo_id = $r['sub_workout_type'];

			$sql_swt = "select activity.*,user_master.First_name,user_master.Last_name from activity INNER JOIN user_master WHERE (activity.idUser_master = user_master.idUser_master) AND activity.idActivity = $sub_wo_id";
		
			$result_swt = $conn->query($sql_swt);

			$sub_workout_type = array();

			while($r_swt = $result_swt->fetch_assoc())
			{
				$row['sub_workout_type'] = $r_swt['Activity_name'];
				$row['tfname'] = $r_swt['First_name'];
				$row['tlname'] = $r_swt['Last_name'];
			}

			// $row['stype'] = $sub_workout_type;
		}

		
		$main_arr[] = $row;
	}

	// print_r($main_arr);

	echo json_encode($main_arr);
?>