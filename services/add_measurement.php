<?php
require 'connection.php';
            $idUser_master = $_POST['idUser_master'];
            $age=$_POST['age'];
            $weight=$_POST['weight'];
            $height=$_POST['height'];
            $BMI=$_POST['BMI'];
            $fat=$_POST['fat'];
            $neck=$_POST['neck'];
            $shoulder=$_POST['shoulder'];
            $chest=$_POST['chest'];
            $waist=$_POST['waist'];
            $thigh=$_POST['thigh'];
            $upper_arm=$_POST['upper_arm'];
            $fore_arm=$_POST['fore_arm'];
            $Date=$_POST['Date'];
           
	        $sql = "INSERT INTO measurment (idUser_master,age,weight,height,BMI,fat,neck,shoulder,chest,waist,thigh,upper_arm,fore_arm,Date) VALUES ('$idUser_master','$age','$weight','$height','$BMI','$fat','$neck','$shoulder','$chest','$waist','$thigh','$upper_arm','$fore_arm','$Date')";
            //echo $sql;die;
				if ($conn->query($sql) == TRUE) 
				{
				    header("Location: ../TRAINER/measurement_list.php");
				} 
				else 
				{
				    echo "Error: " . $sql . "<br>" . $conn->error;
                }
?>
