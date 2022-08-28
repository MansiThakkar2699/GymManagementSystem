<?php
session_start();
if(!empty($_POST))
{
    require 'connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
	$qry="SELECT role_idRole FROM user_master WHERE Email_id ='$email' AND Password = '$password'";
	
	$res = $conn->query($qry);
	while($row = $res->fetch_assoc())
	{
		$role=$row['role_idRole'];
	}
	$sql = "SELECT * FROM user_master WHERE Email_id ='$email' AND Password = '$password' AND role_idRole ='$role'";
	
	$result = $conn->query($sql);
    
	if ($result->num_rows == 1) 
    {
    	while($row = $result->fetch_assoc())
        {
        	$_SESSION['NAME'] =  $row['First_name'];	
			$_SESSION['ID'] = $row['idUser_master'];
			$package=$row['idPackage'];
        }

		$_SESSION['email'] =  $email;


		if($role==1)
		{
			header("Location: ../ADMIN/");
		}
		else if($role==2)
		{
			header("Location: ../TRAINER/");
		}
		else if($role==3)
		{
			header("Location: ../RECEPTIONIST/");
		}
		else if($role==4)
		{
			header("Location: ../NUTRITIONIST/");
		}
		else
		{
			if($package!="")
				header("Location: ../frontend/");
			else
			{
				echo "Please select at least one package";
			}
		}
	}
	else
	{
		header("Location: ../");
	}	
}
?>