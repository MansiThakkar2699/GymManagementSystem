<?php
    session_start();
    $id=$_SESSION['ID'];
    require '../services/connection.php';
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
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
<style>
	.item{
  width:50px;
  text-align:center;
  display:block;
  background-color: transparent;
  border: 1px solid transparent;
  margin-right: 100px;
  margin-bottom: 10px;
  float:left;
  padding: 5px;
}

</style>
</head>
<body>
<?php include('m.php');?>

<div class="super_container">
	<!-- Home -->
	<div class="home">
		<div class="background_image" style="background-image:url(images/about_page.jpg)"></div>
		<!--<div class="overlay"></div>-->
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Attendance</div>
							<div class="home_subtitle">Pilates, Yoga, Fitness, Spinning & many more</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="skills">
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-6 skills_col">
					<div class="skills_content">
						<div class="section_title_container">
							<div class="section_title">Attendance</div>
						</div>
						<?php
							$qry1="select a.*,u.First_name from attendance a INNER JOIN user_master u where a.idUser_master = u.idUser_master and a.idUser_master = $id";
                            $res = $conn->query($qry1);
						?>
						<table class="table table-bordered" id="fitness-table">
                                    <thead>
                                        <tr style="color:black">
                                            <th>Customer Name</th>
                                            <th>Date</th>
                                            <th>Day</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($row2 = $res->fetch_assoc())
                                            { 
                                            ?>
                                                <tr style="color:black">
                                                    <td><?php echo $row2['First_name'];?></td>
                                                    <td><?php echo $row2['created_at'];?></td>
                                                    <td><?php echo $row2['day'];?></td>
                                                    <td><?php echo "Present";?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                    </tbody>      
                        </table>
						<div class="col-md-6">
								<!--<a class="btn btn-warning btn-sm" href="../index.php"> View Package </a>-->
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
</body>
</html> 