<?php #include('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/admin_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Trainer Login | Fitness Hub Login Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="vendors/iCheck/skins/all.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link href="css/custom_css/admin-login.css" rel="stylesheet" type="text/css">
    <!-- end of page level styles-->
</head>

<body>
    <div class="container">
        <div class="full-content-center">
            <div class="box bounceInLeft animated">
                <p style="color: #fff; margin-top: 10px; margin-left: 30px;"><span style="font-weight: bold; font-size:x-large; margin-left: -10px; margin-top: 5px;">Fitness</span><span style="font-size: large;">Hub</span></p>
                <h3 class="text-center">Log In</h3>
                <form class="form" id="log_in" method="post" action="">
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="checkbox text-left">
                        <label>
                            <input type="checkbox"> Remember Password
                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Log In" name="reg">
                </form>
                <p class="text-right"><a href="user_forgot.html" class="text-warning forgot_color">Forgot Password?</a></p>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="vendors/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="js/custom_js/login1.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>
<!-- Mirrored from demo.lorvent.com/fitness/admin_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:51 GMT -->
</html>
<?php
//print_r($_POST); die;
if(!empty($_POST))
{
    require '../connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user_master WHERE Email_id ='$email' AND Password = '$password' AND role=2";
    //echo $sql; die;
	$result = $conn->query($sql);

	if ($result->num_rows == 1) 
    {
	    
        session_start();
        $_SESSION['email'] =  $email;
	    header("Location: T_dashboard.php");
	    echo 'Successfully logged in';
	}
	else
	{
		echo "Ivalid username and password";
	}	
}


?>
