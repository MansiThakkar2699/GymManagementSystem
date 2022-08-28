<?php 
require '../services/connection.php';
$sql="select * from user_master where role_idRole=5";
$result = $conn->query($sql);
//$id=$row['trainer_id'];
//$qry="select First_name from user_master where trainer_id='$id'";
//$res=$conn->query($qry);
//$row1=$res->fetch_assoc();
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
	<!-- Team -->
</div>
<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">User Profile</div>
        </div>
        <div class="panel-body">
                        <!--main content-->
            <div class="row">
                <div class="col-md-3 text-center">
                    <?php while($row = $result->fetch_assoc())
                    { ?>
                        <?php if(!empty($row['img']))
                        { ?>
                            <img src="<?php  echo 'profile/'.$row['img']; ?>" height="100" width="100">
                        <?php	
                        }
                        else
                        { ?>
                            <img src="<?php  echo 'profile/basic.jpg'; ?>" height="100" width="100">
                        <?php
                        } ?>        
                        <input type="file" name="img" />
                        <a class="delete btn btn-danger delete-user" idUser_master=<?php echo $row['idUser_master'];?>><i class="fa fa-trash-o"> Delete</i> </a>
                </div>
                <div class="col-md-9">
                    <table class="table table-bordered">
                        <tr>
                            <td>Username:</td>          
                            <td><?php echo $row['User_name'];?></td>                       
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td> <?php  echo ($row['gender'] == 0)?'Male':'Female'; ?> </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?php echo $row['Email_id'];?></td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td><?php echo $row['Contact_no'];?></td>
                        </tr>
                        <tr>
                            <td>Date Of Birth:</td>
                            <td><?php echo $row['DOB'];?></td>
                        </tr>
                        <tr>
                            <td>Assigned Trainer:</td>
                            <td><?php echo $row1['First_name'];?></td>
                        </tr>
                    <?php  } ?>  
                    </table>
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