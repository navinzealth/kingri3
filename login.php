<!DOCTYPE html>
<html lang="en"><head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Login</title>
   <!---common-css--->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" >
<link rel="stylesheet" href="css/responsive.css" >
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,700;1,100;1,400&display=swap" rel="stylesheet">
<!---common-css--->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<?php include 'include/header.php'; ?>



<section class="signup-sec" style="background-image: url(images/Frame.png);">
  <div class="container">
	<div class="row">
	 <div class="col-md-12">
		  <div class="signup-sec2">
		   <div class="signup-sec1a">
			<div class="row" style="background:#fff;">
			 <div class="col-md-12"><div class="signup-sec-heading">Log In</div></div>	
			
			 <div class="col-md-12"><div class="signup-form-field"><input type="text" placeholder="Mobile"/></div></div>
			 <div class="col-md-12"><div class="signup-form-field"><input type="text" placeholder="Password"/></div></div>
			 <div class="col-md-12" style="display:none;">
			      <div class="signup-form-field">
				   <div class="">OTP</div>
				   <input type="text" placeholder="OTP"/>
				  </div>
			 </div>
			 
			 <div class="col-md-12">
			    <div class="signup-form-field">
				  <label>OR</label>
				 <button name="req_otp" onclick="" class="">REQUEST OTP</button>
			    </div>
			 </div>
			 
			 <div class="col-md-12"><div class="signup-form-field"><input type="Submit" placeholder="Login"/></div></div>
			 <div class="col-md-12">
			   <div class="signup-form-field"><p>Don't Have an Account? <a href="signup.php" style=""> Sign Up</a></p></div>
			 </div>
			</div> 
           </div>			
		  </div>
	 </div>	
	</div>  
  </div>
</section>










<?php include 'include/footer.php'; ?>

</body>
<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	 <script src="js/custom.js"></script>
</html>