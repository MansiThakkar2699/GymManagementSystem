<?php
require 'connection.php';
if(isset($_POST['forgot']))
{
	$email=$_POST['Email_id'];
    $sql="select * from user_master where Email_id = $email";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
	$email2=$row['Email_id'];
	if($email == $email2)
	{
		echo "<script>location.href='CustomerMail.php?id=$res2[0]'</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('E-mail is not regirstered ');";
		echo "</script>";
	}	
}
		
?>