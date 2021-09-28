<!DOCTYPE html>
<html lang="en"><head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Sign Up</title>
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



<section class="signup-sec" style="background-image: url(images/Frame-51.png);">
  <div class="container">
	<div class="row">
	 <div class="col-md-12">
	    <form autocomplete="off">
		  <div class="signup-sec1">
		    <div class="signup-sec1a">
			<div class="row" style="background:#fff;">
			 <div class="col-md-12"><div class="signup-sec-heading">Sign Up</div></div>	
			 <div class="col-md-12"><div class="signup-form-field"><input type="text" placeholder="Name"/></div></div>
			 <div class="col-md-12"><div class="signup-form-field"><input type="text" placeholder="Email"/></div></div>
			 <div class="col-md-12"><div class="signup-form-field"><input type="text" placeholder="Mobile" autocomplete="off"/></div></div>
			 <div class="col-md-12">
			      <div class="signup-form-field">
				   <div class="" style="margin-bottom: 12px;">OTP</div>
				   <input type="password" placeholder="----" autocomplete="off"/>
				   <span style="color:green;margin-top: 10px;display: inherit;">OTP sent successfully</span>
				   <p style="margin-top:10px;"><a href="" class="btn btn-black">Resend OTP <span></span></a></p>
				  </div>
			 </div>
			 <div class="col-md-12"><div class="signup-form-field"><input type="password" placeholder="Password"/></div></div>
			 <div class="col-md-12"><div class="signup-form-field"><input type="password" placeholder="Confirm Password"/></div></div>
			 <div class="col-md-12">
			     <div class="signup-form-field"><input type="checkbox" checked="checked" for="equity" style="display:inline;width: 5%;"> 
				  <span>By clicking Create an Account, you agree to the KIngri User agreement, <a href="">Privacy policy,</a> Cookies policy.</span>
				 </div>
			 </div>
			 <div class="col-md-12"><div class="signup-form-field"><button class="btn btn-black">Create Account<span></span></button></div></div>
			 <div class="col-md-12">
			   <div class="signup-form-field"><p>Already Have an Account? <a href="login.php"> Log In</a></p></div>
			 </div>
			</div> 
            </div>			
		  </div>
		  </form>
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