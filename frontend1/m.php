<?php 
	error_reporting(0);
    session_start();

    // print_r($_SESSION['NAME']);
    // die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness Hub</title>
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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<a href="#">
							<div class="logo d-flex flex-row align-items-center justify-content-start"><img src="images/dot.png" alt=""><div>Fitness<span>Hub</span></div></div>
						</a>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="services.php">Classes & Services</a></li>
								<li><a href="contact.php">Contact</a></li>
								<!--<li id="sign_in_link"><a href="../index.php">Log In</a></li>
								<li id="username_link"><a href="#" id="session_name"><?php //echo 'Hi,'.$_SESSION['NAME']; ?></a></li>
								<li id="logout_in_link"><b><a href="logout.php">Logout</a></b></li>-->
                                <?php
								if(!empty($_SESSION['email']))
								{
									?>
									<li><a href="#">Welcome <?php echo $_SESSION['email']; ?></a></li>	
									<li><a href="logout.php">Logout</a></li>
									<?php
                                }
                                else
                                {?>
                                  <li id="sign_in_link"><a href="../index.php">Log In</a></li>  
                                <?php }
								?>
							</ul>
						</nav>
						
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Hamburger -->
	
	<div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
		<div class="hamburger">
			<div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
				<span>menu</span>
				<div class="hamburger_container">
					<div class="menu_hamburger">
						<div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
						<div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
						<div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->

	<div class="menu trans_800">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="services.php">Classes & Services</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<i class="fa fa-phone" aria-hidden="true"></i>
				<span>+918735009100</span>
		</div>
	</div>
	<!-- Home -->
	<!-- Boxes -->
	<!-- Footer -->
</div>

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
<script src="js/custom.js"></script>



<script type="text/javascript">
	/*$(document).ready(function(){
	


		if($('#session_name').html() != "")
		{
			$('#sign_in_link').hide();	
		}
		else
		{
			$('#sign_in_link').show();
			$('#username_link').hide();
			$('#logout_in_link').hide();	
		}
	});*/
</script>

</body>
</html>
