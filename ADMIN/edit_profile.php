<?php 
    error_reporting(0);    
    session_start();
    require '../services/connection.php';
    $id = $_GET['id'];
    $sql="select * from user_master where idUser_master=$id";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())
    {
        $id = $row['idUser_master'];
        $First_name= $row['First_name'];
        $Last_name= $row['Last_name'];
        $img=$row['img'];
        $email= $row['Email_id'];
        $contact = $row['Contact_no'];
        $gender = $row['gender'];
        $DOB = $row['DOB'];
    }
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
<?php include('admin_masterpage.php');?>
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
                            <form method="POST" action="../services/edit_profile.php" enctype="multipart/form-data">
                                <div class="col-md-3 text-center">
                                <img src="<?php echo 'profile/'.$img; ?>" height="100" width="100">
                                <input type="file" name="img">
                                <input type="hidden" name="old_file_name" value="<?php  echo 'profile/'.$img; ?>">
                                <!-- <a class="edit btn btn-primary"><i class="fa fa-fw fa-edit"></i>Update</a> -->
                                <input type="submit" value="Update" class="btn btn-primary" name="">
                                
                                </div>
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>First Name:</td>
                                        
                                            <td><input type="text" name="First_name" value="<?php echo $First_name;?>"></td>
                                                                    
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                        
                                            <td><input type="text" name="Last_name" value="<?php echo $Last_name;?>"></td>
                                                                    
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td>
                                                <input type="text" name="gender" value="<?php echo ($gender == 0)?'Male':'Female';0?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><input type="text" name="Email_id" value="<?php echo $email;?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number:</td>
                                            <td><input type="number" name="Contact_no" value="<?php echo $contact;?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Date Of Birth:</td>
                                            <td><input type="date" name="DOB" value="<?php echo $DOB;?>"></td>
                                        </tr>
                                    </table>
                                </div>
                                </div>
                            </form>
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
