<?php #include('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/admin_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Login | Fitness Hub Login Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="admin/vendors/iCheck/skins/all.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="ADMIN/vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link href="ADMIN/css/custom_css/admin-login.css" rel="stylesheet" type="text/css">
    <!-- end of page level styles-->
</head>

<body>
    <div class="container">
        <div class="full-content-center">
            <div class="box bounceInLeft animated">
                <p style="color: #fff; margin-top: 10px; margin-left: 30px;"><span style="font-weight: bold; font-size:x-large; margin-left: -10px; margin-top: 5px;">Fitness</span><span style="font-size: large;">Hub</span></p>
                <h3 class="text-center">Log In</h3>
                <form class="form" id="log_in" method="POST" action="services/login.php">
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required >
                    </div>
                    <!--<div class="form-group">
                        <label class="sr-only"></label>
                        <select id="select23" class="form-control js-states select2" name="role_idRole">
                                <option value>Select User Type</option>
                                <option value="1">Admin</option>
                                <option value="2">Trainer</option>
                                <option value="3">Receptionist</option>
                                <option value="4">Nutritionist</option>
                                <option value="5">Customer</option>
                        </select>
                    </div>-->
                    <input type="submit" class="btn btn-block btn-warning" value="Log In" name="reg">
                </form>
                <p>&nbsp;&nbsp;</p>
                <a href="ADMIN/user_forgot.php" class="text-warning forgot_color">Forgot Password?</a>
                <p>&nbsp;&nbsp;</p>
                <a href="Registration.php" class="text-warning forgot_color">Don't have a account ? REGISTER</a>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="admin/js/jquery.min.js" type="text/javascript"></script>
    <script src="admin/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="admin/vendors/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="ADMIN/vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="ADMIN/js/custom_js/login1.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>
<!-- Mirrored from demo.lorvent.com/fitness/admin_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:51 GMT -->
</html>

