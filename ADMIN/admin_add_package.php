<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/add_users.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Add Package | Fitness Hub Admin Template</title>
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
                <h2>Add Package</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-fw fa-home"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="admin_add_package.php" class="activated">Add Package</a>
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
                                <i class="fa fa-fw fa-user"></i>Add Package
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body" style="border:1px solid #33a4d8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="add_users_form" action="../services/add_package.php" class="form-horizontal" method="POST">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="lname">
                                                        Package Name
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="text" class="form-control" id="lname" placeholder="Package Name" name="Name" required pattern="[A-Z ,a-z ]{2,}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="lname">
                                                        Duration
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="text" class="form-control" id="duration" placeholder="Duration" name="Duration" required >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="lname">
                                                        Description
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="text" class="form-control" id="desc" placeholder="Description" name="details"   required pattern="[A-Z ,a-z ]{5,}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="dob">
                                                        Start Date
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="date" class="form-control" id="sd" placeholder="Start Date" name="start_date" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="dob">
                                                        End Date
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="date" class="form-control" id="ed" placeholder="End Date" name="end_date" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="lname">
                                                        Amount
                                                        <span class='require'>:</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <i class="fa fa-plus text-primary"></i>
                                                            </span>
                                                            <input type="number" class="form-control" id="amt" placeholder="Amount" name="amount" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                                        <input type="reset" class="btn btn-danger " value="Reset" onclick="ClearFields();">
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
    <script src="js/jquery.min.js" type="text/javascript"></script>
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
         document.getElementById("lname").value="";
         document.getElementById("duration").value="";
         document.getElementById("desc").value="";
         document.getElementById("sd").value="";
         document.getElementById("ed").value="";
         document.getElementById("amt").value="";
     }
    </script>
</body>


<!-- Mirrored from demo.lorvent.com/fitness/add_users.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:22 GMT -->
</html>