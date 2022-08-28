<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/user_payments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:04:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>User Payment | Fitness Hub Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="../../oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../../oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <!--[endif]-->
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/fancyBox/source/jquery.fancybox8cbb.css?v=2.1.5" media="screen" rel="stylesheet" />
    <link type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
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
                <h2>Payment</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="user_index.html">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="user_payments.html">Payment</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <tbody>
                                <tr class="text-center">
                                    <td>
                                        <h5>Course: <span>Aerobics</span></h5>
                                    </td>
                                    <td>
                                        <h5>Duration: <span>6 Months</span></h5>
                                    </td>
                                    <td>
                                        <h5>Total Amount: <span>$250</span></h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Payment History
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Amount Paid</th>
                                                <th class="text-center">Amount Due</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>4th Mar 2015</td>
                                                <td>$50</td>
                                                <td>$200</td>
                                            </tr>
                                            <tr>
                                                <td>8th May 2015</td>
                                                <td>$120</td>
                                                <td>$130</td>
                                            </tr>
                                            <tr>
                                                <td>11th Aug 2015</td>
                                                <td>$80</td>
                                                <td>$170</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <tbody>
                                <tr class="text-center">
                                    <td>
                                        <h5>Course: <span>Yoga</span></h5>
                                    </td>
                                    <td>
                                        <h5>Duration: <span>3 Months</span></h5>
                                    </td>
                                    <td>
                                        <h5>Total Amount: <span>$110</span></h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Present Course Payments
                                </div>
                            </div>
                            <div class="panel-body text-center">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Amount Paid</th>
                                                <th class="text-center">Amount Due</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1st Sept 2015</td>
                                                <td>$60</td>
                                                <td>$50</td>
                                            </tr>
                                            <tr>
                                                <td>8th Sept 2015</td>
                                                <td>$30</td>
                                                <td>$80</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="user_amntpayment.html" class="btn btn-primary">Proceed to Pay</a>
                        </div>
                    </div>
                </div>
                <!-- col-md-6 -->
                <!--row -->
                <!--row ends-->
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
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/fancyBox/source/jquery.fancybox8cbb.js?v=2.1.5" type="text/javascript"></script>
    <script src="js/custom_js/user_course_schedule.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/user_payments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:04:54 GMT -->
</html>
