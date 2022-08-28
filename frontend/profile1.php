<?php 
require '../services/connection.php';
$sql="select * from user_master where role_idRole=5";
$result = $conn->query($sql);
$id=$row['trainer_id'];
$qry="select First_name from user_master where trainer_id='$id'";
$res=$conn->query($qry);
$row1=$res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:04:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>User Profile | Fitness Hub Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css  -->
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/custom_css/user_profile.css" />
    <!--end of page level css-->
</head>

<body>
    <?php //include('m.php');?>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Profile</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="profile.php">User Profile</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">User Profile</div>
                    </div>
                    <div class="panel-body">
                        <!--main content-->
                            <div class="row">
                                <div class="col-md-3 text-center">
                                <?php while($row = $result->fetch_assoc())
                                { ?>
                                    <?php if(!empty($row['img']))
                                    { ?>
                                        <img src="<?php  echo 'profile/'.$row['img']; ?>" height="100" width="100">
                                    <?php	
                                    }
                                    else
                                    { ?>
                                        <img src="<?php  echo 'profile/basic.jpg'; ?>" height="100" width="100">
                                    <?php
                                    } ?> 
                                
                                <input type="file" name="img" />
                                <a class="delete btn btn-danger delete-user" idUser_master=<?php echo $row['idUser_master'];?>><i class="fa fa-trash-o"> Delete</i> </a>
                                </div>
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Username:</td>
                                        
                                                <td><?php echo $row['User_name'];?></td>
                                                                    
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td>
                                                <?php  echo ($row['gender'] == 0)?'Male':'Female'; ?>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><?php echo $row['Email_id'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number:</td>
                                            <td><?php echo $row['Contact_no'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Date Of Birth:</td>
                                            <td><?php echo $row['DOB'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Assigned Trainer:</td>

                                            <td><?php echo $row1['First_name'];?></td>
                                        </tr>
                                        <?php  } ?>  
                                    </table>
                                </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.min.js" type="text/javascript"></script>
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
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:04:55 GMT -->
</html>
