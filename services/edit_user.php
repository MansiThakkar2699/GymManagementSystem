<?php
    if(!empty($_POST))
    {
        require 'connection.php';
        
        //$img = $_POST['img'];
        $id = $_POST['id'];
        $role = $_POST['role_idRole'];
        //print_r($_FILES); die;
        $sql = "UPDATE user_master SET role_idRole = '$role' WHERE idUser_master = $id";
         if($conn->query($sql))
         {
             header("Location: ../ADMIN/admin_userlist.php");
         }
         else
         {
             echo "failed";
         }
    }
?>