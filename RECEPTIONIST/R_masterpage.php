<?php
    session_start();
    $email=$_SESSION['email'];
    require '../services/connection.php';
    $sql="SELECT img from user_master where Email_id = '$email'"; 
    $res= $conn->query($sql);
    $row1=$res->fetch_assoc();
    //echo $row1['img'];
    //die;
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:02:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Welcome to Fitness Hub Receptionist Dashboard</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />
    <!-- Date picker -->
    <link href="vendors/air-datepicker-master/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <!-- end of global css -->
    <!-- page level css -->
    <link type="text/css" href="vendors/jquery-circliful/css/jquery.circliful.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="vendors/jquery-plugin-circliful-master/css/jquery.circliful.css"> -->
    <link type="text/css" href="vendors/progressbar/css/bootstrap-progressbar.min.css" rel="stylesheet">
    <link type="text/css" href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet">
    <link type="text/css" href="vendors/select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link type="text/css" href="css/custom_css/calendar_custom.css" rel="stylesheet">
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="vendors/nvd3chart/nv.d3.min.css">
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/admin_dashboard.css" rel="stylesheet">
    <!-- end of page level css -->
</head>
<body>

    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top">
            <a href="index-2.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <p style="color: #fff; margin-top: 15px;"><span style="font-weight: bold; font-size: large; margin-left:-80px;">Fitness</span><span style="font-size: large;">Hub</span><img src="img/dot.png" alt="logo" align="left"></p>
                <!--img src="img/dot.png" alt="image not found"><div>Fitness<span>Hub</span></div-->
            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-navicon"></i>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                        <ul class="dropdown-menu dropdown-messages table-striped">
                            <li>
                                <a href="#" class="message striped-col">  
                                </a>
                            </li>
                        </ul>
                    <!--tasks-->
                    <!-- Notifications: style can be found in dropdown-->
                    <!-- User Account: style can be found in dropdown-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                            <img src="../ADMIN/profile/<?php echo $row1['img'];?>" width="25" class="img-circle img-responsive pull-left" height="35" alt="User Image">
                            <div class="riot">
                                <div>
                                <?php 
                                        echo $_SESSION['NAME'];
                                    ?> 
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="../ADMIN/profile/<?php echo $row1['img'];?>" class="img-circle" alt="User Image">
                                <p> <?php 
                                        echo $_SESSION['NAME'];
                                    ?></p>
                            </li>
                            <!-- Menu Body -->
                            <li class="pad-3">
                                <a href="profile.php">
                                    <i class="fa fa-fw fa-user"></i> My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li role="presentation" class="divider"></li>
                            <li class="user-footer">
                                <a href="../ADMIN/change_password.php">
                                <i class="fa fa-key" aria-hidden="true"></i> Change Password
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li role="presentation" class="divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                    <a href="../logout.php">
                                        <i class="fa fa-fw fa-sign-out"></i> Logout
                                    </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="pull-left profile-thumb" href="#">
                                <img src="../ADMIN/profile/<?php echo $row1['img'];?>" class="img-circle" alt="User Image">
                            </a>
                            <div class="content-profile">
                                <h4 class="media-heading"> <?php 
                                        echo $_SESSION['NAME'];
                                    ?></h4>
                                <span class="text-default">Receptionist</span>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li class="active" id="active">
                            <a href="index.php">
                                <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                <span class="mm-text ">Dashboard</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="receptionist_company_profile.php">
                            <i class="fa fa-university" style="font-size:14px" aria-hidden="true"></i>Company Profile
                            </a>
                        </li>
                        <li>
                            <a href="receptionist_userlist.php">
                                <i class="text-success fa fa-fw fa-user"></i>
                                <span class="mm-text">Users List</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="fa fa-align-justify" style="font-size:2px;color:rgb(195, 0, 255)"></i>
                                <span class="mm-text">Schedule</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="Trainer_schedule.php">
                                        <i class="fa fa-hand-o-right" style="font-size:2px;color:rgb(0, 140, 255)"></i> Trainer Schedule
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
   
    <!-- global js -->
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
</body>
</html>
