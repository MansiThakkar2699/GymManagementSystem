<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/add_users.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Add Users | Fitness Hub Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="../../oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../../oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/iCheck/skins/minimal/blue.css" rel="stylesheet" />
    <link type="text/css" href="vendors/select2/css/select2.css" rel="stylesheet" />
    <link type="text/css" href="vendors/select2/css/select2-bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/add_users.css" rel="stylesheet" />
    <!--end of page level css-->
</head>
<body>
<?php include('admin_masterpage.php');?>
<aside class="right-side right-padding" > 
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Add User</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-fw fa-home"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="admin_add_user.php" class="activated">Add User</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid"  >
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12" >
                        <!-- Basic charts strats here-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-fw fa-user"></i>Add User
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body" style="border:1px solid #33a4d8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="add_users_form" action="../services/send_password.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Image</label>
                                                    <div class="col-md-7 text-center">
                                                        <div class="input-group">
                                                           <input type="file" name="img" id="img" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="fname">
                                                        First Name
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="text" class="form-control" id="fname" placeholder="First Name" name="First_name" required pattern="[A-Z ,a-z ]{2,}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="lname">
                                                        Last Name
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="Last_name" required pattern="[A-Z ,a-z ]{2,}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="mail">
                                                        Email
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="email" placeholder="Email Address" class="form-control" id="mail" name="Email_id" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="mail">
                                                        Password
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="password" placeholder="Password" class="form-control" id="pw" name="Password" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="contact">
                                                        Contact Number
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="number" placeholder="Phone Number" id="contact" class="form-control" name="Contact_no"  required pattern="[0-9]{2,}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 text-right">
                                                        Gender
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            Male: <input type="radio" name="gender" value="0" id="male" />
                                                            Female: <input type="radio" name="gender" value="1" id="female" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="dob">
                                                        Date Of Birth
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="date" class="form-control" id="dob" placeholder="Date Of Birth" name="DOB" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label  col-md-3" for="select23">User Type</label>
                                                    <div class="col-md-7">
                                                        <select id="select23" class="form-control js-states select2" name="role_idRole">
                                                            <optgroup>
                                                                <option value>Select User Type</option>
                                                                <option value="1">Admin</option>
                                                                <option value="2">Trainer</option>
                                                                <option value="3">Receptionist</option>
                                                                <option value="4">Nutritionist</option>
                                                                
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <input type="submit" class="btn btn-primary" value="Add" name="add"> &nbsp;
                                                        <input type="reset" class="btn btn-danger" value="Reset" onclick="ClearFields();">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-md-6 -->
                <!--row -->
                <!--row ends-->
            </div>
            <!-- /.content -->
        </aside>
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script src="vendors/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/add_users.js" type="text/javascript"></script>
    <!-- end of page level js -->
   
     <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>    
    <script src="js/custom_js/backstretch.js"></script>
    <!-- end of global level js -->
    <script src="vendors/jquery-circliful/js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="vendors/progressbar/bootstrap-progressbar.min.js" type="text/javascript"></script>
    <script src="vendors/countUp/countUp.js" type="text/javascript"></script>    
    <script src="vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <script>
     function ClearFields()
     {
         document.getElementById("img"").value="";
         document.getElementById("usr_name"").value="";
         document.getElementById("fname").value="";
         document.getElementById("lname").value="";
         document.getElementById("mail").value="";
         document.getElementById("pw").value="";
         document.getElementById("contact").value="";
         document.getElementById("male").value="";
         document.getElementById("female").value="";
         document.getElementById("dob").value="";
         document.getElementById("select23").value="";
         

     }
    </script>
</body>
    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
            $(function () {
                $("#datepicker").datepicker();
            });
    </script>

</body>


<!-- Mirrored from demo.lorvent.com/fitness/add_users.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:22 GMT -->
</html>