<?php
require 'connection.php';
//echo '<pre>';
// print_r($_FILES); die;
if(!empty($_FILES['Diet_chart']))
{
		$file_name = $_FILES['Diet_chart']['name'];
		$target_file = "../ADMIN/uploads/diet/".$file_name;
		if (move_uploaded_file($_FILES["Diet_chart"]["tmp_name"], $target_file)) 
		{
            $idUser_master=$_POST['idUser_master'];
			$sql = "INSERT INTO diet (Diet_chart,idUser_master) VALUES ('$file_name','$idUser_master')";
				if ($conn->query($sql) == TRUE) 
				{
				    header("Location: ../NUTRITIONIST/diet_list.php");
				} 
				else 
				{
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
	    } 
	    else 
	    {
	        echo "Sorry, there was an error uploading your data.";
	    }
}
else
{

	header("Location:add_user.php");
}
?>
