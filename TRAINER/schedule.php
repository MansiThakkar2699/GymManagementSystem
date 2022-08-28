<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/admin_courseschedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Schedule| Fitness Hub Admin Template</title>
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
    <link type="text/css" href="vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/iCheck/skins/minimal/green.css" rel="stylesheet" />
    <link type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/course_schedule.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
<?php include('T_masterpage.php');?>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Trainer Schedule</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-fw fa-home"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Schedule</a>
                    </li>
                    <li>
                        <a href="Trainer_schedule.php">Trainer Schedule</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-success" style="border:1px solid #65a800">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-fw fa-user"></i>Trainer Schedule
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->

                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                      <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="home" aria-selected="true" onclick="GetData('Monday')">Monday</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tuesday" onclick="GetData('Tuesday')" role="tab" aria-controls="profile" aria-selected="false">Tuesday</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="contact" aria-selected="false" onclick="GetData('Wednesday')">Wednesday</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="contact" aria-selected="false" onclick="GetData('Thursday')">Thursday</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#friday" role="tab" aria-controls="contact" aria-selected="false" onclick="GetData('Friday')">Friday</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#saturday" role="tab" aria-controls="contact" aria-selected="false" onclick="GetData('Saturday')">Saturday</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#sunday" role="tab" aria-controls="contact" aria-selected="false" onclick="GetData('Sunday')">Sunday</a>
                                      </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                      <div class="tab-pane fade" id="monday" role="tabpanel" aria-labelledby="home-tab">
                                          <table class="table table-bordered table1" id="fitness-table">
                                            <thead>
                                                <tr>
                                                    <th>Trainer</th>
                                                    <th>Workout Type</th>
                                                    <th>Sub Workout Type</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody id="mon_cont">

                                            </tbody>
                                        </table> 
                                      </div>
                                      <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="profile-tab">
                                          <table class="table table-bordered table1" id="fitness-table">
                                            <thead>
                                                <tr>
                                                    <th>Trainer</th>
                                                    <th>Workout Type</th>
                                                    <th>Sub Workout Type</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tue_cont">

                                            </tbody>
                                        </table>
                                      </div>
                                      <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="contact-tab">
                                          <table class="table table-bordered table1" id="fitness-table">
                                            <thead>
                                                <tr>
                                                    <th>Trainer</th>
                                                    <th>Workout Type</th>
                                                    <th>Sub Workout Type</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody id="wed_cont">

                                            </tbody>
                                        </table>
                                      </div>
                                      <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="contact-tab">
                                          <table class="table table-bordered table1" id="fitness-table">
                                            <thead>
                                                <tr>
                                                    <th>Trainer</th>
                                                    <th>Workout Type</th>
                                                    <th>Sub Workout Type</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody id="thu_cont">

                                            </tbody>
                                        </table>
                                      </div>
                                      <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="contact-tab">
                                          <table class="table table-bordered table1" id="fitness-table">
                                            <thead>
                                                <tr>
                                                    <th>Trainer</th>
                                                    <th>Workout Type</th>
                                                    <th>Sub Workout Type</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody id="fri_cont">

                                            </tbody>
                                        </table>
                                      </div>
                                      <div class="tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="contact-tab">
                                          <table class="table table-bordered table1" id="fitness-table">
                                            <thead>
                                                <tr>
                                                    <th>Trainer</th>
                                                    <th>Workout Type</th>
                                                    <th>Sub Workout Type</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sat_cont">

                                            </tbody>
                                        </table>
                                      </div>
                                      <div class="tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="contact-tab">
                                          <table class="table table-bordered table1" id="fitness-table">
                                            <thead>
                                                <tr>
                                                    <th>Trainer</th>
                                                    <th>Workout Type</th>
                                                    <th>Sub Workout Type</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody id="sun_cont">

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
    <script src="vendors/moment/moment.js" type="text/javascript"></script>
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="vendors/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="js/custom_js/course_schedule.js" type="text/javascript"></script>
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

    <script type="text/javascript">
        var _day = "";

        function GetData(day)
        {
            _day = day;

            $('tbody').html("");

            $.post('../services/get_schedule.php',{
                user_type:2,
                day:day
            },function(data){
                console.log(data);
         
                var obj = Object();
                obj = jQuery.parseJSON(data);
                
                if(_day == "Monday")
                {
                   for(var i=0;i<obj.length;i++)
                   {
                        $('#mon_cont').append('<tr><td id="11">'+obj[i].fname+" "+obj[i].lname+'</td><td>'+obj[i].workout_type+'</td><td>'+obj[i].sub_workout_type+'</td><td>'+obj[i].timing+'</td></tr>');
                   }  
                }       
                else if(_day == "Tuesday")
                {
                   for(var i=0;i<obj.length;i++)
                   {
                        $('#tue_cont').append('<tr><td>'+obj[i].fname+" "+obj[i].lname+'</td><td>'+obj[i].workout_type+'</td><td>'+obj[i].sub_workout_type+'</td><td>'+obj[i].timing+'</td></tr>');
                   }  
                } 
                else if(_day == "Wednesday")
                {
                   for(var i=0;i<obj.length;i++)
                   {
                        $('#wed_cont').append('<tr><td>'+obj[i].fname+" "+obj[i].lname+'</td><td>'+obj[i].workout_type+'</td><td>'+obj[i].sub_workout_type+'</td><td>'+obj[i].timing+'</td></tr>');
                   }  
                }
                else if(_day == "Thursday")
                {
                   for(var i=0;i<obj.length;i++)
                   {
                        $('#thu_cont').append('<tr><td>'+obj[i].fname+" "+obj[i].lname+'</td><td>'+obj[i].workout_type+'</td><td>'+obj[i].sub_workout_type+'</td><td>'+obj[i].timing+'</td></tr>');
                   }  
                }
                else if(_day == "Friday")
                {
                    
                   for(var i=0;i<obj.length;i++)
                   {
                        $('#fri_cont').append('<tr><td>'+obj[i].fname+" "+obj[i].lname+'</td><td>'+obj[i].workout_type+'</td><td>'+obj[i].sub_workout_type+'</td><td>'+obj[i].timing+'</td></tr>');
                   }  
                }
                else if(_day == "Saturday")
                {
                   for(var i=0;i<obj.length;i++)
                   {
                        $('#sat_cont').append('<tr><td>'+obj[i].fname+" "+obj[i].lname+'</td><td>'+obj[i].workout_type+'</td><td>'+obj[i].sub_workout_type+'</td><td>'+obj[i].timing+'</td></tr>');
                   }  
                } 
                else if(_day == "Sunday")
                {
                   for(var i=0;i<obj.length;i++)
                   {
                        $('#sun_cont').append('<tr><td>'+obj[i].fname+" "+obj[i].lname+'</td><td>'+obj[i].workout_type+'</td><td>'+obj[i].sub_workout_type+'</td><td>'+obj[i].timing+'</td></tr>');
                   }  
                }                         
            });
        }
    </script>
</body>


<!-- Mirrored from demo.lorvent.com/fitness/admin_courseschedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:08 GMT -->
</html>
<!--<script type="text/javascript">
	$(document).ready( function () {
	    $('#fitness-table').DataTable();
	    $( ".delete-user" ).click(function() {
		  if(confirm("Are you sure you want to delete this record?"))
		  {
		  	var idSchedule = $(this).attr('idSchedule');
		  	window.location.href = "../services/delete_schedule.php?idSchedule="+idSchedule;
		  }
		});
	} );
</script>