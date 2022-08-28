<?php
	require '../services/connection.php';
	$sql="select feedback.* , user_master.First_name,user_master.img from feedback INNER JOIN user_master ON feedback.idUser_master=user_master.idUser_master; ";
	$result = $conn->query($sql);	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="SportFIT template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>
<?php include('m.php');?>	
<div class="super_container">
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/d1.jpg)"></div>
		<div class="overlay"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact</div>
							<div class="home_subtitle">Pilates, Yoga, Fitness, Spinning & many more</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Content -->
				<div class="col-lg-4">
					<div class="contact_content">
						<div class="contact_logo">
							<div class="logo d-flex flex-row align-items-center justify-content-start"><img src="images/dot.png" alt=""><div>Fitness<span>Hub</span></div></div>
						</div>
						<div class="contact_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>A:</div></div>
									<div>1st floor,Shree Ganesh Avenue,Opp. D-Mart,
										L.B.S. road,Bapunagar,Ahmedabad-380024
									</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>P:</div></div>
									<div>+918735009100</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>M:</div></div>
									<div>lalit.jayswal9100@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_title">Get in touch</div>
					<div class="contact_form_container">
						<form action="../services/contactMail.php" id="contact_form" class="contact_form" method="POST">
							<div class="row">
								<div class="col-lg-6">
									<div class="input_item"><input type="text" class="contact_input trans_200" placeholder="Name" required="required" name="name"></div>
								</div>
								<div class="col-lg-6">
									<div class="input_item"><input type="email" class="contact_input trans_200" placeholder="E-mail" required="required" name="Email_id6uy"></div>
								</div>
							</div>
							<div class="input_item"><textarea class="contact_input contact_textarea trans_200" placeholder="Message" required="required" name="msg"></textarea></div>
							<button class="contact_button button" name="send">Send<span></span></button>
						</form>
					</div>
				</div>

			</div>
			
			<div class="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					
						<div class="section_subtitle" style="font-size:50px">FEEDBACK</div>
						
					
					
					<!-- Testimonial -->
					<div class="test test_1 d-flex flex-row align-items-start justify-content-start">
					<?php
							while($row=$result->fetch_assoc())
							{
					?>
								<!--<div><div class="test_image"><!--<img src="../ADMIN/profile/<?php //echo $row['img'];?>" alt="" height="50" ></div></div>-->
								<div class="test_content">
									<div class="test_name"><?php echo $row['First_name'];?></div>
									<div class="test_text">
										<p><?php echo $row['discription'];?></p>
									</div>
								</div>
							<?php }?>
					</div>
				</div>
				<!--<div class="col-lg-6">
					<div class="test d-flex flex-row align-items-start justify-content-start">
						<div><div class="test_image"><img src="images/test_2.jpg" alt=""></div></div>
						<div class="test_content">
							<div class="test_name"><a href="#">poi</a></div>
							<div class="test_title">client</div>
							<div class="test_text">
								<p>  ......`.</p>
							</div>
							<div class="rating rating_4 test_rating"><i></i><i></i><i></i><i></i><i></i></div>
						</div>
					</div>

					<div class="test d-flex flex-row align-items-start justify-content-start">
						<div><div class="test_image"><img src="images/test_3.jpg" alt=""></div></div>
						<div class="test_content">
							<div class="test_name"><a href="#">-----</a></div>
							<div class="test_title">client</div>
							<div class="test_text">
								<p>------------------</p>
							</div>
							<div class="rating rating_4 test_rating"><i></i><i></i><i></i><i></i><i></i></div>
						</div>
					</div>

				</div>-->
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>