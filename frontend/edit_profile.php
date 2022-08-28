<?php 
require '../services/connection.php';
$id = $_GET['id'];
$sql="select * from user_master where idUser_master=$id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    $id = $row['idUser_master'];
    $First_name= $row['First_name'];
    $Last_name= $row['Last_name'];
    $img=$row['img'];
    $email= $row['Email_id'];
    $contact = $row['Contact_no'];
    $gender = $row['gender'];
    $DOB = $row['DOB'];
}
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile</title>
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
							<div class="home_title">Edit Profile</div>
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
<div class="col-lg-6 skills_col">
	<div class="skills_content">
                    <div class="section_title_container">
                        <div class="section_title">My Profile</div>
                    </div>
                    <div class="panel-body">
                        <!--main content-->
                        <div class="row">
                            <form method="POST" action="../services/editf_profile.php" enctype="multipart/form-data">
                                <div class="col-md-3 text-center">
                                <img src="<?php echo '../ADMIN/profile/'.$img; ?>" height="100" width="100">
                                <input type="file" name="img">
                                <input type="hidden" name="old_file_name" value="<?php  echo '../ADMIN/profile/'.$img; ?>">
                                <!-- <a class="edit btn btn-primary"><i class="fa fa-fw fa-edit"></i>Update</a> -->
                                <input type="submit" value="Update" class="btn btn-primary" name="">
                                
                                </div>
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>First Name:</td>
                                        
                                            <td><input type="text" name="First_name" value="<?php echo $First_name;?>"></td>
                                                                    
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                        
                                            <td><input type="text" name="Last_name" value="<?php echo $Last_name;?>"></td>
                                                                    
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td>
                                                <input type="text" name="gender" value="<?php echo ($gender == 0)?'Male':'Female';?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><input type="text" name="Email_id" value="<?php echo $email;?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number:</td>
                                            <td><input type="number" name="Contact_no" value="<?php echo $contact;?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Date Of Birth:</td>
                                            <td><input type="date" name="DOB" value="<?php echo $DOB;?>"></td>
                                        </tr>
                                    </table>
                                </div>
                                </div>
                            </form>
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