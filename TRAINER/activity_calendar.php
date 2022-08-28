<?php
require '../services/connection.php';   
$sql = "SELECT * FROM activity";
$result = $conn->query($sql);
$masterarray = array();

while($row = $result->fetch_assoc())
{
    $exp_time = explode(":", $row['Time'])[0];
    $childarray[$exp_time.'_'.$row['Day']] = $row['Activity_name'];
}

$e_time = array('05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');
$day_arr = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/user_course_schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:04:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title> Activity Calender | Fitness Hub Admin Template</title>
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
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/user_course_schedule.css" rel="stylesheet" />
    <!--end of page level css-->

    <script src="js/jquery.min.js" type="text/javascript"></script>
</head>
<body>
    <?php include('T_masterpage.php');?>
        <aside class="right-side right-padding">
        <section class="content-header">
                <!--section starts-->
                <h2>Activity Calender</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                    <a href="#">Activity</a>
                    </li>
                    <li>
                        <a href="admin_activity_calender.php">Activity Calender</a>
                    </li>
                </ol>
            </section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="background-color:#33a4d8">
                                <h4 class="panel-title"><i class="fa fa-clock-o"></i>Activity Calender</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>

                            <div class="panel-body table-responsive" style="border:1px solid #33a4d8">
                                <div class="table-scrollable">
                                    <table class="table table-bordered timings-tab">
                                        <thead>
                                            <tr class="table-heading-background">
                                                <th>TIME</th>
                                                <th>MONDAY</th>
                                                <th>TUESDAY</th>
                                                <th>WEDNESDAY</th>
                                                <th>THURSDAY</th>
                                                <th>FRIDAY</th>
                                                <th>SATURDAY</th>
                                                <th>SUNDAY</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($e_time  as $value) 
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $value.':00:00'; ?></td>
                                                    <?php
                                                            for($i = 0; $i < count($day_arr) ; $i++)
                                                            {
                                                                $comp_id = $value.'_'.$day_arr[$i];
                                                                ?>
                                                                <td id="<?php echo $comp_id; ?>"></td>
                                                                <?php	
                                                            }

                                                            foreach ($childarray as $key => $values) 
                                                            {
                                                                ?>
                                                                    <script type="text/javascript">
                                                $('#<?php echo $key ?>').html('<?php echo $values; ?>');
                                                                    </script>
                                                                <?php
                                                            }
                                                        ?>
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
                </div>
        </aside>
    </div>
    
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/user_course_schedule.js" type="text/javascript"></script>
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