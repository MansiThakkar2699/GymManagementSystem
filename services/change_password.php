<?php
    session_start();
    $email=$_SESSION['email'];
    require '../services/connection.php';
    $sql="SELECT Password from user_master where Email_id = '$email'"; 
    $res= $conn->query($sql);
    $row1=$res->fetch_assoc();
    $pass=$row1['Password'];
    if(!empty($_POST))
    {
        $Password=$_POST['Password'];
        $npassword=$_POST['npassword'];
        echo $sql1 = "UPDATE user_master SET Password = '$npassword'
                                    WHERE Password='$pass'";
        if($conn->query($sql1))
        {
            header("Location: ../ADMIN/");
        }
        else
        {
            echo "failed";
        }
    }
?>