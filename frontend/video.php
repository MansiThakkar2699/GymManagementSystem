<?php
    require '../services/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
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
                                                                            <source src="../ADMIN/uploads/img/<?php echo $row['video']; ?>" type="video/mp4">
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
</body>
</html>
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
