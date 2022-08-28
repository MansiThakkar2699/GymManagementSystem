<?php
     $id = $_POST['id'];
     //echo $_POST['id'];
     //die;
    if(!empty($_POST))
    {
        require 'connection.php';
        
        //$img = $_POST['img'];
            //$id = $_POST['id'];
            $idUser_master = $_POST['id'];
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
        echo $sql = "UPDATE measurment SET age ='$age',
                                      weight='$weight',
                                      height='$height',
                                      BMI='$BMI',
                                      fat='$fat',
                                      neck='$neck',
                                      shoulder='$shoulder',
                                      chest='$chest',
                                      waist='$waist',
                                      thigh='$thigh',
                                      upper_arm='$upper_arm',
                                      fore_arm='$fore_arm',
                                      Date='$Date' 
                                      WHERE idMeasurment = '$idUser_master'";
                                      //die;

        //echo $sql;
        //die;
        if($conn->query($sql)===TRUE)
        {
            header("Location: ../TRAINER/measurement_list.php");
        }
        else
        {
            echo "failed";
        }
    }