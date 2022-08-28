<?php
require 'services/connection.php';
$sql="select * from package";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.lorvent.com/fitness/admin_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Registration| Fitness Hub Login Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="admin/vendors/iCheck/skins/all.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="ADMIN/vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link href="ADMIN/css/custom_css/admin-login.css" rel="stylesheet" type="text/css">
    <!-- end of page level styles-->
    <style>
    .card-element label
    {
        color: #f5f5f5;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="full-content-center">
            <div class="box bounceInLeft animated" style="width:500px">
                <p style="color: #fff; margin-top: 10px; margin-left: 30px;"><span style="font-weight: bold; font-size:x-large; margin-left: -10px; margin-top: 5px;">Fitness</span><span style="font-size: large;">Hub</span></p>
                <h3 class="text-center">Registration</h3>
                <form class="form1" id="log_in" method="POST" action="services/register_user.php">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input_item"><input type="text" class="form-control" name="fname" id="ff" placeholder="FIRST NAME" required pattern="[a-z ,A-Z ]{2,}"/></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input_item"><input type="text" class="form-control" name="lname" id="ff" placeholder="LAST NAME" required pattern="[a-z ,A-Z ]{2,}"/></div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div> 
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input_item"><input type="password" class="form-control" name="password" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[a-z]).{8,}" title="password contain at least 8 or more characters"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input_item"><input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required></div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="date" placeholder="DATE OF BIRTH" class="form-control" name="bday" id="bd" required/>
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type ="radio"  name="gender" style="float:left;"  /><span style="color:white;float:left">Male</span>
                        <input type ="radio" name="gender" style="float:left;margin-left:352px;"  /><span style="color:white;float:right">Female</span>
                        <br/>
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <textarea type="text" name="Address" class="form-control" style="height: 100px;" placeholder="Enter Your Address ..."></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input_item"><input type="number" class="form-control" name="Pincode" placeholder="Pincode" required></div>
                        </div>  
                        <div class="col-lg-6">
                            <div class="input_item"><input type="number" class="form-control" name="contact" id="contact" placeholder="CONTACT NUMBER" required/></div>
                        </div>  
                    </div>
                    <br/>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <select id="select23" class="form-control js-states select2" name="idPackage" required>
                            <option value>Select Package</option>
                            <?php
                            while($row = $result->fetch_assoc())
                            {
                            ?>
                                <option value="<?php echo $row['idPackage'] ;?>"><?php echo $row['Name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <!--<div class="form-group">
                        <div class="form-row">
                            <label for="card-element">
                            Credit or debit card
                            </label>
                            <div id="card-element">
                            A Stripe Element will be inserted here.
                            </div>

                            Used to display Element errors.
                            <div id="card-errors" role="alert"></div>
                        </div>
                    </div>-->
                    <input type="submit" class="btn btn-block btn-warning" value="Register" name="reg">
                </form>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="admin/js/jquery.min.js" type="text/javascript"></script>
    <script src="admin/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="admin/vendors/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="ADMIN/vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="ADMIN/js/custom_js/login1.js" type="text/javascript"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- end of page level js -->
</body>
<!-- Mirrored from demo.lorvent.com/fitness/admin_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:51 GMT -->
</html>
<script type="text/javascript">
var stripe = Stripe('pk_test_FVGNFBR7LQESBdGuQ0e1DJSn00bVvvXRph');
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#f5f5f5',
    class : 'form-control'
  },
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Create a token or display an error when the form is submitted.
var form = document.getElementById('log_in');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('log_in');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  //return false;
  // Submit the form
  form.submit();
}
</script>