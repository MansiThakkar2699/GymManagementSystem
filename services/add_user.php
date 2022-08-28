<?php
require 'connection.php';
//echo '<pre>';
if(!empty($_POST))
{
	//print_r($_POST);die;
	$Email_id = $_POST['Email_id'];
	$sql = "SELECT* FROM user_master WHERE Email_id ='$Email_id' ";
	$result = $conn->query($sql);

	if ($result->num_rows == 0) 
	{
		$file_name = time().'.png';
		$target_file = "../ADMIN/profile/".$file_name;
		
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) 
		{
	        $User_name = $_POST['User_name'];
            $First_name = $_POST['First_name'];
            $Last_name = $_POST['Last_name'];
			$Contact_no = $_POST['Contact_no'];
			$password = $_POST['password'];
            $DOB = date('Y-m-d H:i:s');
            $Gender = $_POST['gender'];
            $role=$_POST['role_idRole'];
	        $sql = "INSERT INTO user_master (img,User_name, First_name,Last_name,Contact_no,Email_id,Password,DOB,gender,role_idRole)
				VALUES ('$file_name','$User_name', '$First_name','$Last_name','$Contact_no','$Email_id','$password','$DOB','$Gender','$role')";
				if ($conn->query($sql) == TRUE) 
				{
				    header("Location: ../ADMIN/admin_userlist.php");
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
		echo "Same email id already exists";
	}
	
}
else
{
	header("Location:../ADMIN/admin_add_user.php");
}
?>
