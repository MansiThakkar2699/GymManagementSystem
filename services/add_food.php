<?php
require 'connection.php';
if(!empty($_POST))
{
    //print_r($_POST);
    //die;
	$Foodtype = $_POST['Foodtype'];
    $Name = $_POST['Name'];
    $Protien=$_POST['Protien'];
    $Vitamins=$_POST['Vitamins'];
    $Calories=$_POST['Calories'];
    $Fat = $_POST['Fat'];
    $Carbohydrate= $_POST['Carbohydrate'];
    $Sodium = $_POST['Sodium'];
    $Fiber = $_POST['Fiber'];
    $Sugar= $_POST['Sugar'];
    $Totalcalories = $_POST['Totalcalories'];
	$sql = "INSERT INTO attribute (Foodtype,Name,Protien,Vitamins,Calories,Fat,Carbohydrate,Sodium,Fiber,Sugar,Totalcalories) VALUES ('$Foodtype','$Name','$Protien','$Vitamins','$Calories','$Fat','$Carbohydrate','$Sodium','$Fiber','$Sugar','$Totalcalories')";
    //echo $sql;
    //die;
    if ($conn->query($sql) == TRUE) 
	{
		header("Location:../NUTRITIONIST/Food.php");
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
