<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/user_index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:04:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Welcome to Fitness Hub User Dashboard</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="../../oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../../oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <!--[endif]-->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/index.css" rel="stylesheet">
    <!-- end of global css -->
    <!-- page level css -->
    <link type="text/css" href="vendors/progressbar/css/bootstrap-progressbar.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/user_dashboard.css" rel="stylesheet" />
    <!-- page level css end-->
</head>

<body>
    <?php include('admin_dashboard.php');?>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
  
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
       
        <aside class="right-side bg-right">
            <!-- Content Header (Page header) -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-xs-12">
                        <div class="user_box">
                            <div class="fit-user">
                                <img src="img/authors/avatar1.jpg" class="img-responsive" alt="image not found">
                            </div>
                            <div class="symboll bg-danger">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <i class="fa fa-venus pull-left"></i>
                                        <h5> Nataliapery</h5>
                                        <h6>23 May, 1993</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user_dash">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6 pad0">
                                    <div class="box1">
                                        <h5>Gender</h5>
                                        <h6>Female</h6>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6 pad0">
                                    <div class="box2">
                                        <h5>Height</h5>
                                        <h6>172cm</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-6 pad0">
                                    <div class="box1">
                                        <h5>Age</h5>
                                        <h6>22</h6>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6 pad0">
                                    <div class="box2">
                                        <h5>Weight</h5>
                                        <h6>53kg</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row prg-sec pad-top">
                                BMI<span class="done pull-right">20.4%</span>
                                <div class="progress progress-striped active pad-rgt">
                                    <div class="progress-bar bar-primary" role="progressbar" data-transitiongoal="40"></div>
                                </div>
                            </div>
                            <div class="row prg-sec">
                                Fat<span class="done pull-right">11%</span>
                                <div class="progress progress-striped active pad-rgt ">
                                    <div class="progress-bar bar-success" role="progressbar" data-transitiongoal="15"></div>
                                </div>
                            </div>
                            <div class="row prg-sec">
                                Food Intake<span class="done pull-right"></span><span class="pull-right">150 KCal</span>
                                <div class="progress progress-striped active pad-rgt">
                                    <div class="progress-bar bar-warning" role="progressbar" data-transitiongoal="30"></div>
                                </div>
                            </div>
                            <div class="row prg-sec">
                                Sleeping Hours<span class="done pull-right"></span><span class="pull-right">8h 25min</span>
                                <div class="progress progress-striped active pad-rgt">
                                    <div class="progress-bar bar-danger" role="progressbar" data-transitiongoal="30"></div>
                                </div>
                            </div>
                        </div>
                        <div class="user_dash marg-top">
                            <div class="prg-sec">
                                <h4 class="health">Health Tip Of The Day</h4>
                                <p> <strong> Walk for Health:</strong> There is nothing better than walking. Walking a mile everyday, or taking reasonable exercise three times a week, promises to reduce the risk of heart disease, as well as strengthens bones and keeps them strong.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-xs-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="user_box">
                                    <div class="row circle">
                                        <div class="col-lg-5 pad-rgt text-center">
                                            <svg id="fillgauge1" width="97%" height="90"></svg>
                                        </div>
                                        <div class="col-lg-7 text-center">
                                            <h5 class="text-success heading-number-size-font-size">26.7%</h5>
                                            <h6>PROTEIN NEEDED</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="user_box">
                                    <div class="row circle">
                                        <div class="col-lg-5 pad-rgt text-center">
                                            <svg id="fillgauge2" width="97%" height="90"></svg>
                                        </div>
                                        <div class="col-lg-7 text-center">
                                            <h5 class="text-primary heading-number-size-font-size">48%</h5>
                                            <h6>WATER INTAKE</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="user_box">
                                    <div class="row circle">
                                        <div class="col-lg-5 pad-rgt text-center">
                                            <svg id="fillgauge3" width="97%" height="90"></svg>
                                        </div>
                                        <div class="col-lg-7 text-center">
                                            <h5 class="text-danger heading-number-size-font-size">70 BPM</h5>
                                            <h6>HEART RATE</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="dash-box">
                                    <h4 class="mar-left5">Weight Loss</h4>
                                    <ul class="list-inline weight">
                                        <li>Present Weight: <span class="text-success"> 205lbs</span></li>
                                        <li>Target Weight: <span class="text-danger"> 135lbs</span></li>
                                    </ul>
                                    <canvas id="myChart" width=500 height=300></canvas>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="user_box">
                                    <h4 class="mar-left5">Sleep Analytics</h4>
                                    <div class="sleep">
                                        <div class="row">
                                            <div id="basicFlotLegend" class="flotLegend"></div>
                                        </div>
                                        <div id="bar-chart-stacked" class="flotChart1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12">
                                <div class="user_box event">
                                    <h4 class="mar-left5">Events</h4>
                                    <div class="newstick">
                                        <div class="news-items">
                                            <div>
                                                <a href="user_eventitem.html">
                                                    <div class="row">
                                                        <img src="img/admin/event1.png" class="recent-user-img" alt="image not found">
                                                        <h5 class="text-primary">One Week Yoga Special Training </h5>
                                                        <small>16 /09 / 2016 - 21 / 09 / 2016 </small>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="user_eventitem.html">
                                                    <div class="row bg-default">
                                                        <img src="img/admin/event2.png" class="recent-user-img" alt="image not found">
                                                        <h5 class="text-primary"> Personal Training happy week</h5>
                                                        <small>03 / 09 / 2016- 09 / 09 / 2016</small>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="user_eventitem.html">
                                                    <div class="row">
                                                        <img src="img/admin/event3.png" class="recent-user-img" alt="image mot found">
                                                        <h5 class="text-primary"> 5k Marthon </h5>
                                                        <small>25 / 08 / 2016 </small>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="user_eventitem.html">
                                                    <div class="row bg-default">
                                                        <img src="img/admin/event4.png" class="recent-user-img" alt="image not found">
                                                        <h5 class="text-primary">Soul Searching</h5>
                                                        <small>18 / 08 / 2016 - 20 / 08 / 2016</small>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="user_eventitem.html">
                                                    <div class="row">
                                                        <img src="img/admin/event5.png" class="recent-user-img" alt="image not found">
                                                        <h5 class="text-primary">XT Series Championship</h5>
                                                        <small>15 / 07 / 2016 - 17 / 07 / 2016</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <div class="user_box">
                                    <h4 class="mar-left5">Payments</h4>
                                    <div class="col-lg-6 col-xs-6">
                                        <div class="payments">
                                            <h1 class="pull-left text-success">$90</h1>
                                            <h6><span class="text-success">PAID</span></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xs-6">
                                        <div class="payments">
                                            <h1 class="pull-left text-danger">$70</h1>
                                            <h6><span class="text-danger">PENDING</span></h6>
                                        </div>
                                    </div>
                                    <div class="recent-payment">
                                        <h5 class="mar-left5">Recent Payments</h5>
                                        <div class="mar-left-right">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="bg-primary">
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>10 / 10 / 2016</td>
                                                        <td>$70</td>
                                                        <td class="text-danger">Pending</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10 / 09 / 2016</td>
                                                        <td>$30</td>
                                                        <td class="text-success">Paid</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10 / 08 / 2016</td>
                                                        <td>$30</td>
                                                        <td class="text-success">Paid</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10 / 07 / 2016</td>
                                                        <td>$30</td>
                                                        <td class="text-success">Paid</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!-- /#right -->
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <!--page level js-->
    <script src="vendors/progressbar/bootstrap-progressbar.js" type="text/javascript"></script>
    <script src="vendors/d3-chart/d3.v3.min.js" type="text/javascript"></script>
    <script src="vendors/chartsjs/floatchart/jquery.flot.min.js" type="text/javascript"></script>
    <script src="vendors/chartsjs/floatchart/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="vendors/chartsjs/floatchart/jquery.flot.categories.js" type="text/javascript"></script>
    <script src="vendors/chartsjs/floatchart/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script type="text/javascript" src="vendors/jquery-easy-ticker-master/jquery.easy-ticker.min.js"></script>
    <script src="vendors/chartsjs/chart.js" type="text/javascript"></script>
    <script type="text/javascript" src="vendors/d3-liquid-fill-gauge-master/liquidFillGauge.js"></script>
    <script src="js/custom_js/dashboard.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/user_index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:04:18 GMT -->
</html>
