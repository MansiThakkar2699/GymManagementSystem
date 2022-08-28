<?php
	require 'connection.php';
	
	if(!empty($_POST))
	{
		//$img = $_POST['img'];
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
			$qry="select * from offer ORDER BY idOffer DESC";
			$result1 = $conn->query($qry);
			$res=$result1->fetch_assoc();
			$sql = "select * FROM package WHERE idPackage = '$idPackage'"; 
			$result = $conn->query($sql);
			$r = $result->fetch_assoc();
			$amount = $r['amount'];
			$discont = $res['Discount'];
			//echo $discont;die;
			$packagename = 'Package selected for '.$r['Name'];
			//$famt=($amount-$discont)/100;
			//$final_amount = $amount;
			//echo $final_amount;die;
			//require_once('../vendor/autoload.php');

			//\Stripe\Stripe::setApiKey('sk_test_PljPY8lToly2wuHAuofSm7Wu00URpbQDek');

			// Token is created using Stripe Checkout or Elements!
			// Get the payment token ID submitted by the form:
			//$token = $_POST['stripeToken'];
			/*$charge = \Stripe\Charge::create([
			'amount' => $final_amount,
			'currency' => 'inr',
			'description' => $packagename,
			'source' => $token,
			]);
			// echo '<pre>';
			// print_r($charge);
			
			if($charge->captured ==1)
			{*/
				$sql1 = "INSERT INTO user_master (Password,First_name,Last_name,Contact_no,Email_id,DOB,gender,role_idRole,idPackage) VALUES ('$password','$fname','$lname','$contact','$email','$bday','$gender',5,'$idPackage')";

				if ($conn->query($sql1) == TRUE) 
				{
					$last_id = $conn->insert_id;
					$qry1="SELECT * FROM user_master WHERE role_idRole=2 ORDER BY RAND() LIMIT 1";
					$res=$conn->query($qry1);
					$row=$res->fetch_assoc();
					$id=$row['idUser_master'];
					
					//echo $id;die;
					$sql2="UPDATE user_master SET trainer_id='$id'
												WHERE Email_id='$email'";
					if($conn->query($sql2) === TRUE)
					{
						
						//$sql3 = "INSERT INTO payment (Total_amount,user_id,package_id) VALUES ('$amount','$last_id','$idPackage')";
						//echo $sql1; die;
						//if ($conn->query($sql1) == TRUE) 
						//{
							//alert("You are Registed now...");
							header("Location: ../index.php");
						//}
						
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
	//}
?>
