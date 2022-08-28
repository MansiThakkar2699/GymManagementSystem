<?php 
session_start();
//print_r($_SESSION['ID']);die;
error_reporting(0);

$ID = $_SESSION['ID'];

require '../services/connection.php';
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
    <link type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/users_list.css" rel="stylesheet" />
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
                                <div class="col-md-3 text-center">
                                <?php
                                $email=$_SESSION['email'];
                                $sql="select * from user_master where role_idRole=1 and Email_id='$email'";
                                $result = $conn->query($sql);
                                ?>
                                <?php while($row = $result->fetch_assoc())
                                { ?>
                                    <?php if(!empty($row['img']))
                                    { ?>
                                        <img id="prof_pic" src="<?php  echo 'profile/'.$row['img']; ?>" height="100" width="100">
                                    <?php	
                                    }
                                    else
                                    { ?>
                                        <img src="<?php  echo 'profile/basic.jpg'; ?>" height="100" width="100">
                                    <?php
                                    } ?> 
                                <br/><br/>
                                <a class="delete btn btn-danger delete-user" id="delete_prof_pic"><i class="fa fa-trash-o"> Delete</i> </a>
                                <a class="edit btn btn-primary" href=<?php echo "edit_profile.php?id=$ID";?>><i class="fa fa-fw fa-edit"></i> Edit</a>
                                </div>
                                <div class="col-md-9">
                                    <table class="table table-bordered" id="fitness-table">
                                        <tr>
                                            <td>First Name:</td>
                                        
                                                <td><?php echo $row['First_name'];?></td>
                                                                    
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                        
                                                <td><?php echo $row['Last_name'];?></td>
                                                                    
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
<script type="text/javascript">
	$(document).ready( function () {
	    //$('#fitness-table').DataTable();

        $('#delete_prof_pic').click(function(){
            alert($('#prof_pic').attr('src'));

            $.post('../services/delete_profile.php',{
                src:$('#prof_pic').attr('src'),
                id:'<?php  echo $ID; ?>'
            },function(data){
                if(data == 200)
                {
                    location.reload();
                    // $('#prof_pic').attr('src','profile/basic.jpg');
                }
            });
        });
	} );
</script>