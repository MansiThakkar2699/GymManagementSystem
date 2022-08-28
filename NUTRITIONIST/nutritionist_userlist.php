<?php 
require '../services/connection.php';

$sql="select * from user_master where role_idRole=5";

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/admin_userlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Users List | Fitness Hub Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" rel="stylesheet" href="css/custom_css/panel.css" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/users_list.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
<?php include('N_masterpage.php');?>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
   
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
       
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Users List</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="admin_dashboard.php">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Users</a>
                    </li>
                    <li>
                        <a href="admin_userlist.php">Users List</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                        <i class="fa fa-fw fa-file-text-o"></i> Users List
                    </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            
                            <div class="panel-body table-responsive" style="border:1px solid #fc7070">
                                <table class="table table-bordered" id="fitness-table">
                                    <thead>
                                        <tr>
                                            <th>Profile</th> 
                                            <th>FirstName</th>
                                            <th>LastName</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>Role</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                    <?php while($row = $result->fetch_assoc())
                                                    { ?>
                                                    <tr>
                                                    <?php if(!empty($row['img']))
                                                    { ?>
	        		                                <td><img src="<?php  echo '../ADMIN/profile/'.$row['img']; ?>" height="100" width="100"></td>
	        		                                <?php	
	        	                                    }
	        	                                    else
	        	                                    { ?>
	        		                                <td><img src="<?php  echo '../ADMIN/profile/basic.jpg'; ?>" height="100" width="100"></td>
	        		                                <?php
	        	                                    } ?>  
                                                    <td><?php echo $row['First_name'];?></td>
                                                    <td><?php echo $row['Last_name'];?></td>
                                                    <td><?php echo $row['Email_id'];?></td>
                                                    <td><?php echo $row['Contact_no'];?></td>
                                                    <td><?php 
                                                    if($row['role_idRole'] == 1)
                                                    {
                                                        echo 'Admin';
                                                    }
                                                    else if($row['role_idRole'] == 2)
                                                    {
                                                        echo 'Trainer';
                                                    }
                                                    else if($row['role_idRole'] == 3)
                                                    {
                                                        echo 'Recepionist';
                                                    }
                                                    else if($row['role_idRole'] == 4)
                                                    {
                                                        echo 'Nutrionist';
                                                    }
                                                    else if($row['role_idRole'] == 5)
                                                    {
                                                        echo 'Customer';
                                                    }
                                                    ?></td>
                                                    <td>
                                                    <?php  echo ($row['gender'] == 0)?'Male':'Female'; ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-md-6 -->
                <!--row -->
            </div>
            <!--row ends-->
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
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
    
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    
    <!-- end of page level js -->
</body>
<!-- Mirrored from demo.lorvent.com/fitness/admin_userlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:13 GMT -->
</html>
<script type="text/javascript">
	$(document).ready( function () {
	    $('#fitness-table').DataTable();
	    $( ".delete-user" ).click(function() {
		  if(confirm("Are you sure you want to delete this record?"))
		  {
		  	var idUser_master = $(this).attr('idUser_master');
		  	window.location.href = "../services/delete_user.php?idUser_master="+idUser_master;
		  }
		});
	} );
</script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>    
    <script src="js/custom_js/backstretch.js"></script>
    <script src="vendors/jquery-circliful/js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="vendors/progressbar/bootstrap-progressbar.min.js" type="text/javascript"></script>
    <script src="vendors/countUp/countUp.js" type="text/javascript"></script>    
    <script src="vendors/moment/min/moment.min.js" type="text/javascript"></script>
