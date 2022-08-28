<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/user_packages.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:04:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>User Packages | Fitness Hub Admin Template</title>
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

    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/coupon.css" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.css">
    <link type="text/css" href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/fancyBox/source/jquery.fancybox8cbb.css?v=2.1.5" media="screen" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/timings.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
    <?php include('admin_dashboard.php');?>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
 
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
      
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>User Packages</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="active">
                        <a href="packages.html">User Packages</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-fw fa-file-text-o"></i> Present Packages
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class=" table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Package Name</th>
                                                <th>Duration</th>
                                                <th>Desciption</th>
                                                <th>Amount</th>
                                                <th>Payment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Yoga</td>
                                                <td>3 Months</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </td>
                                                <td>$60</td>
                                                <td>
                                                    <a href="user_amntpayment.html" class="btn btn-primary">Proceed to Pay</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Body Building</td>
                                                <td>2 Months</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </td>
                                                <td>$60</td>
                                                <td>
                                                    <a href="user_amntpayment.html" class="btn btn-primary">Proceed to Pay</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fitness</td>
                                                <td>1 Month</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </td>
                                                <td>$60</td>
                                                <td>
                                                    <a href="user_amntpayment.html" class="btn btn-primary">Proceed to Pay</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Aerobics</td>
                                                <td>1 Month</td>
                                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                </td>
                                                <td>$60</td>
                                                <td>
                                                    <a href="user_amntpayment.html" class="btn btn-primary">Proceed to Pay</a>
                                                </td>
                                            </tr>
                                        </tbody>
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
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="vendors/moment/moment.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="vendors/fancyBox/source/jquery.fancybox8cbb.js?v=2.1.5" type="text/javascript"></script>
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/timings.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/user_packages.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:04:52 GMT -->
</html>
