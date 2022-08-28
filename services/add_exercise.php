<?php
require 'connection.php';
			if(!empty($_POST))
			{
				$type = $_POST['type'];
				$name = $_POST['name'];
            	$Day=$_POST['Day'];
				$detail=$_POST['detail'];

				$qry="select * from exercise WHERE name='$name'";
				$res = $conn->query($qry);
				if(mysqli_num_rows($res)>0)
				{
					echo "Same Exercise name already exist";
				}
				else
				{
					$sql = "INSERT INTO exercise (type,name,Day,detail) VALUES ('$type','$name','$Day',$detail')";
					if ($conn->query($sql) == TRUE) 
					{
				    	header("Location: ../TRAINER/T_Excercise.php");
					} 
					else 
					{
				    	echo "Error: " . $sql . "<br>" . $conn->error;
                	}
				}
			}
			else
			{
				echo "please fill all information";
				header("Location:add_exercise.php");
			}
?>
