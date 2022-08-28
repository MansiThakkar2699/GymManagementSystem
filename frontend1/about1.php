<?php
	require '../services/connection.php';
	$sql="select * from user_master where role_idRole=2";
	$result = $conn->query($sql);	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
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
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>
<?php include('m.php');?>

<div class="super_container">
	<!-- Home -->
	<div class="home">
		<div class="background_image" style="background-image:url(images/about_page.jpg)"></div>
		<div class="overlay"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">About us</div>
							<div class="home_subtitle">Pilates, Yoga, Fitness, Spinning & many more</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About -->
	<!--<div class="about">
		<div class="container about_container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title_container">
							<div class="section_subtitle">welcome to Fitness Hub</div>
							<div class="section_title">About <span>Fitess Hub</span></div>
						</div>
						<div class="text_highlight" align="justify">A Fitness Hub is a place that houses exercise equipment for the 
						purpose of physical exercise.Lalit Jayswal describes a Fitness Hub as a 
						"company providing people, access to controlled environmental condition space and services
						 focused on physical fitness and health in exchange of a fee."</div>
						<div class="button about_button"><a href="../index.php">Join Now</a></div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="about_background">
			<div class="about_image"><img src="images/a2.png" alt=""></div>
		</div>
	</div>-->
	<div class="timetable">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/timetable.jpg" data-speed="0.8"></div>
		<div class="tt_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_title">Classes Timetable</div>
					</div>
					<div class="timetable_filtering">
						<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
							<li class="active item_filter_btn" data-filter="*" onclick="GetData();">Batch Timing</li>
							<li class="item_filter_btn" data-filter=".weight_loss" onclick="GetExer();">Exercise</li>
							<li class="item_filter_btn" data-filter=".aerobics" onclick="GetActivity();">Activity</li>
						</ul>
					</div>
					<div class="timetable_container d-flex flex-sm-row flex-column align-items-start justify-content-sm-between justify-content-start">

						<!-- Monday -->
						<div class="tt_day">
							<div class="tt_title">monday</div>

							<div class="tt_day_content grid" id="mon_cont">
								<!-- Class -->
								
							</div>
						</div>

						<!-- Tuesday -->
						<div class="tt_day">
							<div class="tt_title">tuesday</div>
							<div class="tt_day_content grid" id="tue_cont">
								
							</div>
						</div>

						<!-- Wednesday -->
						<div class="tt_day">
							<div class="tt_title">wednesday</div>
							<div class="tt_day_content grid" id="wed_cont">

								
							</div>
						</div>

						<!-- Thursday -->
						<div class="tt_day">
							<div class="tt_title">thursday</div>
							<div class="tt_day_content grid" id="thu_cont">
								
								
							</div>
						</div>

						<!-- Friday -->
						<div class="tt_day">
							<div class="tt_title">friday</div>
							<div class="tt_day_content grid" id="fri_cont">
								
								
							</div>
						</div>

						<!-- Saturday -->
						<div class="tt_day">
							<div class="tt_title">Saturday</div>
							<div class="tt_day_content grid" id="sat_cont">
								
								
							</div>
						</div>

						<!-- Sunday -->
						<div class="tt_day">
							<div class="tt_title">Sunday</div>
							<div class="tt_day_content grid" id="sun_cont">
								
								
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team -->
	<div class="team">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section_title_container">
						<div class="section_subtitle">welcome to Fitness Hub</div>
						<div class="section_title">The Team</div>
					</div>
					<?php
                        while($row = $result->fetch_assoc())
						{ ?>
							<img src="<?php  echo '../ADMIN/profile/'.$row['img']; ?>" height="100" width="100"" alt="">
								<?php echo $row['First_name'].$row['Last_name'];
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- Skills -->
	<div class="skills">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- Extra -->
				<div class="col-lg-6">
					<div class="extra d-flex flex-column align-items-center justify-content-center text-center">
						<div class="background_image" style="background-image:url(images/extra.jpg)"></div>
						<?php
							$qry="select * from offer";
							$result1 = $conn->query($qry);
							$row1=$result1->fetch_assoc();
						?>
						<div class="extra_title"><?php echo $row1['Discount'];?>% Discount</div>
						<div class="skills_text" style="color:#fff"><?php echo $row1['details'];?></div>
						
						<!--<div class="button extra_button"><a href="#">Join Now</a></div>-->
					</div>
				</div>
				<!-- Skills -->
				<div class="col-lg-6 skills_col">
					<div class="skills_content">
						<div class="section_title_container">
							<div class="section_subtitle">welcome to Fitness Hub</div>
							<div class="section_title">Our Packages</div>
						</div>
						<?php
							$qry1="select * from package";
							$res = $conn->query($qry1);
						?>
						<table class="table table-bordered" id="fitness-table">
                                    <thead>
                                        <tr style="color:black">
                                            <th>Package Name</th>
                                            <th>Duration</th>
                                            <th>Desciption</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($row2 = $res->fetch_assoc())
                                            { ?>
                                                <tr style="color:black">
                                                    <td><?php echo $row2['Name'];?></td>
                                                    <td><?php echo $row2['Duration'];?></td>
                                                    <td><?php echo $row2['details'];?></td>
                                                    <td><?php echo $row2['amount'];?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                    </tbody>      
                        </table>
						<div class="col-md-6">
								<a class="btn btn-warning btn-sm" href="../index.php"> Select Package </a>
						</div>
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
<script src="js/about.js"></script>
<script type="text/javascript">
    var _day = "";

    GetData();

    function GetData()
    {
    	$('.tt_day_content').html("");

        $.ajax({
            async: false,
            type: "POST",
            url: '../services/get_batch_data.php',
            data: "",
            success: function (response) {
                var obj = Object();
	            obj = jQuery.parseJSON(response);

	            console.log(obj);

	            
	               for(var i=0;i<obj.length;i++)
	               {
	               		if(obj[i].day == "Monday")
	            		{
		               		$('#mon_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Batch_type+'</div><div class="tt_class_time">'+obj[i].start_time+'</div></div>');
		               	}
		               	else if(obj[i].day == "Tuesday")
	            		{
	            			$('#tue_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Batch_type+'</div><div class="tt_class_time">'+obj[i].start_time+'</div></div>');
	            		}
	            		else if(obj[i].day == "Wednesday")
	            		{
	            			$('#wed_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Batch_type+'</div><div class="tt_class_time">'+obj[i].start_time+'</div></div>');
	            		}
	            		else if(obj[i].day == "Thursday")
	            		{
	            			$('#thu_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Batch_type+'</div><div class="tt_class_time">'+obj[i].start_time+'</div></div>');
	            		}
	            		else if(obj[i].day == "Friday")
	            		{
	            			$('#fri_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Batch_type+'</div><div class="tt_class_time">'+obj[i].start_time+'</div></div>');
	            		}
	            		else if(obj[i].day == "Saturday")
	            		{
	            			$('#sat_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Batch_type+'</div><div class="tt_class_time">'+obj[i].start_time+'</div></div>');
	            		}
	            		else if(obj[i].day == "Sunday")
	            		{
	            			$('#sun_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Batch_type+'</div><div class="tt_class_time">'+obj[i].start_time+'</div></div>');
	            		}
	               }
	                    
            }
        });
    }
    
    function GetExer()
    {
    	// alert("exer");

    	$('.tt_day_content').html("");

        $.ajax({
            async: false,
            type: "POST",
            url: '../services/get_exercise_data.php',
            data: "",
            success: function (response) {
                var obj = Object();
	            obj = jQuery.parseJSON(response);

	            console.log(obj);

	            
	               for(var i=0;i<obj.length;i++)
	               {
	               		if(obj[i].Day == "Monday")
	            		{
		               		$('#mon_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].timing+'</div></div>');
		               	}
		               	else if(obj[i].Day == "Tuesday")
	            		{
	            			$('#tue_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].timing+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Wednesday")
	            		{
	            			$('#wed_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].timing+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Thursday")
	            		{
	            			$('#thu_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].timing+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Friday")
	            		{
	            			$('#fri_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].timing+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Saturday")
	            		{
	            			$('#sat_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].timing+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Sunday")
	            		{
	            			$('#sun_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].timing+'</div></div>');
	            		}
	               }
	                    
            }
        });
    }

    function GetActivity()
    {
    	$('.tt_day_content').html("");

        $.ajax({
            async: false,
            type: "POST",
            url: '../services/get_activity_data.php',
            data: "",
            success: function (response) {
                var obj = Object();
	            obj = jQuery.parseJSON(response);

	            console.log(obj);

	            
	               for(var i=0;i<obj.length;i++)
	               {
	               		if(obj[i].Day == "Monday")
	            		{
		               		$('#mon_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Activity_name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].Time+'</div></div>');
		               	}
		               	else if(obj[i].Day == "Tuesday")
	            		{
	            			$('#tue_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Activity_name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].Time+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Wednesday")
	            		{
	            			$('#wed_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Activity_name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].Time+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Thursday")
	            		{
	            			$('#thu_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Activity_name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].Time+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Friday")
	            		{
	            			$('#fri_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Activity_name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].Time+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Saturday")
	            		{
	            			$('#sat_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Activity_name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].Time+'</div></div>');
	            		}
	            		else if(obj[i].Day == "Sunday")
	            		{
	            			$('#sun_cont').append('<div class="tt_class grid-item weight_loss"><div class="tt_class_title">'+obj[i].Activity_name+'</div><div class="tt_class_instructor">'+obj[i].First_name+" "+obj[i].Last_name +'</div><div class="tt_class_time">'+obj[i].Time+'</div></div>');
	            		}
	               }
	                    
            }
        });
    }
</script>
</body>
</html>