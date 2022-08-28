<?php 
require '../services/connection.php';
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
							<div class="home_title">Profile</div>
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
        <?php
        session_start();
        $ID = $_SESSION['ID'];
        $email=$_SESSION['email'];
        //echo $ID;
        //echo $email;
        $sql="select * from user_master where Email_id='$email'";
        $result = $conn->query($sql);
        ?>
        <?php while($row = $result->fetch_assoc())
        { ?>
            <?php if(!empty($row['img']))
            { ?>
                <img id="prof_pic" src="<?php  echo '../ADMIN/profile/'.$row['img']; ?>" height="100" width="100">
                <?php	
            }
            else
            { ?>
                <img src="<?php  echo '../ADMIN/profile/basic.jpg'; ?>" height="100" width="100">
            <?php
            } ?> 
            <br/><br/>
            <a class="delete btn btn-danger delete-user" id="delete_prof_pic"><i class="fa fa-trash-o"> Delete</i> </a>
            <a class="edit btn btn-primary" href=<?php echo "edit_profile.php?id=$ID";?>><i class="fa fa-fw fa-edit"></i> Edit</a>
            <div class="col-md-9">
                <table class="table table-bordered" id="fitness-table">
                    <tr>
                        <td>First Name:</td>               
                        <td><?php echo $row['First_name'];?></td>                                            
                    </tr>
                    <tr>
                        <td>Last Name:</td>                                    
                        <td><?php echo $row['Last_name'];?></td>                                            
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><?php  echo ($row['gender'] == 0)?'Male':'Female'; ?></td>
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
<?php   } ?>  
                </table>
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
<script type="text/javascript">
	$(document).ready( function () {
	    //$('#fitness-table').DataTable();

        $('#delete_prof_pic').click(function(){
            alert($('#prof_pic').attr('src'));

            $.post('../services/delete_profile.php',{
                src:$('#prof_pic').attr('src'),
                id:'<?php  echo $ID; ?>'
            },function(data){
                if(data == 200)
                {
                    location.reload();
                    // $('#prof_pic').attr('src','profile/basic.jpg');
                }
            });
        });
	} );
</script>