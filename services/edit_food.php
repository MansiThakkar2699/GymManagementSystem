<?php
    if(!empty($_POST))
    {
        require 'connection.php';
        $id = $_POST['id'];
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
        $sql = "UPDATE attribute SET   Foodtype = '$Foodtype',
                                       Name = '$Name',
                                       Protien='$Protien',
                                       Vitamins='$Vitamins',
                                       Calories='$Calories',
                                       Fat = '$Fat',
                                       Carbohydrate= '$Carbohydrate',
                                       Sodium = '$Sodium',
                                       Fiber = '$Fiber',
                                       Sugar= '$Sugar',
                                       Totalcalories = '$Totalcalories'
                                       WHERE idAttribute = '$id'";
        //echo $sql;
        //die;
        if($conn->query($sql))
        {
            header("Location: ../NUTRITIONIST/Food.php");
        }
        else
        {
            echo "failed";
        }
    }
?>