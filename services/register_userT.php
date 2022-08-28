<?php
	require 'connection.php';
	
	if(!empty($_POST))
	{
		$img = $_POST['img'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$bday = $_POST['bday'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$gender = $_POST['gender'];
		$idPackage = $_POST['idPackage'];
		if($password == $cpassword)
		{
			//Payment Code starts here
			$sql = "select * FROM package WHERE idPackage = '$idPackage'";

			$result = $conn->query($sql);

			$r = $result->fetch_assoc();
			$amount = $r['amount'];
			$packagename = 'Package selected for '.$r['Name'];
			$final_amount = $amount * 100;
			require_once('../vendor/autoload.php');

			\Stripe\Stripe::setApiKey('sk_test_PljPY8lToly2wuHAuofSm7Wu00URpbQDek');

			// Token is created using Stripe Checkout or Elements!
			// Get the payment token ID submitted by the form:
			$token = $_POST['stripeToken'];
			$charge = \Stripe\Charge::create([
			'amount' => $final_amount,
			'currency' => 'inr',
			'description' => $packagename,
			'source' => $token,
			]);
			// echo '<pre>';
			// print_r($charge);
			
			if($charge->captured ==1)
			{
				$sql = "INSERT INTO user_master (Password,First_name,Last_name,Contact_no,Email_id,DOB,gender,role_idRole,idPackage) VALUES ('$password','$fname','$lname','$contact','$email','$bday','$gender',5,'$idPackage')";

				if ($conn->query($sql) == TRUE) 
				{
					$last_id = $conn->insert_id;
					$qry="SELECT * FROM user_master WHERE role_idRole=2 ORDER BY RAND() LIMIT 1";
					$res=$conn->query($qry);
					$row=$res->fetch_assoc();
					$id=$row['idUser_master'];
					
					//echo $id;die;
					$sql1="UPDATE user_master SET trainer_id='$id'
												WHERE Email_id='$email'";
					if($conn->query($sql1) === TRUE)
					{
						
						$sql1 = "INSERT INTO payment (Total_amount,user_id,package_id) VALUES ('$amount','$last_id','$idPackage')";
						//echo $sql1; die;
						if ($conn->query($sql1) == TRUE) 
						{
							header("Location: ../index.php");
						}
						
					}
				} 
				else 
				{
					echo 400;
				}
			}
		}
		else
		{
			echo 400;
		}
	}
?>
