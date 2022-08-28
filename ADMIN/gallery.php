<?php
require '../services/connection.php';

$sql="select * from gallery";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<title>Gallery | Fitness Hub Admin Template</title>
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
<link type="text/css" href="vendors/fancyBox/source/jquery.fancybox8cbb.css?v=2.1.5" rel="stylesheet" />
<link type="text/css" href="vendors/fancyBox/source/helpers/jquery.fancybox-buttons3447.css?v=1.0.5" rel="stylesheet" />
<link type="text/css" href="css/custom_css/portfolio.css" rel="stylesheet" />
<link type="text/css" href="css/custom_css/figcaption.css" rel="stylesheet">
<!--end of page level css-->
</head>

<body>
<?php include('admin_masterpage.php');?>


<aside class="right-side right-padding">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <!--section starts-->
        <h2>Gallery</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.php">
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#">Gallery</a>
            </li>
            <li>
                <a href="gallery.php">Gallery</a>
            </li>
        </ol>
    </div>
    <!--section ends-->
    <div class="container-fluid">
        <!--main content-->
        <div class="row">
            <div class="col-md-12">
            <div role="tabpanel">
                <!-- Nav tabs -->

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="home" aria-selected="true" onclick="GetData('all')">All</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tuesday" onclick="GetData('img')" role="tab" aria-controls="profile" aria-selected="false">Images</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="contact" aria-selected="false" onclick="GetData('video')">Video</a>
                  </li>
                </ul>

                <div class="row" id="all_cont">
                    <?php 
                                while($row = $result->fetch_assoc())
                                { 
                                    ?>
                                    <div class="col-md-4" data-value="6">
                                        <div class="post3-main-div">
                                            <div class="box1 p1">
                                                <div class="box-shadow">
                                                <?php
                                                if($row['img']!="")
                                                {
                                                ?>
                                                    <figure>
                                                        <figcaption>
                                                            <div class="hover-btn">
                                                                <a href="uploads/img/<?php echo $row['img']; ?>" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                               
                                                            </div>
                                                        </figcaption>
                                                        <div class="meet-img-hover">
                                                            <img src="uploads/img/<?php echo $row['img']; ?>" class="fancy-img  center-block img-responsive" style="height: 150px;" alt="meet-our-team" />
                                                        </div>
                                                    </figure>
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <video width="400" controls>
                                                                <source src="uploads/img/<?php echo $row['video']; ?>" type="video/mp4">
                                                                Your browser does not support HTML5 video.
                                                            </video>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                    ?>    
                </div>
                <div  class="row" id="img_cont" style="display: none;">
                    <?php 
                        $sql="select * from gallery WHERE img!='NULL'";

                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc())
                        { 
                                    ?>
                                    <div class="col-md-4" data-value="6">
                                        <div class="post3-main-div">
                                            <div class="box1 p1">
                                                <div class="box-shadow">
                                                <figure>
                                                        <figcaption>
                                                            <div class="hover-btn">
                                                                <a href="uploads/img/<?php echo $row['img']; ?>" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                               
                                                            </div>
                                                        </figcaption>
                                                        <div class="meet-img-hover">
                                                            <img src="uploads/img/<?php echo $row['img']; ?>" class="fancy-img  center-block img-responsive" style="height: 150px;" alt="meet-our-team" />
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                        }

                    ?>    
                </div>
                <div class="row" id="video_cont" style="display: none;">
                <?php 
                        $sql="select * from gallery WHERE video!='NULL'";

                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc())
                        { 
                            ?>
                                    <div class="col-md-4" data-value="6">
                                        <div class="post3-main-div">
                                            <div class="box1 p1">
                                                <div class="box-shadow">
                                                <video width="400" controls>
                                                                <source src="uploads/img/<?php echo $row['video']; ?>" type="video/mp4">
                                                                Your browser does not support HTML5 video.
                                                </video>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                        }

                    ?>    
                </div>
        </div>
    </div>
    <!-- /.content -->
</aside>
<!-- /.right-side -->
</div>
<!-- ./wrapper -->
<!-- global js -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/custom_js/app.js" type="text/javascript"></script>
<script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
<script src="vendors/holder/holder.js" type="text/javascript"></script>
<!-- end of page level js -->
<!-- begining of page level js -->
<script src="vendors/mixitup/jquery.mixitup.js" type="text/javascript"></script>
<script src="vendors/fancyBox/source/jquery.fancybox.pack8cbb.js?v=2.1.5" type="text/javascript"></script>
<script src="vendors/fancyBox/source/helpers/jquery.fancybox-buttons3447.js?v=1.0.5" type="text/javascript"></script>
<script src="js/custom_js/portfolio.js" type="text/javascript"></script>
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

    <script type="text/javascript">
        function GetData(type)
        {
            if(type == "all")
            {
                $('#all_cont').show();
                $('#img_cont').hide();
                $('#video_cont').hide();
            }
            else if(type == "img")
            {
                $('#all_cont').hide();
                $('#img_cont').show();
                $('#video_cont').hide();
            }
            else if(type == "video")
            {
                $('#all_cont').hide();
                $('#img_cont').hide();
                $('#video_cont').show();
            }
        }
    </script>
</body>


<!-- Mirrored from demo.lorvent.com/fitness/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:50 GMT -->
</html>
