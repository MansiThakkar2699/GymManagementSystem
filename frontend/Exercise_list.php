<?php
    session_start();
    require '../services/connection.php';
    $email=$_SESSION['email'];
    //echo $email;die;
    $qry="SELECT idUser_master FROM user_master WHERE Email_id='$email'";
    //echo $qry;die;
    $res=$conn->query($qry);
    $row = $res->fetch_assoc();
    $id=$row['idUser_master'];
    $sql="SELECT * FROM exercise where idUser_master='$id' ORDER BY timing";
    // echo $sql;die;
    $result1 = $conn->query($sql);
    $rowcount = mysqli_num_rows($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="SportFIT template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
</head>
<body>
<?php include('m.php');?>
<div class="super_container">
	
	

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/services.jpg)"></div>
		<div class="overlay"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Services</div>
							<div class="home_subtitle">Pilates, Yoga, Fitness, Spinning & many more</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle">welcome to Fitness Hub</div>
						<div class="section_title">Our Courses</div>
					</div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/i.png" alt=""></div></div>
							<div class="service_title">Weight Loss Class</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_5.png" alt=""></div></div>
							<div class="service_title">Yoga Classes</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_6.png" alt=""></div></div>
							<div class="service_title">Spinning Class</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_7.png" alt=""></div></div>
							<div class="service_title">Private Fit Class</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_8.png" alt=""></div></div>
							<div class="service_title">Nutrition Classes</div>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6 service_col">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div><div class="service_icon"><img src="images/icon_9.png" alt=""></div></div>
							<div class="service_title">Pillates Class</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Timetable -->

	<div class="timetable">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/timetable.jpg" data-speed="0.8"></div>
		<div class="tt_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle">welcome to Fitness Hub</div>
						<div class="section_title">Classes Timetable</div>
					</div>
                    
					<div class="timetable_container d-flex flex-sm-row flex-column align-items-start justify-content-sm-between justify-content-start">
                    <?php
                    
                    if($rowcount > 0)
                    {

                    
                        while($row1 = $result1->fetch_assoc())
                                    {
                                        $dayname="";
                                        $day = $row1['Day'];
                                        if($day==1)
                                        {
                                            $dayname="Monday";
                                        }
                                        else if($day==2)
                                        {
                                            $dayname="Tuesday";
                                        }
                                        else if($day==3)
                                        {
                                            $dayname="Wednesday";
                                        }
                                        else if($day==4)
                                        {
                                            $dayname="Thursday";
                                        }
                                        else if($day==5)
                                        {
                                            $dayname="Friday";
                                        }
                                        else if($day==6)
                                        {
                                            $dayname="Saturday";
                                        }
                                        else if($day==7)
                                        {
                                            $dayname="Sunday";
                                        }  
                                    ?>
                            <!-- Monday -->
                            <div class="tt_day">
                                <div class="tt_title"><?php echo $dayname; ?></div>
                                <div class="tt_day_content grid">

                                    <!-- Class -->
                                    <div class="tt_class grid-item weight_loss">
                                        <div class="tt_class_title"><?php echo $row1['name']; ?></div>
                                        <div class="tt_class_time"><?php echo $row1['timing']; ?></div>
                                    </div>
                                    
                                    
                                    

                                </div>
                            </div>
                            <?php
                            }
                        }
                        else
                        {
                            ?>
                            <div class="tt_day">
                            <div class="tt_day_content grid">

                                <!-- Class -->
                                <div class="tt_class grid-item weight_loss">
                                    <div class="tt_class_title">No exercises.</div>
                                    <div class="tt_class_instructor"></div>
                                    <div class="tt_class_time">0:00</div>
                                </div>




                                </div>

                            
                            </div>
                            <?php
                        }
                        ?>
                        <div class="tt_day">
                        </div>
                        <div class="tt_day">
                        </div>
                        <div class="tt_day">
                        </div>
                        <div class="tt_day">
                        </div>
                        
                        
						<!-- Tuesday -->
						

						<!-- Wednesday -->
						

						

						

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Extra -->

	<div class="extra d-flex flex-column align-items-center justify-content-center text-center">
		<div class="background_image" style="background-image:url(images/extra_wide.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="extra_content d-flex flex-column align-items-center justify-content-center text-center">
						<div class="extra_title">15% Discount</div>
						<div class="extra_text">
							<p>..............</p>
						</div>
						<div class="button extra_button"><a href="#">Join Now</a></div>
					</div>
				</div>
			</div>
		</div>			
	</div>	
</div>
<?php include('footer.php');?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="js/services.js"></script>
</body>
</html>