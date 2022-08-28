<?php 
require '../services/connection.php';
//session_start();



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
<link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
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
    <table class="myTable" border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $email=$_SESSION['email'];
        $sql="select * from user_master where Email_id='$email'";
        //echo $sql;die;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $id = $row['idUser_master'];
        
        $sql="select attendance.*,user_master.First_name,user_master.Last_name from attendance INNER JOIN user_master ON attendance.idUser_master=user_master.idUser_master WHERE attendance.idUser_master = $id";
        //echo $sql;die;
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        { ?>
            <tr>
                <td><?php echo $row['First_name'].$row['Last_name'];?></td>
                <td><?php echo $row['Date'];?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
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
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('.myTable').DataTable();
} );
</script>
</body>
</html>