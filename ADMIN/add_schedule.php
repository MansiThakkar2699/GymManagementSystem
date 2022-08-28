<?php
require '../services/connection.php';
$sql="select * from user_master WHERE role_idRole = 2";
$sql_cust="select * from user_master WHERE role_idRole = 5";

$result = $conn->query($sql);
$result2 = $conn->query($sql_cust);

$que="select name,idExercise from exercise ORDER BY name";
$ex=$conn->query($que);

$sql3="select * from batch";
$res2=$conn->query($sql3);
?>
<html lang="en">
  <!-- Mirrored from demo.lorvent.com/fitness/add_users.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:18 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <!-- /Added by HTTrack -->
  <head>
    <meta charset="UTF-8">
    <title>Add Trainer Schedule|Fitness Hub Admin Template
    </title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="../../oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="../../oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
    </script>
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/iCheck/skins/minimal/blue.css" rel="stylesheet" />
    <link type="text/css" href="vendors/select2/css/select2.css" rel="stylesheet" />
    <link type="text/css" href="vendors/select2/css/select2-bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/add_users.css" rel="stylesheet" />
    <!--end of page level css-->
  </head>
  <body>
    <?php include('admin_masterpage.php');?>
    <aside class="right-side right-padding" > 
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <!--section starts-->
        <h2>Add Schedule
        </h2>
        <ol class="breadcrumb">
          <li>
            <a href="index.php">
              <i class="fa fa-fw fa-home">
              </i>Dashboard
            </a>
          </li>
          <li>
            <a href="#">Trainer Schedule
            </a>
          </li>
          <li>
            <a href="add_schedule.php" class="activated">Add Schedule
            </a>
          </li>
        </ol>
      </section>
      <!--section ends-->
      <div class="container-fluid"  >
        <!--main content-->
        <div class="row">
          <div class="col-lg-12" >
            <!-- Basic charts strats here-->
            <div class="panel panel-info">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <i class="fa fa-fw fa-user">
                  </i>Add Schedule
                </h4>
                <span class="pull-right">
                  <i class="glyphicon glyphicon-chevron-up showhide clickable">
                  </i>
                  <i class="glyphicon glyphicon-remove removepanel">
                  </i>
                </span>
              </div>
              <div class="panel-body" style="border:1px solid #33a4d8">
                <div class="row">
                  <div class="col-md-12">
                    <form id="add_users_form" class="form-horizontal" method="POST">
                      <div class="form-body">
                        <div class="form-group" id="trainer_sel_cont">
                          <label class="col-md-3 control-label" for="lname">
                            Trainer Name
                            <span class='require'>:
                            </span>
                          </label>
                          <div class="col-md-7" id="">
                            <select id="select_trainer" class="form-control js-states select2" name="idUser_master">
                              <option value>Select Trainer
                              </option>
                              <?php
                              while($row = $result->fetch_assoc())
                              {
                                  ?>
                              <option value="<?php echo $row['idUser_master'] ;?>">
                                <?php echo $row['First_name'].' '.$row['Last_name']; ?>
                              </option>
                                  <?php
                                  
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="fname">
                            Work Out Type
                            <span class='require'>:
                            </span>
                          </label>
                          <div class="col-md-7">
                            <select id="select_wo" class="form-control js-states select2">
                              <option value = "">Select Work Out Type
                              </option>
                              <option value = "1">Exercise
                              </option>
                              <option value = "0">Activity
                              </option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group" id="exercise_cont" style="display: none;">
                          <label class="col-md-3 control-label" for="fname">
                            Exercise
                            <span class='require'>:
                            </span>
                          </label>
                          <div class="col-md-7">
                            <select id="sel_excer" class="form-control js-states select2" name="idExercise">
                              <option value>Select Exercise
                              </option>
                              <?php
                              while($ex1 = $ex->fetch_assoc())
                              {
                              ?>
                              <option value="<?php echo $ex1['idExercise'] ;?>">
                                <?php echo $ex1['name']; ?>
                              </option>
                              <?php
                              }
                              ?>
                            </select>   
                          </div>
                        </div>
                        <div class="form-group" id="activity_cont" style="display: none;">
                          <label class="col-md-3 control-label" for="fname">
                            Activity
                            <span class='require'>:
                            </span>
                          </label>
                          <div class="col-md-7">
                            <select id="sel_act" class="form-control js-states select2" name="idActivity">
                              <option value>Select Activity
                              </option>
                              <?php
                              $sql2="select * from activity ORDER BY Activity_name";
                              $res1=$conn->query($sql2);
                              while($row = $res1->fetch_assoc())
                              {
                              ?>
                              <option value="<?php echo $row['idActivity'] ;?>">
                                <?php echo $row['Activity_name']; ?>
                              </option>
                              <?php
                              }
                              ?>
                            </select>   
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="lname">
                              Time
                             <span class='require'>:</span>
                          </label>
                          <div class="col-md-7">
                            <div class="input-group">
                             <span class="input-group-addon">
                               <i class="fa fa-fw fa-user-md text-primary"></i>
                            </span>
                            <input type="time" class="form-control" id="lname" placeholder="Time" name="timing" value="<?php echo $timing; ?>" required >
                            </div>
                          </div>
                        </div>      
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="lname">
                            Day
                            <span class='require'>:
                            </span>
                          </label>
                          <div class="col-md-7">
                            <select id="day_sel" class="form-control js-states select2">
                              <option>-Select Day-</option>
                              <option>Monday</option>
                              <option>Tuesday</option>
                              <option>Wednesday</option>
                              <option>Thursday</option>
                              <option>Friday</option>
                              <option>Saturday</option>
                              <option>Sunday</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <input type="button" class="btn btn-primary" value="Add" name="add" onclick="AddSchdule()"> &nbsp;
                          <input type="reset" class="btn btn-danger" value="Reset">
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </aside>
  </div>
<script src="js/jquery.min.js" type="text/javascript">
</script>
<script src="js/bootstrap.min.js" type="text/javascript">
</script>
<script src="js/custom_js/app.js" type="text/javascript">
</script>
<script src="js/custom_js/metisMenu.js" type="text/javascript">
</script>
<script src="vendors/holder/holder.js" type="text/javascript">
</script>
<!-- end of page level js -->
<!-- begining of page level js -->
<script src="vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript">
</script>
<script src="vendors/iCheck/icheck.js" type="text/javascript">
</script>
<script src="vendors/select2/js/select2.min.js" type="text/javascript">
</script>
<script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript">
</script>
<script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript">
</script>
<script src="js/custom_js/add_users.js" type="text/javascript">
</script>
<!-- end of page level js -->
<script>
</script>
<script src="js/jquery.min.js" type="text/javascript">
</script>
<script src="js/bootstrap.min.js" type="text/javascript">
</script>
<script src="js/custom_js/app.js" type="text/javascript">
</script>
<script src="js/custom_js/metisMenu.js" type="text/javascript">
</script>    
<script src="js/custom_js/backstretch.js">
</script>
<!-- end of global level js -->
<script src="vendors/jquery-circliful/js/jquery.circliful.min.js" type="text/javascript">
</script>
<script src="vendors/progressbar/bootstrap-progressbar.min.js" type="text/javascript">
</script>
<script src="vendors/countUp/countUp.js" type="text/javascript">
</script>    
<script src="vendors/moment/min/moment.min.js" type="text/javascript">
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#select_wo').on('change',function(){
      if($(this).val() == 1)
      {
        $('#exercise_cont').show();
        $('#activity_cont').hide();
      }
      else
      {
        $('#exercise_cont').hide();
        $('#activity_cont').show();
      }
    });
  });

  function AddSchdule()
  {
    //alert($('#sel_excer').val()); return false;
    $.post('../services/add_schedule.php',{
        idUser_master:$('#select_trainer').val(),
        select_wo: $('#select_wo').val(),
        sel_excer: $('#sel_excer').val(),
        sel_act: $('#sel_act').val(),  
        timing:$('#lname').val(),
        day_sel:$('#day_sel').val()
        // select_t:$('#select_t').val()
    },function(data){
        if(data == 200)
        {
          window.location.href = "Trainer_schedule.php";
        }
    });
  }
</script>
</body>
<!-- Mirrored from demo.lorvent.com/fitness/add_users.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:22 GMT -->
</html>